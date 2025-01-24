FROM php:8.2-apache

# Install Xdebug
RUN pecl install xdebug-3.4.0
RUN docker-php-ext-enable xdebug

# Write to xdebug.ini
RUN echo "xdebug.mode=debug,develop" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN echo "xdebug.client_port=9003" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN echo "xdebug.log=/var/www/html/infra/xdebug.log" >> /usr/local/etc/php/conf.d/xdebug.ini