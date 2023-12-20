FROM php:8.0-apache

# Install required dependencies
RUN apt-get update && \
    apt-get install -y libzip-dev && \
    docker-php-ext-install mysqli pdo pdo_mysql && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Enable the mysqli extension
RUN docker-php-ext-enable mysqli

# Other configurations or extensions can be added here

# Copy the source code into the container
COPY ./php/src /var/www/html/

# Your existing commands
# RUN apt-get update && apt-get upgrade -y