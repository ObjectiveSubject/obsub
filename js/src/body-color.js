/* 
 * Case Studies
 */

(function( $, window, undefined ){

	var $sections = $('.page-section'),
		$window = $(window),
		defaultColor = '#F0F0EE';
		mediaSize = getMediaSize();

	if ( mediaSize == "medium" ) {

		$sections.each(function(){
			var $section = $(this),
				sectionColor = $section.data('color') || defaultColor,
				$nextSection = $section.next('.page-section'),
				nextSectionColor = $nextSection.data('color') || defaultColor,
				animation_begin_pos = $section.offset().top, //where you want the animation to begin
				animation_end_pos = $section.offset().top + $section.outerHeight(), //where you want the animation to stop
				beginning_color = new $.Color( sectionColor ), //we can set this here, but it'd probably be better to get it from the CSS; for the example we're setting it here.
				ending_color = ( $nextSection.length ) ? new $.Color( nextSectionColor ) : new $.Color( defaultColor ); //what color we want to use in the end
			$window.on("scroll", function(){
				var scrollTop = $window.scrollTop();
				if ( scrollTop >= animation_begin_pos && scrollTop < animation_end_pos ) {
					var percentScrolled = (scrollTop - animation_begin_pos) / ( animation_end_pos - animation_begin_pos ),
						newRed   = beginning_color.red() + ( ( ending_color.red() - beginning_color.red() ) * percentScrolled ),
						newGreen = beginning_color.green() + ( ( ending_color.green() - beginning_color.green() ) * percentScrolled ),
						newBlue  = beginning_color.blue() + ( ( ending_color.blue() - beginning_color.blue() ) * percentScrolled ),
		            	newColor = new $.Color( newRed, newGreen, newBlue );
		            $('body').css({ backgroundColor: newColor });
				}
			});
		});

	}

	function getMediaSize() {
		//detect if desktop/mobile
		return window.getComputedStyle(document.querySelector('body'), '::before').getPropertyValue('content').replace(/"/g, "").replace(/'/g, "");
	}

})(jQuery, window);