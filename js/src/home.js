/*
 * Case Study Previews
 */

(function ($, window, undefined) {
	console.log(window.innerWidth > 767)

	if ($(".js-case-study-container").length > 0 && window.innerWidth > 767) {
		console.log("this is in the case study block")
		var $caseStudies = $('.home .js-case-study-container'),
			current = 0,
			maskItemHeight = 0;

		$caseStudies.each(function (i) {

			var $that = $(this),
				id = $that.data('id'),
				color = $that.data('color'),
				$image = $('#image-' + id),
				$maskItem = $('#li-case-study-' + id),
				isLast = i === $caseStudies.length - 1;

			if ($caseStudies[i - 1]) {

				var lastId = $($caseStudies[i - 1]).data('id');
				maskItemHeight = $('#li-case-study-' + lastId).outerHeight();

			} else {

				maskItemHeight = $maskItem.outerHeight();

			}

			OS.scrollCallbacks.push(function (scrollTop) {

				var top = $that.offset().top,
					height = $that.outerHeight(),
					y,
					imageY;

				if (scrollTop >= top && scrollTop < top + height) {

					current = i;

					$maskItem
						.addClass('active')
						.removeClass('past')
						.css({
							transform: 'translate3d(0,0,0)'
						});

					imageY = (Math.min(1, (scrollTop - top) / height) * 8) + 50;

					$image
						.addClass('active')
						.removeClass('past')
						.css({
							transform: 'translate3d(-50%,-' + imageY + '%,0)'
						});

					if (isLast) {
						$('#case-studies').removeClass('reached-last');
					}

				} else if (scrollTop >= top + height) {

					y = (current - i) * maskItemHeight;

					$maskItem
						.addClass('past')
						.removeClass('active')
						.css({
							transform: 'translate3d(0,-' + y + 'px,0)'
						});

					$image.addClass('past').removeClass('active');

					if (isLast) {
						$('#case-studies').addClass('reached-last');
					}

				} else {

					y = ((i - current) * maskItemHeight) + (window.innerHeight * 0.5);

					$maskItem
						.removeClass('active past')
						.css({
							transform: 'translate3d(0,' + y + 'px,0)'
						});
					$image.removeClass('active past');

				}

			});

		});

		$('#case-studies').each(function () {

			var $that = $(this),
				activeClass = 'has-active';

			OS.scrollCallbacks.push(function (scrollTop) {

				var top = $that.offset().top,
					height = $that.outerHeight();

				if (scrollTop >= top && scrollTop < top + height) {

					$that.addClass(activeClass).removeClass('past');

				} else if (scrollTop >= top + height) {

					$that.addClass('past').removeClass(activeClass);

				} else {

					$that.removeClass(activeClass + ' past');

				}

			});

		});

	}

})(jQuery, window);
