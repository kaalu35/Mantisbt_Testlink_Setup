# MantisBT + TestLink Automated Setup

This workspace contains the XAMPP runtime that should be used for this setup:

```text
c:\mantibt_testlink_v1\xampp
```

The application folders live under this same XAMPP web root:

```text
c:\mantibt_testlink_v1\xampp\htdocs\mantisbt
c:\mantibt_testlink_v1\xampp\htdocs\testlink
```

## One Command

Open PowerShell in `c:\mantibt_testlink_v1`, then run:

```powershell
powershell -ExecutionPolicy Bypass -File .\scripts\setup-mantis-testlink.ps1 -Clean -ImportDumps
```

The script prompts for:

- MySQL admin password for `root`
- Password to create/use for `mantis`
- Password to create/use for `testlink`

Credentials are variables/prompts, not fixed inside the script.

## Optional Database Dumps

If you have working database exports from the old laptop, place them here:

```text
c:\mantibt_testlink_v1\db_dumps\mantis_db.sql
c:\mantibt_testlink_v1\db_dumps\testlink_db.sql
```

Then run with `-ImportDumps`. If the files are missing, the script logs a warning and continues with empty databases.

## What The Script Does

1. Validates `c:\mantibt_testlink_v1\xampp`, Apache, MySQL, PHP, and required paths.
2. Starts Apache and MySQL if ports `80` and `3306` are not responding.
3. Deletes old target app folders when `-Clean` is provided.
4. Drops and recreates `mantisdb` and `testlink`.
5. Creates/updates app DB users and grants privileges.
6. Copies the working source folders into `htdocs`.
7. Generates:
   - `c:\mantibt_testlink_v1\xampp\htdocs\mantisbt\config\config_inc.php`
   - `c:\mantibt_testlink_v1\xampp\htdocs\testlink\config_db.inc.php`
8. Validates:
   - `http://localhost/mantisbt/`
   - `http://localhost/testlink/`

## Useful Parameters

```powershell
.\scripts\setup-mantis-testlink.ps1 `
  -XamppPath "c:\mantibt_testlink_v1\xampp" `
  -SourceMantisPath "c:\mantibt_testlink_v1\xampp\htdocs\mantis" `
  -SourceTestLinkPath "c:\mantibt_testlink_v1\xampp\htdocs\testlink" `
  -MantisWebFolder "mantisbt" `
  -TestLinkWebFolder "testlink" `
  -MantisDbName "mantisdb" `
  -TestLinkDbName "testlink" `
  -ExtraCleanupPaths "C:\old\mantis","C:\old\testlink" `
  -Clean `
  -ImportDumps
```

## Common Troubleshooting

- **Apache port 80 conflict**: stop IIS, Skype, VMware, or another Apache instance, then rerun.
- **MySQL port 3306 conflict**: stop the other MySQL/MariaDB service or change XAMPP MySQL port.
- **Access denied for MySQL root**: rerun and enter the correct MySQL admin password. Many XAMPP installs use a blank root password, but validate your local setup.
- **Blank page or PHP error**: check `c:\mantibt_testlink_v1\xampp\apache\logs\error.log` and enable missing PHP extensions in `c:\mantibt_testlink_v1\xampp\php\php.ini`.
- **MantisBT DB schema missing**: import a real working dump into `db_dumps\mantis_db.sql`; copied PHP files alone do not include issue/user data.
- **TestLink DB schema missing**: import a real working dump into `db_dumps\testlink_db.sql`.
- **Wrong URL/base path**: rerun with `-MantisWebFolder` or `-TestLinkWebFolder` matching the folder names you want under `htdocs`.

The script writes its full run log to:

```text
c:\mantibt_testlink_v1\setup-mantis-testlink.log
```
