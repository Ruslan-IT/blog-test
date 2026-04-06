#!/bin/bash
set -e

#cd /home/l/lionti9k/webway.live  # путь к проекту на Beget

# Подтягиваем изменения из GitHub
git pull origin master

echo "✅ Сервер обновлён"

php8.3 composer.phar install --no-dev --optimize-autoloader



# запуск команды sh deploy_server.sh


