FROM php:8.4.12-fpm-alpine3.22

LABEL maintainer="<github.com/felipesantos2>"

WORKDIR /var/www/html

# RUN apk add --no-cache build-base

# update alpine linux -> apk
RUN apk update && apk add --no--cache \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libzip-dev \
    unzip \
    icu-dev \
    libxml2-dev \
    openssl-dev \
    libpq-dev \
    git \
    bash \
    --virtual .build-deps gcc g++ make

#(link) https://www.ubuntumint.com/install-nodejs-alpine-linux
# RUN apk add --no-cache nodejs-current npm

RUN apk add --no-cache node-current npm

# Install php extensions
RUN docker-php-ext-install gd pdo pdo_mysql

# Install composer
RUN curl -sS https://getcomposer.org/installer | php --  --install-dir=/usr/local/bin --filename=composer && composer self-update
