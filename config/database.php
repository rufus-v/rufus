<?php

/**
* This file contains configuration for the Database.
*
* @package     Rufus
* @author      Drizzy <drizzyofc@gmail.com>
* @license     http://opensource.org/licenses/MIT The MIT License (MIT)
* @link        https://github.com/rufus-v/rufus
*/

return  [

  /**
  * Access configuration to the database.
  */
  'driver'       => env('DB_DRIVER', 'mysql'),
  'host'         => env('DB_HOST', '127.0.0.1'),
  'database'     => env('DB_DATABASE', 'forge'),
  'username'     => env('DB_USERNAME', 'forge'),
  'password'     => env('DB_PASSWORD', ''),
  'port'         => env('DB_PORT', '3306' ),
  'unix_socket'  => env('DB_SOCKET', ''),
  'charset'      => 'utf8',
  'collation'    => 'utf8_unicode_ci',
  'prefix'       => '',
];