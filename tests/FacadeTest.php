<?php

/*
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
 * @version    10.0.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2019, Cartalyst LLC
 * @link       http://cartalyst.com
 */

namespace Cartalyst\Stripe\Tests;

use ReflectionClass;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    /** @test */
    public function it_can_test_it_is_a_facade()
    {
        $facade = new ReflectionClass('Illuminate\Support\Facades\Facade');

        $reflection = new ReflectionClass('Cartalyst\Stripe\Laravel\Facades\Stripe');

        $this->assertTrue($reflection->isSubclassOf($facade));
    }

    /** @test */
    public function it_can_test_it_is_a_facade_accessor()
    {
        $reflection = new ReflectionClass('Cartalyst\Stripe\Laravel\Facades\Stripe');

        $method = $reflection->getMethod('getFacadeAccessor');
        $method->setAccessible(true);

        $this->assertSame('stripe', $method->invoke(null));
    }
}
