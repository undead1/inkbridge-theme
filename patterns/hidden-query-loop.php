<?php
/**
 * Title: Query Loop
 * Slug: inkbridge-theme/hidden-query-loop
 * Inserter: no
 */
?>
<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"layout":{"type":"default"}} -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"bottom":{"color":"var:preset|color|accent-6","width":"1px"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--accent-6);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
			<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"small","textColor":"accent-4"} -->
			<div class="wp-block-group has-accent-4-color has-text-color has-small-font-size">
				<!-- wp:post-date /-->
				<!-- wp:paragraph -->
				<p>·</p>
				<!-- /wp:paragraph -->
				<!-- wp:post-terms {"term":"category"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-excerpt {"moreText":"Continue reading","excerptLength":30} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
		<!-- wp:paragraph {"align":"center","textColor":"accent-4"} -->
		<p class="has-text-align-center has-accent-4-color has-text-color">No posts found.</p>
		<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
