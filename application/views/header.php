<?php defined('SYSPATH') OR die('No direct script access.');?>

<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="#">Sinefy</a>
			<?php if ($current_user AND $current_user->loaded()):?>
				<div class="btn-group pull-right open">
					<div class="btn-group pull-right">
						<?php echo HTML::anchor(Route::url('logout'), 'Log out', array('class'=>'btn'))?>
					</div>
				</div>
			<?php endif;?>
			<!--/.nav-collapse -->
		</div>
	</div>
</div>