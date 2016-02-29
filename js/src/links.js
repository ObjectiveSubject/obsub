/*
 * Links
 */

(function( $, window, undefined ){

	var scrollSettings = {duration: 1000, mobileHA: false },
		$scrollDownLink = $('.scroll-down');

	$('.smooth-scroll').on('click', function(e){
		e.preventDefault();
		var target = $(this).attr('href');
		$(target).velocity("scroll", scrollSettings);
	});

	$('.page-section').each(function(){
		var $section = $(this),
			$nextSection = $section.next('.page-section'),
			offsetTop,
			winHeight;

		init();
		OS.window.on("resize", init);
		OS.window.on("scroll", onScroll);

		function init() {
			offsetTop = $section.offset().top;
			winHeight = OS.window.height();
		}

		function onScroll() {
			var scrollTop = OS.window.scrollTop(),
				scrollLinkTop = $scrollDownLink.offset().top;

			if ( OS.isHome() ) {
				if ( scrollTop >= offsetTop && scrollTop < (offsetTop + winHeight) ) {
					if ( $nextSection.length === 0 ) {
						$scrollDownLink.addClass("off-canvas");
					} else {
						$scrollDownLink.removeClass("off-canvas");
						$scrollDownLink.attr('href', '#' + $nextSection.attr('id') );
					}
				}
				if ( scrollLinkTop >= offsetTop && scrollLinkTop < (offsetTop + winHeight) ) {
					if ( $section.hasClass('case-study-preview') ) {
						$scrollDownLink.addClass('light');
					} else {
						$scrollDownLink.removeClass('light');
					}
				}
			} else {
				if ( scrollTop > 0 ) {
					$scrollDownLink.addClass("off-canvas");
				} else {
					$scrollDownLink.removeClass("off-canvas");
				}
			}
		}

	});

	$('.case-study-title a').click(function(e){
		e.preventDefault();
		var $this = $(this),
			$section = $this.parents('.page-section'),
			href = $this.attr("href");

		var distance = Math.abs( $section.offset().top - OS.window.scrollTop() ),
			speed = ((distance * 5) > 1000 ) ? 1000 : distance * 5;

		$section.velocity("scroll", {
			mobileHA: false,
			duration: speed,
			complete: function(){
				OS.window.on("scroll", function(e){
					e.preventDefault();
				});
				location.href = href;
			}
		});
	});








})(jQuery, window);
