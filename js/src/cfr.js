/*
 * CFR Case Study
 */

(function( $, window ){

	// Typeface Filtering ////////////////////////////////
	var letter_positions = {
		haarlemmer_times_georgia: 0,
		haarlemmer_georgia: -280,
		haarlemmer_times: -560,
		times_georgia: -840,
		haarlemmer: -1120,
		times: -1400,
		georgia: -1680,
	};

	function updateLetter(positions) {
		// Create string from visible typefaces
		var typeface_key = [];
		$('.type_filters [data-typeface].visible').each(function(){
			typeface_key.push($(this).attr('data-typeface'));
		});
		typeface_key = typeface_key.join('_');

		// Update background image position
		$('.letter_wrap').css({
			backgroundPosition: positions[typeface_key] + 'px 0',
		});
		$('#font_slides').attr('data-current-fonts', typeface_key);
	}

	$('.type_filters [data-typeface]').click(function(ev){
		ev.preventDefault();
		if ($('.type_filters [data-typeface].visible').length === 1 && ev.target.className.indexOf('visible') > -1) {
			return false;
		} else {
			$(this).toggleClass('visible hidden');
			updateLetter(letter_positions);
		}
	});

	$('.type_filters .notes').click(function(ev){
		ev.preventDefault();
		$(this).toggleClass('visible hidden');
		$('.info_dot').toggleClass('hidden');
	});

	// Typeface Slides ////////////////////////////////////////
	var $font_slides = $('#font_slides');

    $font_slides.slick();

    $font_slides
        .on('beforeChange', function(e, slick, current, next){
			$('.type_paging .index').removeClass('active');
			$('.type_paging .index[data-index="'+next+'"]').addClass('active');
		});

    $('.type_paging .index').click(function(e){
        e.preventDefault();
        $font_slides.slick('slickGoTo', $(this).data('index'));
    });

})(jQuery);
