#!/bin/bash
set -e

# Render binds web services to a dynamic $PORT (default 10000 or 80)
PORT=${PORT:-80}
sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf
sed -i "s/<VirtualHost \*:80>/<VirtualHost \*:${PORT}>/" /etc/apache2/sites-available/*.conf

# Ensure SQLite file exists with proper ownership and permissions
mkdir -p /var/www/html/database
if [ ! -f /var/www/html/database/database.sqlite ]; then
    touch /var/www/html/database/database.sqlite
fi

chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# Run database migrations
php artisan migrate --force --no-interaction || true

# Cache Laravel configuration, routes, and views for fast performance in production
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# Start Apache in foreground
echo "Clean Matrix application starting on port ${PORT}..."
exec apache2-foreground
