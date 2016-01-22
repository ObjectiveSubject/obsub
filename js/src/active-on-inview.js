/* 
 * active-on-inview
 */

(function( $, window, undefined ){

	$(document).ready(function(){
		var $window = $(window);

		$('.active-on-inview').each(function(){
			var $node = $(this),
				winHeight,
				nodeOffset;

			init();
			$window
				.on("resize", init)
				.on("scroll", onScroll);

			function init() {
				winHeight = $window.height();
				nodeOffset = $node.offset().top;
			}
			function onScroll() {
				var scrollTop = $window.scrollTop();

				if ( scrollTop > nodeOffset - (winHeight / 2) ) {
					$node.addClass('active');
				} else {
					$node.removeClass('active');
				}
			}
		});
	});

})(jQuery, window);