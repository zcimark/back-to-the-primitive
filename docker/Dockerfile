# Use PHP Apache image as base image
FROM php:8.3-apache

# Set working directory
WORKDIR /var/www/html

# Copy application files to the container
COPY . .

RUN apt-get update \
  && apt-get install -y \
  git \
  curl \
  libpng-dev \
  libonig-dev \
  libxml2-dev \
  zip \
  unzip \
  zlib1g-dev \
  libpq-dev \
  libzip-dev
  
# Install dependencies and enable Apache modules (if needed)
# Example:
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql zip bcmath gd intl \
    && a2enmod rewrite


# Expose port
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
