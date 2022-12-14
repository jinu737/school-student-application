![Student Admission application]

# Prerequisites
* [Docker](http://docker.com)
* PHP 8.0.2
* MySQL 8.0 (Install [Sequel Ace](https://github.com/Sequel-Ace/Sequel-Ace) to connect to database)

# Technology
* Laravel 9.19
* Bootstrap 4.1.3

# Environments
This application codebase hosts several applications simultaneously. The routes are controlled using the web middleware.
* [Local Environment - Student App](http://localhost:8000/)

# Documentation - step-by-step how to configure and use the application locally
* This application needs to first be configured at env level(If using mysql with different database).
* Run migrate command to migrate the database - php artisan migrate.
* Start Laravel's local development server using the Laravel's Artisan CLI serve command - php -S localhost:8000 -t public.
* Create the Student and the data can be further edited or deleted.
* To run the application use the browser to navitgate to http://localhost:8000/
* User can further use the application.

# Features
* CRUD functionality using RestAPI
* Ability to search Students using Ajax
