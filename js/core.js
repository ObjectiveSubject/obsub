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
				offsetTop = $preview.offset().top,
				outerHeight = $(this).outerHeight(),
				offsetBottom = offsetTop + ( outerHeight * 0.25 ) ,
				$image = $preview.find('.section-image'),
				$sectionContent = $preview.find('.section-content'),
				contentHeight = $sectionContent.outerHeight();
				
			$window.on('scroll', function(){
				var scrollTop = $window.scrollTop();
				if ( scrollTop >= offsetTop && scrollTop < offsetBottom ) {
					$preview.addClass('active');
					if ( $sectionContent.css('position') !== "fixed" ){
						$sectionContent.css({
							position: 'fixed',
							top: ( $sectionContent.offset().top + (contentHeight/2) - scrollTop) + 'px'
						});
					}
					// console.log('contentTop: '+contentTop+', scrollTop: '+scrollTop);
				} else if ( scrollTop >= offsetBottom ) {
					$preview.removeClass('active');
					if ( $sectionContent.css('position') == "fixed" ){
						$sectionContent.css({
							position: 'absolute',
							top: ( $sectionContent.offset().top + (contentHeight/2) - offsetTop) + 'px'
						});
					}
				} else {
					$preview.removeClass('active');
					$sectionContent.css({
						position: 'relative',
						top: '50%'
					});
				}
			});
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
			$mainMenu = $('.main-menu');

		if ( $siteHeader.hasClass('main-menu-active') ) {
			$('.main-menu-scrim').velocity("fadeOut", {
				duration: 300,
				complete: function(){
					$('.main-menu-scrim').remove();
				}
			});
			$mainMenu.velocity("fadeOut", { duration: 300 });
			$siteHeader.removeClass('main-menu-active');
		} else {
			$('<div class="main-menu-scrim"></div>').appendTo('body').velocity("fadeIn", { duration: 300 });
			$siteHeader.addClass('main-menu-active');
			$mainMenu.velocity("fadeIn", { duration: 300 });
		}
		
	});

})(jQuery, window);
/* 
 * Maps
 */

(function( $, window, undefined ){

	if ( $('#content.contact').length > 0 ) {

		mapboxgl.accessToken = 'pk.eyJ1Ijoib2JqZWN0aXZlc3ViamVjdCIsImEiOiJPY25wYWRjIn0.AFZPHessR_DGefRkzPilDA';
		
		var brooklyn = new mapboxgl.Map({
		    container: 'brooklyn-map', // container id
		    style: 'mapbox://styles/objectivesubject/cijdnlkv400hpavm3hkpvu33m', //stylesheet location
		    // center: [-74.50, 40], // starting position
		    // zoom: 9 // starting zoom
		    scrollWheelZoom: false
		});
		var oakland = new mapboxgl.Map({
		    container: 'oakland-map', // container id
		    style: 'mapbox://styles/objectivesubject/cijdoxa6000f81mm2bsxybv8w', //stylesheet location
		    // center: [-74.50, 40], // starting position
		    // zoom: 9 // starting zoom
		    scrollWheelZoom: false
		});
	
	}

})(jQuery, window);