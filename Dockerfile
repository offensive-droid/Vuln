FROM php:8.0-apache as base

COPY ./src /var/www/html

CMD ["php", "-S" , "0.0.0.0:80"]

USER 'www-data'
