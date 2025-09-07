FROM php:8.4.12-fpm-alpine3.21

WORKDIR /usr/local/apache2/htdocs

RUN apk update && apk upgrade

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

# update alpine linux -> apk
RUN apk add --no--cache \
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
    wget \
    vim \
    --virtual .build-deps gcc g++ make

RUN apk add --no-cache nodejs-current npm

# Install composer
RUN curl -sS https://getcomposer.org/installer | php --  --install-dir=/usr/local/bin --filename=composer

