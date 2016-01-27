/* 
 * Tree Slider
 */

(function( $, window, undefined ){

	$(document).ready(function(){
			
		$('.slider-input').each(function(){
			var $input = $(this),
				$sliderRow = $input.closest('.slider-row'),
				$sliderElems = $input.siblings('.slider-track, .slider-thumb'),
				$imgTop = $sliderRow.find('img.top');

			$input.on('input', function(e){
				if ( OS.getMediaSize() !== "default" && OS.getMediaSize() !== "small") {
				
					var val = $input.val(),
						width = $imgTop.width(),
						height = $imgTop.height(),
						right = width * (val/100);

					$imgTop.css({
						clip: 'rect( 0, '+right+'px, '+height+'px, 0 )'
					});
					$sliderElems.css({
						left: val + '%'
					});

				}
			});
		});

	});

})(jQuery, window);