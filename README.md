# Laravel Env Example

[![Latest Version on Packagist](https://img.shields.io/packagist/v/simonbarrettact/laravel-env-example.svg?style=flat-square)](https://packagist.org/packages/simonbarrettact/laravel-env-example)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/simonbarrettact/laravel-env-example/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/simonbarrettact/laravel-env-example/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/simonbarrettact/laravel-env-example/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/simonbarrettact/laravel-env-example/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/simonbarrettact/laravel-env-example.svg?style=flat-square)](https://packagist.org/packages/simonbarrettact/laravel-env-example)

Sync .env.example to .env

## Installation

You can install the package via composer:

```bash
composer require simonbarrettact/laravel-env-example
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-env-example-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-env-example-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-env-example-views"
```

## Usage

```php
$laravelEnvExample = new Simon Barrett\LaravelEnvExample();
echo $laravelEnvExample->echoPhrase('Hello, Simon Barrett!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Simon Barrett](https://github.com/SimonBarrettACT)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
