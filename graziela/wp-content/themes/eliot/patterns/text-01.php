<?php
/**
 * Title: Centered H2 title with separator and text
 * Slug: eliot/text-01
 * Categories: text, eliot_pattern
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'It all begins with an idea', 'eliot' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:separator {"className":"is-style-dl-sep-1"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-dl-sep-1"/>
		<!-- /wp:separator -->
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"fontSize":"xl"} -->
	<p class="has-text-align-center has-xl-font-size" style="line-height:1.5"><?php echo wp_kses_post( __( 'This text block gives a <strong>brief overview of your company</strong>. Share your philosophy, vision, or mission here.', 'eliot' ) ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
