<?php defined('SYSPATH') OR die('No direct script access.');?>

<div class="row-fluid">
	<div class="span9">
	<?php if ($current_user AND $current_user->loaded()):?> 
	<ul id="posters">
		<?php $movies_users = $movies_users->find_all();
		$friends_counter = 0;
		$movies_with_friends = round($friends_count / 5);
		foreach($movies_users as $m => $movies_user):?>
		<li class="poster">
			<a class="movie-poster" data-movie="<?php echo $movies_user->movie->pk()?>">
				<?php echo HTML::image('https://graph.facebook.com/'.$movies_user->movie->facebook_id.'/picture?type=large')?>
				<span class="hidden movie-name" id="movie-name-<?php echo $movies_user->movie->id; ?>"><?php echo $movies_user->movie->name; ?></span>
			</a>
			<?php if ($friends_counter < $friends_count AND $m < $movies_with_friends):?>
			<h3 class="faces-heading">Watched</h3>
			<p class="faces watched">
				<?php for (; $m - 1 > $friends_counter AND $friends_counter < $friends_count; $friends_counter++):?>
				<?php echo HTML::image('https://graph.facebook.com/'.$friends[$friends_counter]['id'].'/picture?type=square')?>
				<?php endfor?>
			</p>
			<?php endif?>
			<?php if ($friends_counter < $friends_count - 1 AND $m < $movies_with_friends):?>
			<h3 class="faces-heading">To watch</h3>
			<p class="faces to-watch">
				<?php for (; $m - 1 > $friends_counter AND $friends_counter < $friends_count; $friends_counter++):?>
				<?php echo HTML::image('https://graph.facebook.com/'.$friends[$friends_counter]['id'].'/picture?type=square')?>
				<?php endfor?>
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

	  <?php if ($current_user AND $current_user->loaded()):?>    
	<div class="span3">

		<div class="sidebar" style="position: fixed; width: 250px;">
	  <h3 id="click-on-movie">Click on a movie</h3>
				<?php foreach ($movies_users->rewind() as $movies_user):
				$movie = $movies_user->movie;?>
				<div id="movie-<?php echo $movie->pk()?>" class="movie-sidebar">

			<h2><?php echo $movie->name; ?></h2>

			<a class="thumbnail trailer-btn" href="#myModal" style="margin-top: 20px" data-trailer="<?php echo $movie->name; ?>"><img src="http://static2.cdn.ubi.com/ncsa/battletag/website/reveal/img/screens-preloader.gif" class="trailer-preview" id="movie-trailer-<?php echo $movie->id; ?>" /></a>
			<p><?php echo $movie->about ? Text::limit_words(strip_tags($movie->about), 50, '.') : ""; ?></p>
		  
			<?php echo Sinefy::actions($movie->pk())?>

		</div>
				<?php endforeach?>
		</div>
	</div>
			<?php endif; ?>

</div>
