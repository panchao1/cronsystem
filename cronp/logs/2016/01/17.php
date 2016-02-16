<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-01-17 00:58:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Template.php [ 23 ] in file:line
2016-01-17 00:58:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-17 00:58:51 --- CRITICAL: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH\classes\Model\User.php [ 9 ] in file:line
2016-01-17 00:58:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-17 01:03:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH\classes\Model\User.php [ 9 ] in file:line
2016-01-17 01:03:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-17 01:03:37 --- CRITICAL: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH\classes\Model\User.php [ 9 ] in file:line
2016-01-17 01:03:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-17 01:04:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH\classes\Model\User.php [ 9 ] in file:line
2016-01-17 01:04:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-17 01:09:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH\classes\Model\User.php [ 9 ] in file:line
2016-01-17 01:09:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-17 01:09:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH\classes\Model\User.php [ 9 ] in file:line
2016-01-17 01:09:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-17 01:09:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH\classes\Model\User.php [ 9 ] in file:line
2016-01-17 01:09:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-17 01:11:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH\classes\Model\User.php [ 9 ] in file:line
2016-01-17 01:11:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-17 01:13:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Dao' not found ~ APPPATH\classes\Model\User.php [ 9 ] in file:line
2016-01-17 01:13:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-17 05:24:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: hosr ~ APPPATH\classes\Controller\Template.php [ 25 ] in D:\server\apache\htdocs\cronsystem\cronp\classes\Controller\Template.php:25
2016-01-17 05:24:49 --- DEBUG: #0 D:\server\apache\htdocs\cronsystem\cronp\classes\Controller\Template.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\server\apach...', 25, Array)
#1 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Controller.php(69): Controller_Template->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\apache\htdocs\cronsystem\public\index.php(125): Kohana_Request->execute()
#7 {main} in D:\server\apache\htdocs\cronsystem\cronp\classes\Controller\Template.php:25