## How to...

## OpenServer | WAMP | XAMP
#### Set up configuration file
- Copy .env.example to .env file and edit the following lines:
    - APP_URL: with your domain name
    - DB_DATABASE & DB_USERNAME & DB_PASSWORD: according to the database server settings
    - GOOGLE_CLIENT_ID & GOOGLE_CLIENT_SECRET: according to the data received in the Google service

#### Run following commands on the server (OpenServer terminal):
1. `composer install`
2. `php artisan key:generate`
3. `php artisan migrate`

## Docker
#### Set up configuration file
- Copy .env.example to .env file and edit the following lines:
    - DB_HOST: set as 'mysql'
    - GOOGLE_CLIENT_ID & GOOGLE_CLIENT_SECRET: according to the data received in the Google service

#### Run following commands from PowerShell (Windows) | terminal (macOs) in project dir:
1. `docker run --rm -u "$(id -u):$(id -g)" -v "$(pwd):/var/www/html" -w /var/www/html laravelsail/php81-composer:latest composer install --ignore-platform-reqs`
2. `bash ./vendor/bin/sail up -d`
3. `bash ./vendor/bin/sail artisan key:generate`
4. `bash ./vendor/bin/sail artisan migrate`
