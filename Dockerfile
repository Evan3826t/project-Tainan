FROM php:8.1-fpm-alpine

RUN apk add --no-cache nginx wget
# RUN apk add --no-cache nginx wget npm

RUN mkdir -p /run/nginx

COPY docker/nginx.conf /etc/nginx/nginx.conf

RUN mkdir -p /app
COPY . /app

RUN sh -c "wget http://getcomposer.org/composer.phar && chmod a+x composer.phar && mv composer.phar /usr/local/bin/composer"
RUN cd /app && \
    /usr/local/bin/composer install --no-dev

# RUN cd /app && npm install && npm run

RUN chown -R www-data: /app

# RUN bash -c "composer install && chmod -R 777 /var/www && php artisan migrate --seed && php artisan storage:link"

CMD sh /app/docker/startup.sh