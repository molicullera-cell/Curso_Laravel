FROM php:8.4-fpm

# Paquetes base
RUN apt-get update && apt-get install -y --no-install-recommends \
    git unzip curl libzip-dev libpng-dev libxml2-dev \
    && rm -rf /var/lib/apt/lists/*

# Extensiones nativas
RUN docker-php-ext-install pdo pdo_mysql xml ctype zip

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Xdebug estable (opcional). Si no lo quieres ahora, comenta estas 2 líneas:
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && install-php-extensions xdebug-3.4.0

# php.ini de desarrollo
RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini

WORKDIR /var/www/html
