/*
 * Links
 */

(function( $, window, undefined ){

	$(document).ready(function(){

		$('.parallax-node').each(function(){
			var $node = $(this),
				$container = $node.parent(),
				matrix = $node.css('transform'),
				mxLength = matrix.length,
				modifier = $node.data('speed-modifier');

			matrix = matrix.slice(7, mxLength-1).split(", "); // creates an array [stretchX, skewY, skewX, stretchY, X, Y]

			onScroll();
			OS.window.on("resize scroll", onScroll);

			function onScroll() {
				var scrollTop = OS.window.scrollTop(),
					containerTop = $container.offset().top,
					distance = scrollTop - containerTop;

				if ( OS.getMediaSize() !== "default" && OS.getMediaSize() !== "small" ) {
					$node.velocity({
						translateY: parseInt(matrix[5]) + (distance * modifier)
					}, 0);
				} else {
					$node.velocity({
						translateY: 0
					}, 0);
				}
			}
		});

	});

})(jQuery, window);
