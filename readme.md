# RetroGrade
An E-Commerce website to purchase 3D printed retro console game.

## [Go To Site](https://retroconsoleshop.frb.io)
Create your own account to try out or login using the following credential:
```
Email: test@mail.com
Password: qwerty
```

## Local Installation

### Installing Composer
Laravel requires Composer in order to work locally.
Download composer from [getcomposer.org](https://getcomposer.org/download/) and install the .exe file.

Alternatively, you can also install from terminal
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

### Running The App
Clone the repository or download and extract the zipped file.
```
git clone https://github.com/ayyleesh/3dcommerce.git
```
switch to the repo folder
```
cd 3dcommerce
```
Install all the dependencies using composer

```
composer install
```

Make a new database in your database server and name it `3dshop`.

Create a .env file or edit an existing one if available by copying the content in .env.example file, filling the necessary fields.

Make sure that the fields below is filled.
```
APP_DEBUG=false
APP_ENV=production
APP_KEY={{YOUR GENERATED KEY}}
DB_CONNECTION={{YOUR PREFERRED DATABASE ('mysql' by default)}}
DB_DATABASE=3dshop
DB_HOST={{YOUR DATABASE HOST/IP}}
DB_PASSWORD={{YOUR DATABASE PASSWORD}}
DB_PORT={{YOUR DATABASE PORT (3306 by default)}}
DB_USERNAME={{YOUR DATABASE USERNAME ('root' by default)}}
```
Generate a new application key and paste it on the `APP_KEY` field.

```
php artisan key:generate
```

Run database migration and seed the contents.
```
php artisan migrate
php artisan db:seed
```
Start the server by using this command

```
php artisan serve
```
and access the site from the provided URL.
<hr>

Powered by:
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

#### License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
