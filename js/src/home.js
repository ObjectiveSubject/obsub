/* 
 * Case Study Previews
 */

(function( $, window, undefined ){

	$(document).ready(function(){

		var $window = $(window),
			windowHeight = $window.height();

		$('.case-study-preview').each(function(){
			var $preview = $(this),
				$image = $preview.find('.section-image'),
				$sectionContent = $preview.find('.section-content'),
				mediaSize, outerHeight, offsetTop, offsetBottom, contentHeight;

			if ( $('body.home').length > 0 ){
				init();
				$window.on("resize", init);
				$window.on('scroll', onScroll);	
			}		

			function init() {
				mediaSize = OS.getMediaSize();
				outerHeight = $preview.outerHeight();
				offsetTop = $preview.offset().top - (outerHeight * 0.25);
				offsetBottom = $preview.offset().top + ( outerHeight * 0.5 );
				contentHeight = $sectionContent.outerHeight();
			}

			function onScroll() {
				var scrollTop = $window.scrollTop();

				if ( mediaSize == "medium" ) {
					if ( scrollTop >= offsetTop && scrollTop < offsetBottom ) {
						$preview.addClass('active');
					} else {
						$preview.removeClass('active');
					}
				}
			}
		});

	});

})(jQuery, window);