FROM php:8.3-cli-alpine
WORKDIR /app
COPY . .

CMD ["php","index.php", "-s", "0.0.0.0:80"]
EXPOSE 80
