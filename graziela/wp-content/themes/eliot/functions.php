<?php
/**
 * Register theme specific block pattern categories.
 *
 * @package Eliot
 * @since 1.0.0
 */
function eliot_register_block_patterns() {

	register_block_pattern_category(
		'eliot_pattern',
		array(
			'label'       => _x( 'Design Lab Patterns', 'Block pattern category', 'eliot' ),
			'description' => __ ( 'A collection of professionally designed patterns.', 'eliot')
		)
	);

	register_block_pattern_category(
		'eliot_page',
		array(
			'label'       => _x( 'Design Lab Page Layouts', 'Block pattern category', 'eliot' ),
			'description' => __( 'A collection of full page layouts.', 'eliot' ),
		)
	);

}
add_action( 'init', 'eliot_register_block_patterns' );


/**
 * Register block styles.
 *
 * @package Eliot
 * @since 1.0.0
 */
if ( function_exists( 'register_block_style' ) ) {

	function eliot_register_block_styles() {

		// Post Terms
		register_block_style( 'core/post-terms', array(
			'name'  	=> 'dl-pill-shape',
			'label' 	=> esc_html__( 'Pill shape', 'eliot' ),
			'inline_style' => '
			.wp-block-post-terms.is-style-dl-pill-shape a {
				display: inline-flex;
				position: relative;
				padding: 0.25em 1em;
				text-decoration: none;
			}
			.wp-block-post-terms.is-style-dl-pill-shape a:before {
				content: "";
				background: var(--wp--preset--color--contrast);
				width: 100%;
				height: 100%;
				position: absolute;
				opacity: 0.07;
				left: 0;
				top: 0;
				border-radius: 30px;
			}
			.wp-block-post-terms.is-style-dl-pill-shape a:hover {
				opacity: 0.8;
			}
			.wp-block-post-terms.is-style-dl-pill-shape .wp-block-post-terms__separator {
				visibility: hidden;
			}',
		) );

		// List
		register_block_style(
			'core/list',
			array(
				'name'  => 'dl-check-list',
				'label' => esc_html__( 'Check list', 'eliot' ),
				'inline_style' => '
				html {
					--dl-check-icon: url(\'data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 64 64"><path d="M43.4,24.6c.8.8.8,2,0,2.8,0,0,0,0,0,0l-14,14c-.8.8-2,.8-2.8,0,0,0,0,0,0,0l-6-6c-.8-.8-.8-2,0-2.8.8-.8,2-.8,2.8,0l4.6,4.6,12.6-12.6c.8-.8,2-.8,2.8,0,0,0,0,0,0,0ZM58,32c0,14.4-11.6,26-26,26S6,46.4,6,32,17.6,6,32,6c14.4,0,26,11.6,26,26ZM54,32c0-12.2-9.8-22-22-22s-22,9.8-22,22,9.8,22,22,22c12.1,0,22-9.9,22-22Z"/></svg>\')
				}
				.is-style-dl-check-list {
					list-style-type: none;
					line-height: var(--wp--custom--typography--line-height--medium);
					padding: 0 0 0 1em;
				}
				.is-style-dl-check-list li {
					position: relative;
					padding-left: 2em;
				}
				.is-style-dl-check-list li:not(:first-child) {
					margin-top: 0.5em;
				}
				.is-style-dl-check-list li:before {
					content: " ";
					display: block;
					width: 24px;
					height: 24px;
					position: absolute;
					left: 0;
					top: 2px;
					-webkit-mask-position: center;
					mask-position: center;
					-webkit-mask-repeat: no-repeat;
					mask-repeat: no-repeat;
					background-color: currentColor;
					-webkit-mask-image: var(--dl-check-icon);
					mask-image: var(--dl-check-icon);
				}',
			)
		);

		register_block_style(
			'core/list',
			array(
				'name'  => 'dl-arrow-list',
				'label' => esc_html__( 'Arrow list', 'eliot' ),
				'inline_style' => '
				html {
					--dl-arrow-icon: url(\'data:image/svg+xml,<svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 22"><path fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round" d="M34.6,3.2l7.8,7.8l-7.8,7.8"/><path fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round" d="M1.6,11h39.5"/></svg>\')
				}
				.is-style-dl-arrow-list {
					list-style-type: none;
					line-height: var(--wp--custom--typography--line-height--medium);
					padding: 0;
				}
				.is-style-dl-arrow-list li {
					position: relative;
					padding-left: 2.5em;
				}
				.is-style-dl-arrow-list li:not(:first-child) {
					margin-top: .5em;
				}
				.is-style-dl-arrow-list li:before {
					content: " ";
					display: block;
					width: 32px;
					height: 16px;
					position: absolute;
					left: 0;
					top: 8px;
					-webkit-mask-position: center;
					mask-position: center;
					-webkit-mask-repeat: no-repeat;
					mask-repeat: no-repeat;
					background-color: currentColor;
					-webkit-mask-image: var(--dl-arrow-icon);
					mask-image: var(--dl-arrow-icon);
				}',
			)
		);

		// Details
		register_block_style(
			'core/details',
			array(
				'name'         => 'plus-icon-details',
				'label'        => __( 'Plus icon', 'eliot' ),
				'inline_style' => '
				.is-style-plus-icon-details {
					padding: var(--wp--preset--spacing--20);
				}
				.is-style-plus-icon-details summary {
					outline: 0;
					list-style-type: "\002B\00a0\00a0";
				}
				.is-style-plus-icon-details[open] > summary {
					list-style-type: "\2212\00a0\00a0";
				}
				.is-style-plus-icon-details summary::marker {
					font-size: 1.5em;
					line-height: 1;
				}',
			)
		);

		// Separator
		register_block_style(
			'core/separator',
			array(
				'name'  => 'dl-sep-1',
				'label' => esc_html__( 'Line 1', 'eliot' ),
				'inline_style' => '
				html {
					--dl-line-1: url(\'data:image/svg+xml,<svg version="1.0" width="138" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 138 24"><path d="M118.8,4.1c-6.9-0.2-10.5,9-17.6,7.9c-5.1-1.7-8.2-7.9-14.1-7.9c-7.6-0.6-12,7.8-19,9.3c-3.1-0.5-4.4-4.3-6.7-6.2 C58,3,52.1-0.6,46.7,2.1C41,5.5,37.1,11.7,31,14.4c-3,0.6-4.5-3.1-6.4-4.8c-2.4-3-5.3-6.6-9.5-6.1C9.6,3.8,6.2,9.4,3.2,13.6 c-0.7,1.5-1.9,3.1-2.6,4.8c-2.5,4.8,3.4,5.9,4,2.7c1.5-3.5,3.3-7.5,6.1-10.2c5-5.4,7.7-1.3,11.6,2.2c2.9,3.4,7.3,7.5,12,5.2 c4.3-2.4,7.6-6.5,11.5-9.6c4.5-3.7,7.8-4.4,11.9-0.1c3.9,4.5,9.9,10.6,14.5,8.5c5.6-2.2,9.4-8.6,15.7-8.9c5.9,0.7,9.1,8,15.3,8 c6.1,0.3,9.9-5.7,15.1-7.8c5.3-0.5,11.7,4.9,15.1,8.4c4.2,4.6,6.7,0.8,2-3.2C130.3,9.9,124.4,4.3,118.8,4.1z"/></svg>\');
				}
				hr.wp-block-separator.is-style-dl-sep-1 {
					width: 138px !important;
					height: 24px !important;
					background-color: unset !important;
					border: 0;
					color: inherit;
					margin-left: 0;
					margin-right: 0;
				}
				hr.wp-block-separator.is-style-dl-sep-1:before {
					content: "";
					display: block;
					height: inherit;
					width: inherit;
					-webkit-mask-image: var(--dl-line-1);
					mask-image: var(--dl-line-1);
					-webkit-mask-repeat: no-repeat;
					mask-repeat: no-repeat;
					background-color: currentColor;
				}',
			)
		);
		register_block_style(
			'core/separator',
			array(
				'name'  => 'dl-sep-2',
				'label' => esc_html__( 'Line 2', 'eliot' ),
				'inline_style' => '
				html {
					--dl-line-2: url(\'data:image/svg+xml,<svg version="1.1" width="216" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 216 12"><path d="M213.7,6.3c-12.3-0.3-24.6-0.5-36.8-0.6c0.9-0.2,1.7-0.6,2.2-1.2c0.3-0.4,0.2-1,0-1.4c-0.1-0.3-0.4-1.1-1-1.2 c-10.8-2-22.2-1.9-33.3-1.8c-11.6,0.1-23.2,0.4-34.8,0.9C86.7,2,63.8,4,40.9,6.5c-6.5,0.7-13,1.4-19.5,2.1c-3.1,0.3-6.3,0.6-9.4,0.9 C10.4,9.7,8.8,9.8,7.2,10c-0.8,0.1-1.6,0.2-2.4,0.2c-0.3,0-0.5,0.1-0.8,0.1c-0.5,0-0.9,0.1-1.4,0.1c-0.4,0.1-0.8,0.2-1.1,0.3 c-0.4,0.1-1.1,0.3-1.3,0.6c-0.1,0.1-0.1,0.2,0,0.3c0,0,0,0,0,0c0.5,0.1,0.9,0.2,1.4,0.2c0.3,0,0.6,0,0.9,0c0.7,0,1.4,0,2.2-0.1 c0.3,0,0.5,0,0.8,0c1.1,0.1,2.2,0.2,3.3,0.3c0.1,0-0.1-0.3-0.3-0.3c-0.2,0-0.5-0.1-0.7-0.1c0.5,0,1-0.1,1.6-0.1c3-0.1,6-0.4,9-0.6 c5.9-0.4,11.8-1,17.6-1.6c11.7-1.1,23.3-2.3,35-3.3c23.2-1.9,46.4-3,69.7-3.3c9.7-0.1,19.7-0.4,29.4,0.5c-2.8,0-5.7-0.1-8.5,0 c-6.6,0-13.2,0.2-19.7,0.5c-11.9,0.6-23.8,1.5-35.7,2.6c-8.9,0.5-17.7,1.3-26.4,2.5c-1,0.1-0.1,2.8,1,2.7c7.5-0.8,14.9-1.5,22.4-2.2 c9.9-0.7,19.9-1,29.9-1.1C150.4,8,168,8.1,185.6,8.4c6.6,0.1,13.2,0.2,19.8,0.3c0.1,0.3,0.3,0.5,0.5,0.5c3.2-0.1,6.5-0.1,9.7-0.3 C216.8,8.8,214.8,6.3,213.7,6.3"/></svg>\');
				}
				hr.wp-block-separator.is-style-dl-sep-2 {
					width: 216px !important;
					height: 12px !important;
					background-color: unset !important;
					border: 0;
					color: inherit;
					margin-left: 0;
					margin-right: 0;
				}
				hr.wp-block-separator.is-style-dl-sep-2:before {
					content: "";
					display: block;
					height: inherit;
					width: inherit;
					-webkit-mask-image: var(--dl-line-2);
					mask-image: var(--dl-line-2);
					-webkit-mask-repeat: no-repeat;
					mask-repeat: no-repeat;
					background-color: currentColor;
				}',
			)
		);
		register_block_style(
			'core/separator',
			array(
				'name'  => 'dl-sep-3',
				'label' => esc_html__( 'Line 3', 'eliot' ),
				'inline_style' => '
				html {
					--dl-line-3: url(\'data:image/svg+xml,<svg version="1.1" width="124" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124 24"><path d="M119.1,4.6c-1.5-0.4-3-0.5-4.5-0.8c-1.6-0.3-3.3-0.5-4.9-0.7c-3.1-0.4-6.2-0.8-9.3-1.1 c-6.1-0.6-12.2-1.1-18.3-1.4C69.5-0.1,56.9-0.2,44.3,0.4C31.5,1,18.6,2,6,4.5C4.2,4.8,2.4,5.2,0.6,5.6c-1.1,0.3-0.7,2,0.4,1.9 c12.6-0.8,25.1-2,37.7-2.6c11.8-0.5,23.6-0.6,35.4-0.2C85.8,5.2,97.5,6,109.1,7.3c1.8,0.2,3.6,0.4,5.4,0.6c1.2,0.1,2.5,0.2,3.8,0.4 c0.5,0.1,1,0.3,1.4,0.5c0.2,0.1,0.3,0.2,0.5,0.4c-0.2,0.1-0.6,0.2-0.8,0.2c-2.8,0.2-5.7,0.2-8.5,0.2c-3.2,0.1-6.5,0.2-9.7,0.2 c-12,0.3-23.9,0.8-35.9,1.2c-1.5,0.1-3,0.1-4.4,0.2c-0.9,0-1.2,1.5-0.2,1.7c12,2.5,24,5.3,36,8c-2.6,0.6-5.2,1.3-7.7,1.9 c-0.7,0.2-0.5,1.2,0.2,1.1c3.7-0.7,7.3-1.5,10.9-2.3c0.9-0.2,0.8-1.3,0-1.5c-10.6-2.4-21.1-4.7-31.7-7.2c10.3,0.1,20.6,0.2,30.9,0.1 c6.4-0.1,12.8-0.1,19.3-0.1c1.3,0,2.6,0,3.7-0.6c1.1-0.6,1.9-1.8,1.9-3.1C124,6.6,121.2,5.2,119.1,4.6"/></svg>\');
				}
				hr.wp-block-separator.is-style-dl-sep-3 {
					width: 124px !important;
					height: 24px !important;
					background-color: unset !important;
					border: 0;
					color: inherit;
					margin-left: 0;
					margin-right: 0;
				}
				hr.wp-block-separator.is-style-dl-sep-3:before {
					content: "";
					display: block;
					height: inherit;
					width: inherit;
					-webkit-mask-image: var(--dl-line-3);
					mask-image: var(--dl-line-3);
					-webkit-mask-repeat: no-repeat;
					mask-repeat: no-repeat;
					background-color: currentColor;
				}',
			)
		);

		register_block_style(
			'core/separator',
			array(
				'name'  => 'dl-arrow-1',
				'label' => esc_html__( 'Arrow 1', 'eliot' ),
				'inline_style' => '
				html {
					--dl-arrow-1: url(\'data:image/svg+xml,<svg version="1.0" width="64" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 34"> <path d="M2.2,18.7c2-3.9,6.2-7.5,10.8-7.3c4.5-12,19.9-14.2,29.9-7.9C50.6,7.7,55.8,15,60.4,22.3c0.2-2.4,0.2-4.9,0.4-7.3 c0-1.3,1.8-2.2,2.7-1.1c0.3,0.3,0.5,0.7,0.5,1.1c0,3.8-0.3,7.5-0.8,11.2c0.8,1.3-1.2,2.8-2.3,1.9c-3.9-2.5-8.1-4.3-12.6-5.5 c-0.9-0.2-1.4-1-1.2-1.9c0.9-3,7.2,0.8,9.2,1.4c-1.2-1.9-2.6-3.8-4-5.7c-1.3-1.7-4.7-5.4-7-7.3c0.1-0.1-0.6-0.6-0.7-0.6 C41.1,5.8,37.1,4,32.7,3.2c-1.8-0.2-3.5-0.3-5.2,0c-1.2,0.3-2.4,0.6-3.5,1.1c-0.2,0.1,0.1-0.1,0.1-0.1c-1.2,0.6-2.5,1.2-3.6,2.1 c-1.8,1.5-3.4,3.2-4.3,5.3c5.3,1.1,9.5,9.8,3.3,12.5c-5.5,1.6-8.3-5.1-7.4-9.7c-0.1,0-0.3,0-0.4,0.1c-0.5,0.1-1.5,0.5-1.5,0.5 s-1.5,0.7-1.9,1.3c-0.7,0.6-1.5,1.3-2,2.1l0,0c-2.4,3.1-3,7-3,10.8c0,1.1,0.1,2.1,0.1,3.2c-0.1,2-3.2,2.2-3.3,0 C-0.2,27.8,0,22.9,2.2,18.7z M15.3,16.9c0,0.2,0,0.5,0,0.7c0,0.6,0.2,1.2,0.5,1.8c0.1,0.4,0.7,1.2,0.8,1.2c0,0,0.2,0.2,0.3,0.2 c0.1,0.1,0.2,0.1,0.3,0.2c0,0,0.8,0.5,1.5,0.1c0.6-0.2,0.7-0.5,0.8-0.7c0.1-0.2,0.1-0.3,0.1-0.5c0,0,0-0.6,0-0.7 c0-0.3-0.1-1-0.3-1.3l-0.4-0.6c-0.3-0.4-1-1.2-1-1.2c-0.6-0.6-1.5-1-2.2-1C15.5,15,15.3,15.5,15.3,16.9z"/> </svg>\');
				}
				hr.wp-block-separator.is-style-dl-arrow-1 {
					width: 64px !important;
					height: 48px !important;
					background-color: unset !important;
					border: 0;
					color: inherit;
					margin-left: 0;
					margin-right: 0;
				}
				hr.wp-block-separator.is-style-dl-arrow-1:before {
					content: "";
					display: block;
					height: inherit;
					width: inherit;
					-webkit-mask-image: var(--dl-arrow-1);
					mask-image: var(--dl-arrow-1);
					-webkit-mask-repeat: no-repeat;
					mask-repeat: no-repeat;
					background-color: currentColor;
				}',
			)
		);

		register_block_style(
			'core/separator',
			array(
				'name'  => 'dl-arrow-2',
				'label' => esc_html__( 'Arrow 2', 'eliot' ),
				'inline_style' => '
				html {
					--dl-arrow-2: url(\'data:image/svg+xml,<svg version="1.0" width="76" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 48"><path d="M75.8,35.2c1.7-2.4-11-21.6-11.9-13.4c0,0.7,0.5,1.2,1,1.6c2.4,2.4,4.6,5.2,6.1,8.2c-9.2-5.4-20.1-7.2-30.5-5.1 c-2.4-11.9-18-9-26-4.8C8.8,24.6,3.9,28.9,0.3,34.1c-1.3,2,1.5,3.9,2.9,2.1c4.4-6.6,11.3-11.4,18.9-13.6c5.1-1.5,13.9-2.1,14.8,4.8 c-7,2.1-13.9,6-18.9,11.4c-5.9,7,1.6,11.7,8.3,7.8c6.5-3.3,12.4-9.1,14-16.4c9.5-2.2,19.8-0.6,28.3,4.1c-2.8,0.9-5.4,2.3-8.1,3.5 c-1.5,0.6-1.5,2.8,0,3.4c0.4,0.1,1,0.2,1.4,0c3.2-1.6,6.6-3,10-4.2C73.3,36.5,75,36.5,75.8,35.2z M26.6,42.2c-2,0.9-4.4,2.8-6.6,1.8 c-1.6-4,12.9-12,16.4-12.8C34.6,35.9,30.8,39.6,26.6,42.2z"/> <path d="M42.3,16.9c-0.4,0.3-0.9,0.4-1.3,0.4c-0.5,0-0.9-0.3-1.2-0.7c-0.3-0.4-0.4-0.8-0.4-1.3c0-0.4,0-0.8,0-1.2 c0-0.8,0-1.5-0.1-2.3C39,9,38.6,6.2,37.8,3.4c-0.1-0.3-0.2-0.6-0.3-0.9c-0.1-0.3-0.2-0.6-0.1-0.9c0-0.2,0.1-0.3,0.1-0.5 c0.2-0.5,0.5-0.8,1-1c0.4-0.2,1-0.2,1.4,0c0.4,0.2,0.9,0.6,1,1c0.3,1.1,0.6,2.2,0.9,3.4c0.9,3.7,1.2,7.5,1.1,11.2 C42.9,16.2,42.6,16.6,42.3,16.9z M52.5,6.5c0.2-0.4,0.2-0.9,0-1.4c-0.2-0.4-0.6-0.8-1-1c-0.4-0.2-0.9-0.2-1.4,0 c-0.4,0.2-0.8,0.6-1,1c-0.9,2.5-1.7,4.9-2.6,7.4c-0.2,0.4-0.2,0.9,0,1.4c0.2,0.4,0.6,0.8,1,1c0.4,0.2,0.9,0.2,1.4,0 c0.4-0.2,0.8-0.6,1-1C50.8,11.4,51.7,8.9,52.5,6.5z M54.6,18.9c1.1-1.3,2.2-2.5,3.3-3.8c0.3-0.3,0.4-0.9,0.3-1.3 c-0.1-0.5-0.3-1-0.7-1.2c-0.4-0.3-0.9-0.4-1.3-0.3c-0.5,0.1-0.9,0.3-1.2,0.7c-1.1,1.3-2.2,2.5-3.3,3.8c-0.3,0.3-0.4,0.9-0.3,1.3 c0.1,0.5,0.3,1,0.7,1.2c0.4,0.3,0.9,0.4,1.3,0.3C53.9,19.5,54.3,19.3,54.6,18.9z"/></svg>\');
				}
				hr.wp-block-separator.is-style-dl-arrow-2 {
					width: 76px !important;
					height: 48px !important;
					background-color: unset !important;
					border: 0;
					color: inherit;
					margin-left: 0;
					margin-right: 0;
				}
				hr.wp-block-separator.is-style-dl-arrow-2:before {
					content: "";
					display: block;
					height: inherit;
					width: inherit;
					-webkit-mask-image: var(--dl-arrow-2);
					mask-image: var(--dl-arrow-2);
					-webkit-mask-repeat: no-repeat;
					mask-repeat: no-repeat;
					background-color: currentColor;
				}',
			)
		);
	}
	add_action( 'init', 'eliot_register_block_styles' );
}


/**
 * Add About Page
 * @package Eliot Studio
 * @since 1.0.0
 */
require_once get_template_directory() . '/inc/about-page/about-eliot.php';


/**
 * Add Upsell notice
 * @package Eliot Studio
 * @since 1.0.0
 */
function eliot_notice() {
	$user_id = get_current_user_id();
	if ( ! get_user_meta( $user_id, 'eliot_notice_dismissed' ) ) {
	?>
	<div class="updated notice notice-success is-dismissible eliot-admin-notice">
		<h2 class="welcome-title">
			<?php esc_html_e( 'Welcome! Thank you for choosing Eliot WordPress Theme', 'eliot' ); ?>
		</h2>
		<p>
			<?php echo wp_kses_post( __( '<strong>To fully take advantage</strong> of the best our theme can offer, please visit our', 'eliot' ) ); ?> <a href="<?php echo esc_url( admin_url( 'themes.php?page=about_eliot' ) ); ?>"><strong><?php esc_html_e( 'Welcome Page', 'eliot' ); ?></strong></a>
		</p>
		<p>
			<a class="button button-primary" href="<?php echo esc_url( 'https://www.designlabthemes.com/eliot-pro-wordpress-theme/?utm_source=WordPress&utm_medium=notice&utm_campaign=eliot_upsell' ); ?>" target="_blank">
				<?php esc_html_e( 'View Eliot Pro', 'eliot' ); ?>
			</a>
			<a style="color: #646970;margin-left: 0.5em;" href="<?php echo esc_url( '?eliot-dismissed' ); ?>">
				<?php esc_html_e( 'Dismiss', 'eliot' ); ?>
			</a>
		</p>
	</div>
	<?php
	}
}
add_action( 'admin_notices', 'eliot_notice' );

function eliot_notice_dismissed() {
	$user_id = get_current_user_id();
	if ( isset( $_GET['eliot-dismissed'] ) ) {
		add_user_meta( $user_id, 'eliot_notice_dismissed', 'true', true );
	}
}
add_action( 'admin_init', 'eliot_notice_dismissed' );
