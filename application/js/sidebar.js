(function ($) {

	$('#posters').on('click', '.movie-poster', function() {
		var id = $(this).data('movie');
		var name = $("#movie-name-" + id).text();

		loadThumbnail(name, id);

		$(".movie-sidebar:visible").hide();
		$('#click-on-movie').remove();
		$("#movie-" + id).show();
	});

	function loadThumbnail(name, id) {
		$.ajax({
			url: "http://gdata.youtube.com/feeds/api/videos?q=" + escape(name) + "&alt=json&max-results=30&format=5",
			dataType: "jsonp",
			success: function (obj) {
				vid = returnId(obj);
				
				$('#movie-trailer-' + id).prop('src', 'http://img.youtube.com/vi/' + vid + '/0.jpg');

			}
		});

	}

	function returnId(data) {
		var url = data.feed.entry[0].media$group.media$player[0].url,
			videoIdParam;
		
		var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
		var match = url.match(regExp);
		if (match && match[7].length==11){
			videoIdParam =  match[7];
		}

		return videoIdParam;

	}

	$('.trailer-btn').click(function(e){
		var name = $(this).data('trailer');


		$('#dialog-modal').dialog( "option", "title", name + ' Trailer' );

		$.ajax({
			url: "http://gdata.youtube.com/feeds/api/videos?q=" + escape(name) + "&alt=json&max-results=30&format=5",
			dataType: "jsonp",
			success: function (obj) {
				vid = returnId(obj);
				
				var content = '<iframe title="YouTube video player" class="youtube-player" type="text/html" width="380" height="190" src="http://www.youtube.com/embed/' + vid + '" frameborder="0"></iframe>';


				$('#dialog-modal').html(content);
			}
		});

		$('#dialog-modal').dialog('open');
	});

}(window.jQuery));
