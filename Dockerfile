# Use an official PHP runtime as a base image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html


# Copy the PHP files from your local machine to the container
COPY . /var/www/html

# Expose port 80 (assuming your PHP application runs on this port)
EXPOSE 80

# Start PHP built-in server when the container launches
CMD ["php", "-S", "0.0.0.0:80"]

RUN apt-get update -y && apt-get install -y libmariadb-dev & apt-get install -y mysqld

RUN docker-php-ext-install mysqli

# Copy over our SQL queries
COPY ./mysql/init.sql /init.sql

# Startup MySQL and run the queries
CMD ["mysqld", "--init-file=/init.sql"]
