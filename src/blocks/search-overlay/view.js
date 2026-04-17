/**
 * Search Overlay Frontend Script
 */

document.addEventListener('DOMContentLoaded', () => {
	const toggleButtons = document.querySelectorAll('[data-search-toggle]');
	const overlays = document.querySelectorAll('[data-search-overlay]');
	const closeButtons = document.querySelectorAll('[data-search-close]');

	toggleButtons.forEach((button, index) => {
		const overlay = overlays[index];
		if (!overlay) return;

		const input = overlay.querySelector('.search-overlay-input');
		const navBlock = overlay.closest('.wp-block-navigation');
		const navContainer = navBlock?.querySelector('.wp-block-navigation__responsive-container-content');

		// Position overlay to match navigation container
		const positionOverlay = () => {
			// On tablet/mobile (≤1024px), let CSS handle full-width positioning
			if (window.innerWidth <= 1024) {
				overlay.style.top = '';
				overlay.style.right = '';
				overlay.style.minWidth = '';
				return;
			}

			// On desktop, position relative to navigation container
			if (navContainer) {
				const rect = navContainer.getBoundingClientRect();
				overlay.style.top = rect.top + 'px';
				overlay.style.right = (window.innerWidth - rect.right) + 'px';
				overlay.style.minWidth = rect.width + 'px';
			}
		};

		// Open overlay
		button.addEventListener('click', () => {
			positionOverlay();
			overlay.classList.add('is-open');
			if (navBlock) {
				navBlock.classList.add('search-is-open');
			}
			if (input) {
				setTimeout(() => input.focus(), 100);
			}
		});

		// Reposition on resize
		window.addEventListener('resize', () => {
			if (overlay.classList.contains('is-open')) {
				positionOverlay();
			}
		});

		// Close overlay
		const closeOverlay = () => {
			overlay.classList.remove('is-open');
			if (navBlock) {
				navBlock.classList.remove('search-is-open');
			}
		};

		closeButtons[index]?.addEventListener('click', closeOverlay);

		// Close on Escape key
		document.addEventListener('keydown', (e) => {
			if (e.key === 'Escape' && overlay.classList.contains('is-open')) {
				closeOverlay();
			}
		});
	});
});
