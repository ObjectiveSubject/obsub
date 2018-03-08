/*
 * Case Study Previews
 */

(function( $, window, undefined ){

	$('.home .case-study').each(function(){

		var $that = $(this),
			id = $that.data('id'),
			color = $that.data('color'),
			$image = $('#image-' + id),
			$maskItem = $('#li-case-study-' + id),
			activeClass = 'active',
			colorIsSet = false;

		OS.scrollCallbacks.push(function(scrollTop){

			var top = $that.offset().top - (window.innerHeight / 2) + 100, // an extra 100px up _feels_ like the "perceived" center
				height = $that.outerHeight();

			if ( scrollTop >= top && scrollTop < top + height ) {

				$that.addClass(activeClass).removeClass('past');					
				$maskItem.addClass(activeClass).removeClass('past');
				$image.addClass(activeClass).removeClass('past');

				if ( ! colorIsSet ) {
					$('.bg-image').css({
						backgroundColor: color
					});
					colorIsSet = true;
				}

			} else if ( scrollTop > top + height ) {

				$that.addClass('past').removeClass(activeClass);
				$maskItem.addClass('past').removeClass(activeClass);
				$image.addClass('past').removeClass(activeClass);

				colorIsSet = false;

			} else {

				$that.removeClass( activeClass + ' past' );
				$maskItem.removeClass( activeClass + ' past' );
				$image.removeClass( activeClass + ' past' );

				colorIsSet = false;

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

				$that.addClass(activeClass);

			} else {

				$that.removeClass(activeClass);
				// unsetBgColor();
				$('.bg-image').css({
					backgroundColor: 'black'
				});

			}

		});

	});

	// function setBgColor(color) {

	// 	var $bg = $('.bg-color');

	// 	var start = 75,
	// 		end = 67,
	// 		countDirection = start < end ? 'up' : 'down',
	// 		duration = 1, //seconds
	// 		increment = end / (duration * 60),
	// 		request;

	// 	function loop() {
	// 		var shouldContinue,
	// 			position;

	// 		if ( countDirection == 'up' ) {
	// 			shouldContinue = start <= end;
	// 			start += increment;
	// 		} else {
	// 			shouldContinue = start >= end;
	// 			start -= increment;
	// 		}

	// 		if ( shouldContinue ) {
	// 			$bg.css({
	// 				backgroundImage: 'linear-gradient( to bottom, #00000075 0, #00000075 '+start+'%, '+color+'85 '+start+'%, '+color+'85 100% )'
	// 			});
	// 			request = requestAnimationFrame(loop);
	// 		} else {
	// 			cancelAnimationFrame( request );
	// 		}
	// 	}

	// 	loop();

	// }

	// function unsetBgColor() {

	// 	$('.bg-color').css({
	// 		backgroundColor: ''
	// 	});

	// }

})(jQuery, window);
