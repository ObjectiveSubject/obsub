/* 
 * Links
 */

(function( $, window, undefined ){

	var scrollSettings = {duration: 1000, mobileHA: false };

	$('.smooth-scroll').on('click', function(e){
		e.preventDefault();
		var target = $(this).attr('href');
		$(target).velocity("scroll", scrollSettings);
	});

	$('.page-section').each(function(){
		var $section = $(this),
			$nextSection = $section.next('.page-section'),
			offsetTop,
			winHeight;
		
		init();
		OS.window.on("resize", init);
		OS.window.on("scroll", onScroll);

		function init() {
			offsetTop = $section.offset().top;
			winHeight = OS.window.height();
		}

		function onScroll() {
			var scrollTop = OS.window.scrollTop();
			if ( OS.isHome() ) {
				if ( scrollTop >= offsetTop && scrollTop < (offsetTop + winHeight) ) {
					if ( $nextSection.length === 0 ) {
						$('.scroll-down').addClass("off-canvas");
					} else {
						$('.scroll-down').removeClass("off-canvas");
						$('.scroll-down').attr('href', '#' + $nextSection.attr('id') );
					}
				}
			} else {
				if ( scrollTop > 0 ) {
					$('.scroll-down').addClass("off-canvas");
				} else {
					$('.scroll-down').removeClass("off-canvas");
				}
			}
		}

	});
	

})(jQuery, window);