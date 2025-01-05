# Laravel Captcha Application by Seraga Santri

This application uses **Laravel version 11** with a minimum **PHP version of 8.2**.

## CAPTCHA Library

The application integrates a CAPTCHA feature using the library available at the following link:  
[Gregwar Captcha](https://github.com/Gregwar/Captcha?tab=readme-ov-file#complete-example)

## Setup Instructions

Follow the steps below to run the application:

1. Clone the repository:

    ```bash
    git clone https://github.com/seragasantri/laravel-captcha.git
    ```

2. Navigate to the project directory:

    ```bash
    cd laravel-captcha
    ```

3. Install the required dependencies using Composer:

    ```bash
    composer install
    ```

4. Generate the application key:

    ```bash
    php artisan key:generate
    ```

5. Run the database migrations:

    ```bash
    php artisan migrate
    ```

6. Start the development server:

    ```bash
    php artisan serve
    ```

7. Open your browser and navigate to:

    ```
    http://localhost:8000

    ```
