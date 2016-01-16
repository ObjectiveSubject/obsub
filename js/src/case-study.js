/* 
 * Case Study Previews
 */

(function( $, window, undefined ){

	var $window = $(window);

	$('.case-study-preview').each(function(){
		var $this = $(this),
			activeOffset = $this.data('active-offset'),
			offsetTop = $this.offset().top + activeOffset,
			offsetBottom = offsetTop + $(this).outerHeight(),
			$image = $this.find('.section-image');
			
		$window.on('scroll', function(){
			var scrollTop = $window.scrollTop();
			if ( scrollTop >= offsetTop && scrollTop < offsetBottom ) {
				$this.addClass('active');
			} else {
				$this.removeClass('active');
			}
		});

	});

})(jQuery, window);