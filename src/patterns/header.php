<?php
/**
 * Title: Header with Custom Blocks
 * Slug: seiler-2026/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Default header with customer account, cart, and search custom blocks
 */
?>
<!-- wp:group {"align":"full","className":"site-header","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"#FDBA4D","width":"10px"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull site-header has-white-background-color has-background" style="border-bottom-color:#FDBA4D;border-bottom-width:10px;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"className":"header-row","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"},"blockGap":"60px"}}} -->
<div class="wp-block-columns header-row" style="padding-top:10px;padding-bottom:10px"><!-- wp:column {"width":"240px","className":"header-logo-col"} -->
<div class="wp-block-column header-logo-col" style="flex-basis:240px"><!-- wp:site-logo {"width":150,"shouldSyncIcon":false,"className":"header-logo"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"className":"header-nav-col"} -->
<div class="wp-block-column header-nav-col"><!-- wp:navigation {"textColor":"contrast","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"header-utility-nav","style":{"spacing":{"blockGap":"20px"},"typography":{"fontSize":"14px","fontWeight":"600","textTransform":"uppercase"}},"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"}} -->
<!-- wp:seiler-2026/customer-account-nav /-->
<!-- wp:seiler-2026/cart-link-nav /-->
<!-- wp:seiler-2026/search-overlay /-->
<!-- /wp:navigation -->

<!-- wp:navigation {"textColor":"primary","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"header-main-nav","style":{"spacing":{"blockGap":"30px"},"typography":{"fontSize":"14px","fontWeight":"700","textTransform":"uppercase"}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"}} -->
<!-- wp:navigation-link {"label":"Industries","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"Products","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"Resources","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-submenu {"label":"About","url":"#","kind":"custom","isTopLevelItem":true} -->
<!-- wp:navigation-link {"label":"Locations","url":"#","kind":"custom","isTopLevelLink":false} /-->
<!-- wp:navigation-link {"label":"Partners","url":"#","kind":"custom","isTopLevelLink":false} /-->
<!-- wp:navigation-link {"label":"News","url":"#","kind":"custom","isTopLevelLink":false} /-->
<!-- /wp:navigation-submenu -->
<!-- wp:navigation-link {"label":"Rentals","url":"#","kind":"custom","isTopLevelLink":true,"className":"menu-button"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
