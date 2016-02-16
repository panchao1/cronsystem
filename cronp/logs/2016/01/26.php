<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-01-26 01:09:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Dao::factory() ~ APPPATH\classes\Model\Project.php [ 27 ] in file:line
2016-01-26 01:09:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-26 01:15:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Dao::factory() ~ APPPATH\classes\Model\Project.php [ 27 ] in file:line
2016-01-26 01:15:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-26 01:22:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Dao::factory() ~ APPPATH\classes\Model\Project.php [ 27 ] in file:line
2016-01-26 01:22:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-26 01:22:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Dao::factory() ~ APPPATH\classes\Model\Project.php [ 27 ] in file:line
2016-01-26 01:22:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-26 01:28:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Dao::factory() ~ APPPATH\classes\Model\Project.php [ 27 ] in file:line
2016-01-26 01:28:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-26 03:09:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Dao\Project.php [ 36 ] in file:line
2016-01-26 03:09:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-26 03:10:11 --- CRITICAL: ErrorException [ 4096 ]: Object of class Model_Project could not be converted to string ~ APPPATH\views\project\list.php [ 34 ] in D:\server\apache\htdocs\cronsystem\cronp\views\project\list.php:34
2016-01-26 03:10:11 --- DEBUG: #0 D:\server\apache\htdocs\cronsystem\cronp\views\project\list.php(34): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\server\apach...', 34, Array)
#1 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(61): include('D:\server\apach...')
#2 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\server\apach...', Array)
#3 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\server\apache\htdocs\cronsystem\cronp\views\layout\default.php(20): Kohana_View->__toString()
#5 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(61): include('D:\server\apach...')
#6 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\server\apach...', Array)
#7 D:\server\apache\htdocs\cronsystem\cronp\classes\Controller\Template.php(47): Kohana_View->render()
#8 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Project))
#11 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\server\apache\htdocs\cronsystem\public\index.php(124): Kohana_Request->execute()
#14 {main} in D:\server\apache\htdocs\cronsystem\cronp\views\project\list.php:34