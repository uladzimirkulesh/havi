<?php
/**
 * Title: Hidden 404
 * Slug: havi/hidden-404
 * Inserter: no
 */
?>

<!-- wp:group {"metadata":{"name":"Error Container"},"className":"error404-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group error404-container">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xxxx-large"} -->
	<h1 class="wp-block-heading has-text-align-center has-xxxx-large-font-size"><?php echo esc_html_x( 'Error 404', 'Error code for a webpage that is not found.', 'havi' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"textColor":"contrast-3"} -->
	<p class="has-text-align-center has-contrast-3-color has-text-color" style="margin-top:var(--wp--preset--spacing--10)"><?php echo esc_html_x( 'The page you are looking for cannot be found.', 'Message to convey that a webpage could not be found', 'havi' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
		<!-- wp:button -->
		<div class="wp-block-button">
			<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html_e( 'Back to Home', 'havi' ); ?></a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
