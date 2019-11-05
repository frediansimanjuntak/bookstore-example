# Bookstore-example
This branch just for example how to make simple authentication and CRUD with laravel

## Setup Device

To run laravel you need to set up it first.
- install composer: https://getcomposer.org/
- install xampp: https://www.apachefriends.org/download.html
    
    
## Getting Started

Clone this repositories

    git clone https://github.com/frediansimanjuntak/bookstore-example.git
    
Create your Database on phpmyadmin

    localhost/phpmyadmin
    
Run migration to create the table of Database

    php artisan migrate
    
Start the server
    
    php artisan serve
    
And now you can access the project with 
    
    localhost:8000


## Others

To setup the authentication with laravel 6, run tihs command, follow this link (https://laravel-news.com/running-make-auth-in-laravel-6):

    composer require laravel/ui
    php artisan ui:auth
    npm install && npm run dev


Example CRUD, you can see this link (https://www.itsolutionstuff.com/post/laravel-6-crud-application-tutorialexample.html)
