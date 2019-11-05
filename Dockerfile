FROM php:7.4.0RC5-cli
RUN docker-php-ext-install -j$(nproc) bcmath
