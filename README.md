Steps to setup project
- Clone this repository
- Run command: Composer install
- Copy .env.example and create .env file, paste content of .env.example file into .env file
- Run command: php artisan key:generate (to generate APP_KEY)
- Configure database
- Run command: php artisan migrate (to create table)
- Run command: php artisan db:seed (to insert records in database)
- Run command: php artisan serve (to run project)
