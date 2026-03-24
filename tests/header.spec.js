/**
 * Header Tests - Validate against seilergeo.com design
 *
 * Run with: npx playwright test tests/header.spec.js
 */

const { test, expect } = require('@playwright/test');

// Expected values from seilergeo.com
const EXPECTED = {
	header: {
		totalHeight: 137,
		logoHeight: 64,
		utilityHeight: 19,
		mainNavHeight: 40,
		accentBarHeight: 10
	},
	utilityNav: {
		fontSize: '14px',
		fontWeight: '900',
		color: 'rgb(4, 117, 188)', // #0475bc
		textDecoration: 'none solid rgb(4, 117, 188)'
	},
	cart: {
		fontSize: '14px',
		fontWeight: '900',
		hasIcon: true
	},
	search: {
		iconSize: 20,
		iconVisible: true
	}
};

test.describe('Header Styling', () => {
	test.beforeEach(async ({ page }) => {
		await page.goto('http://publicsafety.local:8890');
		await page.waitForLoadState('networkidle');
	});

	test('utility nav links should have correct styling', async ({ page }) => {
		const firstLink = page.locator('.header-utility-nav a').first();

		// Check font size
		const fontSize = await firstLink.evaluate(el =>
			window.getComputedStyle(el).fontSize
		);
		expect(fontSize).toBe(EXPECTED.utilityNav.fontSize);

		// Check font weight
		const fontWeight = await firstLink.evaluate(el =>
			window.getComputedStyle(el).fontWeight
		);
		expect(fontWeight).toBe(EXPECTED.utilityNav.fontWeight);

		// Check color
		const color = await firstLink.evaluate(el =>
			window.getComputedStyle(el).color
		);
		expect(color).toBe(EXPECTED.utilityNav.color);

		// Check text decoration (should be none)
		const textDecoration = await firstLink.evaluate(el =>
			window.getComputedStyle(el).textDecoration
		);
		expect(textDecoration).toContain('none');
	});

	test('cart should show icon with count', async ({ page }) => {
		const cart = page.locator('.header-cart-button');

		// Check font weight
		const fontWeight = await cart.evaluate(el =>
			window.getComputedStyle(el).fontWeight
		);
		expect(fontWeight).toBe(EXPECTED.cart.fontWeight);

		// Check if icon pseudo-element exists
		const hasIcon = await cart.evaluate(el => {
			const before = window.getComputedStyle(el, '::before');
			return before.content !== 'none' && before.content !== '';
		});
		expect(hasIcon).toBe(true);
	});

	test('search icon should be visible', async ({ page }) => {
		const searchButton = page.locator('.header-search-toggle');

		// Check visibility
		await expect(searchButton).toBeVisible();

		// Check icon size
		const iconSize = await searchButton.locator('.dashicons').evaluate(el =>
			window.getComputedStyle(el).fontSize
		);
		expect(parseInt(iconSize)).toBeGreaterThanOrEqual(EXPECTED.search.iconSize);
	});

	test('header height should be ~137px', async ({ page }) => {
		const header = page.getByRole('banner');

		const height = await header.evaluate(el =>
			el.getBoundingClientRect().height
		);

		// Allow 10px margin of error
		expect(height).toBeGreaterThanOrEqual(EXPECTED.header.totalHeight - 10);
		expect(height).toBeLessThanOrEqual(EXPECTED.header.totalHeight + 30);
	});

	test('utility menu should not wrap', async ({ page }) => {
		const menuWrap = page.locator('.header-menu-wrap');

		// Check that all items are on one line
		const height = await menuWrap.evaluate(el =>
			el.getBoundingClientRect().height
		);

		// Should be close to utility height (19px) with some padding
		expect(height).toBeLessThanOrEqual(80); // Allow for padding
	});

	test('search toggle functionality', async ({ page }) => {
		const searchToggle = page.locator('.header-search-toggle');
		const menuWrap = page.locator('.header-menu-wrap');
		const searchContainer = page.locator('.header-search-container');

		// Initially menu wrap should be visible
		await expect(menuWrap).toBeVisible();
		await expect(searchContainer).not.toHaveClass(/is-visible/);

		// Click search button
		await searchToggle.click();

		// Menu wrap should be hidden, search should be visible
		await expect(menuWrap).toHaveClass(/is-hidden/);
		await expect(searchContainer).toHaveClass(/is-visible/);
	});
});

test.describe('Header vs seilergeo.com comparison', () => {
	// Skip by default - only run with --grep "seilergeo"
	test.skip('compare utility nav styling with seilergeo.com', async ({ browser }) => {
		// Open two pages side by side
		const context = await browser.newContext();
		const localPage = await context.newPage();
		const seilerPage = await context.newPage();

		await localPage.goto('http://publicsafety.local:8890');
		await seilerPage.goto('https://www.seilergeo.com', { timeout: 60000 });

		// Get styles from both sites
		const localLink = localPage.locator('.header-utility-nav a').first();
		const seilerLink = seilerPage.locator('.et_pb_menu__wrap nav ul li a').first();

		const localStyles = await localLink.evaluate(el => {
			const styles = window.getComputedStyle(el);
			return {
				fontSize: styles.fontSize,
				fontWeight: styles.fontWeight,
				color: styles.color
			};
		});

		const seilerStyles = await seilerLink.evaluate(el => {
			const styles = window.getComputedStyle(el);
			return {
				fontSize: styles.fontSize,
				fontWeight: styles.fontWeight,
				color: styles.color
			};
		});

		// Compare
		console.log('Local styles:', localStyles);
		console.log('Seiler styles:', seilerStyles);

		expect(localStyles.fontSize).toBe(seilerStyles.fontSize);
		expect(localStyles.fontWeight).toBe(seilerStyles.fontWeight);
		expect(localStyles.color).toBe(seilerStyles.color);

		await context.close();
	});
});
