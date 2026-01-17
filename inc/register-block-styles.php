<?php
/**
 * Block styles.
 *
 * @package temple-seva-portal
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function temple_seva_portal_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'temple-seva-portal-flat-button',
			'label' => __( 'Flat button', 'temple-seva-portal' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'temple-seva-portal-list-underline',
			'label' => __( 'Underlined list items', 'temple-seva-portal' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'temple-seva-portal-box-shadow',
			'label' => __( 'Box shadow', 'temple-seva-portal' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'temple-seva-portal-box-shadow',
			'label' => __( 'Box shadow', 'temple-seva-portal' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'temple-seva-portal-box-shadow',
			'label' => __( 'Box shadow', 'temple-seva-portal' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'temple-seva-portal-plus',
			'label' => __( 'Plus & minus', 'temple-seva-portal' ),
		)
	);
}
add_action( 'init', 'temple_seva_portal_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function temple_seva_portal_unregister_block_style() {
	wp_enqueue_script(
		'temple-seva-portal-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		TEMPLE_SEVA_PORTAL_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'temple_seva_portal_unregister_block_style' );
