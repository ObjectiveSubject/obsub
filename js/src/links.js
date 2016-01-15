/* 
 * Links
 */

(function( $, window, undefined ){

	$('.smooth-scroll').on('click', function(e){
		e.preventDefault();
		var target = $(this).attr('href'),
			offset = $(target).offset();
		$('html, body').animate({scrollTop: offset.top });
	});

})(jQuery, window);