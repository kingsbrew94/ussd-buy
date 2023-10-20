## About USSDBuy

A simple admin portal developed with the Laravel PHP Framework that allows admin to
Add a new number and whitelist it
- View all numbers added to the portal
- Edit number
- Delete number
- Blacklist number

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Software Requirements
- PHP >= 8.1.0 or latest

## How to install software
- Install composer on your local machine
- Git clone project 
- Open command line or terminal and change directory to project using `cd ussd-buy`
- Create a dot evn `.env` file in the project
- Copy the content of `.env.examples` into the `.env`
- Set your database user and password in the `.env` file
- Enter the command `composer install` to install all dependencies
- Enter the command `php artisan migrate` to migrate schemas
- Enter the command `php artisan db:seed --class=DatabaseSeeder" to populate the database tables with administrative credentials
- Finally, enter the command `php artisan serve` to run project, copy the url in your command line or terminal run it your favorite browser

## Admin Credentials
- Username: `admin`
- Password: `admin`

