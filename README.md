<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Project
    There is an application for a car owners wich can show all his cars. You can add new owners and new cars. 

Functionality:
    On first visit user can see home page. User can visit ownerstable and cars table from the menu.
    User can see all created owners and ability to create a new owner by providing a name, last name, email, birth date and his license date. User can edit or delete owner. He can see all cars wich belongs to owner also he can add new car or edit, or delete. User has ability to see all cars from all owners.

   
    
## Instalation


This project was made on Laravel 8 version:

Alternative installation is possible without local dependencies relying on Docker.

Clone the repository:

    git clone https://github.com/NRimantas/joinPractice.git

Switch to the repo folder:

    cd joinPractice

Install all the dependencies using composer:

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Run the database migrations (Make sure that have database named "joinPractice"):

    php artisan migrate

Start the local development server

php artisan serve You can now access the server at http://localhost:8000

TL;DR command list:

    git clone git clone https://github.com/NRimantas/joinPractice.git
    cd cd students_projects
    composer install
    Make sure you set the correct database connection information before running the migrations Environment variables
    php artisan migrate
    php artisan serve





