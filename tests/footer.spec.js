/**
 * Footer Tests - Validate footer structure and styling across viewports
 *
 * Run with: npx playwright test tests/footer.spec.js
 */

const { test, expect } = require('@playwright/test');

// Expected values
const EXPECTED = {
	navLink: {
		fontWeight: '600',
		fontSizeMin: 12,
		fontSizeMax: 14,
	},
	copyright: {
		// Inline style sets margin-top:1.5rem (= 24px at default 16px root)
		marginTop: '24px',
	},
	viewports: {
		desktop: { width: 1280, height: 720 },
		mobile: { width: 375, height: 800 },
	},
};

test.describe('Footer Desktop', () => {
	test.beforeEach(async ({ page }) => {
		await page.setViewportSize(EXPECTED.viewports.desktop);
		await page.goto('/', { waitUntil: 'domcontentloaded', timeout: 60000 });
	});

	test('footer exists and is visible', async ({ page }) => {
		// Two elements carry .site-footer (the <footer> template part and the inner div);
		// target the semantic <footer> element to avoid strict-mode violation.
		const footer = page.locator('footer.site-footer');
		await expect(footer).toBeVisible();
	});

	test('since-group has vertical writing-mode on desktop', async ({ page }) => {
		const sinceGroup = page.locator('.footer-since-group');
		await expect(sinceGroup).toBeVisible();

		const writingMode = await page.locator('.footer-since-text').evaluate(el =>
			window.getComputedStyle(el).writingMode
		);
		expect(writingMode).toBe('vertical-rl');
	});

	test('nav links have correct font-weight and text-decoration', async ({ page }) => {
		const firstLink = page.locator('.footer-nav-links a').first();

		const fontWeight = await firstLink.evaluate(el =>
			window.getComputedStyle(el).fontWeight
		);
		expect(fontWeight).toBe(EXPECTED.navLink.fontWeight);

		const textDecoration = await firstLink.evaluate(el =>
			window.getComputedStyle(el).textDecoration
		);
		expect(textDecoration).toContain('none');
	});

	test('nav link font-size falls within clamp range (12–14px)', async ({ page }) => {
		const firstLink = page.locator('.footer-nav-links a').first();

		const fontSize = await firstLink.evaluate(el =>
			window.getComputedStyle(el).fontSize
		);
		const px = parseFloat(fontSize);
		expect(px).toBeGreaterThanOrEqual(EXPECTED.navLink.fontSizeMin);
		expect(px).toBeLessThanOrEqual(EXPECTED.navLink.fontSizeMax);
	});

	test('copyright margin-top matches inline style (1.5rem)', async ({ page }) => {
		// NOTE: CSS only sets text-align:left — it does NOT reset margin-top.
		// The inline style (margin-top:30px) is the authoritative value.
		const marginTop = await page.locator('.footer-copyright').evaluate(el =>
			window.getComputedStyle(el).marginTop
		);
		expect(marginTop).toBe(EXPECTED.copyright.marginTop);
	});

	test('footer logo container has no margin', async ({ page }) => {
		const logo = page.locator('.footer-logo.wp-block-site-logo');

		const margins = await logo.evaluate(el => {
			const style = window.getComputedStyle(el);
			return {
				top: style.marginTop,
				right: style.marginRight,
				bottom: style.marginBottom,
				left: style.marginLeft,
			};
		});

		expect(margins.top).toBe('0px');
		expect(margins.right).toBe('0px');
		expect(margins.bottom).toBe('0px');
		expect(margins.left).toBe('0px');
	});

	test('address separator is not block on desktop', async ({ page }) => {
		const sep = page.locator('.footer-address span.txt-sep').first();

		const display = await sep.evaluate(el =>
			window.getComputedStyle(el).display
		);
		// Desktop: CSS does not apply the 450px block rule — should be inline or inline-block
		expect(display).not.toBe('block');
	});
});

test.describe('Footer Mobile', () => {
	test.beforeEach(async ({ page }) => {
		await page.setViewportSize(EXPECTED.viewports.mobile);
		await page.goto('/', { waitUntil: 'domcontentloaded', timeout: 60000 });
	});

	test('since-group is hidden on mobile', async ({ page }) => {
		const sinceGroup = page.locator('.footer-since-group');

		const display = await sinceGroup.evaluate(el =>
			window.getComputedStyle(el).display
		);
		expect(display).toBe('none');
	});

	test('top-row stacks vertically on mobile', async ({ page }) => {
		const topRow = page.locator('.footer-top-row');

		const flexDirection = await topRow.evaluate(el =>
			window.getComputedStyle(el).flexDirection
		);
		expect(flexDirection).toBe('column');
	});

	test('copyright text aligns center on mobile', async ({ page }) => {
		const copyright = page.locator('.footer-copyright');

		const textAlign = await copyright.evaluate(el =>
			window.getComputedStyle(el).textAlign
		);
		expect(textAlign).toBe('center');
	});

	test('address separator becomes block on narrow viewport', async ({ page }) => {
		const sep = page.locator('.footer-address span.txt-sep').first();

		const display = await sep.evaluate(el =>
			window.getComputedStyle(el).display
		);
		expect(display).toBe('block');
	});
});
