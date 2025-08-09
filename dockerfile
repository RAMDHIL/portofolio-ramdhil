# Stage 1: Build frontend assets pakai Node.js
FROM node:18 AS build-frontend

WORKDIR /app

COPY package*.json ./
RUN npm install

COPY resources ./resources
COPY vite.config.js .
COPY tailwind.config.js .
COPY postcss.config.js .

RUN npm run build

# Stage 2: Setup Laravel PHP environment
FROM php:8.1-fpm

RUN apt-get update && apt-get install -y libzip-dev zip unzip curl \
    && docker-php-ext-install pdo pdo_mysql zip

WORKDIR /var/www/html

COPY . .

COPY --from=build-frontend /app/public/build ./public/build

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
