<?php
/**
 * Title: About section with H1 title, two images, and text
 * Slug: eliot/about-02
 * Categories: about, eliot_pattern
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"bottom"} -->
		<div class="wp-block-column is-vertically-aligned-bottom">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":""}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
					<p class="has-primary-color has-text-color has-small-font-size" style="line-height:1.5;text-transform:uppercase"><strong><?php echo esc_html__( 'About me', 'eliot' ); ?></strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":1} -->
					<h1 class="wp-block-heading"><?php echo esc_html__( 'Hello! Let me introduce myself', 'eliot' ); ?></h1>
					<!-- /wp:heading -->

					<!-- wp:separator {"className":"is-style-dl-sep-4 is-style-dl-sep-2"} -->
					<hr class="wp-block-separator has-alpha-channel-opacity is-style-dl-sep-4 is-style-dl-sep-2"/>
					<!-- /wp:separator -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph -->
				<p><?php echo wp_kses_post( __( '<strong>This space is for a short bio or background about you.</strong> You can talk about your background, history, mission, or philosophy. Anything that will introduce your brand’s persona to your users.', 'eliot' ) ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Just a short paragraph. You can write your own content here. This is just a demo text, so feel free to overwrite it.', 'eliot' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:social-links {"size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex"}} -->
				<ul class="wp-block-social-links has-normal-icon-size">
					<!-- wp:social-link {"url":"#","service":"instagram"} /-->
					<!-- wp:social-link {"url":"#","service":"pinterest"} /-->
					<!-- wp:social-link {"url":"#","service":"tiktok"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:group -->

			<!-- wp:image {"aspectRatio":"3/2","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/working-in-a-cafe.webp' ) ); ?>" alt="" style="border-radius:20px;aspect-ratio:3/2;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"bottom":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-column" style="padding-bottom:var(--wp--preset--spacing--40)">
			<!-- wp:image {"aspectRatio":"2/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/art-gallery.webp' ) ); ?>" alt="" style="border-radius:20px;aspect-ratio:2/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
