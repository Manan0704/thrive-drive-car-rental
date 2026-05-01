FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libonig-dev libpng-dev libssl-dev \
    && docker-php-ext-install pdo pdo_mysql zip

RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader --ignore-platform-req=ext-mongodb
RUN php artisan config:clear

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

RUN a2enmod rewrite

ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

EXPOSE 10000