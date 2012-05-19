<?php defined('SYSPATH') OR die('No direct script access.');?>

<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
		<div class="container">
		  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <a class="brand" href="#">SocialMovies</a>
		  <?php if ($current_user AND $current_user->loaded()):?>
		  <div class="btn-group pull-right">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-user"></i> <?php echo $current_user->name?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><?php echo HTML::anchor(Route::url('logout'), 'Log out')?></li>
            </ul>
          </div>
	      <?php else:?>
      	<div class="fb-login-button" data-scope="email,user_likes,friends_likes" data-show-faces="true" data-width="200" data-max-rows="1"></div>
	      <?php endif;?>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class="active"><a href="#">Home</a></li>
			  <li><a href="#about">About</a></li>
			  <li><a href="#contact">Contact</a></li>
			</ul>
		  </div><!--/.nav-collapse -->
		</div>
	  </div>
	</div>
