<?php
/**
 * Title: Header with Mini Cart Block
 * Slug: public-safety-2026/header-mini-cart
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header variation with WooCommerce Mini Cart block instead of regular cart link
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"#FDBA4D","width":"10px"}}},"backgroundColor":"white","className":"site-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull site-header has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;border-bottom-color:#FDBA4D;border-bottom-width:10px">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:columns {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px"},"blockGap":"60px"}},"className":"header-row"} -->
		<div class="wp-block-columns header-row" style="padding-top:10px;padding-bottom:10px">
			<!-- wp:column {"width":"240px","className":"header-logo-col"} -->
			<div class="wp-block-column header-logo-col" style="flex-basis:240px">
				<!-- wp:site-logo {"width":150,"shouldSyncIcon":false,"className":"header-logo"} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"header-nav-col"} -->
			<div class="wp-block-column header-nav-col">
				<!-- wp:html -->
				<div class="header-utility-menu">
					<div class="header-menu-wrap">
						<nav class="header-utility-nav">
							<a href="#">Shop</a>
							<a href="#">Request a Demo</a>
							<a href="#">Events</a>
							<a href="#">Contact Us</a>
						</nav>
						<a href="/my-account" class="header-user-button" aria-label="My Account">
							<span class="dashicons dashicons-admin-users"></span>
						</a>
					</div>

					<div class="header-search-container">
						<div class="header-search-inner">
							<form role="search" method="get" class="header-search-form" action="/">
								<input type="search" class="header-search-input" placeholder="Search..." name="s" />
							</form>
							<button type="button" class="header-search-close" aria-label="Close search">
								<span class="dashicons dashicons-no-alt"></span>
							</button>
						</div>
					</div>
				</div>
				<!-- /wp:html -->

				<!-- WooCommerce Mini Cart Block -->
				<!-- wp:woocommerce/mini-cart {"hasHiddenPrice":false,"miniCartIcon":"bag","addToCartBehaviour":"open_drawer","style":{"typography":{"fontSize":"14px","fontWeight":"900"}}} /-->

				<!-- wp:html -->
				<div class="header-utility-menu">
					<div class="header-menu-wrap">
						<button type="button" class="header-search-toggle" aria-label="Search">
							<span class="dashicons dashicons-search"></span>
						</button>
					</div>
				</div>
				<!-- /wp:html -->

				<!-- Main navigation -->
				<!-- wp:navigation {"textColor":"primary","overlayMenu":"mobile","className":"header-main-nav","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"blockGap":"30px"},"typography":{"fontSize":"14px","fontWeight":"600","textTransform":"uppercase"}}} -->
					<!-- wp:navigation-link {"label":"Industries","url":"#","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"Products","url":"#","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"Resources","url":"#","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"Rentals","url":"#","kind":"custom","isTopLevelLink":true,"className":"rentals-button"} /-->
				<!-- /wp:navigation -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
