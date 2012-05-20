<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $title?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">
	<?php echo View::factory('assets/head')?>
</head>
<body<?php echo ($current_user AND $current_user->loaded()) ? ' class="logged-in"' : ''?>>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
	<div class="container">
		<?php echo $header;?>
		<?php echo $content;?>
	</div> <!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/libs/jquery-1.7.2.js"><\/script>')</script>
<?php echo View::factory('assets/body')?>

<div id="dialog-modal" title="Trailer">
	<p>Adding the modal overlay screen makes the dialog look more prominent because it dims out the page content.</p>
</div>
<script type="text/javascript">
	jQuery(function() {
		jQuery( "#dialog-modal" ).dialog({
			height: 460,
			width: 700,
			modal: true,
			autoOpen: false,
			draggable: false,
			resizable: false	
		});
	});
</script>

</body>
</html>