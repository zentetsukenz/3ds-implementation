# Omise-PHP Example

This is an unofficial example for implementing [Omise-PHP Library](https://github.com/omise/omise-php).

## Installation

Run `composer install` to install all dependencies.

## Configuration

### .env-example

Rename `.env-example` to `.env` and set your Omise public and secret keys.

```
OMISE_PUBLIC_KEY=pkey_test_
OMISE_SECRET_KEY=skey_test_
```

### checkout.php

Set `return_uri`.

```php
22: 'return_uri'	=> 'http://localhost:8080/complete.php/orderid=' . $order_id,
```

## Usage

Start your web server and open index.php on your browser.

### With Docker

Run `docker-compose up` to start the application and open http://localhost:8080 on your browser to start testing.
