
FROM php:8.3-apache


RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libzip-dev \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_mysql mysqli gd zip


COPY . /var/www/html/


RUN a2enmod rewrite


RUN chown -R www-data:www-data /var/www/html


COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

EXPOSE 80