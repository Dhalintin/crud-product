<p align="center">CRUD PRODUCT</p>

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

<code>cd crud-product</code>

Run the follwoing command to install all neccesary dependencies

<code>composer install</code>
<code>npm install</code>

And fund them

<code> npm fund</code>

Create a .env file

<code>touch .env</code>

Copy the content .env.example in the .env

<code>cp .env.example .env</code>

Configure the <code>.env</code> file

Run the migration and seed the database

<code>php artisan migrate</code>

<code>php artisan seed</code>

or run to perfrom both command in one step

<code>php artisan migrate:fresh --seed</code>

## Start your server

<code>php artisan serve</code>

## License

Unlicensed

# crud-product
