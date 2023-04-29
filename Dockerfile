# Use the official PHP image as the base image
FROM php:8.0-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    curl

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set the working directory
WORKDIR /var/www

# Copy the composer.json and composer.lock files
COPY composer.json composer.lock ./

COPY webpack.mix.js ./

# Install Laravel dependencies
RUN composer install --no-scripts --no-dev --prefer-dist

# Copy the package.json and package-lock.json files
COPY package.json package-lock.json ./

# Install Node.js
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash -
RUN apt-get install -y nodejs

# Install Vue.js dependencies
RUN npm install

# Build assets for production
RUN npm run production

# Copy the rest of the application code
COPY . .

# Set necessary permissions
RUN chown -R www-data:www-data /var/www
RUN chmod -R 775 /var/www/storage
RUN chmod -R 775 /var/www/bootstrap/cache

# Expose the port the app runs on
EXPOSE 9000

# Start the PHP-FPM server
CMD ["php-fpm"]
