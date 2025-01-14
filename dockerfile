# Use the official PHP image as a base image
FROM php:7.4-apache

# Copy your PHP application files to the /var/www/html directory in the container
COPY ./insta

# Set the working directory inside the container
WORKDIR /var/www/html/insta

# Expose port 80
EXPOSE 80

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli

# Set permissions for the Apache web server to access your files
RUN chown -R www-data:www-data /insta

# Start the Apache server
CMD ["apache2-foreground"]
