<?php
/**
 * Title: Default footer
 * Slug: havi/footer-default
 * Categories: footer, havi-theme
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"metadata":{"name":"Footer container"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-4"},":hover":{"color":{"text":"var:preset|color|contrast-4"}}}}},"textColor":"contrast-4","className":"footer-container is-style-has-global-padding","layout":{"type":"default"}} -->
<div class="wp-block-group footer-container is-style-has-global-padding has-contrast-4-color has-text-color has-link-color">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"fontSize":"small"} -->
	<div class="wp-block-group has-small-font-size" style="padding-top:2.5rem;padding-bottom:2.5rem">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.625rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"metadata":{"name":"Copyright"},"className":"footer-copyright"} -->
			<p class="footer-copyright"><?php echo esc_html_x( '© 2024 all rights reserved', 'Copyright text', 'havi' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.625rem"}}} -->
			<p style="font-size:0.625rem">•</p>
			<!-- /wp:paragraph -->

			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '<!-- wp:paragraph {"metadata":{"name":"Privacy"},"className":"footer-privacy"} --><p class="footer-privacy">', '</p><!-- /wp:paragraph -->' );
			}
			?>
		</div>
		<!-- /wp:group -->

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
