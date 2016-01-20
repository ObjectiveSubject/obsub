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
				outerHeight, offsetTop, offsetBottom, contentHeight;

			init();
			$window.on("resize", init);
			$window.on('scroll', onScroll);			

			function init() {
				outerHeight = $preview.outerHeight();
				offsetTop = $preview.offset().top - (outerHeight * 0.25);
				offsetBottom = $preview.offset().top + ( outerHeight * 0.5 );
				contentHeight = $sectionContent.outerHeight();
			}

			function onScroll() {
				var scrollTop = $window.scrollTop();
				if ( scrollTop >= offsetTop && scrollTop < offsetBottom ) {
					$preview.addClass('active');
				} else {
					$preview.removeClass('active');
				}
			}
		});

	});

})(jQuery, window);