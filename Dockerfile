# Use an official PHP runtime as a base image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the PHP files from your local machine to the container
COPY . /var/www/html

# Expose port 80 (assuming your PHP application runs on this port)
EXPOSE 8000

# Start PHP built-in server when the container launches
CMD ["php", "-S", "0.0.0.0:80"]
