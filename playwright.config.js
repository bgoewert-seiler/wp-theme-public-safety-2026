/**
 * Playwright configuration for E2E testing
 * @see https://playwright.dev/docs/test-configuration
 */

const { defineConfig, devices } = require('@playwright/test');
const { execFileSync } = require('node:child_process');

/**
 * Resolve the base URL for Playwright tests.
 *
 * Priority:
 *   1. PLAYWRIGHT_BASE_URL env var (CI / ad-hoc overrides)
 *   2. `bun run --silent env:url` — reads from ddev at config load time
 *   3. Static fallback so the config still loads when ddev isn't running
 */
function resolveBaseURL() {
	if (process.env.PLAYWRIGHT_BASE_URL) return process.env.PLAYWRIGHT_BASE_URL;
	try {
		const out = execFileSync('bun', ['run', '--silent', 'env:url'], {
			encoding: 'utf8',
			stdio: ['ignore', 'pipe', 'ignore'],
		}).trim();
		const lastLine = out.split('\n').map((l) => l.trim()).filter(Boolean).pop();
		if (lastLine && /^https?:\/\//.test(lastLine)) return lastLine;
	} catch {
		// ddev not running or script errored — fall through to static default
	}
	return 'https://seiler-2026-theme.ddev.site';
}

module.exports = defineConfig({
	testDir: './tests',

	// Output directory for test artifacts (screenshots, videos, traces)
	outputDir: '.local/playwright/test-results',

	// Maximum time one test can run
	timeout: 60 * 1000,

	// Test execution settings
	fullyParallel: true,
	forbidOnly: !!process.env.CI,
	retries: process.env.CI ? 2 : 0,
	workers: process.env.CI ? 1 : undefined,

	// Reporter to use with custom output directory
	reporter: [['html', { outputFolder: '.local/playwright/html-report' }]],

	// Shared settings for all projects
	use: {
		// Base URL for navigation (resolves via bun run env:url; override with PLAYWRIGHT_BASE_URL)
		baseURL: resolveBaseURL(),

		// Ignore HTTPS errors for local development
		ignoreHTTPSErrors: true,

		// Collect trace when retrying the failed test
		trace: 'on-first-retry',

		// Screenshot on failure
		screenshot: 'only-on-failure',

		// Video on failure
		video: 'retain-on-failure',
	},

	// Configure projects for different browsers
	projects: [
		{
			name: 'firefox',
			use: { ...devices['Desktop Firefox'] },
		},
	],

	// Run local dev server before starting tests.
	// Uncomment if you want tests to start ddev automatically.
	// webServer: {
	// 	command: 'bun run env:start',
	// 	url: 'https://seiler-2026-theme.ddev.site',
	// 	timeout: 120 * 1000,
	// 	reuseExistingServer: !process.env.CI,
	// 	ignoreHTTPSErrors: true,
	// },
});
