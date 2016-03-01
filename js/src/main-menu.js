/*
 * Main Menu
 */

(function( $, window, undefined ){

	var $masthead = $('#masthead');

	$('.menu-toggle').on('click', function(e){
		e.preventDefault();
		var $mainNav = $('.main-navigation'),
			$menuItem = $('.main-navigation .menu-item'),
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

	if ( OS.isHome() ){

		OS.window.on("scroll", function(){
			var scrollTop = $(this).scrollTop();
			if ( scrollTop > 50 ) {
				$masthead.removeClass('hide-menu-toggle');
			} else {
				$masthead.addClass('hide-menu-toggle');
			}
		});

	}

})(jQuery, window);
