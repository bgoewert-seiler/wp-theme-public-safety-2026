<?php
// @generated seiler-phpunit-setup
/**
 * PHPUnit bootstrap for integration tests via wp-load.
 *
 * Boots real WordPress by including wp-load.php directly — no
 * wordpress-tests-lib, no DB transaction rollback between tests, no
 * install-wp-tests.sh. Right default for plugins/themes that just need WP
 * loaded so they can call get_option(), instantiate WC_Product, etc.
 *
 * The plugin/theme must be activated in the running WP instance for its code
 * to be available. ddev users: `wp-bootstrap` activates automatically on
 * `ddev start`.
 *
 * Opt into the heavier wp-tests-lib flavor via
 *   bunx seiler-phpunit-setup --integration-mode=wp-tests-lib
 */

$wp_load = getenv( 'WP_LOAD_PATH' ) ?: '/var/www/html/wp-load.php';

if ( ! file_exists( $wp_load ) ) {
	fwrite(
		STDERR,
		"Could not find wp-load.php at {$wp_load}\n" .
		"Set WP_LOAD_PATH to the correct location, or scaffold with\n" .
		"  bunx seiler-phpunit-setup --integration-mode=wp-tests-lib\n" .
		"to use the wordpress-tests-lib flavor instead.\n"
	);
	exit( 1 );
}

require $wp_load;

// Optional project-local helpers (fakes, stubs, custom TestCase bases).
$stubsFile = __DIR__ . '/stubs.php';
if ( file_exists( $stubsFile ) ) {
	require_once $stubsFile;
}
