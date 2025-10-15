FROM php:8.2-fpm
WORKDIR /var/www/html

# Installer dépendances système + extensions PHP nécessaires à Laravel et PostgreSQL
RUN apt-get update && apt-get install -y \
    git curl zip unzip libonig-dev libzip-dev libpq-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring zip exif pcntl bcmath

# Copier Composer depuis l'image officielle
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copier le projet
COPY . .

# Installer Composer (sécurité, si l'étape précédente échoue)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer les dépendances Laravel en mode production
RUN COMPOSER_MEMORY_LIMIT=-1 composer install --no-dev --optimize-autoloader

# Donner les bons droits à Laravel
RUN chmod -R 775 storage bootstrap/cache

# Exposer le port Render
EXPOSE 10000

# Commande finale (nettoyage + lancement du serveur)
CMD php artisan config:clear && php artisan cache:clear && php artisan route:clear && php artisan serve --host=0.0.0.0 --port=10000
