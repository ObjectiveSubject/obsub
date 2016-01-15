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