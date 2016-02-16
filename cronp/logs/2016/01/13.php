<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-01-13 04:06:00 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Cookie.php:67
2016-01-13 04:06:00 --- DEBUG: #0 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\server\apache\htdocs\cronsystem\public\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Cookie.php:67
2016-01-13 04:23:44 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'misc' at '\misc' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in D:\server\apache\htdocs\cronsystem\cronp\bootstrap.php:141
2016-01-13 04:23:44 --- DEBUG: #0 D:\server\apache\htdocs\cronsystem\cronp\bootstrap.php(141): Kohana_Core::modules(Array)
#1 D:\server\apache\htdocs\cronsystem\public\index.php(104): require('D:\server\apach...')
#2 {main} in D:\server\apache\htdocs\cronsystem\cronp\bootstrap.php:141
2016-01-13 04:24:35 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'misc' at '\misc' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in D:\server\apache\htdocs\cronsystem\cronp\bootstrap.php:141
2016-01-13 04:24:35 --- DEBUG: #0 D:\server\apache\htdocs\cronsystem\cronp\bootstrap.php(141): Kohana_Core::modules(Array)
#1 D:\server\apache\htdocs\cronsystem\public\index.php(104): require('D:\server\apach...')
#2 {main} in D:\server\apache\htdocs\cronsystem\cronp\bootstrap.php:141
2016-01-13 04:25:00 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'misc' at '\misc' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in D:\server\apache\htdocs\cronsystem\cronp\bootstrap.php:141
2016-01-13 04:25:00 --- DEBUG: #0 D:\server\apache\htdocs\cronsystem\cronp\bootstrap.php(141): Kohana_Core::modules(Array)
#1 D:\server\apache\htdocs\cronsystem\public\index.php(104): require('D:\server\apach...')
#2 {main} in D:\server\apache\htdocs\cronsystem\cronp\bootstrap.php:141