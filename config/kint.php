<?php

/*
|--------------------------------------------------------------------------
| Kint Configuration Options
|--------------------------------------------------------------------------
|
| See Kint documentation for full details on what each option does.
|
*/

return array(

	/*
	 * If set to false, Kint will become silent
	 */ 
	'enabled' => true, // env('APP_DEBUG'), 

	'displayCalledFrom' => true,
	
	'fileLinkFormat' => ini_get('xdebug.file_link_format'),
	
	/*
	 * This abbreviates file paths. Comment it out to display full paths on debug traces.
	 */
	'appRootDirs' => array(
		base_path()=>'ROOT'
	),
	
	'maxStrLength' => 80,
	
	'charEncodings' => array(),

	'maxLevels' => 5,

	'theme' => 'original',

	/*
	 * Allows you to use these in blade templates:
	 * @d($var); @ddd($var); @sd($var); @s($var); @dd($var)
	 */
	'blade_directives' => true,
	
);