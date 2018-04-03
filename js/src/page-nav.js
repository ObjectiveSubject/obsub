/*
 * Page nav
 */

(function ($, window, undefined) {
	// $('.single-case_study').length > 0 &&
	if (OS.getMediaSize() !== "default" && OS.getMediaSize() !== "small") {
		$(document).ready(onReady);
	}

	function onReady() {
		var animationSequence = [{
				e: $('.page-nav'),
				p: "slideDown",
				o: {
					duration: 500,
					delay: 500
				}
			},
			{
				e: $('.page-nav li:nth-child(1)'),
				p: {
					opacity: 1
				},
				o: {
					duration: 300
				}
			},
			{
				e: $('.page-nav li:nth-child(2)'),
				p: {
					opacity: 1
				},
				o: {
					duration: 300,
					sequenceQueue: false,
					delay: 100
				}
			},
			{
				e: $('.page-nav li:nth-child(3)'),
				p: {
					opacity: 1
				},
				o: {
					duration: 300,
					sequenceQueue: false,
					delay: 100
				}
			},
			{
				e: $('.page-nav li:nth-child(4)'),
				p: {
					opacity: 1
				},
				o: {
					duration: 300,
					sequenceQueue: false,
					delay: 100
				}
			}
		];
		$.Velocity.RunSequence(animationSequence);
	}

})(jQuery, window);
