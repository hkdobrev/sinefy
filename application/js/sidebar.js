jQuery(".movie-poster").click(function() {
	var id = $(this).data('movie');

	jQuery(".movie-sidebar:visible").hide();	
	jQuery("#movie-" + id).show();
});