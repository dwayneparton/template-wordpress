FROM wordpress:php8.2-apache

WORKDIR /var/www

COPY --chown=www-data:www-data ./public /var/www/public
COPY --chown=www-data:www-data ./packages /var/www/packages
COPY --chown=www-data:www-data ./vendor /var/www/vendor
COPY .docker/www/apache2 /etc/apache2
COPY .docker/www/php.ini /usr/local/etc/php/conf.d/wp.ini

RUN apt-get update \
    && apt-get install -y libzip-dev \
    && apt-get -y upgrade \
    && apt-get clean \
    && a2dismod status

EXPOSE 80
