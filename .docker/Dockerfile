FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
        curl \
        wget \
        git \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        libzip-dev \
        libonig-dev \
        libpq-dev \
        zlib1g-dev \
        libmemcached-dev \
        libxrender1 \
        libfontconfig1 \
        ffmpeg \
        htop \
        graphviz \
        nano \
        libldap2-dev && \
        rm -rf /var/lib/apt/lists/*

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions @composer opcache ldap pcntl intl pcov xdebug iconv mbstring pdo mysqli pdo_mysql pdo_pgsql pgsql zip gd exif ftp memcached redis xhprof && \
    ln -s composer /usr/local/bin/c

WORKDIR /var/www/html

CMD ["php-fpm"]
