/* 
 * Maps
 */

(function( $, window, undefined ){

	var $window = $(window),
		winHeight = $window.height(),
		mediaSize = getMediaSize(),
		$brooklyn, brooklynTop, 
		$oakland, oaklandTop,
		$addressBar;

	if ( $('.office-map').length > 0 && Modernizr.cssvhunit ) {

		$brooklyn 	 = $('.office-location.brooklyn');
		$oakland 	 = $('.office-location.oakland');
		$addressBar  = $('.address-sidebar');

		brooklynTop  = $brooklyn.offset().top;
		oaklandTop 	 = $oakland.offset().top;
		
		$window.on("resize", onResize);
		$window.on("scroll", onScroll);
	}

	function onResize() {
		winHeight = $window.height();
		brooklynTop = $brooklyn.offset().top;
		oaklandTop = $oakland.offset().top;
		mediaSize = getMediaSize();
	}

	function onScroll() {

		var scrollTop = $window.scrollTop(),
			scrollMid = scrollTop + (winHeight / 2);

		if ( mediaSize == "medium" ) {

			if ( scrollTop >= brooklynTop && scrollTop < oaklandTop ) {
				$brooklyn
					.addClass('fixed')
					.removeClass('offset');
				$addressBar
					.addClass('fixed')
					.removeClass('offset');
			} else if ( scrollTop >= oaklandTop ) {
				$brooklyn
					.removeClass('fixed')
					.addClass('offset');
				$addressBar
					.removeClass('fixed')
					.addClass('offset');
			} else {
				$brooklyn.removeClass('fixed offset');
				$addressBar.removeClass('fixed offset');
			}

			if ( scrollMid >= oaklandTop ) {
				$addressBar.attr("data-show", "oakland");
			} else {
				$addressBar.attr("data-show", "brooklyn");
			}

		}

	}

	function getMediaSize() {
		//detect if desktop/mobile
		return window.getComputedStyle(document.querySelector('body'), '::before').getPropertyValue('content').replace(/"/g, "").replace(/'/g, "");
	}

})(jQuery, window);