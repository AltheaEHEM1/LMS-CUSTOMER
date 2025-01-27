# LMS AND AMS 

php artisan serve --host=127.0.0.2 --port=8000

## Project Setup
### Step 1: Clone the Repository
    ```bash
    git clone https://github.com/BenJr23/LMS-MAIN-FOLDER.git
    ```
### Step 2: Rename the '.env.example' file to '.env'
- Uncomment the following lines:
    ```bash            
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=sia1
    DB_USERNAME=root
    DB_PASSWORD=
    ```
- The DB_PORT value depends on your setup, mine is at 3307.
### Step 3: Install Laravel Dependencies
- Run the following command from the terminal to install the required Laravel packages:
- Ctrl + Shift + ` to open terminal
    ```bash
    composer install
    ```
### Step 4: Run the Project
- Run the following command to generate the application key:
    ```bash
    php artisan key:generate
    ```
- Run the migration to set up the database tables:
    ```bash
    php artisan migrate
    ```
- Finally, start the Laravel development server:
    ```bash
    php artisan serve
    ```
### Step 5: Access the Application
- Open your browser and navigate to http://127.0.0.1:8000 to access the POS system.

# About Laravel
## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).