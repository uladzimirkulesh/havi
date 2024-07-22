<?php
/**
 * Havi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Havi
 * @since Havi 1.0.0
 */

if ( ! function_exists( 'havi_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Havi 1.0.0
	 *
	 * @return void
	 */
	function havi_support() {

		// Enqueue editor styles.
		add_editor_style( array(
			'style.css',
			'assets/css/grid.css',
			'assets/css/patterns.css',
			'assets/css/animations.css',
			'assets/css/uk-portfolio.css'
		) );

	}

endif;

add_action( 'after_setup_theme', 'havi_support' );

if ( ! function_exists( 'havi_scripts' ) ) :

	/**
	 * Enqueue styles and scripts.
	 *
	 * @since Havi 1.0.0
	 *
	 * @return void
	 */
	function havi_scripts() {

		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Register main stylesheet.
		wp_register_style(
			'havi-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue main stylesheet.
		wp_enqueue_style( 'havi-style' );

		// Register other stylesheets.
		wp_register_style(
			'havi-grid',
			get_template_directory_uri() . '/assets/css/grid.css',
			array( 'havi-style' ),
			$version_string
		);

		wp_register_style(
			'havi-patterns',
			get_template_directory_uri() . '/assets/css/patterns.css',
			array( 'havi-style' ),
			$version_string
		);

		wp_register_style(
			'havi-animations',
			get_template_directory_uri() . '/assets/css/animations.css',
			array( 'havi-style' ),
			$version_string
		);

		// Enqueue other stylesheets.
		wp_enqueue_style( 'havi-grid' );
		wp_enqueue_style( 'havi-patterns' );
		wp_enqueue_style( 'havi-animations' );

		// Register plugins stylesheets.
		wp_register_style(
			'uk-portfolio',
			get_template_directory_uri() . '/assets/css/uk-portfolio.css',
			array( 'havi-style' ),
			$version_string
		);

		// Enqueue plugins stylesheets.
		wp_enqueue_style( 'uk-portfolio' );

		// Register global scripts.
		wp_register_script(
			'havi-global',
			get_template_directory_uri() . '/assets/js/global.js',
			array( 'jquery' ),
			$version_string,
			array(
				'strategy' => 'defer',
				'in_footer' => true
			)
		);

		// Enqueue global scripts.
		wp_enqueue_script( 'havi-global' );

		// Register animations scripts.
		wp_register_script(
			'havi-animations',
			get_template_directory_uri() . '/assets/js/animations.js',
			array( 'havi-global' ),
			$version_string,
			array(
				'strategy' => 'defer',
				'in_footer' => true
			)
		);

		// Enqueue animations scripts.
		wp_enqueue_script( 'havi-animations' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'havi_scripts' );

if ( ! function_exists( 'havi_block_styles' ) ) :

	/**
	 * Enqueue block style scripts.
	 *
	 * @since Havi 1.0.0
	 *
	 * @return void
	 */
	function havi_block_styles() {

		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_enqueue_script(
			'havi-block-styles',
			get_theme_file_uri( '/assets/js/block-styles.js' ),
			array(
				'wp-blocks',
				'wp-dom-ready',
				'wp-edit-post',
				'wp-i18n'
			),
			$version_string,
			true
		);

		wp_set_script_translations( 'havi-block-styles', 'havi' );

	}

endif;

add_action( 'enqueue_block_editor_assets', 'havi_block_styles' );

if ( ! function_exists( 'havi_block_stylesheets' ) ) :

	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Havi 1.0.0
	 *
	 * @return void
	 */
	function havi_block_stylesheets() {

		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */

		$theme_version  = wp_get_theme( get_template() )->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_enqueue_block_style(
			'core/code',
			array(
				'handle' => 'havi-code',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/code.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/code.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/comment-content',
			array(
				'handle' => 'havi-comment-content',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/comment-content.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/comment-content.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/comments-pagination',
			array(
				'handle' => 'havi-comments-pagination',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/comments-pagination.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/comments-pagination.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/gallery',
			array(
				'handle' => 'havi-gallery',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/gallery.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/gallery.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/group',
			array(
				'handle' => 'havi-group',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/group.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/group.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/heading',
			array(
				'handle' => 'havi-heading',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/heading.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/heading.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/image',
			array(
				'handle' => 'havi-image',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/image.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/image.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/navigation',
			array(
				'handle' => 'havi-navigation',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/navigation.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/navigation.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/post-comments-form',
			array(
				'handle' => 'havi-post-comments-form',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/post-comments-form.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/post-comments-form.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/post-terms',
			array(
				'handle' => 'havi-post-terms',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/post-terms.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/post-terms.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/pullquote',
			array(
				'handle' => 'havi-pullquote',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/pullquote.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/pullquote.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/query-pagination',
			array(
				'handle' => 'havi-query-pagination',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/query-pagination.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/query-pagination.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/query',
			array(
				'handle' => 'havi-query',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/query.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/query.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/quote',
			array(
				'handle' => 'havi-quote',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/quote.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/quote.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/search',
			array(
				'handle' => 'havi-search',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/search.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/search.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/separator',
			array(
				'handle' => 'havi-separator',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/separator.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/separator.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/table',
			array(
				'handle' => 'havi-table',
				'src'    => get_parent_theme_file_uri( 'assets/css/blocks/table.css' ),
				'ver'    => $version_string,
				'path'   => get_parent_theme_file_path( 'assets/css/blocks/table.css' ),
			)
		);

	}

endif;

add_action( 'init', 'havi_block_stylesheets' );

if ( ! function_exists( 'havi_register_block_pattern_categories' ) ) :

	/**
	 * Registers block pattern categories.
	 *
	 * @since Havi 1.0.0
	 *
	 * @return void
	 */
	function havi_register_block_pattern_categories() {

		$block_pattern_categories = array(
			'havi-theme' => array( 'label' => esc_html__( 'Havi Theme', 'havi' ) ),
			'portfolio'  => array( 'label' => esc_html__( 'Portfolio', 'havi' ) ),
			'page'       => array( 'label' => esc_html__( 'Pages', 'havi' ) ),
			'contact'    => array( 'label' => esc_html__( 'Contact', 'havi' ) )
		);

		/**
		 * Filters the theme block pattern categories.
		 *
		 * @since Havi 1.0.0
		 *
		 * @param array[] $block_pattern_categories {
		 *     An associative array of block pattern categories, keyed by category name.
		 *
		 *     @type array[] $properties {
		 *         An array of block category properties.
		 *
		 *         @type string $label A human-readable label for the pattern category.
		 *     }
		 * }
		 */
		$block_pattern_categories = apply_filters( 'havi_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

	}

endif;

add_action( 'init', 'havi_register_block_pattern_categories', 9 );

if ( ! function_exists( 'havi_head_meta_tags' ) ) :

	/**
	 * Adds meta tags to head section.
	 *
	 * @since Havi 1.0.0
	 *
	 * @return html
	 */
	function havi_head_meta_tags() {
		echo '<meta name="theme-color" content="rgb(4, 4, 6)" />';
	}

endif;

add_action( 'wp_head', 'havi_head_meta_tags' );

if ( ! function_exists( 'havi_loading_screen' ) ) :

	/**
	 * Adds loading screen HTML in the top of the body tag.
	 *
	 * @since Havi 1.0.0
	 *
	 * @return html
	 */
	function havi_loading_screen() {
		block_template_part( 'loading-screen' );
	}

endif;

add_action( 'wp_body_open', 'havi_loading_screen' );

// Load theme admin page file.
require get_template_directory() . '/inc/theme.php';

// Load TGM Plugin Activation file.
require get_template_directory() . '/inc/theme-required-plugins.php';
