/**
 * Header functionality
 * Handles inline search toggle (matches seilergeo.com)
 *
 * @package Seiler_2026
 */

(function() {
	'use strict';

	// Function to initialize header search
	function initHeaderSearch() {
		const searchToggle = document.querySelector('.header-search-toggle');
		const searchContainer = document.querySelector('.header-search-container');
		const searchClose = document.querySelector('.header-search-close');
		const menuWrap = document.querySelector('.header-menu-wrap');

		if (!searchToggle || !searchContainer) {
			return;
		}

		// Open search (hide menu wrap, show search container)
		searchToggle.addEventListener('click', function(e) {
			e.preventDefault();

			// Hide menu wrap (utility nav + cart + search button)
			if (menuWrap) {
				menuWrap.classList.add('is-hidden');
			}

			// Show search container
			searchContainer.classList.add('is-visible');

			// Focus on search input after transition
			const searchInput = searchContainer.querySelector('.header-search-input');
			if (searchInput) {
				setTimeout(function() {
					searchInput.focus();
				}, 150);
			}
		});

		// Close search (show menu wrap, hide search container)
		if (searchClose) {
			searchClose.addEventListener('click', function(e) {
				e.preventDefault();

				// Show menu wrap
				if (menuWrap) {
					menuWrap.classList.remove('is-hidden');
				}

				// Hide search container
				searchContainer.classList.remove('is-visible');
			});
		}

		// Close search on ESC key
		document.addEventListener('keydown', function(e) {
			if (e.key === 'Escape' && searchContainer.classList.contains('is-visible')) {
				// Show menu wrap
				if (menuWrap) {
					menuWrap.classList.remove('is-hidden');
				}

				// Hide search container
				searchContainer.classList.remove('is-visible');
			}
		});
	}

	// Function to initialize customer account dropdown
	function initAccountDropdown() {
		const accountToggle = document.querySelector('[data-account-toggle]');

		if (!accountToggle) {
			return;
		}

		const accountWrapper = accountToggle.closest('.customer-account-nav-block');

		// Toggle dropdown on click
		accountToggle.addEventListener('click', function(e) {
			e.preventDefault();
			e.stopPropagation();
			accountToggle.classList.toggle('is-open');
		});

		// Close dropdown when clicking outside the wrapper
		document.addEventListener('click', function(e) {
			if (!accountWrapper.contains(e.target)) {
				accountToggle.classList.remove('is-open');
			}
		});

		// Close dropdown on ESC key
		document.addEventListener('keydown', function(e) {
			if (e.key === 'Escape' && accountToggle.classList.contains('is-open')) {
				accountToggle.classList.remove('is-open');
			}
		});
	}

	// Initialize when DOM is ready
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', function() {
			initHeaderSearch();
			initAccountDropdown();
		});
	} else {
		// DOM is already loaded (script loaded after DOMContentLoaded)
		initHeaderSearch();
		initAccountDropdown();
	}
})();
