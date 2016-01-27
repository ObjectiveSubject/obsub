/* 
 * OS global functions
 */


var OS = {
	version: "1.0.0",
	window: $(window),
};

OS.getMediaSize = function() {
	//detect if desktop/mobile
	return window.getComputedStyle(document.querySelector('body'), '::before').getPropertyValue('content').replace(/"/g, "").replace(/'/g, "");
}

OS.isHome = function() {
	return ( $('body.home').length > 0 ) ? true : false;
}

OS.isCaseStudy = function() {
	return ( $('body.single-case_study').length > 0 ) ? true : false;
}