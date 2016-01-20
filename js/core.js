/* 
 * Case Studies
 */

(function( $, window, undefined ){

	var $sections = $('.page-section'),
		$window = $(window),
		defaultColor = '#F0F0EE';
		mediaSize = getMediaSize();

	if ( mediaSize == "medium" ) {

		$sections.each(function(){
			var $section = $(this),
				sectionColor = $section.data('color') || defaultColor,
				$nextSection = $section.next('.page-section'),
				nextSectionColor = $nextSection.data('color') || defaultColor,
				animation_begin_pos = $section.offset().top, //where you want the animation to begin
				animation_end_pos = $section.offset().top + $section.outerHeight(), //where you want the animation to stop
				beginning_color = new $.Color( sectionColor ), //we can set this here, but it'd probably be better to get it from the CSS; for the example we're setting it here.
				ending_color = ( $nextSection.length ) ? new $.Color( nextSectionColor ) : new $.Color( defaultColor ); //what color we want to use in the end
			$window.on("scroll", function(){
				var scrollTop = $window.scrollTop();
				if ( scrollTop >= animation_begin_pos && scrollTop < animation_end_pos ) {
					var percentScrolled = (scrollTop - animation_begin_pos) / ( animation_end_pos - animation_begin_pos ),
						newRed   = beginning_color.red() + ( ( ending_color.red() - beginning_color.red() ) * percentScrolled ),
						newGreen = beginning_color.green() + ( ( ending_color.green() - beginning_color.green() ) * percentScrolled ),
						newBlue  = beginning_color.blue() + ( ( ending_color.blue() - beginning_color.blue() ) * percentScrolled ),
		            	newColor = new $.Color( newRed, newGreen, newBlue );
		            $('body').css({ backgroundColor: newColor });
				}
			});
		});

	}

	function getMediaSize() {
		//detect if desktop/mobile
		return window.getComputedStyle(document.querySelector('body'), '::before').getPropertyValue('content').replace(/"/g, "").replace(/'/g, "");
	}

})(jQuery, window);
/* 
 * Case Study Previews
 */

(function( $, window, undefined ){

	$(document).ready(function(){

		var $window = $(window),
			windowHeight = $window.height();

		$('.case-study-preview').each(function(){
			var $preview = $(this),
				$image = $preview.find('.section-image'),
				$sectionContent = $preview.find('.section-content'),
				outerHeight, offsetTop, offsetBottom, contentHeight;

			init();
			$window.on("resize", init);
			$window.on('scroll', onScroll);			

			function init() {
				outerHeight = $preview.outerHeight();
				offsetTop = $preview.offset().top - (outerHeight * 0.25);
				offsetBottom = $preview.offset().top + ( outerHeight * 0.5 );
				contentHeight = $sectionContent.outerHeight();
			}

			function onScroll() {
				var scrollTop = $window.scrollTop();
				if ( scrollTop >= offsetTop && scrollTop < offsetBottom ) {
					$preview.addClass('active');
				} else {
					$preview.removeClass('active');
				}
			}
		});

	});

})(jQuery, window);
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
/* 
 * Main Menu
 */

(function( $, window, undefined ){

	$('.menu-toggle').on('click', function(e){
		e.preventDefault();
		var $siteHeader = $('.site-header'),
			$mainMenu = $('.main-menu'),
			$wordmarkLight = $('.wordmark.light'),
			$wordmarkDark = $('.wordmark.dark'),
			animationSequence;

		if ( $siteHeader.hasClass('main-menu-active') ) {
			$siteHeader.removeClass('main-menu-active');
			animationSequence = [
				{ e: $(".main-menu > li"),	p: { translateY: "20px" }, 	o: { duration: 200, stagger: 200 } },
				{ e: $wordmarkDark, 		p: "fadeIn", 		o: { duration: 300, display: "block" } },
				{ e: $wordmarkLight,		p: "fadeOut", 		o: { duration: 300, display: "block", sequenceQueue: false } },
				{ e: $mainMenu, 			p: "fadeOut" , 		o: { duration: 300, sequenceQueue: false } },
				{ e: $('.main-menu-scrim'), p: "fadeOut" , 		o: { duration: 300, sequenceQueue: false } }
			];
			$.Velocity.RunSequence(animationSequence);
		} else {
			if ( $('.main-menu-scrim').length === 0 ) {
				$('<div class="main-menu-scrim"></div>').appendTo('body');
			}
			$siteHeader.addClass('main-menu-active');
			animationSequence = [
				{ e: $('.main-menu-scrim'), p: "fadeIn", 		o: { duration: 300 } },
			    { e: $mainMenu, 			p: "fadeIn", 		o: { duration: 300, sequenceQueue: false } },
			    { e: $wordmarkDark, 		p: "fadeOut", 		o: { duration: 300, sequenceQueue: false } },
			    { e: $wordmarkLight, 		p: "fadeIn", 		o: { duration: 300, sequenceQueue: false } },
			    { e: $(".main-menu > li"), 	p: { translateY: "0" },	o: { duration: 200, stagger: 200 } },
			];
			$.Velocity.RunSequence(animationSequence);
		}
		
	});

})(jQuery, window);
/* 
 * Maps
 */

(function( $, window, undefined ){

	var $window = $(window),
		winHeight,
		mediaSize,
		$offices,
		toggleMapY,
		unFixedY;

	if ( $('.office-map').length > 0 && Modernizr.cssvhunit ) {

		$offices = $('.office-locations');
		initSizes();
		
		$window.on("resize", initSizes);
		$window.on("scroll", onScroll);
	}

	function initSizes() {
		winHeight 	= $window.height();
		mediaSize 	= getMediaSize();
		officesTop 	= $offices.offset().top;
		toggleMapY	= $('.brooklyn .office-address').offset().top;
		unFixedY	= $('.office-location.oakland').offset().top;
	}

	function onScroll() {

		var scrollTop = $window.scrollTop();

		if ( mediaSize == "medium" ) {

			if ( scrollTop >= officesTop && scrollTop < unFixedY ) {
				$offices
					.addClass('fixed')
					.removeClass('un-fixed');
				$offices.attr("data-show-map", "brooklyn");
			} else if ( scrollTop >= unFixedY ) {
				$offices
					.addClass('un-fixed')
					.removeClass('fixed');
			} else {
				$offices.removeClass('fixed un-fixed');
				$offices.attr("data-show-map", "brooklyn");
			}

			if ( scrollTop >= toggleMapY ) {
				$offices.attr("data-show-map", "oakland");
			}

		}

	}

	function getMediaSize() {
		//detect if desktop/mobile
		return window.getComputedStyle(document.querySelector('body'), '::before').getPropertyValue('content').replace(/"/g, "").replace(/'/g, "");
	}

})(jQuery, window);
/* 
 * Slideshows
 */

(function( $, window, undefined ){

	$(document).ready(function(){

		$('.os-slideshow').each(function(){

			var slides = $(this),
				settings = {
					mobileFirst: true,
					dots: true
				};

			if ( slides.hasClass('center-mode') ) {
				$.extend(settings, {
					centerMode: true, 
					centerPadding: "20px", 
					slidesToShow: 1,
					responsive: [
					    {
					      breakpoint: 768,
					      settings: {
					        centerMode: true,
					        centerPadding: '40px',
					        slidesToShow: 1
					      }
					    },
					    {
					      breakpoint: 960,
					      settings: {
					        centerMode: true,
					        centerPadding: '100px',
					        slidesToShow: 1
					      }
					    }
					]
				});
			}
			
			slides.slick(settings);

		});

	});

})(jQuery, window);