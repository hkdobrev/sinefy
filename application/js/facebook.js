(function( window, $, undefined ) {

	// Load the SDK Asynchronously
	(function( d ){
		var js,
			id = 'facebook-jssdk',
			ref = d.getElementsByTagName( 'script' )[0];

		if (d.getElementById( id )) {
			return;
		}
		js = d.createElement( 'script' );
		js.id = id;
		js.async = true;
		js.src = '//connect.facebook.net/en_US/all.js';
		ref.parentNode.insertBefore( js, ref );
	}( document ));

	window.fbAsyncInit = function() {
		FB.init({
			appId      : $( '#fb-root' ).data( 'app' ), // App ID
			status     : true, // check login status
			cookie     : true, // enable cookies to allow the server to access the session
			xfbml      : true  // parse XFBML
		});

		// Additional initialization code here
		
		if ( ! $('body').hasClass('logged-in') ) {
			console.log('sdfds');
			FB.getLoginStatus(function( response ) {
				if ( response.status === 'connected' ) {
					$.post('/login', {id: response.authResponse.userID}, function( data ) {
						if ( data.ok ) {
							window.location.replace('/');
						}
					}, 'json');
				} else {
					FB.Event.subscribe( 'auth.statusChange', function( response ) {
						if ( response.authResponse ) {
							window.location.replace('/');
						}
					});
				}
			});
		}


		$(function() {
			$( '#logout' ).on( 'click', function(e) {
				e.preventDefault();
				FB.logout();
				window.location.path = '/logout';
			});
		});
	};
}( window, window.jQuery ));
