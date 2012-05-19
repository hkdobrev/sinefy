<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php if ($next_page !== FALSE): ?>
	<?php echo HTML::anchor($page->url($next_page), 'Load more', array('rel' => 'next'))?>
<?php endif ?>
