# Design patterns - Laravel

## Strategy pattern
- app/Http/Controllers/api/v1/strategy

## Setting up Docker

##### 1. Setup the .env file
Set the ```DB_HOST``` from ```.env``` to the ```docker-compose.yml``` database service name (currently ```db```, so you'll have ```DB_HOST=db``` in the ```.env``` file).

##### 2. Start the services
Run ```docker-compose up -d``` inside the root folder of your Laravel project (make sure you have Docker installed on your machine).

#### phpmyadmin environments info

Comment the ```PMA_USER``` and ```PMA_PASSWORD``` lines from the ```phpmyadmin``` service if you want to disable auto-login when opening the ```phpmyadmin``` in the browser.

## Enjoy by Eduard Robu!
