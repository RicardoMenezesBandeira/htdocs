<?php
/**
 * Title: Three testimonials with text, image, and title
 * Slug: eliot/testimonials-01
 * Categories: testimonials, eliot_pattern
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Testimonials', 'eliot' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:separator {"className":"is-style-dl-sep-1"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-dl-sep-1"/>
		<!-- /wp:separator -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"align":"center","width":"96px","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<figure class="wp-block-image aligncenter size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-sunglasses.webp' ) ); ?>" alt="" style="width:96px"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Boost your product and service\'s credibility by adding testimonials from your clients. People love recommendations so feedback from others who\'ve tried it is invaluable.', 'eliot' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"48px"}},"className":"is-style-default"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-default"/>
				<!-- /wp:separator -->

				<!-- wp:heading {"textAlign":"center","level":4} -->
				<h4 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Hannah J.', 'eliot' ); ?></h4>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"align":"center","width":"96px","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<figure class="wp-block-image aligncenter size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/man-coffee.webp' ) ); ?>" alt="" style="width:96px"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Boost your product and service\'s credibility by adding testimonials from your clients. People love recommendations so feedback from others who\'ve tried it is invaluable.', 'eliot' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"48px"}},"className":"is-style-default"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-default"/>
				<!-- /wp:separator -->

				<!-- wp:heading {"textAlign":"center","level":4} -->
				<h4 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'David K.', 'eliot' ); ?></h4>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"align":"center","width":"96px","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
			<figure class="wp-block-image aligncenter size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-black-hair.webp' ) ); ?>" alt="" style="width:96px"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Boost your product and service\'s credibility by adding testimonials from your clients. People love recommendations so feedback from others who\'ve tried it is invaluable.', 'eliot' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"48px"}},"className":"is-style-default"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-default"/>
				<!-- /wp:separator -->

				<!-- wp:heading {"textAlign":"center","level":4} -->
				<h4 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Jasmine P.', 'eliot' ); ?></h4>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
