# Install Laravel 12

- composer create laravel/laravel:^12.0

# Run

- php artisan serve --port=8080

# Update composer
- Edit composer.json
    "require": {
        "ext-pdo_sqlite": "*",
        "ext-sqlite3": "*"  

- composer update
- composer require fakerphp/faker
- npm install
- npm run build

# Update database

- touch database/database.sqlite
- php artisan migrate:fresh
- php artisan db:seed

# Install Filament

composer require filament/filament:"^3.3" -W
php artisan filament:install --panels
php artisan make:filament-user
php artisan filament:optimize

# Digiatal Ocean

- php artisan migrate:fresh
- php artisan db:seed
- php artisan make:filament-user

# Create Filament User Resource

- php artisan make:seeder UserSeeder
- php artisan make:filament-resource User --generate --view
- php artisan filament:optimize