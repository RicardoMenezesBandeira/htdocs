<?php
/**
 * Title: Comments
 * Slug: eliot/hidden-comments
 * Inserter: no
 */
?>
<!-- wp:comments -->
<div class="wp-block-comments">

	<!-- wp:comments-title {"level":3,"showPostTitle":false} /-->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">

		<!-- wp:comment-template -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|60"},"blockGap":"0px"}}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--60)">

				<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0px","bottom":"0px"}}}} -->
				<div class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:0px;margin-bottom:0px">
					<!-- wp:column {"width":"48px"} -->
					<div class="wp-block-column" style="flex-basis:48px">
						<!-- wp:avatar {"size":48,"style":{"border":{"radius":"100px"}}} /-->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
					<div class="wp-block-column">
						<!-- wp:comment-author-name {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->
						<!-- wp:group {"layout":{"type":"flex"}} -->
						<div class="wp-block-group">
							<!-- wp:comment-date /-->
							<!-- wp:comment-edit-link /-->
						</div>
						<!-- /wp:group -->
						<!-- wp:comment-content /-->
						<!-- wp:comment-reply-link /-->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:comment-template -->

		<!-- wp:comments-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:comments-pagination-previous /-->
			<!-- wp:comments-pagination-next /-->
		<!-- /wp:comments-pagination -->

		<!-- wp:post-comments-form /-->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:comments -->
