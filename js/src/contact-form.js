/* 
 * contact form
 */

(function( $, window, undefined ){

	$('.contact-form .gateway').click(function(e){
		e.preventDefault();
		var $target = $( $(this).attr('href') );

		if ( $target.css("display") !== "block" ){
			$target.velocity("fadeIn", {duration: 400});
			$('.input-row').first()
				.velocity("fadeIn", {duration: 400});
			// $('.input-row').focus();
		}
	});

	$('.input-row input').keyup(function(){
		var $input = $(this),
			timeout = setTimeout(function(){
				if ( $input.val() !== "" ) {
					activateNextInput();
				}
			}, 1000);

		$(this).keydown(function(){
			clearTimeout(timeout);
		});
	});

	$('.input-row input').focus(function(){
		$(this).parents(".input-row").addClass("current");
	});

	$('.input-row input').blur(function(){
		$(this).parents(".input-row").removeClass("current");
	});

	function activateNextInput() {
		var $current = $('.input-row.current'),
			$next = $current.next(".input-row");
		if ( $current.length !== 0 ) {
			$current.removeClass("current").addClass("complete");
		}
		if ( $next.length !== 0 ) {
			$next.velocity("fadeIn", {duration: 400});
		}

		$('.form-nav a').each(function(n){
			var complete = $('.input-row.complete').length;
			if ( n < complete ) {
				$(this).addClass("complete").removeClass("active");
			}
			if ( n == complete ) {
				$(this).addClass("active");
			}
		});
	}


})(jQuery, window);