FROM php:7.3.28-fpm

WORKDIR /app

COPY . .

CMD ["php", "index.php"]