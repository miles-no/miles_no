FROM composer AS composer

FROM php:8.1-fpm



RUN docker-php-source extract \
	&& docker-php-ext-install mysqli \
	&& docker-php-source delete


RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip


COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY composer.json .
COPY paid-plugins ./paid-plugins


RUN composer install

RUN cp -r /var/www/html/paid-plugins/advanced-custom-fields-pro/ /var/www/html/wp/wp-content/plugins/advanced-custom-fields-pro/
RUN cp -r /var/www/html/paid-plugins/miles-interesser/ /var/www/html/wp/wp-content/plugins/miles-interesser/
RUN cp -r /var/www/html/paid-plugins/wordpress-seo-premium/ /var/www/html/wp/wp-content/plugins/wordpress-seo-premium/
RUN cp -r /var/www/html/paid-plugins/wp-rss-feed-to-post/ /var/www/html/wp/wp-content/plugins/wp-rss-feed-to-post/
RUN cp -r /var/www/html/paid-plugins/wpgetapi-extras/ /var/www/html/wp/wp-content/plugins/wpgetapi-extras/

RUN rm -f /var/www/html/wp/wp-content/plugins/hello.php

RUN rm composer.json

RUN chown -R www-data:www-data /var/www/html/wp/wp-content

COPY wp-config/wp-config.php .
