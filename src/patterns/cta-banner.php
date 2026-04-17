<?php
/**
 * Title: Call to Action Banner
 * Slug: seiler-2026/cta-banner
 * Categories: seiler-cta
 * Description: Full-width promotional banner with heading, description, and call-to-action button.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"cta-banner-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull cta-banner-section" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:cover {"url":"https://placehold.co/1920x600/FF8C00/FF8C00","dimRatio":60,"overlayColor":"primary","minHeight":600,"minHeightUnit":"px","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"left":"4rem","right":"4rem"}}}} -->
	<div class="wp-block-cover alignfull" style="min-height:600px;padding-left:4rem;padding-right:4rem"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="https://placehold.co/1920x600/FF8C00/FF8C00" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"900px"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"48px"},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"textColor":"white"} -->
			<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--small);font-size:48px">SPECIAL EVENT - JOIN US!</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"20px"},"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}},"textColor":"white"} -->
			<p class="has-text-align-center has-white-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--medium);font-size:20px">Discover the latest in product innovation. Register today for exclusive access to product demonstrations and expert training sessions.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-accent"} -->
				<div class="wp-block-button is-style-accent"><a class="wp-block-button__link wp-element-button">Register Now</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-on-dark"} -->
				<div class="wp-block-button is-style-on-dark"><a class="wp-block-button__link wp-element-button">Learn More</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div></div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
