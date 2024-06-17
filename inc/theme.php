<?php
/**
 * Builds theme admin page.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define('AVI_THEME_URI','https://uladzimirkulesh.com/portfolio/havi');
define('AVI_THEME_LIVE_URI','https://havi.uladzimirkulesh.com');

if ( ! function_exists( 'havi_admin_page_styles' ) ) {

	/**
	 * Enqueue theme admin page styles.
	 *
	 * @since Havi 1.0.0
	 *
	 * @return void
	 */
	function havi_admin_page_styles( $hook ){

		if ( 'appearance_page_havi-theme' != $hook ) {
			return;
		}

		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		// Register admin stylesheets.
		wp_register_style(
			'havi-theme-admin-page',
			get_template_directory_uri() . '/assets/css/admin.css',
			array(),
			$version_string
		);

		// Enqueue admin stylesheets.
		wp_enqueue_style( 'havi-theme-admin-page' );

	}

}

add_action( 'admin_enqueue_scripts', 'havi_admin_page_styles');

if ( ! function_exists( 'havi_create_admin_menu_item' ) ) {

	/**
	 * Adds theme admin menu item.
	 *
	 * @since Havi 1.0.0
	 *
	 * @return void
	 */
	function havi_create_admin_menu_item() {
		add_theme_page( 'Havi Theme', 'Havi Theme', 'edit_theme_options', 'havi-theme', 'havi_theme_admin_page' );
	}

}

add_action( 'admin_menu', 'havi_create_admin_menu_item' );

if ( ! function_exists( 'havi_theme_admin_page' ) ) {

	/**
	 * Adds theme admin page.
	 *
	 * @since Havi 1.0.0
	 *
	 * @return html
	 */
	function havi_theme_admin_page() {
		?>
		<div class="wrap havi__wrap">
			<h1><?php echo esc_html_x( 'Havi Theme', 'Theme admin page title', 'havi' ); ?></h1>

			<p class="havi__theme-description"><?php echo esc_html_x( 'Introducing Havi - the ultimate WordPress theme for digital designers looking to showcase their portfolio in style!', 'Theme admin page text', 'havi' ); ?></p>

			<p class="havi__theme-description"><?php echo esc_html_x( 'With its sleek and modern design, Havi is the perfect platform to showcase your creative work and impress potential clients. Whether you\'re a graphic designer, web developer, or photographer, Havi has got you covered.', 'Theme admin page text', 'havi' ); ?></p>

			<p class="havi__theme-description"><?php echo esc_html_x( 'Featuring a fully customizable layout, Havi allows you to effortlessly create a stunning portfolio that truly reflects your unique style and brand. Choose from a variety of pre-designed templates or create your own from scratch - the possibilities are endless!', 'Theme admin page text', 'havi' ); ?></p>

			<p class="havi__theme-description"><?php echo esc_html_x( 'So why settle for a generic portfolio when you can have Havi - the ultimate WordPress theme for digital designers. Get ready to showcase your talent and elevate your brand with Havi. Try it now!', 'Theme admin page text', 'havi' ); ?></p>

			<p class="submit">
				<a href="<?php echo esc_url( AVI_THEME_URI ); ?>" class="button button-primary" target="_blank"><?php echo esc_html_x( 'Theme Homepage', 'Theme admin page button text', 'havi' ); ?></a>

				<a href="<?php echo esc_url( AVI_THEME_LIVE_URI ); ?>" class="button button-primary" target="_blank"><?php echo esc_html_x( 'Live Preview', 'Theme admin page button text', 'havi' ); ?></a>
			</p>

			<div class="clear"></div>
		</div>
		<?php
	}

}
