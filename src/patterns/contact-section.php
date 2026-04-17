<?php
/**
 * Title: Contact Section
 * Slug: seiler-2026/contact-section
 * Categories: seiler-content
 * Description: Two-column contact section with form placeholder and quick links.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-gray","className":"contact-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull contact-section has-light-gray-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:heading {"style":{"typography":{"fontSize":"36px"},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}}} -->
			<h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--small);font-size:36px">Have Questions?</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
			<p style="margin-bottom:var(--wp--preset--spacing--medium)">Get in touch with our team. We're here to help with all your technology needs.</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"8px"}},"backgroundColor":"white","textColor":"dark-gray","className":"contact-form-placeholder","layout":{"type":"default"}} -->
			<div class="wp-block-group contact-form-placeholder has-dark-gray-color has-white-background-color has-text-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"textColor":"dark-gray"} -->
				<h4 class="wp-block-heading has-dark-gray-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--small)">Contact Form</h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"textColor":"medium-gray","fontSize":"small"} -->
				<p class="has-medium-gray-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--small)"><em>Install Contact Form 7, WPForms, or Gravity Forms plugin and insert your form shortcode here.</em></p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"backgroundColor":"light-gray"} -->
				<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background"/>
				<!-- /wp:separator -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"textColor":"medium-gray"} -->
				<p class="has-medium-gray-color has-text-color" style="margin-top:var(--wp--preset--spacing--small)"><strong>Suggested form fields:</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:list {"textColor":"medium-gray"} -->
				<ul class="has-medium-gray-color has-text-color">
					<!-- wp:list-item -->
					<li>First Name</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li>Last Name</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li>Email Address</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li>Phone Number (optional)</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li>Company</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li>City</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li>ZIP Code</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li>Message/Comments</li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:heading {"style":{"typography":{"fontSize":"36px"},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}}} -->
			<h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--small);font-size:36px">Quick Links</h2>
			<!-- /wp:heading -->

			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"typography":{"textDecoration":"underline"}},"fontSize":"medium"} -->
				<!-- wp:navigation-link {"label":"Request a Demo","url":"#"} /-->
				<!-- wp:navigation-link {"label":"Product Catalog","url":"#"} /-->
				<!-- wp:navigation-link {"label":"Training Resources","url":"#"} /-->
				<!-- wp:navigation-link {"label":"Service & Support","url":"#"} /-->
				<!-- wp:navigation-link {"label":"Find a Location","url":"#"} /-->
				<!-- wp:navigation-link {"label":"Careers","url":"#"} /-->
			<!-- /wp:navigation -->

			<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"backgroundColor":"medium-gray"} -->
			<hr class="wp-block-separator has-text-color has-medium-gray-color has-alpha-channel-opacity has-medium-gray-background-color has-background" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)"/>
			<!-- /wp:separator -->

			<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"textColor":"dark-gray"} -->
			<h4 class="wp-block-heading has-dark-gray-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--small)">Subscribe to Newsletter</h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"textColor":"dark-gray"} -->
			<p class="has-dark-gray-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--small)">Stay updated with the latest news and product announcements.</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"8px"}},"backgroundColor":"white","textColor":"dark-gray","className":"newsletter-form-placeholder","layout":{"type":"default"}} -->
			<div class="wp-block-group newsletter-form-placeholder has-dark-gray-color has-white-background-color has-text-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
				<!-- wp:paragraph {"textColor":"medium-gray","fontSize":"small"} -->
				<p class="has-medium-gray-color has-text-color has-small-font-size"><em>Add your newsletter subscription form here.</em></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
