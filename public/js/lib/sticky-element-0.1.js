function stickyElement(elementName, position) {

	var element    = document.querySelector(elementName);
	var posElement = element.getBoundingClientRect();

	var setSticky = function(set) {
		if (set) {
			var elementHeight = posElement.bottom - posElement.top;
			element.nextElementSibling.style.marginTop = elementHeight + 'px';

			element.style.position                     = 'fixed';
			element.style.top                          = position + 'px';
			element.style.width                        = '100%';
			element.style.zIndex                       = '10000';
		} else {
			element.nextElementSibling.style.marginTop = 'unset';

			element.style.position                     = 'static';
			element.style.top                          = 'unset';
			element.style.width                        = 'auto';
			element.style.zIndex                       = 'unset';
		}
	}

	// initialization when firsted called on document load.
	if (posElement.top < 0 && element.style.position != 'fixed') {
		setSticky(true);
	}

	window.addEventListener('scroll', function () {

		posElement      = element.getBoundingClientRect();
		posOlderSibling = element.previousElementSibling.getBoundingClientRect();

		if (posElement.top < 0 && element.style.position != 'fixed') {
			setSticky(true);
		}

		if (posOlderSibling.bottom > 0 && element.style.position == 'fixed') {
			setSticky(false);
		}

	});

}