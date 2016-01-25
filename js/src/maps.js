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

	if ( $('.office-map').length > 0 && Modernizr.webgl ) {

		$offices = $('.office-locations');
		mapboxgl.accessToken = 'pk.eyJ1Ijoib2JqZWN0aXZlc3ViamVjdCIsImEiOiJPY25wYWRjIn0.AFZPHessR_DGefRkzPilDA';
		
		var brooklynMap = new mapboxgl.Map({
		    container: 'brooklyn-map', // container id
		    style: 'mapbox://styles/objectivesubject/cijdnlkv400hpavm3hkpvu33m', //stylesheet location
		    // center: [-74.50, 40], // starting position
		    // zoom: 9 // starting zoom
		    scrollWheelZoom: false
		});
		var oaklandMap = new mapboxgl.Map({
		    container: 'oakland-map', // container id
		    style: 'mapbox://styles/objectivesubject/cijdoxa6000f81mm2bsxybv8w', //stylesheet location
		    // center: [-74.50, 40], // starting position
		    // zoom: 9 // starting zoom
		    scrollWheelZoom: false
		});

		// brooklynMap.on('style.load', function () {
		//     brooklynMap.addSource("markers", {
		//         "type": "geojson",
		//         "data": {
		//             "type": "FeatureCollection",
		//             "features": [{
		//                 "type": "Feature",
		//                 "geometry": {
		//                     "type": "Point",
		//                     "coordinates": [-73.987561, 40.700834]
		//                 },
		//                 "properties": {
		//                     "title": "OS Brooklyn",
		//                     "marker-symbol": "monument"
		//                 }
		//             }]
		//         }
		//     });

		//     brooklynMap.addLayer({
		//         "id": "markers",
		//         "type": "symbol",
		//         "source": "markers",
		//         "layout": {
		//             "icon-image": "{marker-symbol}-15",
		//             "text-field": "{title}",
		//             "text-font": ["Open Sans Semibold", "Arial Unicode MS Bold"],
		//             "text-offset": [0, 0.6],
		//             "text-anchor": "top"
		//         },
		//         "paint": {
		//             "text-size": 12
		//         }
		//     });
		// });

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