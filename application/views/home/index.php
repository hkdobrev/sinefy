<?php defined('SYSPATH') OR die('No direct script access.');?>

<div class="row-fluid">
	<div class="span9">
	<?php if ($current_user AND $current_user->loaded()):?> 
	<ul id="posters">
		<?php $movies_users = $movies_users->find_all();
		foreach($movies_users as $movies_user):?>
		<li class="poster">
			<a class="movie-poster" data-movie="<?php $movies_user->movie->pk()?>">
				<?php echo HTML::image('https://graph.facebook.com/'.$movies_user->movie->facebook_id.'/picture?type=large')?>
			</a>
			<?php //$watched = $movie->users->watched()->find_all();
			if (FALSE AND $watched->count()):?>
			<h3 class="faces-heading">Watched</h3>
			<p class="faces watched">
				<?php foreach ($to_watch as $user):?>
				<?php echo HTML::image('https://graph.facebook.com/'.$user->friend_id.'/picture?type=square')?>
				<?php endforeach?>
			</p>
			<?php endif?>
			<?php //$to_watch = $movie->users->to_watch()->find_all();
			if (FALSE AND $to_watch->count()):?>
			<h3 class="faces-heading">To watch</h3>
			<p class="faces to-watch">
				<?php foreach ($to_watch as $user):?>
				<?php echo HTML::image('https://graph.facebook.com/'.$user->friend_id.'/picture?type=square')?>
				<?php endforeach?>
			</p>
			<?php endif?>
		</li>
		<?php endforeach?>
		</ul>
		<?php echo $pagination?>
	 <?php else: ?>
		 <h1>Want to watch a movie?</h1>
		 <div class="fb-login-button" data-scope="email,user_likes,friends_likes" data-show-faces="true" data-width="200" data-max-rows="1"></div>
	<?php endif; ?>      
	</div>

	<div class="span3">

		<div class="sidebar">
			<?php if ($current_user AND $current_user->loaded()):?>     
				<h3>Click on a movie to see details</h3>
					<?php foreach ($movies_users->rewind() as $movies_user):
					$movie = $movies_user->movie;?>
					<div id="movie-<?php echo $movie->pk()?>" class="movie-sidebar">
					</div>
					<?php endforeach?>
			<?php else: ?>
				<h3>Sign in and you will be able to:</h3>
			<?php endif; ?>
		</div>
	</div>

</div>
