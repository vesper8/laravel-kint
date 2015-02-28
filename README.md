Seamless Laravel 5 / Kint Integration
============

[![Laravel](https://img.shields.io/badge/Laravel-5.0-orange.svg?style=flat-square)](http://laravel.com)
[![License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://tldrlegal.com/license/mit-license)

I love Kint, but it's a little hard to get it to work perfectly within Laravel. This plugin solves that.

[Laravel 5 Documentation](https://github.com/rtconner/laravel-kint/tree/laravel-5)  
[Laravel 4 Documentation](https://github.com/rtconner/laravel-kint/tree/laravel-4)

### Installation

    composer require rtconner/laravel-kint ~1.0

```php
'providers' => array(
	'Conner\Kint\KintServiceProvider',
);
```

    php artisan vendor:publish

### Usage

Use Kint as you would normally.

```php
d($var); // debug dump

ddd($var); // debug dump and die

s($var); // string print

sd($var); // string print and die
```

### Configure

    php artisan vendor:publish

Edit config/kint.php to configure Kint settings. See [Kint documentation](http://raveren.github.io/kint/) for details on configuration options.
