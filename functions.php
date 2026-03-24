<?php
/**
 * Public Safety 2026 Theme Functions
 *
 * @package Public_Safety_2026
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function public_safety_2026_setup() {
	// Make theme available for translation
	load_theme_textdomain( 'public-safety-2026', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails
	add_theme_support( 'post-thumbnails' );

	// Enable support for responsive embeds
	add_theme_support( 'responsive-embeds' );

	// Add support for editor styles
	add_theme_support( 'editor-styles' );

	// Enqueue editor styles
	add_editor_style( 'assets/css/theme.css' );

	// Add support for block templates
	add_theme_support( 'block-templates' );

	// Add support for full and wide align images
	add_theme_support( 'align-wide' );

	// Add support for custom line heights
	add_theme_support( 'custom-line-height' );

	// Add support for custom spacing
	add_theme_support( 'custom-spacing' );

	// Add support for custom units
	add_theme_support( 'custom-units' );

	// Add support for link color control
	add_theme_support( 'link-color' );

	// Add support for experimental appearance tools
	add_theme_support( 'appearance-tools' );

	// Add support for HTML5 markup
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Declare WooCommerce support (optional)
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'public_safety_2026_setup' );

/**
 * Enqueue theme styles and scripts
 */
function public_safety_2026_enqueue_assets() {
	// Enqueue dashicons (for cart, search, user icons)
	wp_enqueue_style( 'dashicons' );

	// Enqueue main stylesheet (style.css)
	wp_enqueue_style(
		'public-safety-2026-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	// Enqueue custom theme styles
	wp_enqueue_style(
		'public-safety-2026-theme-css',
		get_template_directory_uri() . '/assets/css/theme.css',
		array( 'public-safety-2026-style' ),
		wp_get_theme()->get( 'Version' )
	);

	// Enqueue header JavaScript for search overlay
	wp_enqueue_script(
		'public-safety-2026-header',
		get_template_directory_uri() . '/assets/js/header.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Enqueue minimal theme JavaScript if needed
	wp_enqueue_script(
		'public-safety-2026-script',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'public_safety_2026_enqueue_assets' );

/**
 * Register block pattern categories
 */
function public_safety_2026_register_pattern_categories() {
	register_block_pattern_category(
		'public-safety-hero',
		array( 'label' => __( 'Public Safety - Hero Sections', 'public-safety-2026' ) )
	);

	register_block_pattern_category(
		'public-safety-features',
		array( 'label' => __( 'Public Safety - Features', 'public-safety-2026' ) )
	);

	register_block_pattern_category(
		'public-safety-content',
		array( 'label' => __( 'Public Safety - Content Sections', 'public-safety-2026' ) )
	);

	register_block_pattern_category(
		'public-safety-testimonials',
		array( 'label' => __( 'Public Safety - Testimonials', 'public-safety-2026' ) )
	);

	register_block_pattern_category(
		'public-safety-cta',
		array( 'label' => __( 'Public Safety - Call to Action', 'public-safety-2026' ) )
	);
}
add_action( 'init', 'public_safety_2026_register_pattern_categories' );

/**
 * Admin notice for recommended Splide Carousel plugin
 */
function public_safety_2026_admin_notice_splide() {
	// Check if Splide Carousel plugin is active
	if ( is_plugin_active( 'splide-carousel/splide-carousel.php' ) ) {
		return;
	}

	// Check if user has dismissed the notice
	if ( get_user_meta( get_current_user_id(), 'public_safety_2026_dismiss_splide_notice', true ) ) {
		return;
	}

	$plugin_install_url = admin_url( 'plugin-install.php?s=splide+carousel&tab=search&type=term' );
	?>
	<div class="notice notice-info is-dismissible public-safety-splide-notice">
		<p>
			<strong><?php esc_html_e( 'Public Safety 2026 Theme:', 'public-safety-2026' ); ?></strong>
			<?php
			printf(
				/* translators: %s: Plugin installation URL */
				esc_html__( 'For the best experience with carousel sliders, we recommend installing the %s plugin.', 'public-safety-2026' ),
				'<a href="' . esc_url( $plugin_install_url ) . '">Splide Carousel</a>'
			);
			?>
		</p>
	</div>
	<?php
}
add_action( 'admin_notices', 'public_safety_2026_admin_notice_splide' );

/**
 * Handle dismissal of Splide notice
 */
function public_safety_2026_dismiss_splide_notice() {
	if ( isset( $_GET['public-safety-dismiss-splide'] ) ) {
		update_user_meta( get_current_user_id(), 'public_safety_2026_dismiss_splide_notice', true );
	}
}
add_action( 'admin_init', 'public_safety_2026_dismiss_splide_notice' );

/**
 * Add custom JavaScript for notice dismissal
 */
function public_safety_2026_admin_scripts() {
	?>
	<script>
	jQuery(document).ready(function($) {
		$(document).on('click', '.public-safety-splide-notice .notice-dismiss', function() {
			$.ajax({
				url: ajaxurl,
				data: {
					action: 'public_safety_2026_dismiss_splide_notice'
				}
			});
		});
	});
	</script>
	<?php
}
add_action( 'admin_footer', 'public_safety_2026_admin_scripts' );

/**
 * AJAX handler for dismissing Splide notice
 */
function public_safety_2026_ajax_dismiss_splide_notice() {
	update_user_meta( get_current_user_id(), 'public_safety_2026_dismiss_splide_notice', true );
	wp_die();
}
add_action( 'wp_ajax_public_safety_2026_dismiss_splide_notice', 'public_safety_2026_ajax_dismiss_splide_notice' );
