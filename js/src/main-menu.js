/*
 * Main Menu
 */

(function ($, window, undefined) {

	var $masthead = $('#masthead');

	$('.menu-toggle').on('click', function (e) {
		e.preventDefault();
		var $mainNav = $('.main-navigation'),
			$menuItem = $('.main-navigation .menu-item'),
			$scrim = $('.main-menu-scrim'),
			animationSequence;

		if ($masthead.hasClass('main-menu-active')) {
			animationSequence = [{
					e: $menuItem,
					p: "fadeOut",
					o: {
						duration: 300
					}
				},
				{
					e: $scrim,
					p: "fadeOut",
					o: {
						duration: 300,
						complete: function () {
							$masthead.removeClass('main-menu-active');
						}
					}
				}
			];
			$.Velocity.RunSequence(animationSequence);
		} else {
			$masthead.addClass('main-menu-active');
			animationSequence = [{
					e: $scrim,
					p: "fadeIn",
					o: {
						duration: 300
					}
				},
				{
					e: $menuItem,
					p: "fadeIn",
					o: {
						duration: 300,
						stagger: 75
					}
				},
			];
			$.Velocity.RunSequence(animationSequence);
		}

	});

	// if ( OS.isHome() ){

	var $previewNav = $('.preview-nav');

	OS.window.on("scroll", function () {
		var scrollTop = $(this).scrollTop();

		if (scrollTop > 50) {
			if ($masthead.hasClass('show-preview-menu')) {
				$masthead.removeClass('show-preview-menu');
				$previewNav.velocity({
					marginLeft: '50px',
					opacity: '0'
				}, {
					duration: 300,
					complete: hideElements
				});
			}

		} else {
			if (!$masthead.hasClass('show-preview-menu')) {
				$masthead.addClass('show-preview-menu');
				$previewNav.velocity({
					marginLeft: '0',
					opacity: '1'
				}, {
					duration: 300,
					begin: showElements
				});
			}

		}
	});

	// }

	function hideElements(elems) {
		$(elems).hide();
	}

	function showElements(elems) {
		$(elems).show();
	}

})(jQuery, window);
