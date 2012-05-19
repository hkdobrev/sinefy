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