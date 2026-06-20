param(
    [string]$ResourceGroup = "rg-portofolio-iqbal",
    [string]$Location = "eastus",
    [string]$AppName = "app-portofolio-iqbal",
    [string]$MySQLServer = "mysql-portofolio-iqbal",
    [string]$MySQLDB = "db_porto_app",
    [string]$MySQLAdmin = "dbadmin",
    [string]$MySQLPassword = ""
)

# Generate random suffix
$suffix = Get-Random -Minimum 1000 -Maximum 9999
$MySQLServer = "$MySQLServer-$suffix"
$AppName = "$AppName-$suffix"

Write-Host "=== Setup Azure Resources for Laravel ===" -ForegroundColor Cyan
Write-Host "Resource Group : $ResourceGroup"
Write-Host "Location       : $Location"
Write-Host "App Service    : $AppName"
Write-Host "MySQL Server   : $MySQLServer"
Write-Host "========================================"

# Check Azure login
$account = az account show 2>$null
if (-not $account) {
    Write-Host "Silakan login ke Azure terlebih dahulu: az login" -ForegroundColor Yellow
    exit 1
}

# 1. Create Resource Group
Write-Host "`n[1/5] Membuat Resource Group..." -ForegroundColor Yellow
az group create --name $ResourceGroup --location $Location

# 2. Create MySQL Flexible Server
Write-Host "`n[2/5] Membuat Azure Database for MySQL Flexible Server..." -ForegroundColor Yellow
az mysql flexible-server create `
    --resource-group $ResourceGroup `
    --name $MySQLServer `
    --location $Location `
    --admin-user $MySQLAdmin `
    --admin-password $MySQLPassword `
    --sku-name Standard_B1ms `
    --tier Burstable `
    --storage-size 32 `
    --version 8.0 `
    --public-access 0.0.0.0

Write-Host "`n[3/5] Membuat database $MySQLDB..." -ForegroundColor Yellow
az mysql flexible-server db create `
    --server-name $MySQLServer `
    --resource-group $ResourceGroup `
    --database-name $MySQLDB

# 3. Create App Service Plan + Web App
Write-Host "`n[4/5] Membuat App Service Plan & Web App..." -ForegroundColor Yellow
az appservice plan create `
    --name "$AppName-plan" `
    --resource-group $ResourceGroup `
    --location $Location `
    --sku B1 `
    --is-linux

az webapp create `
    --resource-group $ResourceGroup `
    --plan "$AppName-plan" `
    --name $AppName `
    --runtime "PHP:8.3" `
    --startup-file "php artisan serve --host=0.0.0.0 --port=8000"

# 4. Configure App Settings
Write-Host "`n[5/5] Mengkonfigurasi App Settings..." -ForegroundColor Yellow
$MySQLHost = "$MySQLServer.mysql.database.azure.com"
$ConnectionString = "mysql:host=$MySQLHost;port=3306;dbname=$MySQLDB"

az webapp config appsettings set `
    --resource-group $ResourceGroup `
    --name $AppName `
    --settings `
        APP_ENV=production `
        APP_DEBUG=false `
        APP_KEY=base64:aETtnee8PdarDxogJbr7T/GUGz+D7Isqer0SI0eqkQY= `
        DB_CONNECTION=mysql `
        DB_HOST=$MySQLHost `
        DB_PORT=3306 `
        DB_DATABASE=$MySQLDB `
        DB_USERNAME=$MySQLAdmin `
        DB_PASSWORD=$MySQLPassword `
        WEBSITES_PORT=8000

# Get publish profile
$publishProfile = az webapp deployment list-publishing-profiles `
    --resource-group $ResourceGroup `
    --name $AppName `
    --query "[?contains(profileName, 'deploy')].publishUrl" -o tsv

Write-Host "`n============================================" -ForegroundColor Green
Write-Host "SETUP SELESAI!" -ForegroundColor Green
Write-Host "============================================" -ForegroundColor Green
Write-Host "App URL: https://$AppName.azurewebsites.net" -ForegroundColor Cyan
Write-Host ""
Write-Host "Langkah selanjutnya:" -ForegroundColor Yellow
Write-Host "1. Dapatkan Publish Profile di portal Azure:" -ForegroundColor White
Write-Host "   App Service -> $AppName -> Get Publish Profile" -ForegroundColor Gray
Write-Host ""
Write-Host "2. Simpan Publish Profile ke GitHub Secrets:" -ForegroundColor White
Write-Host "   Nama secret: AZURE_WEBAPP_PUBLISH_PROFILE" -ForegroundColor Gray
Write-Host ""
Write-Host "3. Push ke branch main untuk auto-deploy" -ForegroundColor White
Write-Host "============================================" -ForegroundColor Green
