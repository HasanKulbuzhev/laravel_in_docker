
## Развернуть Laravel.
 Вводим 
```bash 
composer create-project laravel/laravel Anastasia --prefer-dist
```
И вуаля у нас создаётся проект с замечательным именем.

##    2. Добавить docker-compose.yml Позволяющий поднять все необходимые контейнеры для работы проекта одной командой.
a. PHP 7.4 </br>
b. СУБД - PostgreSQL 12 </br>
Вводим:
```bash 
docker-compose up -d --build
```


##     3. Создать таблицу users с пользователями (набор полей произвольный). 
  -таблица уже есть по умолчанию ,но если создавать,то можно создать артисаном:
-      php artisan make:migration create_user_table
а если с моделью , то 
-      php artisan make:model -m User

##     4.Должны работать регистрация и аутентификация (можно взять стандартные).
-Заходим в наш докер
-      docker-compose exec docker-php-fpm /bin/bash
И вводим
-      composer require laravel/ui
-      php artisan ui bootstrap --auth

##     5.Нужна возможность назначить пользователя админом (можно просто редактированием записи в БД).
 просто добавляем в таблицу users поле is_admin.Я добавил его изначально

