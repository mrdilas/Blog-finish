# Для начала указываем исходный образ, он будет использован как основа
FROM php:8.2-fpm-alpine

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN apk --update --no-cache add git zlib zlib-dev curl unzip libxml2 ca-certificates 

RUN install-php-extensions \
        intl \
        pcntl \
        soap \
        zip \
        bcmath \
        exif \
        gd \
        opcache \
        pdo_mysql \
        pdo_pgsql \
        imagick 

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# Добавим свой php.ini, можем в нем определять свои значения конфига
# ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini

# Указываем рабочую директорию для PHP
WORKDIR /var/www/blog

# Запускаем контейнер
# Из документации: The main purpose of a CMD is to provide defaults for an executing container. These defaults can include an executable, 
# or they can omit the executable, in which case you must specify an ENTRYPOINT instruction as well.
CMD ["php-fpm"]

EXPOSE 9000