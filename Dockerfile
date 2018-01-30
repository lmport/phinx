# escape=`
FROM alpine:latest AS composer_base

ENV defaultNetwork="dev"

RUN apk --update add wget curl git php7 php7-curl php7-ctype php7-openssl php7-iconv php7-json php7-mbstring php7-phar php7-dom php7-pdo php7-pdo_mysql php7-zlib --repository http://nl.alpinelinux.org/alpine/edge/testing/ && rm /var/cache/apk/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer 
RUN composer global require 'robmorgan/phinx' && ln -s /root/.composer/vendor/bin/phinx /usr/bin/phinx
RUN mkdir /app

LABEL description="A base command container for Phinx for all environments."

ENTRYPOINT ["phinx"]
CMD ["list"]
