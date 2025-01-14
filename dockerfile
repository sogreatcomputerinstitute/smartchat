# Use the official PHP image as a base image
FROM php:7.4-apache

# Install Docker
RUN apt-get update && \
    apt-get install -y apt-transport-https ca-certificates curl software-properties-common && \
    curl -fsSL https://download.docker.com/linux/debian/gpg | apt-key add - && \
    add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/debian $(lsb_release -cs) stable"

# Copy your PHP application files to the /var/www/insta directory in the container
COPY ./insta /var/www/insta

# Set the working directory inside the container
WORKDIR /var/www/insta

# Expose port 80
EXPOSE 80

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli

# Set permissions for the Apache web server to access your files
RUN chown -R www-data:www-data /var/www/insta
RUN chmod -R 755 /var/www/insta

# Update the Apache configuration to use /var/www/insta as the document root
RUN echo '<VirtualHost *:80>\n DocumentRoot /var/www/insta\n <Directory /var/www/insta>\n Options Indexes FollowSymLinks\n AllowOverride All\n Require all granted\n </Directory>\n</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

# Start the Apache server
CMD ["apache2-foreground"]
