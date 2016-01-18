/* 
 * Links
 */

(function( $, window, undefined ){

	$('.smooth-scroll').on('click', function(e){
		e.preventDefault();
		var target = $(this).attr('href');
		$(target).velocity("scroll", {duration: 1000, mobileHA: false });
	});

})(jQuery, window);