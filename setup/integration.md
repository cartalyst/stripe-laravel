### Integration

Integration on Laravel 8 is straightforward.

#### Set the Service Provider and Facade alias

After installing the package, open your Laravel config file located at `config/app.php` and add the following lines.

In the `$providers` array add the following service provider for this package.

    Cartalyst\Stripe\Laravel\StripeServiceProvider::class,

In the `$aliases` array add the following facade for this package.

    'Stripe' => Cartalyst\Stripe\Laravel\Facades\Stripe::class,

#### Set the Api Key

Now you need to setup the Stripe API key, to do this open or create the `config/services.php` file, and add or update the `'stripe'` array:

```php
<?php

return [

    'stripe' => [
        'secret' => 'your-stripe-key-here',
    ],

];
```

#### Set the Api Version (optional)

This step is not necessary, but in case you need to use a previous version of Stripe you can do same process as above and add a `'version'` key on the array:

```php
<?php

return [

    'stripe' => [
        'secret'  => 'your-stripe-key-here',
        'version' => '2019-02-19',
    ],

];
```
