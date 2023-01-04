FROM php:8.2-cli

WORKDIR /src
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer