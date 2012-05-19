/* Author:

*/
(function (window, $){

	$(function(){
		var $container = $('#posters');
		$container.imagesLoaded(function(){
			$container.masonry({
				itemSelector: 'li.poster',
				columnWidth: 171,
				gutterWidth: 5
			});
		});
	});
}(window, window.jQuery));
