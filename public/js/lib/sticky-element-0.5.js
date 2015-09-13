function stickyElement(elementQuery, position) {
	"use strict";

	var element           = document.querySelector(elementQuery);
	var elementNodeParent = element.parentNode;
	var posElement        = element.getBoundingClientRect();
	var elementHeight     = posElement.bottom - posElement.top;

	var posParent  = element.parentElement.getBoundingClientRect();

	var shim          = document.createElement('div');
	shim.style.height = elementHeight + 'px';

	var setSticky = (function(set) {
		if (set) {
			elementNodeParent.insertBefore(shim, element);
			element.style.position = 'fixed';
			element.style.top      = position + 'px';
			element.style.width    = '100%';
			element.style.zIndex   = '10000';
		} else {
			elementNodeParent.removeChild(shim);
			element.style.position = 'static';
			element.style.top      = null;
			element.style.width    = 'auto';
			element.style.zIndex   = null;
		}
	});

	// initialization when firsted called on document load.
	if (element.style.position != 'fixed') {
		if (posElement.top <= position && posParent.bottom >= position + elementHeight) {
			setSticky(true);				
		}
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

			if (posParent.bottom >= position) {
				element.style.top = position + 'px';
				element.style.zIndex = '10000';
			}
			
			if (posParent.bottom <= position) {
				// happens when the sticky element has reached its parent's 
				// bottom position, sticky element will now appear it's being carried

				if (posElement.bottom <= 0) {
					// stops the element from updating it's position, for optimization

					if (posParent.bottom >= posElement.top) {
						// condition happens when scrolling down and sticky element
						// will be coming into the viewport
						element.style.top = posParent.bottom + 'px';
						element.style.zIndex = null;						
					}
	
					return; // no need to carry on in the function
				}

				element.style.top = posParent.bottom + 'px';
				element.style.zIndex = null;				
			}
		}
	});
};