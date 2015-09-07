function stickyElement(elementName, position) {
	"use strict";

	var element       = document.querySelector(elementName);
	var posElement    = element.getBoundingClientRect();
	var elementHeight = posElement.bottom - posElement.top;
	var elementName   = element.tagName + '#' + element.id;

	var usingParent;
	var relativeElement;
	if (element.previousElementSibling && element.nextElementSibling) {
		relativeElement = element.nextElementSibling;
		usingParent = false;
	} else {
		relativeElement = element.parentElement;
		usingParent = true;
	}

	var setSticky = (function(set) {
		if (set) {
			relativeElement.style.marginTop = elementHeight + 'px';
			element.style.position          = 'fixed';
			element.style.top               = position + 'px';
			element.style.width             = '100%';
			element.style.zIndex            = '10000';
		} else {		
			relativeElement.style.marginTop = '0px';
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
		// update positions
		posElement = element.getBoundingClientRect(); 
		var posRelativeElement = relativeElement.getBoundingClientRect();

		if (element.style.position != 'fixed') {
			if (posElement.top <= position) {
				setSticky(true);				
			}		
		} else {
			if (usingParent) {
				posRelativeElement.top >= position && setSticky(false);
			} else {
				posRelativeElement.top >= elementHeight	&& setSticky(false);			
			}			
		}
	});
};