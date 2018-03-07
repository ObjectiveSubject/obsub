/*
 * Case Study Previews
 */

(function( $, window, undefined ){

	$('.home .case-study, #case-studies').each(function(){

		var $that = $(this),
			timeoutEnter,
			timeoutLeave, 
			activeClass = $that.is('#case-studies') ? 'has-active' : 'active';

		OS.scrollCallbacks.push(function(scrollTop){

			var top = $that.offset().top - (window.innerHeight / 2) + 100, // an extra 100px up _feels_ like the "perceived" center
				height = $that.outerHeight();

			if ( scrollTop >= top && scrollTop < top + height ) {

				if ( ! timeoutEnter ) {
					timeoutEnter = setTimeout(function(){
						$that.addClass(activeClass);
					}, 250);
				}
				clearTimeout(timeoutLeave);
				timeoutLeave = undefined;

			} else {

				if ( ! timeoutLeave ) {
					timeoutLeave = setTimeout(function(){
						$that.removeClass(activeClass);
					}, 250);
				}
				clearTimeout(timeoutEnter);
				timeoutEnter = undefined;
			}

		});

	});

})(jQuery, window);
