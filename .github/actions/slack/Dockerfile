FROM php:7.4.2

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /usr/src/app

COPY . .

RUN apt-get update
RUN apt-get install zip -y
RUN composer install

ENTRYPOINT ["php", "/usr/src/app/script.php"]