# Profile Manager Application

The Profile Manager Application is a web-based application that allows users to register by filling out a form and uploading a profile picture. Each user can view profiles of other users, but can only edit their own user data. This is controlled through access restrictions.

**Disclaimer: This application is developed for educational purposes only. It focuses on the RESTful CRUD concept in Laravel and can be further developed.**

## Key Features

- User Registration: Users can register by filling out a registration form and uploading a profile picture.
- Profile Display: Each user has a profile view that displays the information provided during registration.
- Profile Editing: Users can edit their own data, including user information and profile picture.
- Access Restrictions: Only users can edit their own profiles, while other users can only view profiles of other users.

## Covered Laravel Concepts

This application covers the following Laravel concepts:

- Model-View-Controller (MVC) concept in Laravel.
- Usage of Blade, Laravel's template engine, to generate application views.
- Integration of Laravel Vite for building and managing the frontend of the application.
- Migration to manage the database schema of the application.
- Usage of Eloquent ORM to access and manipulate data in the database.
- Form processing and input validation using Laravel's features.
- Application localization to support multiple languages.
- File upload management using Laravel.
- Middleware to add security layers and authentication to the application.
- Access restriction using Laravel Policy.

## Installation

1. Clone this repository to your local directory:

git clone <repository-url>


2. Change to the application directory:

cd profile-manager-application


3. Install all dependencies using Composer:

composer install


4. Copy the `.env.example` file and rename it to `.env`. Adjust the database configuration according to your local setup.

5. Generate the Laravel application key:

php artisan key:generate


6. Run the database migrations to create the required tables:

php artisan migrate


7. Run the Laravel development server:

php artisan serve


8. Open the application in your browser by visiting `http://localhost:8000`.

Make sure to replace `<repository-url>` with the actual URL of your application repository. You can also adjust the installation instructions based on your development environment and preferences.

**Note:** Ensure that you have Composer installed and have the appropriate PHP environment before running this application.

Happy developing the Profile Manager Application with Laravel!
Make sure to replace <repository-url> with the actual URL of your application repository. You can also adjust the installation instructions based on your development environment and preferences.

Happy developing the Profile Manager Application with Laravel!
