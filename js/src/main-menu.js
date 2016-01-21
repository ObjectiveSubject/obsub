/* 
 * Main Menu
 */

(function( $, window, undefined ){

	$('.menu-toggle').on('click', function(e){
		e.preventDefault();
		var $siteHeader = $('.site-header'),
			$mainMenu = $('.main-menu'),
			// $wordmarkLight = $('.wordmark.light'),
			// $wordmarkDark = $('.wordmark.dark'),
			animationSequence;

		if ( $siteHeader.hasClass('main-menu-active') ) {
			$siteHeader.removeClass('main-menu-active');
			animationSequence = [
				{ e: $(".main-menu > li"),	p: { translateY: "20px" }, 	o: { duration: 200, stagger: 200 } },
				// { e: $wordmarkDark, 		p: "fadeIn", 		o: { duration: 300, display: "block" } },
				// { e: $wordmarkLight,		p: "fadeOut", 		o: { duration: 300, display: "block", sequenceQueue: false } },
				{ e: $mainMenu, 			p: "fadeOut" , 		o: { duration: 300, sequenceQueue: false } },
				{ e: $('.main-menu-scrim'), p: "fadeOut" , 		o: { duration: 300, sequenceQueue: false } }
			];
			$.Velocity.RunSequence(animationSequence);
		} else {
			if ( $('.main-menu-scrim').length === 0 ) {
				$('<div class="main-menu-scrim"></div>').appendTo('body');
			}
			$siteHeader.addClass('main-menu-active');
			animationSequence = [
				{ e: $('.main-menu-scrim'), p: "fadeIn", 		o: { duration: 300 } },
			    { e: $mainMenu, 			p: "fadeIn", 		o: { duration: 300, sequenceQueue: false } },
			    // { e: $wordmarkDark, 		p: "fadeOut", 		o: { duration: 300, sequenceQueue: false } },
			    // { e: $wordmarkLight, 		p: "fadeIn", 		o: { duration: 300, sequenceQueue: false } },
			    { e: $(".main-menu > li"), 	p: { translateY: "0" },	o: { duration: 200, stagger: 200 } },
			];
			$.Velocity.RunSequence(animationSequence);
		}
		
	});

})(jQuery, window);