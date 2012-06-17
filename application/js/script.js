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
			data.find('.movie-sidebar').appendTo($('.sidebar'));
		};

		function inviteFriends( movieId ) {
			var name = $( "#movie-name-" + movieId ).text();

			$.get( "home/ajax_friends", {
				'movie_title': name
			}, function( data ) {
				$( "#dialog" ).html( data );
			});

			$( "#dialog" ).dialog({
				height: 460,
				width: 700,
				modal: true,
				draggable: false,
				resizable: false,
				title: 'Watch ' + name + ' with: '
			});
		}

		$('.sidebar').on('submit', '.button-form', function(e){
			e.preventDefault();
			var form = $(this);
			$.post(form.attr('action'), form.serialize(), function () {
				if (form.find('.to-watch-button').length && form.find('.to-watch-button').hasClass('active')) {
					inviteFriends(+form.find('input').val());
				}
			});
			form.find('button').toggleClass('active');
		});

	});
}(window, window.jQuery));
