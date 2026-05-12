#requires -version 5.1
<#
Automated local setup for MantisBT + TestLink on Windows/XAMPP.

Example:
  powershell -ExecutionPolicy Bypass -File .\scripts\setup-mantis-testlink.ps1 -Clean -ImportDumps
#>

[CmdletBinding()]
param(
    [string]$XamppPath,
    [string]$SourceMantisPath,
    [string]$SourceTestLinkPath,
    [string]$MantisWebFolder = "mantisbt",
    [string]$TestLinkWebFolder = "testlink",

    [string]$DbHost = "localhost",
    [int]$DbPort = 3306,
    [string]$DbAdminUser = "root",
    [securestring]$DbAdminPassword,

    [string]$MantisDbName = "mantisdb",
    [string]$MantisDbUser = "mantis",
    [securestring]$MantisDbPassword,

    [string]$TestLinkDbName = "testlink",
    [string]$TestLinkDbUser = "testlink",
    [securestring]$TestLinkDbPassword,

    [string]$DumpDirectory,
    [string[]]$ExtraCleanupPaths = @(),
    [switch]$ImportDumps,
    [switch]$Clean,
    [switch]$ConfigureVirtualHosts
)

Set-StrictMode -Version Latest
$ErrorActionPreference = "Stop"

$ScriptRoot = Split-Path -Parent $MyInvocation.MyCommand.Path
$RepoRoot = Split-Path -Parent $ScriptRoot

if (-not $XamppPath) { $XamppPath = Join-Path $RepoRoot "xampp" }
if (-not $SourceMantisPath) { $SourceMantisPath = Join-Path $RepoRoot "xampp\htdocs\mantis" }
if (-not $SourceTestLinkPath) { $SourceTestLinkPath = Join-Path $RepoRoot "xampp\htdocs\testlink" }
if (-not $DumpDirectory) { $DumpDirectory = Join-Path $RepoRoot "db_dumps" }

$HtdocsPath = Join-Path $XamppPath "htdocs"
$TargetMantisPath = Join-Path $HtdocsPath $MantisWebFolder
$TargetTestLinkPath = Join-Path $HtdocsPath $TestLinkWebFolder
$ApacheExe = Join-Path $XamppPath "apache\bin\httpd.exe"
$ApacheStart = Join-Path $XamppPath "apache_start.bat"
$MysqlExe = Join-Path $XamppPath "mysql\bin\mysql.exe"
$MysqlAdminExe = Join-Path $XamppPath "mysql\bin\mysqladmin.exe"
$MysqlStart = Join-Path $XamppPath "mysql_start.bat"
$PhpExe = Join-Path $XamppPath "php\php.exe"
$ApacheConf = Join-Path $XamppPath "apache\conf\httpd.conf"
$VhostsConf = Join-Path $XamppPath "apache\conf\extra\httpd-vhosts.conf"
$LogFile = Join-Path $RepoRoot "setup-mantis-testlink.log"

function Write-Log {
    param([string]$Message, [string]$Level = "INFO")
    $line = "[{0}] [{1}] {2}" -f (Get-Date -Format "yyyy-MM-dd HH:mm:ss"), $Level, $Message
    Write-Host $line
    Add-Content -Path $LogFile -Value $line
}

function ConvertFrom-Secure {
    param([securestring]$Value)
    if (-not $Value) { return "" }
    $ptr = [Runtime.InteropServices.Marshal]::SecureStringToBSTR($Value)
    try { return [Runtime.InteropServices.Marshal]::PtrToStringBSTR($ptr) }
    finally { [Runtime.InteropServices.Marshal]::ZeroFreeBSTR($ptr) }
}

function Require-Path {
    param([string]$Path, [string]$Description)
    if (-not (Test-Path -LiteralPath $Path)) {
        throw "$Description not found: $Path"
    }
}

function Assert-SimpleIdentifier {
    param([string]$Value, [string]$Description)
    if ($Value -notmatch '^[A-Za-z0-9_]+$') {
        throw "$Description must contain only letters, numbers, and underscores: $Value"
    }
}

function Assert-SafeDeletePath {
    param([string]$Path)
    $full = [IO.Path]::GetFullPath($Path)
    $root = [IO.Path]::GetPathRoot($full)
    if ($full.TrimEnd('\') -eq $root.TrimEnd('\')) {
        throw "Refusing to delete drive root: $full"
    }
}

function Test-PortOpen {
    param([string]$HostName, [int]$Port)
    try {
        $client = New-Object Net.Sockets.TcpClient
        $iar = $client.BeginConnect($HostName, $Port, $null, $null)
        $connected = $iar.AsyncWaitHandle.WaitOne(1000, $false)
        if ($connected) { $client.EndConnect($iar) }
        $client.Close()
        return $connected
    } catch {
        return $false
    }
}

function Get-PortOwner {
    param([int]$Port)
    $connection = Get-NetTCPConnection -LocalPort $Port -State Listen -ErrorAction SilentlyContinue | Select-Object -First 1
    if (-not $connection) { return $null }
    $proc = Get-Process -Id $connection.OwningProcess -ErrorAction SilentlyContinue
    if ($proc) { return "$($proc.ProcessName) (PID $($proc.Id))" }
    return "PID $($connection.OwningProcess)"
}

function Start-XamppComponent {
    param(
        [string]$Name,
        [string]$StartScript,
        [int]$Port,
        [string]$ProcessName
    )

    if (Test-PortOpen -HostName "127.0.0.1" -Port $Port) {
        $owner = Get-PortOwner -Port $Port
        if ($owner) {
            Write-Log "$Name port $Port is already reachable; listener: $owner."
        } else {
            Write-Log "$Name appears reachable on port $Port."
        }
        return
    }

    Require-Path $StartScript "$Name startup script"
    Write-Log "Starting $Name with $StartScript"
    Start-Process -FilePath $StartScript -WorkingDirectory $XamppPath -WindowStyle Hidden

    for ($i = 1; $i -le 30; $i++) {
        Start-Sleep -Seconds 1
        if (Test-PortOpen -HostName "127.0.0.1" -Port $Port) {
            Write-Log "$Name is now reachable on port $Port."
            return
        }
    }

    $procs = Get-Process -Name $ProcessName -ErrorAction SilentlyContinue
    if ($procs) {
        throw "$Name process is running, but port $Port did not respond. Check XAMPP logs."
    }
    throw "$Name did not start. Check XAMPP control panel and logs."
}

function New-MySqlDefaultsFile {
    param([string]$User, [string]$Password)
    $temp = Join-Path $env:TEMP ("mysql-client-{0}.cnf" -f ([guid]::NewGuid()))
    $content = @(
        "[client]",
        "user=$User",
        "password=$Password",
        "host=$DbHost",
        "port=$DbPort"
    )
    Set-Content -LiteralPath $temp -Value $content -Encoding ASCII
    return $temp
}

function Invoke-MySql {
    param(
        [string]$Sql,
        [string]$Database,
        [string]$DefaultsFile
    )
    $args = @("--defaults-extra-file=$DefaultsFile", "--protocol=tcp", "--batch", "--raw")
    if ($Database) { $args += $Database }
    $args += @("-e", $Sql)
    & $MysqlExe @args
    if ($LASTEXITCODE -ne 0) {
        throw "MySQL command failed: $Sql"
    }
}

function Import-MySqlFile {
    param(
        [string]$FilePath,
        [string]$Database,
        [string]$DefaultsFile
    )
    Require-Path $FilePath "SQL dump"
    Write-Log "Importing $FilePath into $Database"
    $cmd = "`"$MysqlExe`" --defaults-extra-file=`"$DefaultsFile`" --protocol=tcp `"$Database`" < `"$FilePath`""
    cmd.exe /c $cmd
    if ($LASTEXITCODE -ne 0) {
        throw "Failed to import $FilePath"
    }
}

function Escape-PhpSingleQuotedString {
    param([string]$Value)
    return $Value.Replace('\', '\\').Replace("'", "\'")
}

function Escape-MySqlSingleQuotedString {
    param([string]$Value)
    return $Value.Replace('\', '\\').Replace("'", "''")
}

function Write-MantisConfig {
    $configDir = Join-Path $TargetMantisPath "config"
    if (-not (Test-Path -LiteralPath $configDir)) {
        New-Item -ItemType Directory -Path $configDir | Out-Null
    }

    $configPath = Join-Path $configDir "config_inc.php"
    $salt = [Convert]::ToBase64String((1..32 | ForEach-Object { Get-Random -Minimum 0 -Maximum 256 }))
    $content = @"
<?php
`$g_hostname               = '$(Escape-PhpSingleQuotedString $DbHost)';
`$g_db_type                = 'mysqli';
`$g_database_name          = '$(Escape-PhpSingleQuotedString $MantisDbName)';
`$g_db_username            = '$(Escape-PhpSingleQuotedString $MantisDbUser)';
`$g_db_password            = '$(Escape-PhpSingleQuotedString $script:MantisDbPlainPassword)';

`$g_default_timezone       = 'Asia/Kolkata';
`$g_crypto_master_salt     = '$salt';
`$g_path                   = 'http://localhost/$MantisWebFolder/';
"@
    Set-Content -LiteralPath $configPath -Value $content -Encoding ASCII
    Write-Log "Updated MantisBT config: $configPath"
}

function Write-TestLinkConfig {
    $configPath = Join-Path $TargetTestLinkPath "config_db.inc.php"
    $content = @"
<?php
define('DB_TYPE', 'mysql');
define('DB_USER', '$(Escape-PhpSingleQuotedString $TestLinkDbUser)');
define('DB_PASS', '$(Escape-PhpSingleQuotedString $script:TestLinkDbPlainPassword)');
define('DB_HOST', '$(Escape-PhpSingleQuotedString $DbHost)');
define('DB_NAME', '$(Escape-PhpSingleQuotedString $TestLinkDbName)');
define('DB_TABLE_PREFIX', '');
"@
    Set-Content -LiteralPath $configPath -Value $content -Encoding ASCII
    Write-Log "Updated TestLink config: $configPath"
}

function Copy-AppFolder {
    param([string]$Source, [string]$Target, [string]$Name)
    Require-Path $Source "$Name source folder"
    if ([IO.Path]::GetFullPath($Source).TrimEnd('\') -eq [IO.Path]::GetFullPath($Target).TrimEnd('\')) {
        Write-Log "$Name source and target are the same folder; keeping existing folder: $Target"
        return
    }
    if (Test-Path -LiteralPath $Target) {
        Write-Log "Removing existing target folder: $Target"
        Remove-Item -LiteralPath $Target -Recurse -Force
    }
    Write-Log "Copying $Name from $Source to $Target"
    Copy-Item -LiteralPath $Source -Destination $Target -Recurse -Force
}

function Set-AppPermissions {
    param([string]$Path)
    Write-Log "Applying local writable permissions for IIS_IUSRS/Users where available: $Path"
    icacls $Path /grant "Users:(OI)(CI)M" /T | Out-Null
}

function Validate-Php {
    Require-Path $PhpExe "PHP executable"
    $versionOutput = & $PhpExe -r "echo PHP_VERSION;"
    if ($LASTEXITCODE -ne 0) { throw "Could not read PHP version." }
    $phpVersion = [version]$versionOutput
    Write-Log "Detected PHP $phpVersion"
    if ($phpVersion.Major -lt 7) {
        throw "PHP $phpVersion is too old. Use a XAMPP package with PHP 7.x or newer."
    }

    $loaded = & $PhpExe -m
    foreach ($ext in @("mysqli", "mbstring", "gd", "xml", "curl", "zip")) {
        if ($loaded -notcontains $ext) {
            Write-Log "PHP extension '$ext' is not loaded. Enable it in php.ini if the app reports errors." "WARN"
        } else {
            Write-Log "PHP extension loaded: $ext"
        }
    }
}

function Configure-Vhosts {
    Require-Path $VhostsConf "Apache vhosts config"
    $backup = "$VhostsConf.bak-{0}" -f (Get-Date -Format "yyyyMMddHHmmss")
    Copy-Item -LiteralPath $VhostsConf -Destination $backup
    $block = @"

# MantisBT + TestLink local setup
<VirtualHost *:80>
    ServerName mantisbt.local
    DocumentRoot "$TargetMantisPath"
    <Directory "$TargetMantisPath">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

<VirtualHost *:80>
    ServerName testlink.local
    DocumentRoot "$TargetTestLinkPath"
    <Directory "$TargetTestLinkPath">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
"@
    Add-Content -LiteralPath $VhostsConf -Value $block
    Write-Log "Appended optional virtual hosts to $VhostsConf. Add hosts-file entries manually if you use them."
}

function Test-Url {
    param([string]$Url)
    try {
        $response = Invoke-WebRequest -Uri $Url -UseBasicParsing -TimeoutSec 15
        Write-Log "$Url returned HTTP $($response.StatusCode)"
        return $true
    } catch {
        Write-Log "$Url failed: $($_.Exception.Message)" "ERROR"
        return $false
    }
}

try {
    Remove-Item -LiteralPath $LogFile -Force -ErrorAction SilentlyContinue
    Write-Log "Starting automated MantisBT + TestLink setup."

    Require-Path $XamppPath "XAMPP folder"
    Require-Path $HtdocsPath "XAMPP htdocs folder"
    Require-Path $ApacheExe "Apache executable"
    Require-Path $MysqlExe "MySQL client"
    Require-Path $MysqlAdminExe "MySQL admin client"

    Assert-SimpleIdentifier -Value $MantisDbName -Description "Mantis database name"
    Assert-SimpleIdentifier -Value $TestLinkDbName -Description "TestLink database name"
    Assert-SimpleIdentifier -Value $MantisDbUser -Description "Mantis database user"
    Assert-SimpleIdentifier -Value $TestLinkDbUser -Description "TestLink database user"
    if ([IO.Path]::GetFullPath($SourceMantisPath).TrimEnd('\') -eq [IO.Path]::GetFullPath($TargetMantisPath).TrimEnd('\')) {
        throw "SourceMantisPath and target Mantis path are the same. Choose a separate source copy."
    }

    if (-not $DbAdminPassword) { $DbAdminPassword = Read-Host "Enter MySQL admin password for '$DbAdminUser' (press Enter if blank)" -AsSecureString }
    if (-not $MantisDbPassword) { $MantisDbPassword = Read-Host "Enter password to create/use for '$MantisDbUser'" -AsSecureString }
    if (-not $TestLinkDbPassword) { $TestLinkDbPassword = Read-Host "Enter password to create/use for '$TestLinkDbUser'" -AsSecureString }

    $script:DbAdminPlainPassword = ConvertFrom-Secure $DbAdminPassword
    $script:MantisDbPlainPassword = ConvertFrom-Secure $MantisDbPassword
    $script:TestLinkDbPlainPassword = ConvertFrom-Secure $TestLinkDbPassword

    Validate-Php
    Start-XamppComponent -Name "Apache" -StartScript $ApacheStart -Port 80 -ProcessName "httpd"
    Start-XamppComponent -Name "MySQL" -StartScript $MysqlStart -Port $DbPort -ProcessName "mysqld"

    $defaults = New-MySqlDefaultsFile -User $DbAdminUser -Password $script:DbAdminPlainPassword
    try {
        Invoke-MySql -Sql "SELECT VERSION();" -DefaultsFile $defaults | Out-Null
        Write-Log "Connected to MySQL as $DbAdminUser."

        if ($Clean) {
            Write-Log "Clean mode enabled. Removing target folders and recreating databases."
            foreach ($path in @($TargetMantisPath, $TargetTestLinkPath) + $ExtraCleanupPaths) {
                if (Test-Path -LiteralPath $path) {
                    if ([IO.Path]::GetFullPath($path).TrimEnd('\') -eq [IO.Path]::GetFullPath($SourceMantisPath).TrimEnd('\') -or
                        [IO.Path]::GetFullPath($path).TrimEnd('\') -eq [IO.Path]::GetFullPath($SourceTestLinkPath).TrimEnd('\')) {
                        Write-Log "Skipping cleanup of source folder: $path" "WARN"
                        continue
                    }
                    Assert-SafeDeletePath -Path $path
                    Write-Log "Deleting $path"
                    Remove-Item -LiteralPath $path -Recurse -Force
                }
            }
            Invoke-MySql -DefaultsFile $defaults -Sql "DROP DATABASE IF EXISTS ``$MantisDbName``; DROP DATABASE IF EXISTS ``$TestLinkDbName``;"
        } else {
            Write-Log "Clean mode not enabled. Existing target folders/databases will still be replaced only where required." "WARN"
        }

        Copy-AppFolder -Source $SourceMantisPath -Target $TargetMantisPath -Name "MantisBT"
        Copy-AppFolder -Source $SourceTestLinkPath -Target $TargetTestLinkPath -Name "TestLink"
        Set-AppPermissions -Path $TargetMantisPath
        Set-AppPermissions -Path $TargetTestLinkPath

        Invoke-MySql -DefaultsFile $defaults -Sql "CREATE DATABASE IF NOT EXISTS ``$MantisDbName`` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
        Invoke-MySql -DefaultsFile $defaults -Sql "CREATE DATABASE IF NOT EXISTS ``$TestLinkDbName`` CHARACTER SET utf8 COLLATE utf8_general_ci;"
        $mantisUserSql = Escape-MySqlSingleQuotedString $MantisDbUser
        $mantisPassSql = Escape-MySqlSingleQuotedString $script:MantisDbPlainPassword
        $testlinkUserSql = Escape-MySqlSingleQuotedString $TestLinkDbUser
        $testlinkPassSql = Escape-MySqlSingleQuotedString $script:TestLinkDbPlainPassword
        Invoke-MySql -DefaultsFile $defaults -Sql "CREATE USER IF NOT EXISTS '$mantisUserSql'@'localhost' IDENTIFIED BY '$mantisPassSql'; CREATE USER IF NOT EXISTS '$testlinkUserSql'@'localhost' IDENTIFIED BY '$testlinkPassSql';"
        Invoke-MySql -DefaultsFile $defaults -Sql "ALTER USER '$mantisUserSql'@'localhost' IDENTIFIED BY '$mantisPassSql'; ALTER USER '$testlinkUserSql'@'localhost' IDENTIFIED BY '$testlinkPassSql';"
        Invoke-MySql -DefaultsFile $defaults -Sql "GRANT ALL PRIVILEGES ON ``$MantisDbName``.* TO '$mantisUserSql'@'localhost'; GRANT ALL PRIVILEGES ON ``$TestLinkDbName``.* TO '$testlinkUserSql'@'localhost'; FLUSH PRIVILEGES;"
        Write-Log "Created databases and application users."

        if ($ImportDumps) {
            $mantisDump = Join-Path $DumpDirectory "mantis_db.sql"
            $testlinkDump = Join-Path $DumpDirectory "testlink_db.sql"
            if (Test-Path -LiteralPath $mantisDump) {
                Import-MySqlFile -FilePath $mantisDump -Database $MantisDbName -DefaultsFile $defaults
            } else {
                Write-Log "No MantisBT dump found at $mantisDump; skipping import." "WARN"
            }
            if (Test-Path -LiteralPath $testlinkDump) {
                Import-MySqlFile -FilePath $testlinkDump -Database $TestLinkDbName -DefaultsFile $defaults
            } else {
                Write-Log "No TestLink dump found at $testlinkDump; skipping import." "WARN"
            }
        }

        Write-MantisConfig
        Write-TestLinkConfig

        if ($ConfigureVirtualHosts) {
            Configure-Vhosts
        }

        $mantisOk = Test-Url "http://localhost/$MantisWebFolder/"
        $testlinkOk = Test-Url "http://localhost/$TestLinkWebFolder/"

        if ($mantisOk -and $testlinkOk) {
            Write-Log "SUCCESS: MantisBT and TestLink responded from Apache."
            Write-Host ""
            Write-Host "MantisBT: http://localhost/$MantisWebFolder/"
            Write-Host "TestLink: http://localhost/$TestLinkWebFolder/"
        } else {
            throw "One or both applications did not load. Review $LogFile and Apache/PHP logs."
        }
    } finally {
        if ($defaults -and (Test-Path -LiteralPath $defaults)) {
            Remove-Item -LiteralPath $defaults -Force
        }
    }
} catch {
    Write-Log $_.Exception.Message "ERROR"
    Write-Host ""
    Write-Host "FAILED. Log file: $LogFile"
    exit 1
}
