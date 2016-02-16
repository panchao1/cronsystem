<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-01-27 21:41:14 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\project\list.php [ 29 ] in D:\server\apache\htdocs\cronsystem\cronp\views\project\list.php:29
2016-01-27 21:41:14 --- DEBUG: #0 D:\server\apache\htdocs\cronsystem\cronp\views\project\list.php(29): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\server\apach...', 29, Array)
#1 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(61): include('D:\server\apach...')
#2 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\server\apach...', Array)
#3 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\server\apache\htdocs\cronsystem\cronp\views\layout\default.php(23): Kohana_View->__toString()
#5 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(61): include('D:\server\apach...')
#6 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\server\apach...', Array)
#7 D:\server\apache\htdocs\cronsystem\cronp\classes\Controller\Template.php(47): Kohana_View->render()
#8 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Project))
#11 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\server\apache\htdocs\cronsystem\public\index.php(124): Kohana_Request->execute()
#14 {main} in D:\server\apache\htdocs\cronsystem\cronp\views\project\list.php:29
2016-01-27 21:42:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Project.php [ 64 ] in file:line
2016-01-27 21:42:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-27 21:42:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: projects ~ APPPATH\views\project\list.php [ 28 ] in D:\server\apache\htdocs\cronsystem\cronp\views\project\list.php:28
2016-01-27 21:42:13 --- DEBUG: #0 D:\server\apache\htdocs\cronsystem\cronp\views\project\list.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\server\apach...', 28, Array)
#1 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(61): include('D:\server\apach...')
#2 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\server\apach...', Array)
#3 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\server\apache\htdocs\cronsystem\cronp\views\layout\default.php(23): Kohana_View->__toString()
#5 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(61): include('D:\server\apach...')
#6 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\server\apach...', Array)
#7 D:\server\apache\htdocs\cronsystem\cronp\classes\Controller\Template.php(47): Kohana_View->render()
#8 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Project))
#11 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\server\apache\htdocs\cronsystem\public\index.php(124): Kohana_Request->execute()
#14 {main} in D:\server\apache\htdocs\cronsystem\cronp\views\project\list.php:28
2016-01-27 21:42:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: projects ~ APPPATH\views\project\list.php [ 28 ] in D:\server\apache\htdocs\cronsystem\cronp\views\project\list.php:28
2016-01-27 21:42:24 --- DEBUG: #0 D:\server\apache\htdocs\cronsystem\cronp\views\project\list.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\server\apach...', 28, Array)
#1 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(61): include('D:\server\apach...')
#2 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\server\apach...', Array)
#3 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\server\apache\htdocs\cronsystem\cronp\views\layout\default.php(23): Kohana_View->__toString()
#5 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(61): include('D:\server\apach...')
#6 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\server\apach...', Array)
#7 D:\server\apache\htdocs\cronsystem\cronp\classes\Controller\Template.php(47): Kohana_View->render()
#8 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Project))
#11 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\server\apache\htdocs\cronsystem\public\index.php(124): Kohana_Request->execute()
#14 {main} in D:\server\apache\htdocs\cronsystem\cronp\views\project\list.php:28
2016-01-27 21:42:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: projects ~ APPPATH\views\project\list.php [ 28 ] in D:\server\apache\htdocs\cronsystem\cronp\views\project\list.php:28
2016-01-27 21:42:24 --- DEBUG: #0 D:\server\apache\htdocs\cronsystem\cronp\views\project\list.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\server\apach...', 28, Array)
#1 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(61): include('D:\server\apach...')
#2 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\server\apach...', Array)
#3 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\server\apache\htdocs\cronsystem\cronp\views\layout\default.php(23): Kohana_View->__toString()
#5 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(61): include('D:\server\apach...')
#6 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\server\apach...', Array)
#7 D:\server\apache\htdocs\cronsystem\cronp\classes\Controller\Template.php(47): Kohana_View->render()
#8 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Project))
#11 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\server\apache\htdocs\cronsystem\public\index.php(124): Kohana_Request->execute()
#14 {main} in D:\server\apache\htdocs\cronsystem\cronp\views\project\list.php:28
2016-01-27 21:42:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\Project.php [ 63 ] in file:line
2016-01-27 21:42:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-27 21:58:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Controller\Project.php [ 75 ] in file:line
2016-01-27 21:58:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-27 21:58:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Controller\Project.php [ 75 ] in file:line
2016-01-27 21:58:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-01-27 22:00:17 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\Project.php [ 77 ] in file:line
2016-01-27 22:00:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'D:\server\apach...', 77, Array)
#1 D:\server\apache\htdocs\cronsystem\cronp\classes\Controller\Project.php(77): json_decode(Array)
#2 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Controller.php(84): Controller_Project->action_ajaxSearch()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Project))
#5 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\server\apache\htdocs\cronsystem\public\index.php(124): Kohana_Request->execute()
#8 {main} in file:line