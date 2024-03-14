composer install
composer run-script post-root-package-install
php artisan migrate --force
chown -R www-data:www-data ./storage
