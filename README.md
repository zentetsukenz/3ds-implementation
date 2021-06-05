# 3-D Secure Implementation

This is an unofficial example of Omise 3-D Secure implementation using [Omise-PHP Library](https://github.com/omise/omise-php).

## Setup

This project use [Composer](https://getcomposer.org/) as a dependency manager.

Composer can be installed via [Composer website](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)
as a standalone executable.

Or via [asdf PHP](https://github.com/asdf-community/asdf-php), which also
install Composer. Please note that asdf PHP requires [asdf](https://asdf-vm.com/#/core-manage-asdf) to run as a plugin manager.

### Install dependencies

Run `composer install` to install dependencies described in `composer.json`. There should be a vendor folder which contain `omise/omise-php` library.

## Configuration

### .env

Create `.env` file from `.env.example` then set you Omise public key, secret key and return URI of your website.

## Usage

Start your preferred web server and open index.html on your browser.

### With Docker

Run `docker-compose up` to start the application and open http://localhost:8080 on your browser to start testing.
