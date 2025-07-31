# Install Laravel 12

- composer create laravel/laravel:^12.0

# Run

- php artisan serve --port=8080

# Digiatal Ocean
- Edit composer.json
    "require": {
        "ext-pdo_sqlite": "*",
        "ext-sqlite3": "*"  

- composer update
- touch database/database.sqlite
- php artisan migrate:fresh
- php artisan db:seed
- npm run build

# Install Filament

composer require filament/filament:"^3.3" -W
php artisan filament:install --panels
php artisan make:filament-user
php artisan filament:optimize