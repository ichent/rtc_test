<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-11 06:13:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: producers ~ APPPATH/views/index/hardware.php [ 5 ] in /var/www/www.ged.local2/gsn/application/views/index/hardware.php:5
2015-02-11 06:13:51 --- DEBUG: #0 /var/www/www.ged.local2/gsn/application/views/index/hardware.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/www.ge...', 5, Array)
#1 /var/www/www.ged.local2/gsn/system/classes/Kohana/View.php(62): include('/var/www/www.ge...')
#2 /var/www/www.ged.local2/gsn/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/www.ge...', Array)
#3 /var/www/www.ged.local2/gsn/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/www.ged.local2/gsn/application/views/layouts/main.php(14): Kohana_View->__toString()
#5 /var/www/www.ged.local2/gsn/system/classes/Kohana/View.php(62): include('/var/www/www.ge...')
#6 /var/www/www.ged.local2/gsn/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/www.ge...', Array)
#7 /var/www/www.ged.local2/gsn/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/www.ged.local2/gsn/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/www.ged.local2/gsn/www/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/www.ged.local2/gsn/application/views/index/hardware.php:5
2015-02-11 06:39:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/views/index/hardware.php [ 6 ] in /var/www/www.ged.local2/gsn/application/views/index/hardware.php:6
2015-02-11 06:39:41 --- DEBUG: #0 /var/www/www.ged.local2/gsn/application/views/index/hardware.php(6): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/www.ge...', 6, Array)
#1 /var/www/www.ged.local2/gsn/system/classes/Kohana/View.php(62): include('/var/www/www.ge...')
#2 /var/www/www.ged.local2/gsn/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/www.ge...', Array)
#3 /var/www/www.ged.local2/gsn/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/www.ged.local2/gsn/application/views/layouts/main.php(14): Kohana_View->__toString()
#5 /var/www/www.ged.local2/gsn/system/classes/Kohana/View.php(62): include('/var/www/www.ge...')
#6 /var/www/www.ged.local2/gsn/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/www.ge...', Array)
#7 /var/www/www.ged.local2/gsn/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/www.ged.local2/gsn/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/www.ged.local2/gsn/www/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/www.ged.local2/gsn/application/views/index/hardware.php:6