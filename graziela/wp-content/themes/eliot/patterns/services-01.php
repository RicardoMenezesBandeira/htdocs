<?php
/**
 * Title: Service section with title and three featured services
 * Slug: eliot/services-01
 * Categories: services, eliot_pattern
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Services Offered', 'eliot' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"align":"center","width":"160px","aspectRatio":"3/2","scale":"cover","sizeSlug":"medium","linkDestination":"none","className":"is-style-rounded"} -->
			<figure class="wp-block-image aligncenter size-medium is-resized is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/notebook-pen.webp' ) ); ?>" alt="" style="aspect-ratio:3/2;object-fit:cover;width:160px"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"center","level":4} -->
				<h4 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Editorial', 'eliot' ); ?></h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Write a short description about the services or products you offer, and how the visitor will benefit from it.', 'eliot' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"align":"center","width":"160px","aspectRatio":"3/2","scale":"cover","sizeSlug":"medium","linkDestination":"none","className":"is-style-rounded"} -->
			<figure class="wp-block-image aligncenter size-medium is-resized is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/vintage-camera.webp' ) ); ?>" alt="" style="aspect-ratio:3/2;object-fit:cover;width:160px"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"center","level":4} -->
				<h4 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Social media', 'eliot' ); ?></h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Write a short description about the services or products you offer, and how the visitor will benefit from it.', 'eliot' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"align":"center","width":"160px","aspectRatio":"3/2","scale":"cover","sizeSlug":"medium","linkDestination":"none","className":"is-style-rounded"} -->
			<figure class="wp-block-image aligncenter size-medium is-resized is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/smartwatch.webp' ) ); ?>" alt="" style="aspect-ratio:3/2;object-fit:cover;width:160px"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"center","level":4} -->
				<h4 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Content Marketing', 'eliot' ); ?></h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Write a short description about the services or products you offer, and how the visitor will benefit from it.', 'eliot' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><a href="#"><?php echo esc_html__( 'View all Services &rarr;', 'eliot' ); ?></a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
