<?php
/**
 * Title: Default Footer
 * Slug: eliot/footer
 * Categories: footer, eliot_pattern
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"margin":{"bottom":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group">

			<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php _e( '&copy;', 'eliot' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:social-links {"iconColor":"contrast","size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}}},"className":"has-icon-color is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
		<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
			<!-- wp:social-link {"url":"https://www.facebook.com","service":"facebook"} /-->
			<!-- wp:social-link {"url":"https://x.com","service":"x"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size">
	<?php
	printf(
		/* Translators: WordPress link. */
		esc_html__( 'Theme by %s', 'eliot' ),
		'<a href="' . esc_url( __( 'https://www.designlabthemes.com/', 'eliot' ) ) . '" rel="nofollow">Design Lab</a>'
	)
	?>
	</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
