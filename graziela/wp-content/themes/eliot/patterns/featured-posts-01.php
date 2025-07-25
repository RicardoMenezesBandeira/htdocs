<?php
/**
 * Title: Title and 4 featured posts, only text
 * Slug: eliot/featured-posts-01
 * Categories: query, eliot_pattern
 * Block Types: core/query
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"960px"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:heading {"textAlign":"center","align":"wide"} -->
		<h2 class="wp-block-heading alignwide has-text-align-center"><?php echo esc_html__( 'From the Blog', 'eliot' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
		<div class="wp-block-query">
			<!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"},"border":{"bottom":{"color":"var:preset|color|border-primary","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-primary);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
					<!-- wp:post-title {"level":5,"isLink":true} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
					<div class="wp-block-group">
						<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-secondary"}}}},"textColor":"text-secondary"} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

			<!-- /wp:post-template -->

			<!-- wp:query-no-results -->
			<!-- wp:pattern {"slug":"eliot/hidden-no-results"} /-->
			<!-- /wp:query-no-results -->

		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

</div>
<!-- /wp:group -->
