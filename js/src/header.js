/* 
 * Header
 */

(function( $, window, undefined ){

	var $window = $(window),
		$masthead = $('#masthead'),
		$pageHeader = $('.single-case_study .page-header'),
		offset,
		headerBottom;

	init();
	$window
		.on("resize", init)
		.on("scroll", onScroll);

	function init() {
		if ( OS.getMediaSize() == "medium" ) {
			offset = 100;
		} else {
			offset = 30;
		}
		if ( $pageHeader.length > 0 ) {
			headerBottom = $pageHeader.offset().top + $pageHeader.outerHeight() - offset;
			if ( $window.scrollTop() < headerBottom ) {
				$masthead.addClass("light-theme");
			}
		}
	}

	function onScroll() {
		var scrollTop = $window.scrollTop();
		
		if ( $pageHeader.length > 0 ) {
			if ( scrollTop >= headerBottom ) {
				$masthead.removeClass("light-theme");
			} else {
				$masthead.addClass("light-theme");
			}
		}
	}

})(jQuery, window);