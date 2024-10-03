<?php
/**
 * Moare Steppe.
 *
 * This file adds functions for the Moare Basic Theme.
 *
 * @package moare-steppe
 * @author  Antonio
 * @since   1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.0
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since 1.0.0
 *
 * @return void
 */
if ( ! function_exists( 'moare_steppe_support' ) ) :

	function moare_steppe_support() {

		// Add support for block styles.
		// add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'assets/stylesheets/editor-style-block.css' );
		
		// Remove core patterns.
		remove_theme_support( 'core-block-patterns' );

	}
	add_action( 'after_setup_theme', 'moare_steppe_support' );

endif;

/**
 * Enqueue main scripts and styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
if ( ! function_exists( 'moare_steppe_enqueue_scripts_styles' ) ) :

	function moare_steppe_enqueue_scripts_styles() {

		// Theme version.
		$theme_version = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Register theme main scripts.
		wp_enqueue_script(
			'moare-steppe-script',
			get_template_directory_uri() . '/assets/js/main.js',
			array('jquery'),
			$version_string,
			true
		);

		// Register theme default stylesheet.
		wp_enqueue_style(
			'moare-steppe-default-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
		
		// Register theme main stylesheet.
		wp_enqueue_style(
			'moare-steppe-style',
			get_template_directory_uri() . '/assets/stylesheets/main.css',
			array(),
			$version_string
		);

	}
	add_action( 'wp_enqueue_scripts', 'moare_steppe_enqueue_scripts_styles' );

endif;


/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
if ( ! function_exists( 'moare_steppe_enqueue_variations' ) ) :

	function moare_steppe_enqueue_variations() {

		// Theme version.
		$theme_version = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Register theme variations.
		wp_enqueue_script(
			'moare-steppe-block-variations',
			get_template_directory_uri() . '/assets/js/block-variations.js',
			array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
			$version_string
		);
	}
	add_action( 'enqueue_block_editor_assets', 'moare_steppe_enqueue_variations' );

endif;

/**
 * Register custom pattern category.
 *
 * @since 1.0.0
 *
 * @return void
 */
if ( ! function_exists( 'moare_steppe_register_block_pattern_category' ) ) :
	
	function moare_steppe_register_block_pattern_category() {

		register_block_pattern_category(
			'moarepatterns',
			array(
				'label' => __( 'Moare', 'moare-steppe' ),
				'description' => __( 'Moare custom pattens', 'moare-steppe' ),
			)
		);
	
	}
	add_action( 'init', 'moare_steppe_register_block_pattern_category' );

endif;

/**
 * Register custom style core blocks.
 *
 * @since 1.0.0
 *
 * @return void
 */
if ( ! function_exists( 'moare_steppe_register_block_styles' ) ) :

	function moare_steppe_register_block_styles() {

		register_block_style( 'core/group', array(
			'name'         => 'diagonal',
			'label'        => __( 'Diagonal', 'moare-steppe' )
		) );

		register_block_style( 'core/image', array(
			'name'         => 'diagonal-top',
			'label'        => __( 'Diagonal top', 'moare-steppe' )
		) );

	}
	add_action( 'init', 'moare_steppe_register_block_styles' );

endif;

/**
 * Enqueue CSS files to style core block.
 *
 * @since 1.0.0
 *
 * @return void
 */
if ( ! function_exists( 'moare_steppe_enqueue_block_styles' ) ) :

	function moare_steppe_enqueue_block_styles() {

		wp_enqueue_block_style( 'core/group', array(
			'handle' => 'moare-stepp-block-group',
			'src'    => get_theme_file_uri( 'assets/stylesheets/blocks/core-group.css' ),
			'path'   => get_theme_file_path( 'assets/stylesheets/blocks/core-group.css' )
		) );

		wp_enqueue_block_style( 'core/image', array(
			'handle' => 'moare-stepp-block-image',
			'src'    => get_theme_file_uri( 'assets/stylesheets/blocks/core-image.css' ),
			'path'   => get_theme_file_path( 'assets/stylesheets/blocks/core-image.css' )
		) );

	}
	add_action( 'init', 'moare_steppe_enqueue_block_styles' );

endif;

/**
 * Change hamburger icon nav menu.
 * TODO: 2023-12-06 isn't possible to change using filter o similar. On roadmap add custom icons.
 *
 * @since 1.0.0
 *
 * @return void
 */
if ( ! function_exists( 'moare_steppe_render_block_core_navigation' ) ) :

	function moare_steppe_render_block_core_navigation( string $block_content, array $block ) {

		if (
			$block['blockName'] === 'core/navigation' &&
			!is_admin() &&
			!wp_is_json_request()
		) {
			return preg_replace('/\<svg width(.*?)\<\/svg\>/', '<svg width="32" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path d="m 0,4.7830688 h 24 v 2.4 H 0 Z" /> <path d="m 0,16.816931 h 22 v 2.4 H 0 Z" /> <path d="m 0,10.8 h 20 v 2.4 H 0 Z" /> </svg>', $block_content);
		}

		return $block_content;

	}

	add_filter( 'render_block', 'moare_steppe_render_block_core_navigation', null, 2 );

endif;