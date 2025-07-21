FROM php:8.2-cli
RUN docker-php-ext-install pdo pdo_mysql zip
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html
COPY . .
RUN composer install --optimize-autoloader --no-dev
RUN php artisan storage:link
EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8000}

