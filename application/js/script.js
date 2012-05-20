var videoIdParam;
var player;
var done = false;

(function (window, $){

	$(function(){
		var $container = $('#posters');
		$container.imagesLoaded(function(){
			$container.removeClass('no-js');
			$container.masonry({
				itemSelector: 'li.poster',
				columnWidth: 210,
				gutterWidth: 9
			});
		});

		$container.infinitescroll({
			dataType: 'html',
			navSelector: '#movies-pagination',
			nextSelector: '#movies-pagination a',
			behavior: 'sinefy',
			itemSelector: 'li.poster',
			loading: {
				finishedMsg: "<div class=\"finished-loading-msg\">That's all the movies for now, buddy. <br/>Keep watching and you'll get more of these!</div>",
				img: "http://i.imgur.com/6RMhx.gif",
				msgText: ''
				}
			},
			function(newElements) {
				var $newElems = $( newElements ).css({ opacity: 0 });
				// ensure that images load before adding to masonry layout
				$newElems.imagesLoaded(function(){
				// show elems now they're ready
				$newElems.animate({ opacity: 1 });
				$container.masonry( 'appended', $newElems, true );
				});
			}
		);

		$.infinitescroll.prototype._showdonemsg_sinefy = function() {
			var opts = this.options;
			$('#infscr-loading').fadeOut();
			$('#posters').after(opts.loading.finishedMsg).animate({ opacity: 1 }, 2000);
		};

		window.sinefySidebar = function (d) {
			var data = d[0];
			console.log(data);
			data.find('.movie-sidebar').appendTo($('.sidebar'));
		};

		$('.sidebar').on('submit', '.button-form', function(e){
			e.preventDefault();
			var form = $(this);
			$.post(form.attr('action'), form.serialize(), function () {
				if ($.isFunction(window.inviteFriends))
				{
					window.inviteFriends();
				}
			});
			form.find('button').toggleClass('active');
		});

	});
}(window, window.jQuery));

var ext;

var tag = document.createElement('script');
tag.src = "http://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

function onYouTubePlayerAPIReady() {
  
}

function onPlayerReady(event) {
	event.target.playVideo();
}


function onPlayerStateChange(event) {
	if (event.data == YT.PlayerState.PLAYING && !done) {
		setTimeout(stopVideo, 6000);
		done = true;
	}
}


function stopVideo() {
	player.stopVideo();
}

function showVideoList(data) {
	var url = data.feed.entry[0].media$group.media$player[0].url,
		videoIdParam;
	
	var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
	var match = url.match(regExp);
	if (match && match[7].length==11){
		videoIdParam =  match[7];
	}

	return videoIdParam;

}

function getVideo(name) {
	var vid;

	$.ajax({
		url: "http://gdata.youtube.com/feeds/api/videos?q=" + escape(name) + "&alt=json&max-results=30&format=5",
		dataType: "jsonp",
		success: function (obj) {
			vid = showVideoList(obj);
			player = new YT.Player('player', {
				height: '390',
				width: '640',
				videoId: vid,
				events: {
				  'onReady': onPlayerReady,
				  'onStateChange': onPlayerStateChange
				}
			});
		}
	});
}
