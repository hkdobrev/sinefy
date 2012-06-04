(function( window, $, undefined ) {
		$(function() {
			if ( ! $( 'body' ).hasClass( 'logged-in' ) ) {
console.log('not logged in');
				FB.getLoginStatus(function( response ) {
console.log('getLoginStatus response:', response);
					if ( response.status === 'connected' ) {
						$.post( '/login', {
							id: response.authResponse.userID
						}, function( data ) {
console.log('post to login response data:', data);
							window.location.pathname = '/';
						});
					} else {
						FB.Event.subscribe( 'auth.statusChange', function( response ) {
console.log('auth.statusChange response:', response);
							if ( response.authResponse ) {
								window.location.pathname = '/';
							}
						});
					}
				});
			}
		});
}( window, window.jQuery ));
