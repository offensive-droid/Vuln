FROM php:7.0.0

WORKDIR /var/www/html

USER 'root'

COPY src/* /var/www/html/

RUN echo file_uploads=Off > /usr/local/etc/php/php.ini


CMD ["php", "-S" , "0.0.0.0:80"]

USER 'www-data'


