<?php
/**
 * Title: Portfolio section with six featured elements
 * Slug: eliot/portfolio-02
 * Categories: portfolio, eliot_pattern
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hello.webp' ) ); ?>" alt="" style="border-radius:20px;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-secondary"}}}},"textColor":"text-secondary","fontSize":"x-small"} -->
				<p class="has-text-secondary-color has-text-color has-link-color has-x-small-font-size"><strong>01.</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading"><a href="#"><?php echo esc_html__( 'Project Title &rarr;', 'eliot' ); ?></a></h4>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/man-reading.webp' ) ); ?>" alt="" style="border-radius:20px;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-secondary"}}}},"textColor":"text-secondary","fontSize":"x-small"} -->
				<p class="has-text-secondary-color has-text-color has-link-color has-x-small-font-size"><strong>02.</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading"><a href="#"><?php echo esc_html__( 'Project Title &rarr;', 'eliot' ); ?></a></h4>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/camera-taking-picture.webp' ) ); ?>" alt="" style="border-radius:20px;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-secondary"}}}},"textColor":"text-secondary","fontSize":"x-small"} -->
				<p class="has-text-secondary-color has-text-color has-link-color has-x-small-font-size"><strong>03.</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading"><a href="#"><?php echo esc_html__( 'Project Title &rarr;', 'eliot' ); ?></a></h4>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/notebook-pen.webp' ) ); ?>" alt="" style="border-radius:20px;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-secondary"}}}},"textColor":"text-secondary","fontSize":"x-small"} -->
				<p class="has-text-secondary-color has-text-color has-link-color has-x-small-font-size"><strong>04.</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading"><a href="#"><?php echo esc_html__( 'Project Title &rarr;', 'eliot' ); ?></a></h4>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/black-bike.webp' ) ); ?>" alt="" style="border-radius:20px;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-secondary"}}}},"textColor":"text-secondary","fontSize":"x-small"} -->
				<p class="has-text-secondary-color has-text-color has-link-color has-x-small-font-size"><strong>05.</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading"><a href="#"><?php echo esc_html__( 'Project Title &rarr;', 'eliot' ); ?></a></h4>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/laptop.webp' ) ); ?>" alt="" style="border-radius:20px;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-secondary"}}}},"textColor":"text-secondary","fontSize":"x-small"} -->
				<p class="has-text-secondary-color has-text-color has-link-color has-x-small-font-size"><strong>06.</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading"><a href="#"><?php echo esc_html__( 'Project Title &rarr;', 'eliot' ); ?></a></h4>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
