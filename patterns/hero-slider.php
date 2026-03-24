<?php
/**
 * Title: Hero Slider
 * Slug: public-safety-2026/hero-slider
 * Categories: public-safety-hero
 * Description: Full-width hero section with background image, headline, and call-to-action buttons. Use Splide Carousel plugin to convert multiple instances into a slider.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"className":"hero-slider-section","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hero-slider-section" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">
	<!-- wp:cover {"url":"https://placehold.co/1920x800/0066B3/FFFFFF?text=Hero+Background+1","id":999,"dimRatio":40,"overlayColor":"black","minHeight":600,"minHeightUnit":"px","contentPosition":"center center","align":"full","className":"hero-slide"} -->
	<div class="wp-block-cover alignfull hero-slide" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-999" alt="" src="https://placehold.co/1920x800/0066B3/FFFFFF?text=Hero+Background+1" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"800px"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"60px","fontWeight":"700","lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"textColor":"white"} -->
			<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--small);font-size:60px;font-weight:700;line-height:1.1">PRECISION SOLUTIONS FOR PUBLIC SAFETY</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"24px","fontWeight":"400"},"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}},"textColor":"white"} -->
			<p class="has-text-align-center has-white-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--medium);font-size:24px;font-weight:400">Trusted Partner Since 1945</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"secondary","textColor":"white","style":{"typography":{"fontSize":"18px"}}} -->
				<div class="wp-block-button has-custom-font-size" style="font-size:18px"><a class="wp-block-button__link has-white-color has-secondary-background-color has-text-color has-background wp-element-button">Learn More</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"backgroundColor":"white","textColor":"primary","style":{"typography":{"fontSize":"18px"}}} -->
				<div class="wp-block-button has-custom-font-size" style="font-size:18px"><a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background wp-element-button">Contact Us</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div></div>
	<!-- /wp:cover -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}},"typography":{"fontSize":"14px"}},"textColor":"medium-gray","className":"slider-note"} -->
	<p class="has-text-align-center slider-note has-medium-gray-color has-text-color" style="margin-top:var(--wp--preset--spacing--small);font-size:14px"><em>Note: Add multiple hero sections and use Splide Carousel plugin to create an auto-rotating slider.</em></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
