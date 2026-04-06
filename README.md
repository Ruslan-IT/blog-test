blog/                          <-- корень проекта
│
├── app/                       <-- вся логика приложения
│   ├── Controllers/           <-- контроллеры
│   │   ├── BlogController.php
│   │   └── HomeController.php
│   │
│   ├── Models/                <-- модели (работа с БД)
│   │   ├── Category.php
│   │   ├── Post.php
│   │   └── User.php
│   │
│   ├── Core/                  <-- ядро (framework-like)
│   │   ├── Controller.php
│   │   ├── Model.php
│   │   ├── View.php           <-- Smarty
│   │   ├── Router.php
│   │   ├── Response.php
│   │   └── Flash.php
│   │
│   └── Helpers/               <-- вспомогательные классы
│       ├── Session.php
│       └── Url.php
│
├── config/                    <-- конфиги
│   └── database.php
│
├── public/                    <-- публичная папка (DocumentRoot)
│   ├── index.php              <-- точка входа
│   ├── .htaccess              <-- роутинг
│   │
│   ├── css/
│   ├── js/
│   └── images/
│
├── templates/                 <-- Smarty шаблоны
│   ├── blog/
│   │   ├── category.tpl
│   │   └── post.tpl
│   │
│   ├── home/
│   │   └── index.tpl
│   │
│   ├── post/
│   │   └── index.tpl
│   │
│   ├── partials/              <-- части шаблонов
│   │   ├── header.tpl
│   │   ├── footer.tpl
│   │   └── sidebar.tpl
│   │
│   └── main.tpl               <-- главный layout
│
├── storage/                   <-- служебные файлы
│   ├── logs/
│   ├── templates_c/           <-- compiled Smarty
│   └── templates_cache/       <-- кеш (лучше переименовать)
│
├── assets/                    <-- исходники фронта
│   └── scss/
│       └── style.scss
│
├── vendor/                    <-- composer зависимости
├── .env
├── composer.json
├── docker-compose.yml
├── Dockerfile
