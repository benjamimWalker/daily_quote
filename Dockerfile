FROM php:8.2-fpm-alpine

ARG user=ben
ARG uid=1000

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN adduser -G www-data -D -u $uid $user \
 && mkdir -p /home/$user/.composer \
 && chown -R $user:www-data /home/$user

WORKDIR /home

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN chmod -R 775 /home

COPY --chown=$user:www-data . /home

USER $user
