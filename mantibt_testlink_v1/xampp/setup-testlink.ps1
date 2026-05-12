param(
    [Parameter(Mandatory = $true)]
    [string]$ArchivePath,

    [string]$XamppRoot = 'C:\xampp',
    [string]$WebRoot = 'C:\xampp\htdocs',
    [string]$TargetName = 'testlink',
    [string]$DbName = 'testlink',
    [string]$DbUser = 'testlink',
    [string]$DbPassword = 'testlink',
    [string]$MySqlRootUser = 'root',
    [string]$MySqlRootPassword = ''
)

$ErrorActionPreference = 'Stop'

function Write-Step {
    param([string]$Message)
    Write-Host ""
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

if (-not (Test-Path -LiteralPath $ArchivePath)) {
    throw "Archive not found: $ArchivePath"
}

$phpExe = Join-Path $XamppRoot 'php\php.exe'
$mysqlExe = Join-Path $XamppRoot 'mysql\bin\mysql.exe'
$xamppControl = Join-Path $XamppRoot 'xampp-control.exe'
$htdocs = $WebRoot
$targetDir = Join-Path $htdocs $TargetName

Write-Step "Checking prerequisites"
if (-not (Test-Path -LiteralPath $phpExe)) {
    throw "PHP executable not found: $phpExe"
}
if (-not (Test-Path -LiteralPath $mysqlExe)) {
    throw "MySQL client not found: $mysqlExe"
}
if (-not (Get-Command tar.exe -ErrorAction SilentlyContinue)) {
    throw "tar.exe is not available on this Windows host."
}

$phpVersion = & $phpExe -r "echo PHP_VERSION;"
Write-Host "Detected PHP version: $phpVersion"
if ($phpVersion -like '8*') {
    Write-Warning "TestLink 1.9.x can fail on stock PHP 8 builds. Prefer XAMPP with PHP 7.x, or use the community fixed branch of 1.9.20."
}

Write-Step "Extracting archive into $htdocs"
$topBefore = Get-ChildItem -LiteralPath $htdocs -Directory | Select-Object -ExpandProperty FullName
tar -xzf $ArchivePath -C $htdocs
$topAfter = Get-ChildItem -LiteralPath $htdocs -Directory | Select-Object -ExpandProperty FullName
$newDirs = Compare-Object -ReferenceObject $topBefore -DifferenceObject $topAfter |
    Where-Object { $_.SideIndicator -eq '=>' } |
    Select-Object -ExpandProperty InputObject

if (-not $newDirs) {
    throw "Extraction completed, but no new top-level folder was detected under $htdocs"
}

$extractedDir = $newDirs | Select-Object -First 1
if ((Split-Path -Leaf $extractedDir) -ne $TargetName) {
    if (Test-Path -LiteralPath $targetDir) {
        throw "Target folder already exists: $targetDir"
    }
    Rename-Item -LiteralPath $extractedDir -NewName $TargetName
}

Write-Step "Ensuring required TestLink folders exist"
$requiredDirs = @(
    (Join-Path $targetDir 'logs'),
    (Join-Path $targetDir 'upload_area')
)
foreach ($dir in $requiredDirs) {
    if (-not (Test-Path -LiteralPath $dir)) {
        New-Item -ItemType Directory -Path $dir | Out-Null
    }
}

Write-Step "Writing custom TestLink path overrides"
$customConfigPath = Join-Path $targetDir 'custom_config.inc.php'
$customConfig = @"
<?php
// Local Windows overrides for XAMPP
\$tlCfg->log_path = 'C:/xampp/htdocs/testlink/logs/';
\$g_repositoryPath = 'C:/xampp/htdocs/testlink/upload_area/';
"@
Set-Content -LiteralPath $customConfigPath -Value $customConfig -Encoding ASCII

Write-Step "Creating database and application user"
$mysqlArgs = Get-MySqlArgs -User $MySqlRootUser -Password $MySqlRootPassword
$sql = @"
CREATE DATABASE IF NOT EXISTS \`$DbName\` CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE USER IF NOT EXISTS '$DbUser'@'localhost' IDENTIFIED BY '$DbPassword';
GRANT ALL PRIVILEGES ON \`$DbName\`.* TO '$DbUser'@'localhost';
FLUSH PRIVILEGES;
"@
& $mysqlExe @mysqlArgs -e $sql

Write-Step "Summary"
Write-Host "TestLink folder : $targetDir"
Write-Host "Database        : $DbName"
Write-Host "DB user         : $DbUser"
Write-Host "Config file     : $customConfigPath"
Write-Host "XAMPP Control   : $xamppControl"
Write-Host ""
Write-Host "Next actions:"
Write-Host "1. Start Apache and MySQL from xampp-control.exe"
Write-Host "2. Open http://localhost/phpmyadmin"
Write-Host "3. Open http://localhost/testlink"
Write-Host "4. In the installer, use DB host localhost, DB name $DbName, DB user $DbUser, DB password $DbPassword"
