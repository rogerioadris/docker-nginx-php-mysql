FROM phpdockerio/php74-fpm

RUN apt-get update \
    && apt-get -y --no-install-recommends install  php7.4-mysql php7.4-pgsql php7.4-redis php7.4-gd php7.4-mbstring \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

WORKDIR "/var/www/html"