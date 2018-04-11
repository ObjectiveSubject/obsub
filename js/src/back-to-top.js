/**
 * Back to top link behavior
 */

(function (window, $) {

	var $body = $('body'),
		windowHeight = window.innerHeight;

	OS.scrollCallbacks.push(function (scrollTop) {

		if (scrollTop > windowHeight / 2) {

			$body.addClass('page-has-scrolled');

		} else {

			$body.removeClass('page-has-scrolled');

		}

	});

})(this, jQuery);
