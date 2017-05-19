FROM alpine:3.5

# mirrors in france
RUN echo "http://mirrors.2f30.org/alpine/v3.5/main" > /etc/apk/repositories && \
    echo "http://mirrors.2f30.org/alpine/v3.5/community" >> /etc/apk/repositories && \
    echo "http://mirrors.2f30.org/alpine/v3.5/testing" >> /etc/apk/repositories

RUN apk --update upgrade && apk add runit bash && rm -rf /var/cache/apk/*

# Php
RUN apk --update add \
    icu-libs \
    libcurl \
    libxml2 \
    nginx \
    pcre \
    php5-cli \
    php5-ctype \
    php5-curl \
    php5-dom \
    php5-fpm \
    php5-iconv \
    php5-intl \
    php5-json \
    php5-pcntl \
    php5-mysql \
    php5-mysqli \
    php5-posix \
    php5-opcache \
    php5-openssl \
    php5-sockets \
    php5-xml \
    php5-zip \
    php5-zlib \
    && \
    rm -rf /var/cache/apk/*

# Install fake user poop
ARG POOP_UID=1000
RUN addgroup -g 1000 poop && \
    adduser -S -u $POOP_UID -h /home/poop -s /bin/bash poop poop

# Configuration
COPY php/poop.ini /etc/php5/conf.d/poop.ini

# Service
COPY nginx/run             /etc/service/nginx/run
COPY php-fpm/run           /etc/service/php-fpm/run

# Configuration
COPY nginx/nginx.conf      /etc/nginx/nginx.conf
COPY php-fpm/fpm.conf      /etc/php5/php-fpm.conf

COPY helper.sh             /home/poop/helper.sh

RUN chown -R poop:poop /var/lib/nginx

EXPOSE 80

# Default command
CMD ["runsvdir", "-P", "/etc/service"]
