FROM php:8.3-cli

# Dipendenze di sistema
RUN apt-get update && apt-get install -y \
    git curl unzip zip libpq-dev libzip-dev libpng-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql pgsql zip \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

# Installa dipendenze PHP e JS, builda gli asset
RUN composer install --no-dev --optimize-autoloader --no-interaction
RUN npm install && npm run build

# Cache Laravel (verrà rigenerata a runtime dopo, ma va bene averla)
RUN php artisan config:clear

EXPOSE 10000

CMD php artisan migrate --force && php artisan config:cache && php artisan route:cache && php artisan serve --host 0.0.0.0 --port $PORT