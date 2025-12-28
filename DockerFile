# Use official PHP image with Apache
FROM php:8.2-apache

# Set working directory in container
WORKDIR /var/www/html/

# Copy project files into container
COPY . /var/www/html/

# Enable Apache rewrite module (optional, needed for .htaccess)
RUN a2enmod rewrite

# Install PDO MySQL extension for PHP
RUN docker-php-ext-install pdo pdo_mysql

# Expose port 80
EXPOSE 80

