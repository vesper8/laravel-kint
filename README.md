Seamless Laravel / Kint Integration
============

I love Kint, but it's a little hard to get it to work perfectly within Laravel. This plugin solves that.

### Installation

    composer require rtconner/laravel-kint dev-master

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