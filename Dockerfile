# Gunakan image dasar PHP terbaru
FROM php:8.3-fpm-alpine

# Instal dependensi sistem yang dibutuhkan
RUN apk update && apk add \
    git \
    curl \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql

# Instal Composer secara global
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Atur direktori kerja (working directory)
WORKDIR /var/www/html

# Atur permission (tergantung kebutuhan, ini contoh dasar)
RUN chown -R www-data:www-data /var/www/html