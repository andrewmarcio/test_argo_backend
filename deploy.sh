#!/bin/sh

echo "Pull branch application"
git pull origin main

# echo "Execute docker compose down"
# docker compose down

# echo "Start docker container"
# docker compose up -d

echo "Install composer packages"
docker run -it todo_api:1.0.0 /bin/sh -c cd /var/www/todo_api && composer install -y

echo "Execute migrate database"
docker run -it todo_api:1.0.0 /bin/sh -c cd /var/www/todo_api && php artisan migrate -y

echo "Execute migrate database"
docker run -it todo_api:1.0.0 /bin/sh -c cd /var/www/todo_api && php artisan optimize:clear -y