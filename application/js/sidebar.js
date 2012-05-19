jQuery(".movie-poster").click(function() {
	var id = $(this).data('movie');
	jQuery(".sidebar h3").text("");

	jQuery(".movie-sidebar:visible").hide();	
	jQuery("#movie-" + id).show();
});