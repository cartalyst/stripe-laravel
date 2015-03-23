## Setup

### Installation

Cartalyst packages utilize [Composer](http://getcomposer.org), for more information on how to install Composer please read the [Composer Documentation](https://getcomposer.org/doc/00-intro.md).

#### Preparation

Open your `composer.json` file and add the following to the `require` array:

	"cartalyst/stripe-laravel": "1.0.*"

> **Note:** Make sure that after the required changes your `composer.json` file is valid by running `composer validate`.

#### Install the dependencies

Run Composer to install or update the new requirement.

	php composer install

or

	php composer update

