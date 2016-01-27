/* 
 * Case Study Previews
 */

(function( $, window, undefined ){

	$('.home-intro, .home .case-study-preview').each(function(){
		var $preview = $(this),
			$container = $preview.find('.section-container'),
			$scrim = $preview.find('.scrim'),
			$content = $preview.find('.section-content'),
			scrimOpacity = 0.3,
			previewTop,
			winHeight,
			mediaSize;

		init();
		OS.window.on("resize", init);
		OS.window.on('scroll', onScroll);	
	
		function init() {
			mediaSize = OS.getMediaSize();
			winHeight = OS.window.height();
			previewTop = $preview.offset().top;
		}

		function onScroll() {
			var scrollTop = OS.window.scrollTop(),
				distance = scrollTop - previewTop;

			if ( distance >= 0 ) {
				$container.velocity({
					translateY: (distance * 0.3) + 'px'
				}, 0);
				
				// $scrim.velocity({
				// 	opacity: (distance * 0.00075) + scrimOpacity
				// }, 0);

				// $content.velocity({
				// 	opacity: 1 - (distance * 0.002)
				// }, 0);
			}

			// if ( scrollTop >= previewTop - (winHeight * 0.25) ) {
			// 	$preview.addClass("active");
			// } else {
			// 	$preview.removeClass("active");
			// }
		}
	});

})(jQuery, window);