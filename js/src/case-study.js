/* 
 * Case Study Previews
 */

(function( $, window, undefined ){

	$(document).ready(function(){

		var $window = $(window),
			windowHeight = $window.height();

		$('.case-study-preview').each(function(){
			var $preview = $(this),
				offsetTop = $preview.offset().top,
				outerHeight = $(this).outerHeight(),
				offsetBottom = offsetTop + ( outerHeight * 0.25 ) ,
				$image = $preview.find('.section-image'),
				$sectionContent = $preview.find('.section-content'),
				contentHeight = $sectionContent.outerHeight();
				
			$window.on('scroll', function(){
				var scrollTop = $window.scrollTop();
				if ( scrollTop >= offsetTop && scrollTop < offsetBottom ) {
					$preview.addClass('active');
					if ( $sectionContent.css('position') !== "fixed" ){
						$sectionContent.css({
							position: 'fixed',
							top: ( $sectionContent.offset().top + (contentHeight/2) - scrollTop) + 'px'
						});
					}
					// console.log('contentTop: '+contentTop+', scrollTop: '+scrollTop);
				} else if ( scrollTop >= offsetBottom ) {
					$preview.removeClass('active');
					if ( $sectionContent.css('position') == "fixed" ){
						$sectionContent.css({
							position: 'absolute',
							top: ( $sectionContent.offset().top + (contentHeight/2) - offsetTop) + 'px'
						});
					}
				} else {
					$preview.removeClass('active');
					$sectionContent.css({
						position: 'relative',
						top: '50%'
					});
				}
			});
		});

	});

})(jQuery, window);