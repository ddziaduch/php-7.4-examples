FROM php:7.4.0
RUN docker-php-ext-install -j$(nproc) bcmath
