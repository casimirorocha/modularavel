// Import Unpoly
import './lib/unpoly';

// Import Bootstrap
import './bootstrap';

// Import Alpine.js
import './lib/alpine';

// Import all of Bootstrap's JS
import * as bs from 'bootstrap'

// Attach Bootstrap to the window object
window.bootstrap = bs

// Import all images
import.meta.glob([
	'../images/**',
]);

// Get the toast trigger button
const toastTrigger = document.getElementById('toastBtn')

// Get the live toast example
const toastLiveExample = document.getElementById('showToast')

// Show toast on button click
if (toastTrigger) {
	// Get or create the toast instance
	const toastBootstrap = bs.Toast.getOrCreateInstance(toastLiveExample)

	// Add event listener to the button to show the toast
	toastTrigger.addEventListener('click', () => {
		toastBootstrap.show()
	})
}


/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const list = [].slice.call(
	document.querySelectorAll('[data-bs-toggle="popover"]'),
);

list.map((el) => {
	// Popover options
	let opts = {};

	// If data-bs-content-id attribute is present, use it to get the content
	if (el.hasAttribute("data-bs-content-id")) {
		// Get the content element and set it as the popover's content
		opts.content = document.getElementById(el.getAttribute("data-bs-content-id")).innerHTML;
		// Set the content to be HTML
		opts.html = true;
		// Remove the data-bs-content-id attribute to avoid conflicts
		opts.animation = true
	}

	// Create the popover
	new bs.Popover(el, opts);
});
