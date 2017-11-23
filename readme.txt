/*
Installation of laravel
compilation of scss and js

*/

1. install composer
2. run command “ composer create-project laravel/laravel learning-laravel-5” . This would create a directory in www folder.
3. Create virtual host for your project I.e laravel-learing.com
4. go to the directory learning-laravel-5: and install npm packages run command “npm install”
5. for compilation of js css after changes run “npm run development”  or run “npm run watch”
6.install laravelcollective package of laravel  for HTML forms and other things type command “composer require "laravelcollective/html":"^5.4.0"”

Create contoller through artisan

php artisan make:controller MessagesController

Create model and database migration through artisan .. 
php artisan make:model Messsage -m
this would create the model of name Message and -m mean that also create the migration file for the database. We dont need to create database through phpmyadmin
go to the database/migrations/.....create_messages_table.php and add your form fields in up function of the database
create database and add detials in .env



