FROM php:8.2-apache

ENV TZ=Africa/Nairobi

# Set some image labels
LABEL imeja.image.authors="kiprotich.japheth19@gmail.com" \
    imeja.image.php.version="8.2"


# Enable some apache modules.
RUN a2enmod rewrite; \
    a2enmod headers; \
    a2enmod ssl

# Install some extra stuff
RUN set -ex; \
    apt-get update; \
    apt-get install -y \ 
    libxml2-dev \
    libzip-dev \
    libyaml-dev \
    zip \
    unzip \
    git \
    nodejs  \
    default-mysql-client \ 
    vim; \
    apt-get clean
 

# Install some php extensions from the docker built source.
RUN docker-php-ext-install gettext mysqli pdo_mysql zip 


# Install the intl extension
RUN apt-get update && apt-get install -y \
    libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl

# Enable the extension
RUN docker-php-ext-enable intl

# Copy your application code
COPY . /var/www/html/
WORKDIR /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP dependencies
# RUN composer install --no-interaction --optimize-autoloader --no-dev


# Update PHP dependencies
RUN composer update --no-interaction --optimize-autoloader --no-dev

# Install Supervisor
RUN apt-get update && apt-get install -y supervisor
RUN mkdir -p /var/log/supervisor
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Install wkhtmltopdf
RUN apt-get install -y \
    wkhtmltopdf
# Copy the migration script
COPY run_migrations.sh /usr/local/bin/run_migrations.sh

# Ensure the script is executable
RUN chmod +x /usr/local/bin/run_migrations.sh
# Start Supervisor and Apache
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]


# Run the migration script as the container's entrypoint
# ENTRYPOINT ["/usr/local/bin/run_migrations.sh"]
