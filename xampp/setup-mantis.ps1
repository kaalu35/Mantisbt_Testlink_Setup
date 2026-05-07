param(
    [string]$Version = '2.28.1',
    [string]$XamppRoot = 'C:\xampp',
    [string]$WebRoot = 'C:\xampp\htdocs',
    [string]$TargetName = 'mantis',
    [string]$DbName = 'mantisdb',
    [string]$DbUser = 'mantis',
    [string]$DbPassword = 'mantis',
    [string]$MySqlRootUser = 'root',
    [string]$MySqlRootPassword = '',
    [switch]$OpenInstaller
)

$ErrorActionPreference = 'Stop'

function Write-Step {
    param([string]$Message)
    Write-Host ''
    Write-Host "==> $Message" -ForegroundColor Cyan
}

function Get-MySqlArgs {
    param(
        [string]$User,
        [string]$Password
    )

    $args = @("-u$User")
    if ($Password -ne '') {
        $args += "-p$Password"
    }
    return $args
}

function Test-PortListening {
    param([int]$Port)
    return [bool](Get-NetTCPConnection -LocalPort $Port -State Listen -ErrorAction SilentlyContinue)
}

$phpExe = Join-Path $XamppRoot 'php\php.exe'
$mysqlExe = Join-Path $XamppRoot 'mysql\bin\mysql.exe'
$htdocs = $WebRoot
$downloadsDir = Join-Path $XamppRoot 'downloads'
$targetDir = Join-Path $htdocs $TargetName
$testLinkDir = Join-Path $htdocs 'testlink'
$archiveName = "mantisbt-$Version.zip"
$archivePath = Join-Path $downloadsDir $archiveName
$downloadUrl = "https://downloads.sourceforge.net/project/mantisbt/mantis-stable/$Version/$archiveName"
$extractDir = Join-Path $htdocs "mantisbt-$Version"
$installerUrl = "http://localhost/$TargetName/admin/install.php"

Write-Step 'Checking prerequisites'
if (-not (Test-Path -LiteralPath $phpExe)) {
    throw "PHP executable not found: $phpExe"
}
if (-not (Test-Path -LiteralPath $mysqlExe)) {
    throw "MySQL client not found: $mysqlExe"
}
if (-not (Get-Command curl.exe -ErrorAction SilentlyContinue)) {
    throw 'curl.exe is required but not available on this Windows host.'
}
if (-not (Test-Path -LiteralPath $htdocs)) {
    throw "Web root not found: $htdocs"
}
if (Test-Path -LiteralPath $targetDir) {
    throw "Target folder already exists: $targetDir. Script stopped to avoid overwriting an existing MantisBT install."
}
if (-not (Test-Path -LiteralPath $testLinkDir)) {
    Write-Warning "TestLink folder was not found at $testLinkDir. This script will still install MantisBT, but it will not modify TestLink."
}

$phpVersion = & $phpExe -r "echo PHP_VERSION;"
Write-Host "Detected PHP version: $phpVersion"
if ($phpVersion -like '8*') {
    Write-Warning 'MantisBT supports PHP 8.x, but older plugins or local customizations may still need testing after install.'
}

Write-Step 'Checking Apache and MySQL listeners'
$apacheOk = Test-PortListening -Port 80
$mysqlOk = Test-PortListening -Port 3306
Write-Host "Apache on port 80 : $apacheOk"
Write-Host "MySQL on port 3306: $mysqlOk"
if (-not $apacheOk) {
    Write-Warning 'Apache does not appear to be listening on port 80.'
}
if (-not $mysqlOk) {
    Write-Warning 'MySQL does not appear to be listening on port 3306.'
}

Write-Step 'Downloading MantisBT package'
New-Item -ItemType Directory -Force -Path $downloadsDir | Out-Null
curl.exe -L $downloadUrl --output $archivePath
if (-not (Test-Path -LiteralPath $archivePath)) {
    throw "Download failed: $archivePath was not created."
}

Write-Step 'Extracting package into htdocs'
if (Test-Path -LiteralPath $extractDir) {
    Remove-Item -Recurse -Force $extractDir
}
Expand-Archive -Path $archivePath -DestinationPath $htdocs -Force
if (-not (Test-Path -LiteralPath $extractDir)) {
    throw "Expected extracted folder was not found: $extractDir"
}
Rename-Item -LiteralPath $extractDir -NewName $TargetName

Write-Step 'Creating database and application user'
$mysqlArgs = Get-MySqlArgs -User $MySqlRootUser -Password $MySqlRootPassword
$sql = @(
    "CREATE DATABASE IF NOT EXISTS $DbName CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;",
    "CREATE USER IF NOT EXISTS '$DbUser'@'localhost' IDENTIFIED BY '$DbPassword';",
    "GRANT ALL PRIVILEGES ON $DbName.* TO '$DbUser'@'localhost';",
    'FLUSH PRIVILEGES;'
) -join ' '
& $mysqlExe @mysqlArgs -e $sql

Write-Step 'Summary'
Write-Host "TestLink folder kept intact : $testLinkDir"
Write-Host "New MantisBT folder         : $targetDir"
Write-Host "Download archive            : $archivePath"
Write-Host "Database                    : $DbName"
Write-Host "DB user                     : $DbUser"
Write-Host "Installer URL               : $installerUrl"
Write-Host ''
Write-Host 'Installer inputs:'
Write-Host '1. Database type   : MySQL Improved'
Write-Host '2. Host            : localhost'
Write-Host "3. DB name         : $DbName"
Write-Host "4. Username        : $DbUser"
Write-Host "5. Password        : $DbPassword"
Write-Host "6. DB admin user   : $DbUser"
Write-Host "7. DB admin pass   : $DbPassword"
Write-Host '8. App login user  : administrator'
Write-Host '9. App login pass  : root'
Write-Host ''
Write-Host 'After installation:'
Write-Host "1. Open http://localhost/$TargetName"
Write-Host '2. Log in with administrator / root'
Write-Host "3. Remove or rename $targetDir\admin\install.php for security"
Write-Host '4. Verify TestLink still works at http://localhost/testlink'

if ($OpenInstaller) {
    Write-Step 'Opening installer'
    Start-Process $installerUrl
}
