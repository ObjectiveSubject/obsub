/* 
 * Links
 */

(function( $, window, undefined ){

	var $window = $(window);

	$(document).ready(function(){

		$('[data-parallax-node]').each(function(){
			var $node = $(this),
				factor = $node.data('parallax-node'),
				nodeTop,
				winHeight,
				threshold;

			init();
			$window
				.on("resize", init)
				.on("scroll", onScroll);

			function init() {
				nodeTop = $node.offset().top;
				winHeight = $window.height();
				threshold = nodeTop - winHeight;
			}

			function onScroll() {
				var scrollTop = $window.scrollTop(),
					offset = scrollTop - threshold;

				if ( OS.getMediaSize() !== "default" && OS.getMediaSize() !== "small" ) {
					
					if ( scrollTop >= threshold ) {
						$node.css({
							transform: 'translateY('+ (offset * factor) + 'px)',
							zIndex: "1"
						});
					}
				
				}
			}
		});

	});

})(jQuery, window);