<?php
/**
 * Title: Header with Call to action inside background color
 * Slug: eliot/header-with-cta
 * Categories: header, eliot_pattern
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"full","className":"is-style-dl-wave","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"backgroundColor":"background-primary","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-background-primary-background-color has-background is-style-dl-wave" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo {"width":64,"className":"is-style-rounded"} /-->
				<!-- wp:site-title /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
			<div class="wp-block-group">
				<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fit","flexSize":null}}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px","padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"}}},"backgroundColor":"background-primary","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-background-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">

		<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
					<!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"-2px","lineHeight":"1.1"}},"fontSize":"7-xl"} -->
					<h1 class="wp-block-heading has-7-xl-font-size" style="font-style:normal;font-weight:700;letter-spacing:-2px;line-height:1.1"><?php echo esc_html__( 'Hi! I\'m Kate', 'eliot' ); ?></h1>
					<!-- /wp:heading -->

					<!-- wp:separator {"className":"is-style-dl-sep-2"} -->
					<hr class="wp-block-separator has-alpha-channel-opacity is-style-dl-sep-2"/>
					<!-- /wp:separator -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.2"}},"fontSize":"5-xl"} -->
				<p class="has-5-xl-font-size" style="font-style:normal;font-weight:400;line-height:1.2"><em><?php echo esc_html__( 'The way you tell your story online can make all the difference', 'eliot' ); ?></em></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"contrast","textColor":"base","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-fill"} -->
					<div class="wp-block-button is-style-fill" style="font-style:normal;font-weight:600"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background wp-element-button"><?php echo esc_html__( 'Get in touch', 'eliot' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
				<figure class="wp-block-image size-large is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-smiling.webp' ) ); ?>" alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
		<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
