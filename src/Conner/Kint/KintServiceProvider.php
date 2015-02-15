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

	public function register()
	{
		$this->publishes([
			__DIR__.'/../../../config/kint.php' => config_path('kint.php'),
		]);
		
		$configs = (array) config('kint');

		foreach($configs as $key => $val) {
			if($key == 'enabled') {
				\Kint::enabled($val);
			} elseif(property_exists('\Kint', $key)) {
				\Kint::$$key = $val;
			}
		}
	}
	
}