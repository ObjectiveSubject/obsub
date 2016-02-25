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

			matrix = ( matrix == "none" ) ? ["0","0","0","0","0","0"] : matrix.slice(7, mxLength-1).split(", "); // creates an array [stretchX, skewY, skewX, stretchY, X, Y]

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


		$('.parallax-bg').each(function(){
			var $node = $(this),
				bgPosition = ["50%", 0],
				modifier = $node.data('speed-modifier');

			onScroll();
			OS.window.on("resize scroll", onScroll);

			function onScroll() {
				var scrollTop = OS.window.scrollTop(),
					nodeTop = $node.offset().top,
					distance = scrollTop - nodeTop;

				if ( OS.getMediaSize() !== "default" && OS.getMediaSize() !== "small" ) {
					$node.velocity({
						backgroundPositionY: bgPosition[1] + (distance * modifier)
					}, 0);
				} else {
					$node.velocity({
						backgroundPositionY: "0"
					}, 0);
				}
			}
		});

	});

})(jQuery, window);
