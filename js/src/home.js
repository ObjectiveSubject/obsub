/*
 * Case Study Previews
 */

(function( $, window, undefined ){

	$(document).ready(function(){
		setTimeout(function(){
			$('body').addClass('loaded');
		}, 500);
	});

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
			var scrollTop,
				distance;

			if ( mediaSize !== "default" && mediaSize !== "small" ) {
				scrollTop = OS.window.scrollTop();
				distance = scrollTop - previewTop;

				if ( distance >= 0 ) {
					$container.velocity({
						translateY: (distance * 0.5) + 'px'
					}, 0);
				} else if ( distance > $preview.outerHeight() / 2 ) {
					$container.velocity({
						translateY: '50%'
					}, 0);
				} else {
					$container.velocity({
						translateY: '0px'
					}, 0);
				}
			}
		}
	});

})(jQuery, window);
