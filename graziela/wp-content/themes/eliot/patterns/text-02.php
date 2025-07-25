<?php
/**
 * Title: H2 title and checklist
 * Slug: eliot/text-02
 * Categories: text, services, eliot_pattern
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php echo esc_html__( 'What I Offer', 'eliot' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:separator {"className":"is-style-dl-arrow-2"} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-dl-arrow-2"/>
			<!-- /wp:separator -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:list {"className":"is-style-dl-check-list"} -->
			<ul class="is-style-dl-check-list">
				<!-- wp:list-item -->
				<li><?php echo esc_html__( 'This is a placeholder text', 'eliot' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php echo esc_html__( 'Add a list item here', 'eliot' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php echo esc_html__( 'This is a placeholder text', 'eliot' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php echo esc_html__( 'Add a list item here', 'eliot' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php echo esc_html__( 'This is a placeholder text', 'eliot' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php echo esc_html__( 'Add a list item here', 'eliot' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
