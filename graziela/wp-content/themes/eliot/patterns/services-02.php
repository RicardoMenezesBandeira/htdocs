<?php
/**
 * Title: Three services
 * Slug: eliot/services-02
 * Categories: services, eliot_pattern
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">Services</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><a href="#"><?php echo esc_html__( 'View all services &rarr;', 'eliot' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"fontSize":"x-small"} -->
				<p class="has-x-small-font-size"><strong>01.</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading"><?php echo esc_html__( 'Strategy', 'eliot' ); ?></h4>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Write a short description about the services or products you offer, and how the visitor will benefit from it.', 'eliot' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"fontSize":"x-small"} -->
				<p class="has-x-small-font-size"><strong>02.</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading"><?php echo esc_html__( 'Social Media', 'eliot' ); ?></h4>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Write a short description about the services or products you offer, and how the visitor will benefit from it.', 'eliot' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"fontSize":"x-small"} -->
				<p class="has-x-small-font-size"><strong>03.</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading"><?php echo esc_html__( 'Advertising', 'eliot' ); ?></h4>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Write a short description about the services or products you offer, and how the visitor will benefit from it.', 'eliot' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
