FROM php:8.3.6

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install -y \
    libzip-dev \
    && docker-php-ext-install zip \
    && pecl install redis \
    && docker-php-ext-enable redis \
