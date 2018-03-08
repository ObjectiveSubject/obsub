/*
 * Case Study Previews
 */

(function( $, window, undefined ){

	var $caseStudies = $('.home .case-study');

	$caseStudies.each(function(i){

		var $that = $(this),
			id = $that.data('id'),
			color = $that.data('color'),
			$image = $('#image-' + id),
			$maskItems = $('.li-case-study-' + id),
			activeClass = 'active',
			isLast = i === $caseStudies.length - 1;

		OS.scrollCallbacks.push(function(scrollTop){

			var top = $that.offset().top - (window.innerHeight / 2) + 100, // an extra 100px up _feels_ like the "perceived" center
				height = $that.outerHeight();

			if ( scrollTop >= top && scrollTop < top + height ) {

				$that.addClass(activeClass).removeClass('past');					
				$maskItems.addClass(activeClass).removeClass('past');
				$image.addClass(activeClass).removeClass('past');

				if ( isLast ) {
					$('#case-studies').removeClass('reached-last');
				}

			} else if ( scrollTop >= top + height ) {

				$that.addClass('past').removeClass(activeClass);
				$maskItems.addClass('past').removeClass(activeClass);
				$image.addClass('past').removeClass(activeClass);

				if ( isLast ) {
					$('#case-studies').addClass('reached-last');
				}

			} else {

				$that.removeClass( activeClass + ' past' );
				$maskItems.removeClass( activeClass + ' past' );
				$image.removeClass( activeClass + ' past' );

			}

		});

	});

	$('#case-studies').each(function(){

		var $that = $(this),
			activeClass = 'has-active';

		OS.scrollCallbacks.push(function(scrollTop){

			var top = $that.offset().top,
				height = $that.outerHeight();

			if ( scrollTop >= top && scrollTop < top + height ) {

				$that.addClass(activeClass).removeClass('past');

			} else if ( scrollTop >= top + height ) { 

				$that.addClass('past').removeClass(activeClass);

			} else {

				$that.removeClass(activeClass + ' past');

			}

		});

	});

})(jQuery, window);
