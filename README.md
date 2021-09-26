## About BlogIt

BlogIt is a web application built with laravel, Bootstrap and MySQL. In this application users can create an account and then post new blogs. Users can view posted blogs as well as modify and delete them.
## Technologies
- Laravel
- Bootstrap
- MySQL

## Running the application

1 - Clone the repository and checkout branch BlogIt-2 or download BlogIt-2 branch.

2 - Run composer install to install all dependencies in repo's root directory.

3 - Run php artisan serve </br> </br>

## Running the application using docker-compose

1 - Make sure docker is setup on your local machine.

2 - Clone repository and checkout BlogIt-2 branch.

3 - Make sure you are in repo's root directory, then run <i>composer install</i> to install all dependencies.

4 - Change database parameters in .env file to <br/>
<i>DB_CONNECTION=mysql </br>
DB_HOST=mysql</br>
DB_PORT=3306 </br>
DB_DATABASE=blogit</br>
DB_USERNAME=root</br>
DB_PASSWORD=secret</i>

5 - Run <i>docker-compose build</i> to build services

6 - Run <i>docker-compose up</i> to run application.

7 - Access application at localhost:8088 </br><br/>

## Running Migrations.

1 - Run services as described above

2 - Run docker-compose exec command on php container

<i>docker-compose exec php /var/www/html/artisan migrate</i>