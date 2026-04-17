<?php
/**
 * Title: Archive Header
 * Slug: seiler-2026/archive-header
 * Categories: seiler-header
 * Description: Title section for archive and search results pages. Both query-title blocks are
 *              context-aware — each renders only in its respective context, the other is silent.
 *              Pair with a sub-header pattern (search-section, or inline term-description).
 * Inserter: false
 */
?>
<!-- wp:group {"align":"full","className":"page-header-title","backgroundColor":"primary","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull page-header-title has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium)">
	<!-- wp:query-title {"type":"archive","showPrefix":false,"textAlign":"center","textColor":"white","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
	<!-- wp:query-title {"type":"search","textAlign":"center","textColor":"white","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
</div>
<!-- /wp:group -->
