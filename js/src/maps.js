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

		if ( mediaSize !== "default" && mediaSize !== "small") {

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