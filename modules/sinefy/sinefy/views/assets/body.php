<?php defined('SYSPATH') OR die('No direct script access.');

echo Assets::factory('body')
->js('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js')
->js('libs/bootstrap/bootstrap.min.js')
->js('plugins.js')
->js('libs/jquery.masonry.min.js')
->js('libs/jquery.infinitescroll.js')
->js('script.js')
->js('facebook.js')
->js('sidebar.js')
->js('watch.js')
->render();
