# Project Setup

## Dependencies
- Install PHP
- Install Composer
- Install MySQL or any other DBMS server

## Install project and add the project to github
- To create a brand new laravel project, open the terminal and run the following command
```bash
composer create-project laravel/laravel learn_laravel_from_laracast
```
- Initiate git to the project
- Add remote repository to the project
- Push the project to the remote repository

## Setup the database
- Create database `learn_laravel_from_laracast` for the project
- Create user for the project database and grant privileges to the user (I used `root` user in this project, so skipped it)
- Configure database to the `.env` file
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=learn_laravel_from_laracast
DB_USERNAME=root
DB_PASSWORD='password'
```
- Run migration. This will make some basic migration needed for laravel setup
```bash
php artisan migrate
```
