<?php

/**
 * This file contains configuration for the application.
 *
 * @package     Rufus
 * @author      Drizzy <drizzyofc@gmail.com>
 * @license     http://opensource.org/licenses/MIT The MIT License (MIT)
 * @link        https://github.com/rufus-v/rufus
 */

return [

    /**
	* Application Name
    */
    'name' => env('APP_NAME', 'Rufus'),

    /**
     * Application Environment
     */
    'env' => env('APP_ENV', 'production'),

    /**
     * Application Debug Mode
    */
    'debug' => (bool) env('APP_DEBUG', false),


    /**
	* Application URL
    */
    'url' => env('APP_URL', 'http://localhost'),

   /**
   * Application Timezone
   */
    'timezone' => 'UTC',

    /**
     * Application Locale Configuration
    */
    'locale' => 'es',

    /**
     * Service Providers
     */
    'providers' => [

        'Config' 	 => Rufus\Support\Config::class,
        'Env' 	     => Rufus\Support\Env::class,
        'Html' 		 => Rufus\Html\Html::class,
        'Form' 		 => Rufus\Html\Form::class,
        'Import' 	 => Rufus\Support\Import::class,
        'Log'        => Rufus\Log\Log::class,
        'Mail' 		 => Rufus\Mail\Mail::class,
        'Pagination' => Rufus\Pagination\Pagination::class,
        'Request'    => Rufus\Http\Request::class,
        'Response' 	 => Rufus\Http\Response::class,
        'Route' 	 => Rufus\Routes\Route::class,
        'Session' 	 => Rufus\Session\Session::class,
        'Validation' => Rufus\Validation\Validation::class,
    ],

    /**
     * aliases
     */
    'aliases' => [

        'Config'     => Rufus\Facades\Config::class,
        'Env'        => Rufus\Facades\Env::class,
        'Html' 		 => Rufus\Facades\Html::class,
        'Form' 		 => Rufus\Facades\Form::class,
        'Import'     => Rufus\Facades\Import::class,
        'Log'        => Rufus\Facades\Log::class,
        'Mail' 		 => Rufus\Facades\Mail::class,
        'Pagination' => Rufus\Facades\Pagination::class,
        'Request'    => Rufus\Facades\Request::class,
        'Response'   => Rufus\Facades\Response::class,
        'Route'      => Rufus\Facades\Route::class,
        'Session'    => Rufus\Facades\Session::class,
        'Validation' => Rufus\Facades\Validation::class,
    ],

    /**
     * Middlewares
     */
    'middlewares' => [
        'default' => [],

        'manual' => [
            'Auth' => App\Middlewares\Auth::class,
        ],
    ],
];