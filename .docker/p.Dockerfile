FROM php:8.4.12-alpine3.22

WORKDIR /var/www/html

RUN apk update && apk upgrade 

RUN apk add --no-cache bash wget curl git vim

COPY . .