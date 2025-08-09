FROM node:18 AS build-frontend

WORKDIR /app

# Copy hanya package.json dan package-lock.json dulu
COPY package*.json ./

# Install dependencies (termasuk vite)
RUN npm install

# Baru copy sisa source code
COPY . .

# Build assets
RUN npm run build


# Stage 2: Setup Laravel PHP environment
FROM php:8.1-fpm

RUN apt-get update && apt-get install -y libzip-dev zip unzip curl \
    && docker-php-ext-install pdo pdo_mysql zip

WORKDIR /var/www/html

# Copy source code Laravel
COPY . .

# Copy hasil build frontend dari stage 1 ke public/build
COPY COPY --from=build-frontend /app/public/build ./public/build

# Install composer dan dependencies Laravel
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer install --no-dev --
