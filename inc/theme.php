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

			<p class="havi__theme-description"><?php echo esc_html_x( 'Welcome to Havi, the ultimate WordPress theme crafted specifically for web developers. Whether you\'re showcasing your portfolio, sharing your latest projects, or offering your services, Havi provides the perfect platform to present your work in a sleek, professional, and engaging manner.', 'Theme admin page text', 'havi' ); ?></p>

			<p class="havi__theme-description"><?php echo esc_html_x( 'Havi is tailored for web developers, featuring a clean and modern design that highlights your technical skills and creativity. The minimalist layout ensures that your work takes center stage.', 'Theme admin page text', 'havi' ); ?></p>

			<p class="havi__theme-description"><?php echo esc_html_x( 'Havi is fully responsive, ensuring your website looks stunning on all devices, from desktops to smartphones. Your portfolio will always shine, no matter where it\'s viewed.', 'Theme admin page text', 'havi' ); ?></p>

			<p class="havi__theme-description"><?php echo esc_html_x( 'Get started quickly with pre-built templates for homepages, about pages, services, and contact pages. Each template is designed to provide a seamless user experience and convert visitors into clients.', 'Theme admin page text', 'havi' ); ?></p>

			<p class="havi__theme-description"><?php echo esc_html_x( 'Share your knowledge and expertise with Havi’s elegant blog layouts. Engage your audience with insightful articles, tutorials, and industry news, all presented in a clean and readable format.', 'Theme admin page text', 'havi' ); ?></p>

			<p class="submit">
				<a href="<?php echo esc_url( AVI_THEME_URI ); ?>" class="button button-primary" target="_blank"><?php echo esc_html_x( 'Theme Homepage', 'Theme admin page button text', 'havi' ); ?></a>

				<a href="<?php echo esc_url( AVI_THEME_LIVE_URI ); ?>" class="button button-primary" target="_blank"><?php echo esc_html_x( 'Live Preview', 'Theme admin page button text', 'havi' ); ?></a>
			</p>

			<div class="clear"></div>
		</div>
		<?php
	}

}
