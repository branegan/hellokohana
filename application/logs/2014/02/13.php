<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-13 10:17:03 --- CRITICAL: View_Exception [ 0 ]: The requested view mainview could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\htdocs\kohana\www\system\classes\Kohana\View.php:137
2014-02-13 10:17:03 --- DEBUG: #0 C:\htdocs\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('mainview')
#1 C:\htdocs\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('mainview', NULL)
#2 C:\htdocs\kohana\www\application\classes\Controller\Main.php(7): Kohana_View::factory('mainview')
#3 C:\htdocs\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\htdocs\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\htdocs\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\htdocs\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\htdocs\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\htdocs\kohana\www\system\classes\Kohana\View.php:137
2014-02-13 10:17:32 --- CRITICAL: View_Exception [ 0 ]: The requested view headerview could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\htdocs\kohana\www\system\classes\Kohana\View.php:137
2014-02-13 10:17:32 --- DEBUG: #0 C:\htdocs\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('headerview')
#1 C:\htdocs\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('headerview', NULL)
#2 C:\htdocs\kohana\www\application\classes\Controller\Main.php(7): Kohana_View::factory('headerview')
#3 C:\htdocs\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\htdocs\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\htdocs\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\htdocs\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\htdocs\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\htdocs\kohana\www\system\classes\Kohana\View.php:137
2014-02-13 10:17:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting '(' ~ APPPATH\views\header.php [ 21 ] in file:line
2014-02-13 10:17:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-13 18:39:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Main.php [ 7 ] in file:line
2014-02-13 18:39:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-13 18:46:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: headerview ~ APPPATH\classes\Controller\Main.php [ 7 ] in C:\htdocs\kohana\www\application\classes\Controller\Main.php:7
2014-02-13 18:46:57 --- DEBUG: #0 C:\htdocs\kohana\www\application\classes\Controller\Main.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\htdocs\kohan...', 7, Array)
#1 C:\htdocs\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\htdocs\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\htdocs\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\htdocs\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\htdocs\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\htdocs\kohana\www\application\classes\Controller\Main.php:7