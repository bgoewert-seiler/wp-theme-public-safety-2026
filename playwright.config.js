/**
 * Playwright configuration for E2E testing
 * @see https://playwright.dev/docs/test-configuration
 */

const { defineConfig, devices } = require('@playwright/test');

module.exports = defineConfig({
	testDir: './tests',

	// Maximum time one test can run
	timeout: 30 * 1000,

	// Test execution settings
	fullyParallel: true,
	forbidOnly: !!process.env.CI,
	retries: process.env.CI ? 2 : 0,
	workers: process.env.CI ? 1 : undefined,

	// Reporter to use
	reporter: 'html',

	// Shared settings for all projects
	use: {
		// Base URL for navigation
		baseURL: 'http://publicsafety.local:8890',

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

	// Run local dev server before starting tests
	// Uncomment if you want tests to start wp-env automatically
	// webServer: {
	// 	command: 'npm run env:start',
	// 	url: 'http://publicsafety.local:8890',
	// 	timeout: 120 * 1000,
	// 	reuseExistingServer: !process.env.CI,
	// },
});
