FROM php:7.0-apache

RUN docker-php-ext-install pdo pdo_mysql

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# set the document root to /public
COPY 000-default.conf /etc/apache2/sites-available/

# enable mod rewrite
RUN ln -s /etc/apache2/mods-available/rewrite.load \
    /etc/apache2/mods-enabled/