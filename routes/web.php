<?php

/**
 * Rufus - A PHP Framework for web artists
 *
 * @package     Rufus
 * @author      Drizzy <drizzyofc@gmail.com>
 * @license     http://opensource.org/licenses/MIT The MIT License (MIT)
 * @link        https://github.com/rufus-v/rufus
 */

use Rufus\Routes\Route;


Route::get('/', function () {
    return view('welcome');
});

//Pagina no en contrada
Route::error(function(){return view('Error/404');});