# Use an official PHP runtime as a base image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the PHP files from your local machine to the container
COPY . /var/www/html

# Install MySQL client in the container
#RUN apt-get update && apt-get install -y \
#    default-mysql-client

# Install mysqli extension for PHP
#RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev && \
    docker-php-ext-configure gd --with-jpeg=/usr/include/ && \
    docker-php-ext-install gd


# Start PHP built-in server when the container launches
CMD ["php", "-S", "0.0.0.0:80"]

