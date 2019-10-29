ARG php_version

FROM php:${php_version}-fpm

# 安装时可能需要用到的软件
RUN apt-get update \
    && apt-get -y install \
        git \
        zip \
        curl \
        libcurl3-dev \
        unzip \
        zlib1g-dev \
        libmcrypt-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libfreetype6-dev \
    --no-install-recommends \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# 开启源码内自带的扩展，安装的是 gd,zip,curl,bcmath,iconv,pdo_mysql,pcntl,opcache,mcrypt 
# 不需要要可以删掉，同时可删除上面对应的软件
RUN docker-php-ext-configure gd \
        --with-freetype-dir=/usr/include/ \
        --with-png-dir=/usr/include/ \
        --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install \
        gd \
        zip \
        curl \
        bcmath \
        iconv \
        pdo_mysql \
        pcntl \
        opcache \
        mcrypt

# PECL安装模式，装的是mongodb，不需要可以直接删掉
RUN pecl install mongodb && docker-php-ext-enable mongodb


# 下载composer，并设置为全局
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer 

# 为composer设置权限，并为其设置国内源
RUN chmod 0700 /usr/local/bin/composer \
    && composer config -g repo.packagist composer https://packagist.phpcomposer.com 

