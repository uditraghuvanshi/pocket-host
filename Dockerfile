# Use an official PHP image with Apache
FROM php:8.1-apache

# Install MySQLi extension
RUN docker-php-ext-install mysqli

# Copy all files from the repository into Apache's web root
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Expose port 80 (Apache default)
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
