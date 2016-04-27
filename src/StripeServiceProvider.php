<?php

/**
 * Part of the Stripe Laravel package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Stripe Laravel
 * @version    4.0.1
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2016, Cartalyst LLC
 * @link       http://cartalyst.com
 */

namespace Cartalyst\Stripe\Laravel;

use Cartalyst\Stripe\Stripe;
use Illuminate\Support\ServiceProvider;

class StripeServiceProvider extends ServiceProvider
{
    /**
     * {@inheritDoc}
     */
    public function register()
    {
        $this->registerStripe();

        $this->registerConfig();
    }

    /**
     * {@inheritDoc}
     */
    public function provides()
    {
        return [
            'stripe', 'stripe.config'
        ];
    }

    /**
     * Register the Stripe API class.
     *
     * @return void
     */
    protected function registerStripe()
    {
        $this->app->singleton('stripe', function ($app) {
            $config = $app['config']->get('services.stripe');

            $secret = isset($config['secret']) ? $config['secret'] : null;

            $version = isset($config['version']) ? $config['version'] : null;

            return new Stripe($secret, $version);
        });

        $this->app->alias('stripe', 'Cartalyst\Stripe\Stripe');
    }

    /**
     * Register the config class.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->app->singleton('stripe.config', function ($app) {
            return $app['stripe']->getConfig();
        });

        $this->app->alias('stripe.config', 'Cartalyst\Stripe\Config');

        $this->app->alias('stripe.config', 'Cartalyst\Stripe\ConfigInterface');
    }
}
