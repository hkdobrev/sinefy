<?php defined('SYSPATH') OR die('No direct script access.');?>

<div class="row-fluid">
  <div class="span9">
      <?php if ($current_user AND $current_user->loaded()):?> 
        <!-- grid -->   
       <?php else: ?>
         <h1>Want to watch a movie?</h1>
         <div class="fb-login-button" data-scope="email,user_likes,friends_likes" data-show-faces="true" data-width="200" data-max-rows="1"></div>
      <?php endif; ?>      
  </div>

  <div class="span3">
    <div class="sidebar">
      <?php if ($current_user AND $current_user->loaded()):?>     
        <h3>Click on a movie to see details</h3>
      <?php else: ?>
        <h3>Sign in and you will be able to:</h3>
      <?php endif; ?>
    </div>
  </div>

</div>