/* 
 * active-on-inview
 */

(function( $, window, undefined ){

	$(document).ready(function(){
		var $window = $(window);

		$('.active-on-inview').each(function(){
			var $node = $(this),
				winHeight,
				nodeOffset;

			init();
			$window
				.on("resize", init)
				.on("scroll", onScroll);

			function init() {
				winHeight = $window.height();
				nodeOffset = $node.offset().top;
			}
			function onScroll() {
				var scrollTop = $window.scrollTop();

				if ( scrollTop > nodeOffset - (winHeight / 2) ) {
					$node.addClass('active');
				} else {
					$node.removeClass('active');
				}
			}
		});
	});

})(jQuery, window);
/* 
 * Case Studies
 */

(function( $, window, undefined ){

	var $sections = $('.page-section'),
		$window = $(window),
		defaultColor = '#F0F0EE';
		mediaSize = OS.getMediaSize();

	if ( mediaSize == "medium" && $('[data-color]').length > 0 ) {

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

})(jQuery, window);
/* 
 * contact form
 */

(function( $, window, undefined ){

	var timeout,
		$rowInput = $('.input-row input');

	$('.contact-form .gateway').click(function(e){
		e.preventDefault();
		var target = $(this).attr('href'),
			value = $(this).data('value'),
			$formFields = $( $(this).data('fields') );

		$('.subject-select input[type="radio"]').not('[value="'+value+'"]').attr("checked", false);
		$('.subject-select input[value="'+value+'"]').attr("checked", "checked").change();

		$(target).velocity("scroll", {duration: 500});

		if ( $formFields.css("display") !== "block" ){
			$formFields.velocity("fadeIn", {duration: 400});
			$('.input-row').first()
				.velocity("fadeIn", {
					duration: 400, 
					complete: function(){
						$('#contact_name').focus();
					}
				});
		}
	});

	$('input[type="radio"]').on("change", function(){
		var value = $(this).val(),
			$relatedLink = $('a.gateway[data-value="'+value+'"]');

		$('.subject-select').addClass("has-selection");
		
		if ( ! $relatedLink.hasClass('selected') ){
			$('a.gateway').removeClass("selected");
			$relatedLink.addClass("selected");
		}
	});

	$rowInput
		.keyup(function(){
			var $input = $(this);
			clearTimeout(timeout);
			timeout = setTimeout(function(){
				if ( $input.val() !== "" ) {
					activateNextInput();
				}
			}, 600);
		})
		.keydown(function(){
			clearTimeout(timeout);
		})
		.focus(function(){
			$(this).parents(".input-row").addClass("current");
		})
		.blur(function(){
			$(this).parents(".input-row").removeClass("current");
		});

	$('.input-row textarea').keyup(function(){
		if ( $(this).val() !== "" ) {
			$('.form-nav span').last().addClass("complete").removeClass("active");
			$('.input-row input[type="submit"]').attr("disabled", false);
		} else {
			$('.form-nav span').last().removeClass("complete").addClass("active");
			$('.input-row input[type="submit"]').attr("disabled", true);
		}
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

		$('.form-nav span').each(function(n){
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
/* 
 * Header
 */

(function( $, window, undefined ){

	var $window = $(window),
		$masthead = $('#masthead'),
		$pageHeader = $('.single-case_study .page-header'),
		offset,
		headerBottom;

	init();
	$window
		.on("resize", init)
		.on("scroll", onScroll);

	function init() {
		if ( OS.getMediaSize() == "medium" ) {
			offset = 100;
		} else {
			offset = 30;
		}
		if ( $pageHeader.length > 0 ) {
			headerBottom = $pageHeader.offset().top + $pageHeader.outerHeight() - offset;
			if ( $window.scrollTop() < headerBottom ) {
				$masthead.addClass("light-theme");
			}
		}
	}

	function onScroll() {
		var scrollTop = $window.scrollTop();
		
		if ( $pageHeader.length > 0 ) {
			if ( scrollTop >= headerBottom ) {
				$masthead.removeClass("light-theme");
			} else {
				$masthead.addClass("light-theme");
			}
		}
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
				mediaSize, outerHeight, offsetTop, offsetBottom, contentHeight;

			if ( $('body.home').length > 0 ){
				init();
				$window.on("resize", init);
				$window.on('scroll', onScroll);	
			}		

			function init() {
				mediaSize = OS.getMediaSize();
				outerHeight = $preview.outerHeight();
				offsetTop = $preview.offset().top - (outerHeight * 0.25);
				offsetBottom = $preview.offset().top + ( outerHeight * 0.5 );
				contentHeight = $sectionContent.outerHeight();
			}

			function onScroll() {
				var scrollTop = $window.scrollTop();

				if ( mediaSize == "medium" ) {
					if ( scrollTop >= offsetTop && scrollTop < offsetBottom ) {
						$preview.addClass('active');
					} else {
						$preview.removeClass('active');
					}
				}
			}
		});

	});

})(jQuery, window);
/* 
 * Links
 */

(function( $, window, undefined ){

	var scrollSettings = {duration: 1000, mobileHA: false },
		$window = $(window);

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
		
		if ( $('body.home').length > 0 ){
			init();
			$window.on("resize", init);
			$window.on("scroll", onScroll);
		}

		function init() {
			offsetTop = $section.offset().top;
			winHeight = $window.height();
		}

		function onScroll() {
			var scrollTop = $window.scrollTop();
			if ( scrollTop >= offsetTop && scrollTop < (offsetTop + winHeight) ) {
				if ( $nextSection.length === 0 ) {
					$('.scroll-down')
						.attr('href', '#home-intro' )
						.addClass("reverse");
				} else {
					$('.scroll-down')
						.attr('href', '#' + $nextSection.attr('id') )
						.removeClass("reverse");
				}
			}
		}

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
			animationSequence;

		if ( $siteHeader.hasClass('main-menu-active') ) {
			$siteHeader.removeClass('main-menu-active');
			animationSequence = [
				// { e: $(".main-menu > li"),	p: { translateY: "20px" }, 	o: { duration: 200, stagger: 200 } },
				{ e: $mainMenu, 			p: "fadeOut" , 		o: { duration: 300 } },
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
			    // { e: $(".main-menu > li"), 	p: { translateY: "0" },	o: { duration: 200, stagger: 200 } },
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

	if ( $('.office-map').length > 0 && Modernizr.webgl && mapboxgl ) {

		$offices = $('.office-locations');
		mapboxgl.accessToken = 'pk.eyJ1Ijoib2JqZWN0aXZlc3ViamVjdCIsImEiOiJPY25wYWRjIn0.AFZPHessR_DGefRkzPilDA';
		
		var brooklynMap = new mapboxgl.Map({
		    container: 'brooklyn-map', // container id
		    style: 'mapbox://styles/objectivesubject/cijdnlkv400hpavm3hkpvu33m', //stylesheet location
		    center: [-73.987472, 40.700862],
		    zoom: 12.5,
		    minZoom: 12.5,
		});

		var oaklandMap = new mapboxgl.Map({
		    container: 'oakland-map', // container id
		    style: 'mapbox://styles/objectivesubject/cijdoxa6000f81mm2bsxybv8w', //stylesheet location
		    center: [-122.2658341, 37.8133177],
		    zoom: 12.5,
		    minZoom: 12.5,
		});

		initSizes();
		
		$window.on("resize", initSizes);
		$window.on("scroll", onScroll);
	}

	function initSizes() {
		winHeight 	= $window.height();
		mediaSize 	= OS.getMediaSize();
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

})(jQuery, window);
/* 
 * Links
 */

(function( $, window, undefined ){

	var $window = $(window);

	$(document).ready(function(){

		$('[data-parallax-node]').each(function(){
			var $node = $(this),
				factor = $node.data('parallax-node'),
				nodeTop,
				winHeight,
				threshold;

			init();
			$window
				.on("resize", init)
				.on("scroll", onScroll);

			function init() {
				nodeTop = $node.offset().top;
				winHeight = $window.height();
				threshold = nodeTop - winHeight;
			}

			function onScroll() {
				var scrollTop = $window.scrollTop(),
					offset = scrollTop - threshold;

				if ( OS.getMediaSize() == "medium" ) {
					
					if ( scrollTop >= threshold ) {
						$node.css({
							transform: 'translateY('+ (offset * factor) + 'px)',
							zIndex: "1"
						});
					}
				
				}
			}
		});

	});

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

			if ( slides.hasClass('unslick') ) {
				var breakpoint = {
					breakpoint: slides.data("unslick"),
					settings: "unslick"
				};
				if ( settings.responsive ) {
					settings.responsive.push(breakpoint);
				} else {
					settings.responsive = [breakpoint];
				}
			}
			
			slides.slick(settings);

		});

	});

})(jQuery, window);
/* 
 * Tree Slider
 */

(function( $, window, undefined ){

	$(document).ready(function(){
			
		$('.slider-input').each(function(){
			var $input = $(this),
				$sliderRow = $input.closest('.slider-row'),
				$sliderElems = $input.siblings('.slider-track, .slider-thumb'),
				$imgTop = $sliderRow.find('img.top');

			$input.on('input', function(e){
				if ( OS.getMediaSize() == "medium" ) {
				
					var val = $input.val(),
						width = $imgTop.width(),
						height = $imgTop.height(),
						right = width * (val/100);

					$imgTop.css({
						clip: 'rect( 0, '+right+'px, '+height+'px, 0 )'
					});
					$sliderElems.css({
						left: val + '%'
					});

				}
			});
		});

	});

})(jQuery, window);