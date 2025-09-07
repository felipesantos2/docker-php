FROM httpd:alpine3.21

COPY httpd.conf /usr/local/apache2/conf/httpd.conf

WORKDIR /usr/local/apache2/htdocs

RUN apk update && apk upgrade

RUN apk add --no-cache bash wget curl

COPY . .

