/* 
 * Links
 */

(function( $, window, undefined ){

	var scrollSettings = {duration: 1000, mobileHA: false },
		$window = $(window);

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
		
		if ( $('body.home').length > 0 ){
			init();
			$window.on("resize", init);
			$window.on("scroll", onScroll);
		}

		function init() {
			offsetTop = $section.offset().top;
			winHeight = $window.height();
		}

		function onScroll() {
			var scrollTop = $window.scrollTop();
			if ( scrollTop >= offsetTop && scrollTop < (offsetTop + winHeight) ) {
				if ( $nextSection.length === 0 ) {
					$('.scroll-down')
						.attr('href', '#home-intro' )
						.addClass("reverse");
				} else {
					$('.scroll-down')
						.attr('href', '#' + $nextSection.attr('id') )
						.removeClass("reverse");
				}
			}
		}

	});
	

})(jQuery, window);