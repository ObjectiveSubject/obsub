/* 
 * Page nav
 */

(function( $, window, undefined ){

	if ( $('.single-case_study').length > 0 ) {
		$(document).ready(onReady);
	}

	function onReady() {
		$('.page-nav li').velocity("fadeIn", {
			duration: 500,
			stagger: 200
		})
	}

})(jQuery, window);