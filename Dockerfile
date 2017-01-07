FROM php:7.1.0-fpm-alpine

RUN apk update && \
    apk add \
        curl \
        git \
        unzip && \
    docker-php-ext-install pdo_mysql && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD . /var/www/html

WORKDIR /var/www/html

RUN composer install --no-interaction --no-progress --optimize-autoloader

ENTRYPOINT ["/var/www/html/docker/entrypoint.sh"]

CMD php-fpm
