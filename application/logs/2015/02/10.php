<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-10 01:00:41 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in /var/www/www.ged.local2/gsn/system/classes/Kohana/Cookie.php:67
2015-02-10 01:00:41 --- DEBUG: #0 /var/www/www.ged.local2/gsn/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_ga', NULL)
#1 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_ga')
#2 /var/www/www.ged.local2/gsn/www/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/www.ged.local2/gsn/system/classes/Kohana/Cookie.php:67
2015-02-10 09:24:15 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Welcome.php [ 8 ] in /var/www/www.ged.local2/gsn/application/classes/Controller/Welcome.php:8
2015-02-10 09:24:15 --- DEBUG: #0 /var/www/www.ged.local2/gsn/application/classes/Controller/Welcome.php(8): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/www.ge...', 8, Array)
#1 /var/www/www.ged.local2/gsn/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.ged.local2/gsn/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/www.ged.local2/gsn/application/classes/Controller/Welcome.php:8
2015-02-10 09:24:46 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Welcome.php [ 8 ] in /var/www/www.ged.local2/gsn/application/classes/Controller/Welcome.php:8
2015-02-10 09:24:46 --- DEBUG: #0 /var/www/www.ged.local2/gsn/application/classes/Controller/Welcome.php(8): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/www.ge...', 8, Array)
#1 /var/www/www.ged.local2/gsn/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.ged.local2/gsn/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/www.ged.local2/gsn/application/classes/Controller/Welcome.php:8
2015-02-10 09:25:15 --- EMERGENCY: View_Exception [ 0 ]: The requested view layouts/main could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/www.ged.local2/gsn/system/classes/Kohana/View.php:145
2015-02-10 09:25:15 --- DEBUG: #0 /var/www/www.ged.local2/gsn/system/classes/Kohana/View.php(145): Kohana_View->set_filename('layouts/main')
#1 /var/www/www.ged.local2/gsn/system/classes/Kohana/View.php(30): Kohana_View->__construct('layouts/main', NULL)
#2 /var/www/www.ged.local2/gsn/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('layouts/main')
#3 /var/www/www.ged.local2/gsn/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.ged.local2/gsn/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/www.ged.local2/gsn/system/classes/Kohana/View.php:145
2015-02-10 14:30:51 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-02-10 14:30:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', '/var/www/www.ge...', 423, Array)
#1 /var/www/www.ged.local2/gsn/system/classes/Kohana/Route.php(423): preg_match('', 'hardware', NULL)
#2 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 /var/www/www.ged.local2/gsn/www/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-02-10 14:30:52 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-02-10 14:30:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', '/var/www/www.ge...', 423, Array)
#1 /var/www/www.ged.local2/gsn/system/classes/Kohana/Route.php(423): preg_match('', 'hardware', NULL)
#2 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 /var/www/www.ged.local2/gsn/www/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-02-10 15:03:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/Controller/Index.php [ 15 ] in /var/www/www.ged.local2/gsn/application/classes/Controller/Index.php:15
2015-02-10 15:03:35 --- DEBUG: #0 /var/www/www.ged.local2/gsn/application/classes/Controller/Index.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/www.ge...', 15, Array)
#1 /var/www/www.ged.local2/gsn/system/classes/Kohana/Controller.php(84): Controller_Index->action_hardware()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.ged.local2/gsn/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.ged.local2/gsn/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/www.ged.local2/gsn/application/classes/Controller/Index.php:15