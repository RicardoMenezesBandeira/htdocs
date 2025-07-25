<?php
/**
 * Title: Featured section with title, text, and two images
 * Slug: eliot/featured-04
 * Categories: featured, eliot_pattern
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"75%"} -->
				<div class="wp-block-column" style="flex-basis:75%">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
					<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands-using-laptop.webp' ) ); ?>" alt="" style="border-radius:20px;aspect-ratio:4/3;object-fit:cover"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"></div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column"></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"75%"} -->
				<div class="wp-block-column" style="flex-basis:75%">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
					<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/camera-taking-picture.webp' ) ); ?>" alt="" style="border-radius:20px;aspect-ratio:4/3;object-fit:cover"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:group {"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:heading -->
				<h2 class="wp-block-heading"><?php echo esc_html__( 'My approach', 'eliot' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"large"} -->
				<p class="has-large-font-size"><?php echo wp_kses_post( __( 'What makes your product, service, or company different?<br>Write a short description about the <strong>services or products you offer</strong>, and how the visitor will benefit from it.', 'eliot' ) ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
				<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:list {"className":"is-style-dl-arrow-list"} -->
				<ul class="wp-block-list is-style-dl-arrow-list">
					<!-- wp:list-item -->
					<li><?php echo esc_html__( 'Just a short paragraph', 'eliot' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html__( 'Write your own content here', 'eliot' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html__( 'This is just a demo text', 'eliot' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html__( 'Just a short paragraph', 'eliot' ); ?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo esc_html__( 'Write your own content here', 'eliot' ); ?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
