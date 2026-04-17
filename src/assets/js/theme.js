/**
 * Seiler 2026 Theme JavaScript
 *
 * @package Seiler_2026
 * @since 1.0.0
 */

(function() {
	'use strict';

	// Mobile menu toggle functionality
	function initMobileMenu() {
		const mobileMenuButton = document.querySelector('.wp-block-navigation__responsive-container-open');

		if (mobileMenuButton) {
			// WordPress handles the mobile menu toggle automatically
			// Add any custom mobile menu enhancements here if needed
		}
	}

	// Smooth scroll for anchor links
	function initSmoothScroll() {
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function (e) {
				const href = this.getAttribute('href');
				if (href !== '#' && href !== '#0') {
					const target = document.querySelector(href);
					if (target) {
						e.preventDefault();
						target.scrollIntoView({
							behavior: 'smooth',
							block: 'start'
						});
					}
				}
			});
		});
	}

	// Initialize on DOM ready
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', function() {
			initMobileMenu();
			initSmoothScroll();
		});
	} else {
		initMobileMenu();
		initSmoothScroll();
	}

})();
