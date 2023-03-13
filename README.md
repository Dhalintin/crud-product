# <p align="center">CRUD PRODUCT</p>

<p align="center">This project is a practice laravel project designed as a practice project to learn the basice operations on a site which are Create, Read, Update and Delete shortened to CRUD
</p>

## Getting Started

- [Installation]
- [Requirement]
- [Setting Up]

## Installation

You can get the app by cloning it to your local repo using the git clone command
See the Github documentation to learn more about cloning repos or enter

<code>git clone https://github.com/Dhalintin/crud-product.git</code>

## Requirement

- PHP 8.1+
- Laravel 9 (and above)
- Composer
- NPM
- MySQL
- Git

### Setting Up

After Cloning this repo enter into the folder

```shell
cd crud-product
```

Run the follwoing command to install all neccesary dependencies

```shell
composer install
```

```shell
npm install
```

And fund them

```shell
    npm fund
```

Create a .env file

```shell
    touch .env</code>
```

Copy the content .env.example in the .env

```shell
    cp .env.example .env
```

Configure the <code>.env</code> file

Run the migration and seed the database in one step

```shell
    php artisan migrate:fresh --seed</code>
```

## Start your server

```shell
    php artisan serve
```

## License

Unlicensed

# crud-product
