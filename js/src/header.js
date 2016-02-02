/* 
 * Header
 */

(function( $, window, undefined ){

	var $body = $('body'),
		offset;

	$(document).ready(function(){

		$('.page-section').each(function(){
			var $node = $(this);
			
			init();
			OS.window
				.on("resize", init)
				.on("scroll", OS.throttle(setUiTheme, 250));

			function setUiTheme() {
				var scrollTop = OS.window.scrollTop(),
					thresholdTop = $node.offset().top + offset,
					thresholdBottom = $node.offset().top + $node.outerHeight() + offset;

				if ( scrollTop >= thresholdTop && scrollTop < thresholdBottom ) {
					if ( $node.hasClass('use-ui-light-theme') ) {
						$body.addClass("ui-light-theme");
					} else {
						$body.removeClass("ui-light-theme");
					}
				}
			}

			function init() {
				if ( OS.getMediaSize() !== "default" && OS.getMediaSize() !== "small" ) {
					offset = -60;
				} else {
					offset = -30;
				}
				setUiTheme();
			}
		});

	});

})(jQuery, window);