/*
 * Main Menu
 */

(function( $, window, undefined ){

	$('.menu-toggle').on('click', function(e){
		e.preventDefault();
		var $masthead = $('#masthead'),
			$mainNav = $('.main-navigation'),
			$menuItem = $('.menu-item'),
			$scrim = $('.main-menu-scrim'),
			animationSequence;

		if ( $masthead.hasClass('main-menu-active') ) {
			animationSequence = [
				{ 	e: $menuItem,	p: "fadeOut", o: { duration: 300 } },
				{ 	e: $scrim,
					p: "fadeOut",
					o: {
						duration: 300,
						complete: function(){
							$masthead.removeClass('main-menu-active');
						}
					}
				}
			];
			$.Velocity.RunSequence(animationSequence);
		} else {
			$masthead.addClass('main-menu-active');
			animationSequence = [
				{ e: $scrim,	p: "fadeIn", o: { duration: 300 } },
				{ e: $menuItem,	p: "fadeIn", o: { duration: 300, stagger: 75 } },
			];
			$.Velocity.RunSequence(animationSequence);
		}

	});

})(jQuery, window);
