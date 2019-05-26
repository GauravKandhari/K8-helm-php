FROM php:7.3-apache

RUN apt-get update \
  && apt-get install -y mysql-client curl \
  && docker-php-ext-install pdo_mysql mysqli

COPY src/ /var/www/html/
EXPOSE 80
