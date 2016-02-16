<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-01 13:23:51 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Pagination::__construct(), called in D:\server\apache\htdocs\cronsystem\kohana\extends\misc\classes\Pagination.php on line 20 and defined ~ D:\server\apache\htdocs\cronsystem\kohana\extends\misc\classes\Pagination.php [ 23 ] in D:\server\apache\htdocs\cronsystem\kohana\extends\misc\classes\Pagination.php:23
2016-02-01 13:23:51 --- DEBUG: #0 D:\server\apache\htdocs\cronsystem\kohana\extends\misc\classes\Pagination.php(23): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\server\apach...', 23, Array)
#1 D:\server\apache\htdocs\cronsystem\kohana\extends\misc\classes\Pagination.php(20): Pagination->__construct(1000, 10)
#2 D:\server\apache\htdocs\cronsystem\cronp\classes\Controller\Project.php(63): Pagination::factory(10, 0, 1000)
#3 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Controller.php(84): Controller_Project->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Project))
#6 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\server\apache\htdocs\cronsystem\public\index.php(124): Kohana_Request->execute()
#9 {main} in D:\server\apache\htdocs\cronsystem\kohana\extends\misc\classes\Pagination.php:23
2016-02-01 13:28:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function pageIndex() on a non-object ~ APPPATH\classes\Controller\Project.php [ 70 ] in file:line
2016-02-01 13:28:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-01 13:31:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ D:\server\apache\htdocs\cronsystem\kohana\extends\misc\classes\Pagination.php [ 54 ] in file:line
2016-02-01 13:31:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-01 13:36:25 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Pagination as array ~ APPPATH\views\project\list.php [ 56 ] in file:line
2016-02-01 13:36:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-01 13:41:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ D:\server\apache\htdocs\cronsystem\kohana\extends\misc\classes\Pagination.php [ 60 ] in file:line
2016-02-01 13:41:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-01 13:41:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ D:\server\apache\htdocs\cronsystem\kohana\extends\misc\classes\Pagination.php [ 60 ] in file:line
2016-02-01 13:41:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-01 13:45:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting ',' or ';' ~ D:\server\apache\htdocs\cronsystem\kohana\extends\misc\classes\Pagination.php [ 61 ] in file:line
2016-02-01 13:45:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-01 13:45:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting ',' or ';' ~ D:\server\apache\htdocs\cronsystem\kohana\extends\misc\classes\Pagination.php [ 61 ] in file:line
2016-02-01 13:45:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-01 13:45:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting ',' or ';' ~ D:\server\apache\htdocs\cronsystem\kohana\extends\misc\classes\Pagination.php [ 61 ] in file:line
2016-02-01 13:45:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-01 13:45:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting ',' or ';' ~ D:\server\apache\htdocs\cronsystem\kohana\extends\misc\classes\Pagination.php [ 61 ] in file:line
2016-02-01 13:45:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-01 13:50:22 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Pagination::execute(), called in D:\server\apache\htdocs\cronsystem\cronp\views\project\list.php on line 49 and defined ~ D:\server\apache\htdocs\cronsystem\kohana\extends\misc\classes\Pagination.php [ 53 ] in D:\server\apache\htdocs\cronsystem\kohana\extends\misc\classes\Pagination.php:53
2016-02-01 13:50:22 --- DEBUG: #0 D:\server\apache\htdocs\cronsystem\kohana\extends\misc\classes\Pagination.php(53): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\server\apach...', 53, Array)
#1 D:\server\apache\htdocs\cronsystem\cronp\views\project\list.php(49): Pagination->execute()
#2 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(61): include('D:\server\apach...')
#3 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\server\apach...', Array)
#4 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\server\apache\htdocs\cronsystem\cronp\views\layout\default.php(23): Kohana_View->__toString()
#6 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(61): include('D:\server\apach...')
#7 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\server\apach...', Array)
#8 D:\server\apache\htdocs\cronsystem\cronp\classes\Controller\Template.php(47): Kohana_View->render()
#9 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Project))
#12 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\server\apache\htdocs\cronsystem\public\index.php(124): Kohana_Request->execute()
#15 {main} in D:\server\apache\htdocs\cronsystem\kohana\extends\misc\classes\Pagination.php:53
2016-02-01 14:03:50 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\project\list.php [ 55 ] in file:line
2016-02-01 14:03:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-01 14:14:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Pagination::execute() ~ APPPATH\views\project\list.php [ 49 ] in file:line
2016-02-01 14:14:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-01 14:26:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: total ~ APPPATH\classes\Controller\Project.php [ 61 ] in D:\server\apache\htdocs\cronsystem\cronp\classes\Controller\Project.php:61
2016-02-01 14:26:33 --- DEBUG: #0 D:\server\apache\htdocs\cronsystem\cronp\classes\Controller\Project.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\server\apach...', 61, Array)
#1 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Controller.php(84): Controller_Project->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Project))
#4 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\apache\htdocs\cronsystem\public\index.php(124): Kohana_Request->execute()
#7 {main} in D:\server\apache\htdocs\cronsystem\cronp\classes\Controller\Project.php:61
2016-02-01 14:40:05 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '0' in 'field list' [ SELECT `0` FROM `cts_project` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\server\apache\htdocs\cronsystem\kohana\modules\database\classes\Kohana\Database\Query.php:251
2016-02-01 14:40:05 --- DEBUG: #0 D:\server\apache\htdocs\cronsystem\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `0` FROM...', false, Array)
#1 D:\server\apache\htdocs\cronsystem\cronp\classes\Dao\Project.php(36): Kohana_Database_Query->execute('cron_task')
#2 D:\server\apache\htdocs\cronsystem\cronp\classes\Model\Project.php(35): Dao_Project->countProjects()
#3 [internal function]: Model_Project->countProjects()
#4 D:\server\apache\htdocs\cronsystem\kohana\extends\model\classes\Model.php(85): ReflectionMethod->invokeArgs(Object(Model_Project), Array)
#5 D:\server\apache\htdocs\cronsystem\kohana\extends\model\classes\Model.php(68): Model->_execute()
#6 D:\server\apache\htdocs\cronsystem\cronp\classes\Controller\Project.php(61): Model->getArray()
#7 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Controller.php(84): Controller_Project->action_list()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Project))
#10 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\server\apache\htdocs\cronsystem\public\index.php(124): Kohana_Request->execute()
#13 {main} in D:\server\apache\htdocs\cronsystem\kohana\modules\database\classes\Kohana\Database\Query.php:251
2016-02-01 14:40:26 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'count(*) AS recordCount' in 'field list' [ SELECT `count(*) AS recordCount` FROM `cts_project` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\server\apache\htdocs\cronsystem\kohana\modules\database\classes\Kohana\Database\Query.php:251
2016-02-01 14:40:26 --- DEBUG: #0 D:\server\apache\htdocs\cronsystem\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `count(*...', false, Array)
#1 D:\server\apache\htdocs\cronsystem\cronp\classes\Dao\Project.php(36): Kohana_Database_Query->execute('cron_task')
#2 D:\server\apache\htdocs\cronsystem\cronp\classes\Model\Project.php(35): Dao_Project->countProjects()
#3 [internal function]: Model_Project->countProjects()
#4 D:\server\apache\htdocs\cronsystem\kohana\extends\model\classes\Model.php(85): ReflectionMethod->invokeArgs(Object(Model_Project), Array)
#5 D:\server\apache\htdocs\cronsystem\kohana\extends\model\classes\Model.php(68): Model->_execute()
#6 D:\server\apache\htdocs\cronsystem\cronp\classes\Controller\Project.php(61): Model->getArray()
#7 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Controller.php(84): Controller_Project->action_list()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Project))
#10 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\server\apache\htdocs\cronsystem\public\index.php(124): Kohana_Request->execute()
#13 {main} in D:\server\apache\htdocs\cronsystem\kohana\modules\database\classes\Kohana\Database\Query.php:251
2016-02-01 14:41:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ APPPATH\classes\Controller\Project.php [ 69 ] in file:line
2016-02-01 14:41:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-02-01 14:41:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: limit ~ APPPATH\classes\Dao\Project.php [ 53 ] in D:\server\apache\htdocs\cronsystem\cronp\classes\Dao\Project.php:53
2016-02-01 14:41:48 --- DEBUG: #0 D:\server\apache\htdocs\cronsystem\cronp\classes\Dao\Project.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\server\apach...', 53, Array)
#1 D:\server\apache\htdocs\cronsystem\cronp\classes\Model\Project.php(47): Dao_Project->getProjectsBylimit(0, 10)
#2 [internal function]: Model_Project->getProjectsBylimit(0, 10)
#3 D:\server\apache\htdocs\cronsystem\kohana\extends\model\classes\Model.php(85): ReflectionMethod->invokeArgs(Object(Model_Project), Array)
#4 D:\server\apache\htdocs\cronsystem\kohana\extends\model\classes\Model.php(63): Model->_execute()
#5 D:\server\apache\htdocs\cronsystem\cronp\classes\Controller\Project.php(71): Model->getObject()
#6 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Controller.php(84): Controller_Project->action_list()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Project))
#9 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\server\apache\htdocs\cronsystem\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\server\apache\htdocs\cronsystem\public\index.php(124): Kohana_Request->execute()
#12 {main} in D:\server\apache\htdocs\cronsystem\cronp\classes\Dao\Project.php:53