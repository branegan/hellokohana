<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-11 07:19:45 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\htdocs\kohana\www\system\classes\Kohana\Cookie.php:67
2014-02-11 07:19:45 --- DEBUG: #0 C:\htdocs\kohana\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('phpMyAdmin', NULL)
#1 C:\htdocs\kohana\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('phpMyAdmin')
#2 C:\htdocs\kohana\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\htdocs\kohana\www\system\classes\Kohana\Cookie.php:67