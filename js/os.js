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
};

OS.isHome = function() {
	return ( $('body.home').length > 0 ) ? true : false;
};

OS.isCaseStudy = function() {
	return ( $('body.single-case_study').length > 0 ) ? true : false;
};

OS.throttle = function (func, wait, options) {
	var context, args, result;
	var timeout = null;
	var previous = 0;
	if (!options) options = {};
	var later = function() {
	  previous = options.leading === false ? 0 : Date.now();
	  timeout = null;
	  result = func.apply(context, args);
	  if (!timeout) context = args = null;
	};
	return function() {
	  var now = Date.now();
	  if (!previous && options.leading === false) previous = now;
	  var remaining = wait - (now - previous);
	  context = this;
	  args = arguments;
	  if (remaining <= 0 || remaining > wait) {
		if (timeout) {
		  clearTimeout(timeout);
		  timeout = null;
		}
		previous = now;
		result = func.apply(context, args);
		if (!timeout) context = args = null;
	  } else if (!timeout && options.trailing !== false) {
		timeout = setTimeout(later, remaining);
	  }
	  return result;
	};
};
