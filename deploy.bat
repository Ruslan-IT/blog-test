@echo off
echo 🚀 Автодеплой запущен...

setlocal enabledelayedexpansion

REM Добавляем изменения
echo 📦 Добавляем изменения в git...
git add .
git commit -m "Refactor controller"
git push origin master

echo ✅ Деплой завершен
pause
