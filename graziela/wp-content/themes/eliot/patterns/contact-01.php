<?php
/**
 * Title: Contact section with Address, Phone, Email, and Social Media
 * Slug: eliot/contact-01
 * Categories: contact, eliot_pattern
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<h3 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'Let’s Connect!', 'eliot' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="text-transform:uppercase"><strong><?php echo esc_html__( 'Address', 'eliot' ); ?></strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%">
			<!-- wp:paragraph -->
			<p>123 Anywhere St., Any City, State, Country 456</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"backgroundColor":"border-secondary","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-border-secondary-color has-alpha-channel-opacity has-border-secondary-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="text-transform:uppercase"><strong><?php echo esc_html__( 'Give me a call', 'eliot' ); ?></strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%">
			<!-- wp:paragraph -->
			<p>+1 (234) 567-8910</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"backgroundColor":"border-secondary","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-border-secondary-color has-alpha-channel-opacity has-border-secondary-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="text-transform:uppercase"><strong><?php echo esc_html__( 'Email me', 'eliot' ); ?></strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%">
			<!-- wp:paragraph -->
			<p>hello@example.com</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"backgroundColor":"border-secondary","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-border-secondary-color has-alpha-channel-opacity has-border-secondary-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="text-transform:uppercase"><strong><?php echo esc_html__( 'Social media', 'eliot' ); ?></strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%">
			<!-- wp:social-links {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links is-style-logos-only">
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
