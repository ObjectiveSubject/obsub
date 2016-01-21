/* 
 * Header
 */

(function( $, window, undefined ){

	var $window = $(window),
		$masthead = $('#masthead'),
		$pageHeader = $('.single-case_study .page-header'),
		offset = 30,
		mastheadTop,
		headerBottom;

	init();
	$window
		.on("resize", init)
		.on("scroll", onScroll);

	function init() {
		if ( $pageHeader.length > 0 ) {
			headerBottom = $pageHeader.offset().top + $pageHeader.outerHeight() - offset;
			if ( $window.scrollTop() < headerBottom ) {
				$masthead.addClass("light-theme");
			}
		}
		mastheadTop = $masthead.offset().top - offset;
	}

	function onScroll() {
		scrollTop = $window.scrollTop();
		if ( scrollTop >= mastheadTop ) {
			$masthead.addClass("fixed");
		} else {
			$masthead.removeClass("fixed");
		}

		if ( $pageHeader.length > 0 ) {
			if ( scrollTop >= headerBottom ) {
				$masthead.removeClass("light-theme");
			} else {
				$masthead.addClass("light-theme");
			}
		}
	}

})(jQuery, window);