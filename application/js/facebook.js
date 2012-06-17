(function( window, $, undefined ) {

	function logInWithFacebook( response ) {
		if  ( response.status && response.authResponse.userID ) {
			$.post( '/session/facebook', {
				id: response.authResponse.userID
			}, function( data ) {
				window.location.href = '/';
				window.location.reload();
			});
		}
	}

	window.afterFBInit = function() {
		if ( ! $( 'body' ).hasClass( 'logged-in' ) ) {
			FB.getLoginStatus(function( response ) {
				if ( response.status === 'connected' ) {
					logInWithFacebook( response );
				} else {
					FB.Event.subscribe( 'auth.statusChange', logInWithFacebook);
				}
			});
		}
	};
}( window, window.jQuery ));
