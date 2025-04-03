FROM php:7.2-apache

# Inštalácia požadovaných balíkov a rozšírení PHP
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libxml2-dev \
    libmcrypt-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo_mysql soap

# Inštalácia a povolenie rozšírenia mcrypt
RUN pecl install mcrypt-1.0.3 && docker-php-ext-enable mcrypt

# Povolenie modulu Apache rewrite
RUN a2enmod rewrite

# Nastavenie `ServerName` v Apache
RUN echo "ServerName localhost" > /etc/apache2/conf-available/servername.conf && a2enconf servername

# Nastavenie oprávnení pre Apache
RUN chown -R www-data:www-data /var/www/html

# Overenie nainštalovaných rozšírení PHP
RUN php -m | grep -E "gd|mysqli|pdo_mysql|mcrypt"