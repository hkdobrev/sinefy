function inviteFriends(movieId) {

	var name = $("#movie-name-" + movieId).text();

	$.get("home/ajax_friends" , {
		'movie_title':name
	},
	function(data) {
		$( "#dialog" ).html(data);
	});

	$( "#dialog" ).dialog({
		height: 460,
		width: 700,
		modal: true,
		autoOpen: false,
		draggable: false,
		resizable: false
	});
	$('#dialog').dialog("option", "title", "Watch " + name + " with: ");
	$("#dialog").dialog("open");

}
