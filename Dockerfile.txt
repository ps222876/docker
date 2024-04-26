# Gebruik een officiële PHP-image als basis
FROM php:8.0-fpm

# Set de werkomgeving in naar de Laravel-installatiemap
WORKDIR /var/www/html

# Installeer systeempakketten en PHP-extensies die nodig zijn door Laravel
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

# Kopieer de lokale code naar de container
COPY . .

# Installeer de afhankelijkheden van Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Voer Composer-installatie uit om afhankelijkheden te installeren
RUN composer install

# Verander de eigenaar van de Laravel-opslagmap
RUN chown -R www-data:www-data storage

# Expose poort 9000 en start PHP-fpm-server
EXPOSE 9000
CMD ["php-fpm"]
