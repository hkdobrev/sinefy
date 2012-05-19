var videoIdParam;
var player;
var done = false;

/*
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
*/

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
