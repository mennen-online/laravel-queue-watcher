# Automatically restart Queue when local PHP files change

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mennen-online/laravel-queue-watcher.svg?style=flat-square)](https://packagist.org/packages/mennen-online/laravel-queue-watcher)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/mennen-online/laravel-queue-watcher/run-tests?label=tests)](https://github.com/mennen-online/laravel-queue-watcher/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/mennen-online/laravel-queue-watcher/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/mennen-online/laravel-queue-watcher/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mennen-online/laravel-queue-watcher.svg?style=flat-square)](https://packagist.org/packages/mennen-online/laravel-queue-watcher)

Inspired by spatie/laravel-horizon-watcher, this package contains Artisan Command `queue:watch` that will start the default Queue worker and automatically restart it
when any PHP file is created, updated or deleted.

Also you can provide the `--queue=` option to define another queue than default to be watched.

This command is meant to be used in local environment.

## Installation

You can install the package via composer:

```bash
composer require mennen-online/laravel-queue-watcher --dev
```

This is the contents of the published config file:

```php
return [
    /*
     * Laravel Queue will be restarted when any PHP file inside these directories
     * get created, updated or deleted. You can also specify other kinds
     * of files here.
     */
    'paths' => [
        app_path(),
        config_path(),
        database_path(),
        resource_path('views'),
        base_path('.env'),
        base_path('composer.lock'),
    ],

    /*
     * This command will be executed to start Laravel Queue.
     */
    'command' => 'php artisan queue:work',
];

```

## Usage

Run `php artisan queue:watch` to start default queue. When a PHP file in your project gets created, updated or deleted, Queue will automatically restart.

Run `php artisan queue:watch --queue=another_queue` to start another_queue and restart it automatically.
## Testing

```bash
composer test
```

## Credits

- [Freek Van der Herten](https://github.com/freekmurze) for the inspiration for this Package

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
