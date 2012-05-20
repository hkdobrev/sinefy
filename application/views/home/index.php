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

	<div class="span3">

		<div class="sidebar">
          
      <a class="thumbnail" data-toggle="trailer" href="#trailer"><img src="http://img.youtube.com/vi/NPoHPNeU9fc/0.jpg" class="trailer-preview" /></a>
			
      <?php if ($current_user AND $current_user->loaded()):?>    
				<?php foreach ($movies_users->rewind() as $movies_user):
				$movie = $movies_user->movie;?>
				<div id="movie-<?php echo $movie->pk()?>" class="movie-sidebar">

          <h2><?php echo $movie->name; ?></h2>

          <p><strong>About:</strong> <?php echo $movie->about; ?></p>

				</div>
				<?php endforeach?>
			<?php else: ?>
				<h3>Sign in and you will be able to:</h3>
			<?php endif; ?>
		</div>
	</div>

</div>


<div class="modal hide fade" id="trailer">
  <div class="modal-header">
    <button class="close" data-dismiss="trailer">×</button>
    <h3>Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn">Close</a>
    <a href="#" class="btn btn-primary">Save changes</a>
  </div>
</div>
