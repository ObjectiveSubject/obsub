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