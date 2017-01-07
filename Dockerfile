FROM php:7.1-fpm

RUN apt-get -y update && \
    apt-get -y --no-install-recommends install \
        git \
        unzip && \
    docker-php-ext-install pdo_mysql && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD . /var/www/html

WORKDIR /var/www/html

RUN composer install --no-dev --no-interaction --no-progress --no-scripts --optimize-autoloader

ENTRYPOINT ["/var/www/html/bin/entrypoint.sh"]

CMD php-fpm
