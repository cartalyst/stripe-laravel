<?php
// Return stripe keys from env.
return array(
    'stripe_keys' => array(
        'key' => env('STRIPE_KEY', env('STRIPE_KEY')),
        'secret' => env('STRIPE_SECRET', env('STRIPE_SECRET')),
        'webhook_secret' => env('STRIPE_WEBHOOK_SECRET', env('STRIPE_WEBHOOK_SECRET'))
    )
);
