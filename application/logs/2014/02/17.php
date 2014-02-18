<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-17 12:14:25 --- CRITICAL: View_Exception [ 0 ]: The requested view errors/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\htdocs\kohana\www\system\classes\Kohana\View.php:137
2014-02-17 12:14:25 --- DEBUG: #0 C:\htdocs\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('errors/404')
#1 C:\htdocs\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('errors/404', NULL)
#2 C:\htdocs\kohana\www\system\classes\HTTP\Exception\404.php(9): Kohana_View::factory('errors/404')
#3 C:\htdocs\kohana\www\system\classes\Kohana\Request\Client\Internal.php(114): HTTP_Exception_404->get_response()
#4 C:\htdocs\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\htdocs\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\htdocs\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\htdocs\kohana\www\system\classes\Kohana\View.php:137