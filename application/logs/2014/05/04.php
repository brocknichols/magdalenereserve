<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-04 20:50:04 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\xampp\htdocs\magdalene\system\classes\Kohana\Cookie.php:67
2014-05-04 20:50:04 --- DEBUG: #0 C:\xampp\htdocs\magdalene\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('language', NULL)
#1 C:\xampp\htdocs\magdalene\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('language')
#2 C:\xampp\htdocs\magdalene\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\magdalene\system\classes\Kohana\Cookie.php:67