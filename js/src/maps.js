/* 
 * Maps
 */

(function( $, window, undefined ){

	var $window = $(window),
		winHeight,
		mediaSize,
		$offices,
		toggleMapY,
		unFixedY,
		$topMap;

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
		$topMap		= $(brooklynMap.getCanvas());
	}

	function onScroll() {

		var scrollTop = $window.scrollTop(),
			distance = scrollTop - officesTop;

		if ( mediaSize !== "default" && mediaSize !== "small") {

			if ( distance > 0 && scrollTop < unFixedY ) {
				$offices
					.addClass('fixed')
					.removeClass('un-fixed');
				$topMap.velocity({
					translateY: distance + 'px'
				}, 0);

			} else if ( scrollTop >= unFixedY ) {
				$offices
					.addClass('un-fixed')
					.removeClass('fixed');
				$topMap.velocity({
					translateY: '100vh'
				}, 0);
			} else {
				$offices.removeClass('fixed un-fixed');
				$topMap.velocity({
					translateY: '0'
				}, 0);
			}

			if ( scrollTop >= toggleMapY ) {
				$offices.attr("data-show-map", "oakland");
			}

		}

	}

})(jQuery, window);