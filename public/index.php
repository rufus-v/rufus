<?php

/**
* Rufus - A PHP Microframework for web artists
*
* @package     Rufus
* @author      Drizzy <drizzyofc@gmail.com>
* @license     http://opensource.org/licenses/MIT The MIT License (MIT)
* @link        https://github.com/rufus-v/rufus
*/

/*
|--------------------------------------------------------------------------
| Autoload
|--------------------------------------------------------------------------
|
| After running "composer install", we can use the autoloader file created.
|
*/
require __DIR__.'/../vendor/autoload.php';

 /*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
*/
Rufus\Kernel\Kernel::instance()->run();