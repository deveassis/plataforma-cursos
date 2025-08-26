FROM php:8.2-fpm-bookworm

ARG DEBIAN_FRONTEND=noninteractive

# Instala dependências básicas + pdo_mysql
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        unzip \
        zip \
        git \
        curl \
        default-mysql-client \
    && docker-php-ext-install pdo_mysql zip \
    && rm -rf /var/lib/apt/lists/*

# Instala Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 9000

CMD ["php-fpm"]
