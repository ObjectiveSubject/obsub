/* 
 * Main Menu
 */

(function( $, window, undefined ){

	$('.menu-toggle').on('click', function(e){
		e.preventDefault();
		var $siteHeader = $('.site-header'),
			$mainMenu = $('.main-menu');

		if ( $siteHeader.hasClass('main-menu-active') ) {
			$('.main-menu-scrim').velocity("fadeOut", {
				duration: 300,
				complete: function(){
					$('.main-menu-scrim').remove();
				}
			});
			$mainMenu.velocity("fadeOut", { duration: 300 });
			$siteHeader.removeClass('main-menu-active');
		} else {
			$('<div class="main-menu-scrim"></div>').appendTo('body').velocity("fadeIn", { duration: 300 });
			$siteHeader.addClass('main-menu-active');
			$mainMenu.velocity("fadeIn", { duration: 300 });
		}
		
	});

})(jQuery, window);