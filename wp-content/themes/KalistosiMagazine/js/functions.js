/*
	LiveChat scripts
*/
var $ = jQuery.noConflict();
jQuery(document).ready(function( $ ) 
{
	var DziewczynaInformatyka =
	{		
		init: function()
		{
			this.facebookLikeBox();
			this.eucookie();
			this.infiniteLoop();
		},

		facebookLikeBox: function()
		{
			window.fbAsyncInit = function() {
				FB.init({
					status: true,
					cookie: true,
					xfbml: true
				});
			};
			(function() {
				var e = document.createElement('script');
				e.async = true;
				e.src = document.location.protocol + '//connect.facebook.net/pl_PL/all.js';
				document.getElementById('fb-root').appendChild(e);
			}());

			$('#fb_like_box').hover(
					function() {
						$(this).stop().animate({
							left: '0'
						}, 'slow');
					},
					function() {
						$(this).stop().animate({
							left: '-237px'
						}, 'slow');
					}
			);
		},
		eucookie: function()
		{
			EuCookie.init();
		},
		infiniteLoop: function()
		{
			
			$( document.body ).on( 'post-load', function () {
				// New posts have been added to the page.	
				console.log('new posts');
			} );
		}
	}
	
	DziewczynaInformatyka.init();
});