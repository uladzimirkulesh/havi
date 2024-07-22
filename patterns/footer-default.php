<?php
/**
 * Title: Default footer
 * Slug: havi/footer-default
 * Categories: footer, havi-theme
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"metadata":{"name":"Footer Container"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"},":hover":{"color":{"text":"var:preset|color|contrast-3"}}}}},"textColor":"contrast-3","className":"footer-container is-style-has-global-padding","layout":{"type":"default"}} -->
<div class="wp-block-group footer-container is-style-has-global-padding has-contrast-3-color has-text-color has-link-color">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"fontSize":"small"} -->
	<div class="wp-block-group has-small-font-size" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
		<!-- wp:paragraph {"metadata":{"name":"Copyright"},"className":"footer-copyright"} -->
		<p class="footer-copyright"><?php echo esc_html_x( '© 2024 all rights reserved', 'Copyright text', 'havi' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"className":"footer__code-by"} -->
		<p class="footer__code-by"><?php
		printf(
			/* translators: "Code by" text. */
			esc_html__( 'Code by %s', 'havi' ),
			'<a href="' . esc_url( __( 'https://uladzimirkulesh.com', 'havi' ) ) . '">Uladzimir Kulesh</a>' )
		?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
