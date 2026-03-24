<?php
/**
 * Title: Call to Action Banner
 * Slug: public-safety-2026/cta-banner
 * Categories: public-safety-cta
 * Description: Full-width promotional banner with heading, description, and call-to-action button.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"className":"cta-banner-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull cta-banner-section" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:cover {"url":"https://placehold.co/1920x600/FF8C00/FFFFFF?text=CTA+Background","dimRatio":60,"overlayColor":"primary","minHeight":400,"minHeightUnit":"px","contentPosition":"center center","align":"full"} -->
	<div class="wp-block-cover alignfull" style="min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="https://placehold.co/1920x600/FF8C00/FFFFFF?text=CTA+Background" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"900px"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"48px","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"textColor":"white"} -->
			<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--small);font-size:48px;font-weight:700">SPECIAL EVENT - JOIN US!</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"20px"},"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}},"textColor":"white"} -->
			<p class="has-text-align-center has-white-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--medium);font-size:20px">Discover the latest innovations in public safety technology. Register today for exclusive access to product demonstrations and expert training sessions.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"accent","textColor":"dark-gray","style":{"typography":{"fontSize":"18px","fontWeight":"600"}}} -->
				<div class="wp-block-button has-custom-font-size" style="font-size:18px;font-weight:600"><a class="wp-block-button__link has-dark-gray-color has-accent-background-color has-text-color has-background wp-element-button">Register Now</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"backgroundColor":"white","textColor":"primary","style":{"typography":{"fontSize":"18px","fontWeight":"600"}}} -->
				<div class="wp-block-button has-custom-font-size" style="font-size:18px;font-weight:600"><a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background wp-element-button">Learn More</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div></div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
