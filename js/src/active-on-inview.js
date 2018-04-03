/*
 * active-on-inview
 */

(function( $, window, undefined ){

	$(document).ready(function(){
		

		$('.active-on-inview').each(function(){
			var $node = $(this),
				offsetFactor = $node.data('offset') || 0,
				winHeight,
				nodeOffset,
				nodeTop;


			init();
			OS.window
				.on("resize", init)
				.on("scroll", onScroll);

			function init() {
				winHeight = OS.window.height();
				nodeOffset = (winHeight * offsetFactor) * -1;
			}
			function onScroll() {
				var scrollTop = OS.window.scrollTop();
				nodeTop = $node.offset().top + nodeOffset;
				if ( scrollTop >= nodeTop ) {
					$node.addClass('active');
				} else {
					$node.removeClass('active');
				}
			}
		});
	});

})(jQuery, window);
