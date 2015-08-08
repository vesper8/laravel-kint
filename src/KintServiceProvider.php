<?php namespace Conner\Kint;

use Illuminate\Support\ServiceProvider;
use Blade;
use Kint;

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
			__DIR__.'/../config/kint.php' => config_path('kint.php'),
		]);
		
		$this->registerConfigs();
		
		$this->registerBladeDirectives();
	}
	
	protected function registerConfigs()
	{
		$configs = (array) config('kint');
		
		foreach($configs as $key => $val) {
			if($key == 'enabled') {
				Kint::enabled($val);
			} elseif(property_exists('Kint', $key)) {
				Kint::$$key = $val;
			}
		}
	}
	
	protected function registerBladeDirectives()
	{
		if(config('kint.blade_directives')) {
			$functions = Kint::$aliases['functions'];
			
			foreach($functions as $function) {
				Blade::directive($function, function($variable) use ($function) {
					return "<?php echo $function($variable); ?>";
				});
			}
		}
	}
	
}