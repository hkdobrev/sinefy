<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-19 02:18:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Movies/Movies/web was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-19 02:18:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Movies/Movies/web was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-19 02:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Movies/Movies/web was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-19 02:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Movies/Movies/web was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-19 02:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Movies/Movies/web was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-19 02:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Movies/Movies/web was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-19 02:37:45 --- ERROR: Exception [ 0 ]: Facebook needs the CURL PHP extension. ~ APPPATH\vendor\facebook-php-sdk\base_facebook.php [ 19 ]
2012-05-19 02:37:45 --- STRACE: Exception [ 0 ]: Facebook needs the CURL PHP extension. ~ APPPATH\vendor\facebook-php-sdk\base_facebook.php [ 19 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\vendor\facebook-php-sdk\facebook.php(18): require_once()
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\core.php(792): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\Movies\Movies\application\classes\auth\facebook.php(31): Kohana_Core::load('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\Movies\Movies\application\classes\auth\facebook.php(44): Auth_Facebook->facebook()
#4 C:\xampp\htdocs\Movies\Movies\application\classes\auth\facebook.php(17): Auth_Facebook->get_user_from_facebook()
#5 C:\xampp\htdocs\Movies\Movies\application\classes\controller\layout.php(30): Auth_Facebook->get_user()
#6 [internal function]: Controller_Layout->before()
#7 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#11 {main}
2012-05-19 02:53:05 --- ERROR: View_Exception [ 0 ]: The requested view foursquare/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-05-19 02:53:05 --- STRACE: View_Exception [ 0 ]: The requested view foursquare/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(137): Kohana_View->set_filename('foursquare/inde...')
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(30): Kohana_View->__construct('foursquare/inde...', Array)
#2 C:\xampp\htdocs\Movies\Movies\application\classes\controller\layout.php(41): Kohana_View::factory('foursquare/inde...', Array)
#3 [internal function]: Controller_Layout->after()
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Foursquare))
#5 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 02:53:09 --- ERROR: View_Exception [ 0 ]: The requested view foursquare/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-05-19 02:53:09 --- STRACE: View_Exception [ 0 ]: The requested view foursquare/index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(137): Kohana_View->set_filename('foursquare/inde...')
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(30): Kohana_View->__construct('foursquare/inde...', Array)
#2 C:\xampp\htdocs\Movies\Movies\application\classes\controller\layout.php(41): Kohana_View::factory('foursquare/inde...', Array)
#3 [internal function]: Controller_Layout->after()
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Foursquare))
#5 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 03:02:12 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 31 ]
2012-05-19 03:02:12 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 31 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(31): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 31, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 03:20:12 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH\classes\controller\foursquare.php [ 37 ]
2012-05-19 03:20:12 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH\classes\controller\foursquare.php [ 37 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 37, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 03:26:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: foursquare/foursquare/index/42.698813/23.3285424 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-19 03:26:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: foursquare/foursquare/index/42.698813/23.3285424 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 03:26:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: foursquare/foursquare/index/42.698813/23.3285424 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-19 03:26:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: foursquare/foursquare/index/42.698813/23.3285424 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 03:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL foursquare/foursquare/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-05-19 03:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL foursquare/foursquare/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-19 03:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL foursquare/foursquare/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-05-19 03:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL foursquare/foursquare/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-19 04:13:36 --- ERROR: ErrorException [ 8 ]: Undefined index: latitude ~ APPPATH\views\foursquare\index.php [ 71 ]
2012-05-19 04:13:36 --- STRACE: ErrorException [ 8 ]: Undefined index: latitude ~ APPPATH\views\foursquare\index.php [ 71 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\views\foursquare\index.php(71): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 71, Array)
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\Movies\Movies\application\views\layout.php(42): Kohana_View->__toString()
#5 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\Movies\Movies\application\classes\controller\layout.php(62): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Layout->after()
#10 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Foursquare))
#11 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#14 {main}
2012-05-19 04:22:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Foursquare::etPositionByHtml() ~ APPPATH\classes\controller\foursquare.php [ 18 ]
2012-05-19 04:22:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Foursquare::etPositionByHtml() ~ APPPATH\classes\controller\foursquare.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-19 04:23:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Foursquare::getPositionByHtml() ~ APPPATH\classes\controller\foursquare.php [ 18 ]
2012-05-19 04:23:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Foursquare::getPositionByHtml() ~ APPPATH\classes\controller\foursquare.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-19 04:29:20 --- ERROR: ErrorException [ 8 ]: Undefined index: position ~ APPPATH\classes\controller\foursquare.php [ 76 ]
2012-05-19 04:29:20 --- STRACE: ErrorException [ 8 ]: Undefined index: position ~ APPPATH\classes\controller\foursquare.php [ 76 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(76): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 76, Array)
#1 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(18): Controller_Foursquare->setPositionByHtml('Sofia, BG')
#2 [internal function]: Controller_Foursquare->action_index()
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-19 04:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-19 04:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 04:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-19 04:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 04:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-19 04:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 04:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-19 04:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 04:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-19 04:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 04:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL foursquare/setPositionByHtml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-05-19 04:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL foursquare/setPositionByHtml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-19 04:33:21 --- ERROR: View_Exception [ 0 ]: The requested view foursquare/setPosition could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-05-19 04:33:21 --- STRACE: View_Exception [ 0 ]: The requested view foursquare/setPosition could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(137): Kohana_View->set_filename('foursquare/setP...')
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(30): Kohana_View->__construct('foursquare/setP...', Array)
#2 C:\xampp\htdocs\Movies\Movies\application\classes\controller\layout.php(41): Kohana_View::factory('foursquare/setP...', Array)
#3 [internal function]: Controller_Layout->after()
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Foursquare))
#5 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 04:33:30 --- ERROR: View_Exception [ 0 ]: The requested view foursquare/setPosition could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-05-19 04:33:30 --- STRACE: View_Exception [ 0 ]: The requested view foursquare/setPosition could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(137): Kohana_View->set_filename('foursquare/setP...')
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(30): Kohana_View->__construct('foursquare/setP...', Array)
#2 C:\xampp\htdocs\Movies\Movies\application\classes\controller\layout.php(41): Kohana_View::factory('foursquare/setP...', Array)
#3 [internal function]: Controller_Layout->after()
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Foursquare))
#5 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 04:35:07 --- ERROR: View_Exception [ 0 ]: The requested view foursquare/setPosition could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-05-19 04:35:07 --- STRACE: View_Exception [ 0 ]: The requested view foursquare/setPosition could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(137): Kohana_View->set_filename('foursquare/setP...')
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(30): Kohana_View->__construct('foursquare/setP...', Array)
#2 C:\xampp\htdocs\Movies\Movies\application\classes\controller\layout.php(41): Kohana_View::factory('foursquare/setP...', Array)
#3 [internal function]: Controller_Layout->after()
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Foursquare))
#5 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 04:36:21 --- ERROR: View_Exception [ 0 ]: The requested view foursquare/setPosition could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-05-19 04:36:21 --- STRACE: View_Exception [ 0 ]: The requested view foursquare/setPosition could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(137): Kohana_View->set_filename('foursquare/setP...')
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(30): Kohana_View->__construct('foursquare/setP...', Array)
#2 C:\xampp\htdocs\Movies\Movies\application\classes\controller\layout.php(41): Kohana_View::factory('foursquare/setP...', Array)
#3 [internal function]: Controller_Layout->after()
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Foursquare))
#5 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 04:36:22 --- ERROR: View_Exception [ 0 ]: The requested view foursquare/setPosition could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-05-19 04:36:22 --- STRACE: View_Exception [ 0 ]: The requested view foursquare/setPosition could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(137): Kohana_View->set_filename('foursquare/setP...')
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(30): Kohana_View->__construct('foursquare/setP...', Array)
#2 C:\xampp\htdocs\Movies\Movies\application\classes\controller\layout.php(41): Kohana_View::factory('foursquare/setP...', Array)
#3 [internal function]: Controller_Layout->after()
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Foursquare))
#5 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 04:37:47 --- ERROR: View_Exception [ 0 ]: The requested view foursquare/setPosition could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-05-19 04:37:47 --- STRACE: View_Exception [ 0 ]: The requested view foursquare/setPosition could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(137): Kohana_View->set_filename('foursquare/setP...')
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(30): Kohana_View->__construct('foursquare/setP...', Array)
#2 C:\xampp\htdocs\Movies\Movies\application\classes\controller\layout.php(41): Kohana_View::factory('foursquare/setP...', Array)
#3 [internal function]: Controller_Layout->after()
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Foursquare))
#5 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 04:37:48 --- ERROR: View_Exception [ 0 ]: The requested view foursquare/setPosition could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-05-19 04:37:48 --- STRACE: View_Exception [ 0 ]: The requested view foursquare/setPosition could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(137): Kohana_View->set_filename('foursquare/setP...')
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(30): Kohana_View->__construct('foursquare/setP...', Array)
#2 C:\xampp\htdocs\Movies\Movies\application\classes\controller\layout.php(41): Kohana_View::factory('foursquare/setP...', Array)
#3 [internal function]: Controller_Layout->after()
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Foursquare))
#5 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 04:37:48 --- ERROR: View_Exception [ 0 ]: The requested view foursquare/setPosition could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-05-19 04:37:48 --- STRACE: View_Exception [ 0 ]: The requested view foursquare/setPosition could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(137): Kohana_View->set_filename('foursquare/setP...')
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(30): Kohana_View->__construct('foursquare/setP...', Array)
#2 C:\xampp\htdocs\Movies\Movies\application\classes\controller\layout.php(41): Kohana_View::factory('foursquare/setP...', Array)
#3 [internal function]: Controller_Layout->after()
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Foursquare))
#5 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 04:53:59 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH\classes\controller\foursquare.php [ 42 ]
2012-05-19 04:53:59 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH\classes\controller\foursquare.php [ 42 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 04:54:18 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$contact ~ APPPATH\classes\controller\foursquare.php [ 43 ]
2012-05-19 04:54:18 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$contact ~ APPPATH\classes\controller\foursquare.php [ 43 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(43): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 43, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 04:54:29 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$contact ~ APPPATH\classes\controller\foursquare.php [ 43 ]
2012-05-19 04:54:29 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$contact ~ APPPATH\classes\controller\foursquare.php [ 43 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(43): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 43, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 04:54:57 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH\classes\controller\foursquare.php [ 42 ]
2012-05-19 04:54:57 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH\classes\controller\foursquare.php [ 42 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 04:55:56 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH\classes\controller\foursquare.php [ 42 ]
2012-05-19 04:55:56 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH\classes\controller\foursquare.php [ 42 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 04:57:19 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\foursquare.php [ 39 ]
2012-05-19 04:57:19 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\foursquare.php [ 39 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(39): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 39, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 04:57:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\foursquare.php [ 39 ]
2012-05-19 04:57:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\foursquare.php [ 39 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(39): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 39, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 04:57:59 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\foursquare.php [ 39 ]
2012-05-19 04:57:59 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\foursquare.php [ 39 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(39): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 39, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 04:58:25 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH\classes\controller\foursquare.php [ 42 ]
2012-05-19 04:58:25 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH\classes\controller\foursquare.php [ 42 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 04:58:28 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH\classes\controller\foursquare.php [ 42 ]
2012-05-19 04:58:28 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH\classes\controller\foursquare.php [ 42 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 05:00:47 --- ERROR: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\classes\controller\foursquare.php [ 42 ]
2012-05-19 05:00:47 --- STRACE: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\classes\controller\foursquare.php [ 42 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(42): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 05:21:27 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$address ~ APPPATH\views\foursquare\index.php [ 103 ]
2012-05-19 05:21:27 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$address ~ APPPATH\views\foursquare\index.php [ 103 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\views\foursquare\index.php(103): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 103, Array)
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\Movies\Movies\application\views\layout.php(42): Kohana_View->__toString()
#5 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\Movies\Movies\application\classes\controller\layout.php(62): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Layout->after()
#10 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Foursquare))
#11 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#14 {main}
2012-05-19 06:56:32 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
2012-05-19 06:56:32 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 06:58:09 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
2012-05-19 06:58:09 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 06:58:12 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
2012-05-19 06:58:12 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 06:58:14 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
2012-05-19 06:58:14 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 06:58:16 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
2012-05-19 06:58:16 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 06:58:18 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
2012-05-19 06:58:18 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 06:58:19 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
2012-05-19 06:58:19 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 06:58:20 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
2012-05-19 06:58:20 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 06:58:20 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
2012-05-19 06:58:20 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 06:58:30 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
2012-05-19 06:58:30 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 06:58:37 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
2012-05-19 06:58:37 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 06:58:39 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
2012-05-19 06:58:39 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$groups ~ APPPATH\classes\controller\foursquare.php [ 39 ]
--
#0 C:\xampp\htdocs\Movies\Movies\application\classes\controller\foursquare.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 39, Array)
#1 [internal function]: Controller_Foursquare->action_index()
#2 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Foursquare))
#3 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-19 07:45:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL facebook was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-19 07:45:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL facebook was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\Movies\Movies\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\Movies\Movies\web\index.php(109): Kohana_Request->execute()
#3 {main}
<<<<<<< Updated upstream
2012-05-19 11:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:53:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:53:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:53:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:53:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:53:31 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-05-19 11:53:31 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /home/hkdobrev/Projects/movies/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /home/hkdobrev/Projects/movies/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(Array)
#7 /home/hkdobrev/Projects/movies/application/classes/auth/facebook.php(20): Kohana_ORM::factory('user', Array)
#8 /home/hkdobrev/Projects/movies/application/classes/controller/layout.php(29): Auth_Facebook->get_user()
#9 [internal function]: Controller_Layout->before()
#10 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Session))
#11 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/hkdobrev/Projects/movies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#14 {main}
2012-05-19 11:53:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:53:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:53:37 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-05-19 11:53:37 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /home/hkdobrev/Projects/movies/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /home/hkdobrev/Projects/movies/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(Array)
#7 /home/hkdobrev/Projects/movies/application/classes/auth/facebook.php(20): Kohana_ORM::factory('user', Array)
#8 /home/hkdobrev/Projects/movies/application/classes/controller/layout.php(29): Auth_Facebook->get_user()
#9 [internal function]: Controller_Layout->before()
#10 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#11 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/hkdobrev/Projects/movies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#14 {main}
2012-05-19 11:53:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:53:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:53:38 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-05-19 11:53:38 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /home/hkdobrev/Projects/movies/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /home/hkdobrev/Projects/movies/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(Array)
#7 /home/hkdobrev/Projects/movies/application/classes/auth/facebook.php(20): Kohana_ORM::factory('user', Array)
#8 /home/hkdobrev/Projects/movies/application/classes/controller/layout.php(29): Auth_Facebook->get_user()
#9 [internal function]: Controller_Layout->before()
#10 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#11 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/hkdobrev/Projects/movies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#14 {main}
2012-05-19 11:53:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:53:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:56:15 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-05-19 11:56:15 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /home/hkdobrev/Projects/movies/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /home/hkdobrev/Projects/movies/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(Array)
#7 /home/hkdobrev/Projects/movies/application/classes/auth/facebook.php(20): Kohana_ORM::factory('user', Array)
#8 /home/hkdobrev/Projects/movies/application/classes/controller/layout.php(29): Auth_Facebook->get_user()
#9 [internal function]: Controller_Layout->before()
#10 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#11 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/hkdobrev/Projects/movies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#14 {main}
2012-05-19 11:56:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:56:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:56:16 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-05-19 11:56:16 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /home/hkdobrev/Projects/movies/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /home/hkdobrev/Projects/movies/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(Array)
#7 /home/hkdobrev/Projects/movies/application/classes/auth/facebook.php(20): Kohana_ORM::factory('user', Array)
#8 /home/hkdobrev/Projects/movies/application/classes/controller/layout.php(29): Auth_Facebook->get_user()
#9 [internal function]: Controller_Layout->before()
#10 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#11 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/hkdobrev/Projects/movies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#14 {main}
2012-05-19 11:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:56:39 --- ERROR: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-19 11:56:39 --- STRACE: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/new')
#1 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(30): Kohana_View->__construct('session/new', Array)
#2 /home/hkdobrev/Projects/movies/application/classes/controller/layout.php(39): Kohana_View::factory('session/new', Array)
#3 [internal function]: Controller_Layout->after()
#4 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Session))
#5 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/hkdobrev/Projects/movies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 12:16:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:16:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:16:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:16:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:31:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: movie ~ APPPATH/views/home/index.php [ 8 ]
2012-05-19 12:31:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: movie ~ APPPATH/views/home/index.php [ 8 ]
--
#0 /home/hkdobrev/Projects/movies/application/views/home/index.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/hkdobrev/...', 8, Array)
#1 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(61): include('/home/hkdobrev/...')
#2 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/hkdobrev/...', Array)
#3 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/hkdobrev/Projects/movies/application/views/layout.php(21): Kohana_View->__toString()
#5 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(61): include('/home/hkdobrev/...')
#6 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/hkdobrev/...', Array)
#7 /home/hkdobrev/Projects/movies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/hkdobrev/Projects/movies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Layout->after()
#10 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#11 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/hkdobrev/Projects/movies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#14 {main}
2012-05-19 12:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:28:24 --- ERROR: FacebookApiException [ 0 ]: An active access token must be used to query information about the current user. ~ APPPATH/vendor/facebook-php-sdk/base_facebook.php [ 1106 ]
2012-05-19 13:28:24 --- STRACE: FacebookApiException [ 0 ]: An active access token must be used to query information about the current user. ~ APPPATH/vendor/facebook-php-sdk/base_facebook.php [ 1106 ]
--
#0 /home/hkdobrev/Projects/movies/application/vendor/facebook-php-sdk/base_facebook.php(810): BaseFacebook->throwAPIException(Array)
#1 [internal function]: BaseFacebook->_graph('/me')
#2 /home/hkdobrev/Projects/movies/application/vendor/facebook-php-sdk/base_facebook.php(587): call_user_func_array(Array, Array)
#3 /home/hkdobrev/Projects/movies/application/classes/auth/facebook.php(29): BaseFacebook->api('/me')
#4 /home/hkdobrev/Projects/movies/application/classes/controller/layout.php(29): Auth_Facebook->get_user()
#5 [internal function]: Controller_Layout->before()
#6 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#7 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/hkdobrev/Projects/movies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#10 {main}
2012-05-19 13:28:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:28:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:33:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:33:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:33:42 --- ERROR: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-19 13:33:42 --- STRACE: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/new')
#1 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(30): Kohana_View->__construct('session/new', Array)
#2 /home/hkdobrev/Projects/movies/application/classes/controller/layout.php(39): Kohana_View::factory('session/new', Array)
#3 [internal function]: Controller_Layout->after()
#4 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Session))
#5 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/hkdobrev/Projects/movies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 13:33:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'movies_users.ranking' in 'order clause' [ SELECT `movie`.`id` AS `movie:id`, `movie`.`name` AS `movie:name`, `movie`.`about` AS `movie:about`, `movie`.`image` AS `movie:image`, `movie`.`actors` AS `movie:actors`, `movie`.`release_date` AS `movie:release_date`, `movie`.`directed_by` AS `movie:directed_by`, `movie`.`studio` AS `movie:studio`, `movie`.`likes` AS `movie:likes`, `movie`.`facebook_id` AS `movie:facebook_id`, `movies_user`.* FROM `movies_users` AS `movies_user` LEFT JOIN `movies` AS `movie` ON (`movie`.`id` = `movies_user`.`movie_id`) WHERE `movies_user`.`user_id` = '2' ORDER BY `movies_users`.`ranking` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-05-19 13:33:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'movies_users.ranking' in 'order clause' [ SELECT `movie`.`id` AS `movie:id`, `movie`.`name` AS `movie:name`, `movie`.`about` AS `movie:about`, `movie`.`image` AS `movie:image`, `movie`.`actors` AS `movie:actors`, `movie`.`release_date` AS `movie:release_date`, `movie`.`directed_by` AS `movie:directed_by`, `movie`.`studio` AS `movie:studio`, `movie`.`likes` AS `movie:likes`, `movie`.`facebook_id` AS `movie:facebook_id`, `movies_user`.* FROM `movies_users` AS `movies_user` LEFT JOIN `movies` AS `movie` ON (`movie`.`id` = `movies_user`.`movie_id`) WHERE `movies_user`.`user_id` = '2' ORDER BY `movies_users`.`ranking` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/hkdobrev/Projects/movies/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `movie`....', 'Model_Movies_Us...', Array)
#1 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/hkdobrev/Projects/movies/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/hkdobrev/Projects/movies/application/views/home/index.php(7): Kohana_ORM->find_all()
#4 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(61): include('/home/hkdobrev/...')
#5 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/hkdobrev/...', Array)
#6 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/hkdobrev/Projects/movies/application/views/layout.php(21): Kohana_View->__toString()
#8 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(61): include('/home/hkdobrev/...')
#9 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/hkdobrev/...', Array)
#10 /home/hkdobrev/Projects/movies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/hkdobrev/Projects/movies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/hkdobrev/Projects/movies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 13:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:34:18 --- ERROR: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-19 13:34:18 --- STRACE: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/new')
#1 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(30): Kohana_View->__construct('session/new', Array)
#2 /home/hkdobrev/Projects/movies/application/classes/controller/layout.php(39): Kohana_View::factory('session/new', Array)
#3 [internal function]: Controller_Layout->after()
#4 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Session))
#5 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/hkdobrev/Projects/movies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 13:42:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find_all() ~ APPPATH/views/home/index.php [ 8 ]
2012-05-19 13:42:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find_all() ~ APPPATH/views/home/index.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-19 13:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:42:18 --- ERROR: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-19 13:42:18 --- STRACE: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/new')
#1 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(30): Kohana_View->__construct('session/new', Array)
#2 /home/hkdobrev/Projects/movies/application/classes/controller/layout.php(39): Kohana_View::factory('session/new', Array)
#3 [internal function]: Controller_Layout->after()
#4 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Session))
#5 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/hkdobrev/Projects/movies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 13:46:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:46:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:46:32 --- ERROR: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-19 13:46:32 --- STRACE: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/new')
#1 /home/hkdobrev/Projects/movies/system/classes/kohana/view.php(30): Kohana_View->__construct('session/new', Array)
#2 /home/hkdobrev/Projects/movies/application/classes/controller/layout.php(39): Kohana_View::factory('session/new', Array)
#3 [internal function]: Controller_Layout->after()
#4 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Session))
#5 /home/hkdobrev/Projects/movies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/hkdobrev/Projects/movies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/hkdobrev/Projects/movies/web/index.php(109): Kohana_Request->execute()
#8 {main}
=======
2012-05-19 09:55:30 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:30 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:55:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:55:46 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:46 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:55:46 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:46 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:55:47 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:47 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:55:47 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:47 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:55:47 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:47 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:55:47 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:47 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:55:48 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:56:22 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 09:56:22 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 09:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:59:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:59:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:59:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:59:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:59:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:59:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:59:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:59:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 09:59:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 09:59:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:08:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:08:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:12:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:12:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:12:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:12:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:13:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:13:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:13:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:13:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:13:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:13:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:13:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:13:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:13:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:13:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:14:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:14:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:14:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:14:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:14:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:14:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:14:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:14:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:14:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:14:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:15:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:15:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:15:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:15:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:15:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:15:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:15:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:15:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:15:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:15:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:15:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:15:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:17:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:17:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:23:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:23:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:23:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:23:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:23:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:23:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:23:52 --- ERROR: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-19 10:23:52 --- STRACE: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/koleto/public_html/smovies/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/new')
#1 /home/koleto/public_html/smovies/system/classes/kohana/view.php(30): Kohana_View->__construct('session/new', Array)
#2 /home/koleto/public_html/smovies/application/classes/controller/layout.php(39): Kohana_View::factory('session/new', Array)
#3 [internal function]: Controller_Layout->after()
#4 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Session))
#5 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 10:23:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:23:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:24:30 --- ERROR: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-19 10:24:30 --- STRACE: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/koleto/public_html/smovies/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/new')
#1 /home/koleto/public_html/smovies/system/classes/kohana/view.php(30): Kohana_View->__construct('session/new', Array)
#2 /home/koleto/public_html/smovies/application/classes/controller/layout.php(39): Kohana_View::factory('session/new', Array)
#3 [internal function]: Controller_Layout->after()
#4 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Session))
#5 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 10:24:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:24:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:24:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:24:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:25:47 --- ERROR: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-19 10:25:47 --- STRACE: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/koleto/public_html/smovies/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/new')
#1 /home/koleto/public_html/smovies/system/classes/kohana/view.php(30): Kohana_View->__construct('session/new', Array)
#2 /home/koleto/public_html/smovies/application/classes/controller/layout.php(39): Kohana_View::factory('session/new', Array)
#3 [internal function]: Controller_Layout->after()
#4 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Session))
#5 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 10:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:26:54 --- ERROR: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-19 10:26:54 --- STRACE: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/koleto/public_html/smovies/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/new')
#1 /home/koleto/public_html/smovies/system/classes/kohana/view.php(30): Kohana_View->__construct('session/new', Array)
#2 /home/koleto/public_html/smovies/application/classes/controller/layout.php(39): Kohana_View::factory('session/new', Array)
#3 [internal function]: Controller_Layout->after()
#4 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Session))
#5 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 10:26:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:26:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:18 --- ERROR: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-19 10:28:18 --- STRACE: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/koleto/public_html/smovies/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/new')
#1 /home/koleto/public_html/smovies/system/classes/kohana/view.php(30): Kohana_View->__construct('session/new', Array)
#2 /home/koleto/public_html/smovies/application/classes/controller/layout.php(39): Kohana_View::factory('session/new', Array)
#3 [internal function]: Controller_Layout->after()
#4 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Session))
#5 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 10:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:21 --- ERROR: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-19 10:28:21 --- STRACE: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/koleto/public_html/smovies/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/new')
#1 /home/koleto/public_html/smovies/system/classes/kohana/view.php(30): Kohana_View->__construct('session/new', Array)
#2 /home/koleto/public_html/smovies/application/classes/controller/layout.php(39): Kohana_View::factory('session/new', Array)
#3 [internal function]: Controller_Layout->after()
#4 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Session))
#5 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 10:28:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:29:00 --- ERROR: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-19 10:29:00 --- STRACE: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/koleto/public_html/smovies/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/new')
#1 /home/koleto/public_html/smovies/system/classes/kohana/view.php(30): Kohana_View->__construct('session/new', Array)
#2 /home/koleto/public_html/smovies/application/classes/controller/layout.php(39): Kohana_View::factory('session/new', Array)
#3 [internal function]: Controller_Layout->after()
#4 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Session))
#5 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 10:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:29:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:29:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:29:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:29:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:29:40 --- ERROR: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-19 10:29:40 --- STRACE: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/koleto/public_html/smovies/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/new')
#1 /home/koleto/public_html/smovies/system/classes/kohana/view.php(30): Kohana_View->__construct('session/new', Array)
#2 /home/koleto/public_html/smovies/application/classes/controller/layout.php(39): Kohana_View::factory('session/new', Array)
#3 [internal function]: Controller_Layout->after()
#4 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Session))
#5 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 10:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:30:49 --- ERROR: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-19 10:30:49 --- STRACE: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/koleto/public_html/smovies/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/new')
#1 /home/koleto/public_html/smovies/system/classes/kohana/view.php(30): Kohana_View->__construct('session/new', Array)
#2 /home/koleto/public_html/smovies/application/classes/controller/layout.php(39): Kohana_View::factory('session/new', Array)
#3 [internal function]: Controller_Layout->after()
#4 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Session))
#5 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 10:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:31:58 --- ERROR: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-19 10:31:58 --- STRACE: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/koleto/public_html/smovies/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/new')
#1 /home/koleto/public_html/smovies/system/classes/kohana/view.php(30): Kohana_View->__construct('session/new', Array)
#2 /home/koleto/public_html/smovies/application/classes/controller/layout.php(39): Kohana_View::factory('session/new', Array)
#3 [internal function]: Controller_Layout->after()
#4 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Session))
#5 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 10:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:32:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:32:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 10:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 10:42:42 --- ERROR: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-19 10:42:42 --- STRACE: View_Exception [ 0 ]: The requested view session/new could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/koleto/public_html/smovies/system/classes/kohana/view.php(137): Kohana_View->set_filename('session/new')
#1 /home/koleto/public_html/smovies/system/classes/kohana/view.php(30): Kohana_View->__construct('session/new', Array)
#2 /home/koleto/public_html/smovies/application/classes/controller/layout.php(39): Kohana_View::factory('session/new', Array)
#3 [internal function]: Controller_Layout->after()
#4 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Session))
#5 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-19 11:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:13:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:13:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:16:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:16:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:16:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:16:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:16:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:16:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:30:02 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module '0' at 'youtube' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-05-19 11:30:02 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module '0' at 'youtube' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /home/koleto/public_html/smovies/application/bootstrap.php(116): Kohana_Core::modules(Array)
#1 /home/koleto/public_html/smovies/web/index.php(102): require('/home/koleto/pu...')
#2 {main}
2012-05-19 11:30:02 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module '0' at 'youtube' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-05-19 11:30:02 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module '0' at 'youtube' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /home/koleto/public_html/smovies/application/bootstrap.php(116): Kohana_Core::modules(Array)
#1 /home/koleto/public_html/smovies/web/index.php(102): require('/home/koleto/pu...')
#2 {main}
2012-05-19 11:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:42:02 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for YouTube_Video_Item::__construct(), called in /home/koleto/public_html/smovies/application/views/home/index.php on line 25 and defined ~ MODPATH/youtube/classes/youtube/video/item.php [ 9 ]
2012-05-19 11:42:02 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for YouTube_Video_Item::__construct(), called in /home/koleto/public_html/smovies/application/views/home/index.php on line 25 and defined ~ MODPATH/youtube/classes/youtube/video/item.php [ 9 ]
--
#0 /home/koleto/public_html/smovies/modules/youtube/classes/youtube/video/item.php(9): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/koleto/pu...', 9, Array)
#1 /home/koleto/public_html/smovies/application/views/home/index.php(25): YouTube_Video_Item->__construct()
#2 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#3 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /home/koleto/public_html/smovies/application/views/layout.php(21): Kohana_View->__toString()
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#7 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#8 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Layout->after()
#11 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#12 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#15 {main}
2012-05-19 11:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:43:46 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/youtube/classes/youtube/item.php [ 20 ]
2012-05-19 11:43:46 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/youtube/classes/youtube/item.php [ 20 ]
--
#0 /home/koleto/public_html/smovies/modules/youtube/classes/youtube/item.php(20): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/koleto/pu...', 20, Array)
#1 /home/koleto/public_html/smovies/modules/youtube/classes/youtube/video/item.php(11): YouTube_Item->__construct(Array)
#2 /home/koleto/public_html/smovies/application/views/home/index.php(25): YouTube_Video_Item->__construct(Array)
#3 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /home/koleto/public_html/smovies/application/views/layout.php(21): Kohana_View->__toString()
#7 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#9 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#11 [internal function]: Controller_Layout->after()
#12 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#16 {main}
2012-05-19 11:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:45:51 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/youtube/classes/youtube/item.php [ 20 ]
2012-05-19 11:45:51 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/youtube/classes/youtube/item.php [ 20 ]
--
#0 /home/koleto/public_html/smovies/modules/youtube/classes/youtube/item.php(20): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/koleto/pu...', 20, Array)
#1 /home/koleto/public_html/smovies/modules/youtube/classes/youtube/video/item.php(11): YouTube_Item->__construct(Array)
#2 /home/koleto/public_html/smovies/application/views/home/index.php(25): YouTube_Video_Item->__construct(Array)
#3 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /home/koleto/public_html/smovies/application/views/layout.php(21): Kohana_View->__toString()
#7 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#9 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#11 [internal function]: Controller_Layout->after()
#12 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#16 {main}
2012-05-19 11:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:50:39 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/js/script.js): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 11:50:39 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/js/script.js): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '??$.ajax({??   ...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/body.php(18): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(32): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 11:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:51:07 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/js/script.js): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 11:51:07 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/js/script.js): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '??$.ajax({??   ...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/body.php(18): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(32): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 11:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 11:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 11:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:01:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:01:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:03:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:03:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:07:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:07:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:07:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:07:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:07:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:07:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:07:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:07:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:07:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:07:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:07:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:07:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:15:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:15:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:15:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:15:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:15:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:15:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:15:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:15:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:15:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:15:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:19:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:19:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:21:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:21:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:24:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:24:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:26:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:26:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:46:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:46:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:47:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:47:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:47:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:47:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:52:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:52:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 12:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 12:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:07:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:07:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:07:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:07:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:07:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:07:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:07:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:07:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:07:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:07:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:12:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:12:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:12:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:12:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:12:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:12:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:19:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:19:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:20:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:20:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:20:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:20:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:21:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:21:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:21:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:21:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:22:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:22:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:22:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:22:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:23:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:23:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:23:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:23:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:24:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:24:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:25:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:25:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:25:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:25:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:28:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:28:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:40:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:40:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:41:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:41:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:41:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:41:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
>>>>>>> Stashed changes

2012-05-19 13:58:36 --- ERROR: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
2012-05-19 13:58:36 --- STRACE: ErrorException [ 2 ]: file_put_contents(/home/koleto/public_html/smovies/web/assets/css/style.css): failed to open stream: Permission denied ~ MODPATH/asset-merger/classes/asset.php [ 207 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/koleto/pu...', 207, Array)
#1 /home/koleto/public_html/smovies/modules/asset-merger/classes/asset.php(207): file_put_contents('/home/koleto/pu...', '.wall-entry {??...')
#2 /home/koleto/public_html/smovies/modules/asset-merger/classes/assets.php(151): Asset->render(false)
#3 /home/koleto/public_html/smovies/application/views/assets/head.php(8): Assets->render()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(15): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 13:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 13:59:01 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'movies_user.ranking' in 'order clause' [ SELECT `movie`.`id` AS `movie:id`, `movie`.`name` AS `movie:name`, `movie`.`image` AS `movie:image`, `movie`.`facebook_id` AS `movie:facebook_id`, `movies_user`.* FROM `movies_users` AS `movies_user` LEFT JOIN `movies` AS `movie` ON (`movie`.`id` = `movies_user`.`movie_id`) WHERE `movies_user`.`user_id` = '1' ORDER BY `movies_user`.`ranking` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-05-19 13:59:01 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'movies_user.ranking' in 'order clause' [ SELECT `movie`.`id` AS `movie:id`, `movie`.`name` AS `movie:name`, `movie`.`image` AS `movie:image`, `movie`.`facebook_id` AS `movie:facebook_id`, `movies_user`.* FROM `movies_users` AS `movies_user` LEFT JOIN `movies` AS `movie` ON (`movie`.`id` = `movies_user`.`movie_id`) WHERE `movies_user`.`user_id` = '1' ORDER BY `movies_user`.`ranking` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/koleto/public_html/smovies/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `movie`....', 'Model_Movies_Us...', Array)
#1 /home/koleto/public_html/smovies/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/koleto/public_html/smovies/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/koleto/public_html/smovies/application/views/home/index.php(8): Kohana_ORM->find_all()
#4 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#5 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#6 /home/koleto/public_html/smovies/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /home/koleto/public_html/smovies/application/views/layout.php(21): Kohana_View->__toString()
#8 /home/koleto/public_html/smovies/system/classes/kohana/view.php(61): include('/home/koleto/pu...')
#9 /home/koleto/public_html/smovies/system/classes/kohana/view.php(343): Kohana_View::capture('/home/koleto/pu...', Array)
#10 /home/koleto/public_html/smovies/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /home/koleto/public_html/smovies/application/classes/controller/layout.php(61): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Layout->after()
#13 /home/koleto/public_html/smovies/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#14 /home/koleto/public_html/smovies/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/koleto/public_html/smovies/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#17 {main}
2012-05-19 13:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 13:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:05:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:05:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:05:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:05:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:05:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:05:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:05:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:05:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:05:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:05:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:05:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:05:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:05:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:05:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:05:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:05:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:05:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:05:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:05:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:05:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:05:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:05:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-19 14:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-19 14:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/koleto/public_html/smovies/web/index.php(109): Kohana_Request->execute()
#1 {main}