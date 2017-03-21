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
		
		var nycMap = new mapboxgl.Map({
		    container: 'nyc-map', // container id
		    style: 'mapbox://styles/objectivesubject/cijdnlkv400hpavm3hkpvu33m', //stylesheet location
		    center: [-73.988658, 40.738673],
		    zoom: 12.5,
		    minZoom: 12.5,
		});
		nycMap.scrollZoom.disable();

		var oaklandMap = new mapboxgl.Map({
		    container: 'oakland-map', // container id
		    style: 'mapbox://styles/objectivesubject/cijdoxa6000f81mm2bsxybv8w', //stylesheet location
		    center: [-122.2658341, 37.8133177],
		    zoom: 12.5,
		    minZoom: 12.5,
		});
		oaklandMap.scrollZoom.disable();

		var nycMarker = document.getElementById('nyc-marker');
		new mapboxgl.Marker( nycMarker, { offset: [ -10, -10 ] } )
			.setLngLat([-73.988658, 40.738673])
			.addTo(nycMap);

		var oaklandMarker = document.getElementById('oakland-marker');
		new mapboxgl.Marker( oaklandMarker, { offset: [ -10, -10 ] } )
			.setLngLat([-122.2658341, 37.8133177])
			.addTo(oaklandMap);

		initSizes();
		
		$window.on("resize", initSizes);
		$window.on("scroll", onScroll);
	}

	function initSizes() {
		winHeight 	= $window.height();
		mediaSize 	= OS.getMediaSize();
		officesTop 	= $offices.offset().top;
		toggleMapY	= $('.nyc .office-address').offset().top;
		unFixedY	= $('.office-location.oakland').offset().top;
		$topMap		= $('#nyc-map');//$(nycMap.getCanvas());
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
					translateY: distance + 'px',
					translateZ: 0
				}, 0);

			} else if ( scrollTop >= unFixedY ) {
				$offices
					.addClass('un-fixed')
					.removeClass('fixed');
				$topMap.velocity({
					translateY: '100vh',
					translateZ: 0
				}, 0);
			} else {
				$offices.removeClass('fixed un-fixed');
				$topMap.velocity({
					translateY: '0',
					translateZ: 0
				}, 0);
			}

			if ( scrollTop >= toggleMapY ) {
				$offices.attr("data-show-map", "oakland");
			}

		}

	}

})(jQuery, window);