<?php

/**
* This file contains configuration for the mail.
*
* @package     Rufus
* @author      Drizzy <drizzyofc@gmail.com>
* @license     http://opensource.org/licenses/MIT The MIT License (MIT)
* @link        https://github.com/rufus-v/rufus
*/

return  [
    
  /*
  |--------------------------------------------------------------------------
  | PHPMailer Configurations
  |--------------------------------------------------------------------------
  */
  'SMTPDebug'     => 0,
  'host'          => env('MAIL_HOST', 'smtp.mailgun.org'),
  'SMTPAuth'      => true,
  'username'      => env('MAIL_USERNAME'),
  'password'      => env('MAIL_PASSWORD'),
  'encryption'    => env('MAIL_ENCRYPTION', 'tls'),
  'port'          => env('MAIL_PORT', 587),
  'charset'       => 'UTF-8',
  'language'      => 'es', '/optional/path/to/language/directory/',

  /*
  |--------------------------------------------------------------------------
  | Global "From" Address
  |--------------------------------------------------------------------------
  |
  */
  'from' => [
    'address'  => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
    'name'     => env('MAIL_FROM_NAME', 'Example'),
    'reply_To' => env('MAIL_REPLY_TO', 'no-reply@example.com'),
  ],

];