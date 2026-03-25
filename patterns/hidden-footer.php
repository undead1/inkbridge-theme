<?php
/**
 * Title: Footer
 * Slug: inkbridge-theme/hidden-footer
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}}},"backgroundColor":"accent-5","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-accent-5-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"fontSize":"medium"} /-->
		<!-- wp:paragraph {"fontSize":"small","textColor":"accent-4"} -->
		<p class="has-accent-4-color has-text-color has-small-font-size"><?php printf( esc_html__( 'Powered by %s', 'inkbridge-theme' ), 'WordPress' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
