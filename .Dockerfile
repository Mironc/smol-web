FROM php:8.3-cli-alpine
WORKDIR /app
COPY . .

CMD php -S 0.0.0.0:$PORT index.php
