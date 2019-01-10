<?php

/*
|--------------------------------------------------------------------------
| Kint Configuration Options
|--------------------------------------------------------------------------
|
| See Kint documentation for full details on what each option does.
|
*/

return [
    /*
     * If set to false, Kint will become silent
     */
    'enabled_mode' => true, // I suggest replacing true with env('APP_DEBUG'),

    'display_called_from' => true,

    'file_link_format' => ini_get('xdebug.file_link_format'),

    /*
     * The file paths displayed within debug traces
    */
    'app_root_dirs' => [
        base_path() => '.', // just display a period at application root
        // base_path()=>base_path(), // display the full path
    ],

    'max_depth' => 5,

    'expanded' => false,

    'cli_detection' => true,

    'cliColors' => true,
];
