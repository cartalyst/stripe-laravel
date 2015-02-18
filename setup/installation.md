## Installation

Cartalyst packages utilize [Composer](http://getcomposer.org), for more information on how to install Composer please read the [Composer Documentation](https://getcomposer.org/doc/00-intro.md).

### Preparation

Open your `composer.json` file and add the following to the `require` array:

	"cartalyst/stripe-laravel": "1.0.*"

> **Note:** Make sure that after the required changes your `composer.json` file is valid by running `composer validate`.

### Install the dependencies

Run Composer to install or update the new requirement.

	php composer install

or

	php composer update

Now you are able to require the `vendor/autoload.php` file to autoload the package.

### Set the Service Provider and Facade alias

The Cart package has optional support for Laravel 4 and it comes bundled with a Service Provider and a Facade for easy integration.

After installing the package, open your Laravel config file located at `app/config/app.php` and add the following lines.

In the `$providers` array add the following service provider for this package.

    'Cartalyst\Stripe\Laravel\StripeServiceProvider',

In the `$aliases` array add the following facade for this package.

    'Stripe' => 'Cartalyst\Stripe\Laravel\Facades\Stripe',

### Set the Api Key

Now you need to setup the Stripe API key, to do this open or create the `app/config/services.php` file, and add or update the `'stripe'` array:

```php
<?php

return [

    'stripe' => [
        'secret' => 'your-stripe-key-here',
    ],

];
```

### Set the Api Version (optional)

This step is not necessary, but in case you need to use a previous version of Stripe you can do same process as above but create a `'version'` entry:

```php
<?php

return [

    'stripe' => [
        'secret'  => 'your-stripe-key-here',
        'version' => '2015-01-11',
    ],

];
```
