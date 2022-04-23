<h1 align="center">Support Ticket App</h1>
<p align="center">Build over Laravel 8</p>

## Server Requirements

- Requiremtns : 
- PHP >= 7.2.5
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Composer 2.0
- MySQL Ver 8+

## Installation steps

- `composer install`
- create .env file using .env.example and set the database host, username & password
- go to project root folder and run - `php artisan migrate`
- go to project root folder and run - `php artisan db:seed --class=CreateAdminUserSeeder` (This create a user with username "admin" & password "admin123")
- run "`sudo chmod -R 777 /storage`" & "`sudo chmod -R 777 /bootstrap/cache`"
- serve the application, run - `php artisan serve`
- visit http://127.0.0.1:8000
- you can create new users or also you can use users created by seeders
