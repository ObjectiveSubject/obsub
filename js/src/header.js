/* 
 * Header
 */

(function( $, window, undefined ){

	var $body = $('body'),
		$caseStudyHeader = $('.single-case_study .page-header'),
		offset,
		headerBottom,
		caseStudiesTop, clientsTop;

	init();
	OS.window
		.on("resize", init)
		.on("scroll", onScroll);

	function init() {
		if ( OS.getMediaSize() !== "default" && OS.getMediaSize() !== "small" ) {
			offset = 60;
		} else {
			offset = 30;
		}
		if ( OS.isCaseStudy() ) {
			headerBottom = $caseStudyHeader.outerHeight() - offset;
			if ( OS.window.scrollTop() < headerBottom ) {
				$body.addClass("ui-light-theme");
			}
		}
		if ( OS.isHome() ) {
			caseStudiesTop = $('.home .case-study-preview').first().offset().top;
			clientsTop = $('.former-clients').offset().top;
		}
	}

	function onScroll() {
		var scrollTop = OS.window.scrollTop();
		
		// Set light theme if on top of case study header
		if ( OS.isCaseStudy() ) {
			if ( scrollTop >= headerBottom ) {
				$body.removeClass("ui-light-theme");
			} else {
				$body.addClass("ui-light-theme");
			}
		}

		if ( OS.isHome() ){
			if ( scrollTop >= (caseStudiesTop - offset) && scrollTop < (clientsTop - offset) ) {
				$body.addClass("ui-light-theme");
			} else {
				$body.removeClass("ui-light-theme");
			}
		}
	}

})(jQuery, window);