#!/bin/sh

# Install dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader

php artisan key:generate

# Start the Laravel development server
php artisan serve --host=0.0.0.0 --port=8000
