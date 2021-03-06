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
				if ($.isFunction(window.inviteFriends) && form.find('.to-watch-button').length && form.find('.to-watch-button').hasClass('active'))
				{
					window.inviteFriends(form);
				}
			});
			form.find('button').toggleClass('active');
		});

	});
}(window, window.jQuery));
