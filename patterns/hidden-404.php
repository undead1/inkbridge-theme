<?php
/**
 * Title: 404
 * Slug: inkbridge-theme/hidden-404
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xxx-large"} -->
	<h1 class="wp-block-heading has-text-align-center has-xxx-large-font-size">404</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"accent-4","fontSize":"large"} -->
	<p class="has-text-align-center has-accent-4-color has-text-color has-large-font-size"><?php esc_html_e( 'Page not found. The page you are looking for does not exist or has been moved.', 'inkbridge-theme' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'inkbridge-theme' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search this site...', 'inkbridge-theme' ); ?>","widthUnit":"%","width":100,"buttonText":"<?php echo esc_attr__( 'Search', 'inkbridge-theme' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true} /-->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--40)"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to homepage', 'inkbridge-theme' ); ?></a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
