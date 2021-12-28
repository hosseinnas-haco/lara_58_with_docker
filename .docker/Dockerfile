FROM php:7.4.1-apache

USER root

WORKDIR /var/www/html

RUN apt-get update -y && apt-get install -y \
            libpng-dev \
            zlib1g-dev \
            libxml2-dev \
            libzip-dev \
            zip \
            curl \
            unzip \
        && docker-php-ext-configure gd \
        && docker-php-ext-install -j$(nproc) gd \
        && docker-php-ext-install pdo_mysql \
        && docker-php-ext-install mysqli \
        && docker-php-ext-install zip \
        && docker-php-source delete

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY .docker/vhost.conf /etc/apache2/sites-enabled/000-default.conf

RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite
