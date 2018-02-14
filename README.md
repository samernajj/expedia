# Hotels Search

A simple search in [JSON API](https://offersvc.expedia.com/offers/v2/getOffers?scenario=deal-finder&page=foo&uid=foo&productType=Hotel) that presents a bunch of Hotel deals.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Laravel Prerequisites

* PHP >= 7.0.0
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension


### Installing

1- clone the project/reposiory on your machine
```
git clone https://github.com/samernajj/hotels-search.git
```

2- got to the project
```
cd hotels-search
```
3- composer update to install dependencies 
```
composer update
```

4- check if php and artisan command working
```
php artisan 
```

5- rename .env.example to .env
```
mv ".env.example" ".env"
```
6- generate key
```
php artisan key:generate
```

7- run the project with default port(8000) or with differnt port(8090)
```
php artisan serve
or
php artisan serve --port=8090
```
8-on your browser type the url with port
```
http://localhost:8090/
```

## Built With

* [Laravel 5.5](https://laravel.com/docs/5.5) - PHP MVC framework
* [Composer](https://getcomposer.org/) - Dependency Management


## Author

* **Samer Najjar** - [samernajj](https://github.com/samernajj)

