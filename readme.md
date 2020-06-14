# rsquare
= Install dependency
Composer install
- create .env file from copying file env.example
cp .env.example .env
- set DB name, user, password in .env file
- generate new app key
php artisan key:generate
- migrate DB
php artisan migrate
- set env file for image viewer
FILESYSTEM_DRIVER=public (add in file .env)
- install seeder
php artisan db:seed --class=ProductCategorySeeder

#Run App
php artisan serve
