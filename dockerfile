# Stage 1: Build frontend assets pakai Node.js
FROM node:18 AS build-frontend

WORKDIR /app

# Copy file package.json dan package-lock.json lalu install dependencies
COPY package*.json ./
RUN npm install

# Copy semua asset frontend (CSS, JS, config)
COPY resources ./resources
COPY vite.config.js .
COPY tailwind.config.js .
COPY postcss.config.js .

# Build asset dengan Vite (tailwind + js)
RUN npm run build

# Stage 2: Setup Laravel PHP environment
FROM php:8.1-fpm

RUN apt-get update && apt-get install -y libzip-dev zip unzip curl \
    && docker-php-ext-install pdo pdo_mysql zip

WORKDIR /var/www/html

# Copy source code Laravel
COPY . .

# Copy hasil build frontend dari stage 1 ke public/build
COPY --from=build-frontend /app/dist ./public/build

# Install composer dan dependencies Laravel
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer install --no-dev --
