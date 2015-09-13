function stickyElement(elementQuery, position) {
	"use strict";

	var element           = document.querySelector(elementQuery);
	var elementNodeParent = element.parentNode;
	var posElement        = element.getBoundingClientRect();
	var elementHeight     = posElement.bottom - posElement.top;

	var shim          = document.createElement('div');
	shim.style.height = elementHeight + 'px';

	var setSticky = (function(set) {
		if (set) {
			elementNodeParent.insertBefore(shim, element);
			element.style.position          = 'fixed';
			element.style.top               = position + 'px';
			element.style.width             = '100%';
			element.style.zIndex            = '10000';
		} else {
			elementNodeParent.removeChild(shim);
			element.style.position          = 'static';
			element.style.top               = 'unset';
			element.style.width             = 'auto';
			element.style.zIndex            = 'unset';
		}
	});

	// initialization when firsted called on document load.
	if (posElement.top <= position && element.style.position != 'fixed') {
		setSticky(true);
	}

	window.addEventListener('scroll', function () {

		posElement = element.getBoundingClientRect();
		var posShim = shim.getBoundingClientRect();
		var posParent = element.parentElement.getBoundingClientRect();

		if (element.style.position != 'fixed') {
			if (posElement.top <= position && posParent.bottom >= position + elementHeight) {
				setSticky(true);				
			}
		} else {
			if (posShim.top >= posElement.top) {
				setSticky(false);
			}
			
			if (posParent.bottom <= position) {
				element.style.top = posParent.bottom + 'px';
				element.style.zIndex = 'unset';				
			}			
		}
	});
};