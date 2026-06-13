FROM php:8.3-apache

# Enable Apache rewrite if needed
RUN a2enmod rewrite

# Copy website files
COPY . /var/www/html/

EXPOSE 80