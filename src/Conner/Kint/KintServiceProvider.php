<?php namespace Conner\Kint;

use Illuminate\Support\ServiceProvider;

/**
 * Copyright (C) 2015 Robert Conner
 */
class KintServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 */
	protected $defer = false;

	public function boot() {
		$this->package('rtconner/laravel-kint', 'laravel-kint');
	}
	
	public function register()
	{
		if(!$configs = \Config::get('kint')) {
			$configs = (array) \Config::get('laravel-kint');
		}
		
		foreach($configs as $key => $val) {
			if($key == 'enabled') {
				\Kint::enabled($val);
			} elseif(property_exists('\Kint', $key)) {
				\Kint::$$key = $val;
			}
		}
	}
	
}