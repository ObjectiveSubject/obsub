/* 
 * OS global functions
 */


var OS = {
	version: "1.0.0"
};

OS.getMediaSize = function() {
	//detect if desktop/mobile
	return window.getComputedStyle(document.querySelector('body'), '::before').getPropertyValue('content').replace(/"/g, "").replace(/'/g, "");
}