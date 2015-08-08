Seamless Laravel 5 / Kint Integration
============

[![Laravel](https://img.shields.io/badge/Laravel-5.0-orange.svg?style=flat-square)](http://laravel.com)
[![License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://tldrlegal.com/license/mit-license)

I love Kint, but it's a little hard to get it to work perfectly within Laravel. This plugin solves that, and adds some new features as well.

[Laravel 5 Documentation](https://github.com/rtconner/laravel-kint/tree/laravel-5)  
[Laravel 4 Documentation](https://github.com/rtconner/laravel-kint/tree/laravel-4)

### Installation

    composer require rtconner/laravel-kint "~1.0"

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

There is an also an added feature to allow you to easily call dump variables from within *blade templates*.
Notice no semi-colon at the end, and must be on their own line of code.

```
@d($var)

@ddd($var)

@sd($var)

@s($var)
```

### Configure

To enable configuration first create the `config/kint.php` file in your app.

    php artisan vendor:publish

[See config/tagging.php](config/tagging.php) for configuration options.

See [Kint documentation](http://raveren.github.io/kint/) for details on configuration options.


### How Do I Override Laravel's dd() method?

There is no clean way. You will have to edit `public/index.php` file in your app. Place the following code directly after 
`require __DIR__.'/../bootstrap/autoload.php';`

```php
/**
 * Override Laravel's built-in dd() method. Instead call Kint::dump()
 * 
 * @return string
 */
function dd()
{
    $_ = func_get_args();
    call_user_func_array( array( 'Kint', 'dump' ), $_ );
    die;
}
```

#### Credits

 - Robert Conner - http://smartersoftware.net

Copyright 2015 Robert Conner, You may use this code under The MIT License (MIT)