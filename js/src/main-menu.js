/* 
 * Main Menu
 */

(function( $, window, undefined ){

	$('.menu-toggle').on('click', function(e){
		e.preventDefault();
		var $siteHeader = $('.site-header'),
			$mainMenu = $('.main-menu');

		if ( $siteHeader.hasClass('main-menu-active') ) {
			$('.main-menu-scrim').fadeOut(300, function(){
				$(this).remove();
			});
			$mainMenu.fadeOut(300);
			$siteHeader.removeClass('main-menu-active');
		} else {
			$('<div class="main-menu-scrim"></div>').appendTo('body').fadeIn(300);
			$siteHeader.addClass('main-menu-active');
			$mainMenu.fadeIn(300);
		}
		
	});

})(jQuery, window);