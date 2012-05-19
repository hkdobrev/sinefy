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
		
		FB.Event.subscribe( 'auth.statusChange', function( response ) {
			if ( response.authResponse ) {
				FB.api( '/me', function( me ) {
					log( me );
				});
			}
		});

		$(function() {
			$( '#logout' ).on( 'click', function() {
				FB.logout();
			});
		});
	};
}( window, window.jQuery ));
