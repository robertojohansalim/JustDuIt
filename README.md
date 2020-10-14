# Just Du It

Web Programming Project

## Requirement
- [XAMPP](https://www.apachefriends.org/index.html)
- [Composer](https://getcomposer.org/download/)

## First time configuration
1. Open and run XAMPP Apache and Mysql module.
2. Open http://localhost/phpmyadmin/ then create a new database for this project.
3. Clone / Download this project.
4. Open project file and duplicate `.env.example` file.
5. rename `.env.example` to `.env` then open this file.
6. change database name and setting to your database
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=justduit_laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```
7. Change `DB_DATABASE=justduit_laravel` into `DB_DATABASE=[Your new database for this project]` (example: `DB_DATABASE=justdunit`)
8. Open Command Prompt in the project directory
9. Run this command
    ```
    composer install
    php artisan key:generate
    php artisan migrate
    php artisan db:seed
    ```
## How to run this project
1. Open XAMPP control panel then start Apache and Mysql module.
2. Open Command Prompt at the project file directory.
3. Run this command
    ```
    php artisan serve
    ```
    Now you can open this project at http://127.0.0.1:8000.
