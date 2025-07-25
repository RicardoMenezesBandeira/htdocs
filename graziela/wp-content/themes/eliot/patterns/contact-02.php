<?php
/**
 * Title: Contact section with Address, Phone, Email, and Social Media
 * Slug: eliot/contact-02
 * Categories: contact, eliot_pattern
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"background-secondary","layout":{"type":"default"}} -->
			<div class="wp-block-group has-background-secondary-background-color has-background" style="border-radius:10px;min-height:100%;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|mono-4"}}}},"textColor":"mono-4"} -->
				<h4 class="wp-block-heading has-mono-4-color has-text-color has-link-color"><?php echo esc_html__( 'Address', 'eliot' ); ?></h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"mono-4"} -->
				<p class="has-mono-4-color has-text-color">123 Anywhere St., Any City<br>State, Country 456</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"background-secondary","layout":{"type":"default"}} -->
			<div class="wp-block-group has-background-secondary-background-color has-background" style="border-radius:10px;min-height:100%;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|mono-4"}}}},"textColor":"mono-4"} -->
				<h4 class="wp-block-heading has-mono-4-color has-text-color has-link-color"><?php echo esc_html__( 'Phone', 'eliot' ); ?></h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"mono-4"} -->
				<p class="has-mono-4-color has-text-color">+1 (234) 567-8910</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"background-secondary","layout":{"type":"default"}} -->
			<div class="wp-block-group has-background-secondary-background-color has-background" style="border-radius:10px;min-height:100%;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|mono-4"}}}},"textColor":"mono-4"} -->
				<h4 class="wp-block-heading has-mono-4-color has-text-color has-link-color"><?php echo esc_html__( 'Email', 'eliot' ); ?></h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"mono-4"} -->
				<p class="has-mono-4-color has-text-color">email@example.com</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"background-secondary","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-background-secondary-background-color has-background" style="border-radius:10px;min-height:100%;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|mono-4"}}}},"textColor":"mono-4"} -->
				<h4 class="wp-block-heading has-mono-4-color has-text-color has-link-color"><?php echo esc_html__( 'Follow me', 'eliot' ); ?></h4>
				<!-- /wp:heading -->

				<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#121212","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}},"className":"is-style-logos-only"} -->
				<ul class="wp-block-social-links has-icon-color is-style-logos-only">
					<!-- wp:social-link {"url":"#","service":"instagram"} /-->
					<!-- wp:social-link {"url":"#","service":"facebook"} /-->
					<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
