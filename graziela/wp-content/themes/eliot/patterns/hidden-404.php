<?php
/**
 * Title: 404 error content.
 * Slug: eliot/hidden-404
 * Inserter: no
 */
?>

<!-- wp:heading {"level":1} -->
<h1><?php echo esc_html_x( '404', 'Error code for a webpage that is not found.', 'eliot' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'The page you were looking for is nowhere to be found. Maybe give the search form below a try?', 'Message to convey that a webpage could not be found', 'eliot' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'eliot' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'eliot' ); ?>","showLabel":false,"width":100,"widthUnit":"%","buttonText":"<?php echo esc_attr( 'Search', 'eliot' ); ?>","buttonUseIcon":true,"align":"center"} /-->
