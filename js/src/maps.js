/* 
 * Maps
 */

(function( $, window, undefined ){

	var $window = $(window),
		winHeight,
		mediaSize,
		$offices,
		toggleMapY,
		unFixedY;

	if ( $('.office-map').length > 0 && Modernizr.cssvhunit ) {

		$offices = $('.office-locations');
		initSizes();
		
		$window.on("resize", initSizes);
		$window.on("scroll", onScroll);
	}

	function initSizes() {
		winHeight 	= $window.height();
		mediaSize 	= OS.getMediaSize();
		officesTop 	= $offices.offset().top;
		toggleMapY	= $('.brooklyn .office-address').offset().top;
		unFixedY	= $('.office-location.oakland').offset().top;
	}

	function onScroll() {

		var scrollTop = $window.scrollTop();

		if ( mediaSize == "medium" ) {

			if ( scrollTop >= officesTop && scrollTop < unFixedY ) {
				$offices
					.addClass('fixed')
					.removeClass('un-fixed');
				$offices.attr("data-show-map", "brooklyn");
			} else if ( scrollTop >= unFixedY ) {
				$offices
					.addClass('un-fixed')
					.removeClass('fixed');
			} else {
				$offices.removeClass('fixed un-fixed');
				$offices.attr("data-show-map", "brooklyn");
			}

			if ( scrollTop >= toggleMapY ) {
				$offices.attr("data-show-map", "oakland");
			}

		}

	}

})(jQuery, window);