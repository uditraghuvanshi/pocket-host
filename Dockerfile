# Use an official PHP image
FROM php:8.1-apache

# Enable required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Copy project files to the container
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Expose port 8000
EXPOSE 8000

# Start Apache server
CMD ["apache2-foreground"]
