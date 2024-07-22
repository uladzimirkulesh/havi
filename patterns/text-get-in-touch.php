<?php
/**
 * Title: Get in touch section
 * Slug: havi/text-get-in-touch
 * Categories: text, contact, havi-theme
 * Keywords: text, contact
 */
?>

<!-- wp:group {"metadata":{"name":"Get in Touch"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"className":"section section--get-in-touch","layout":{"type":"constrained"}} -->
<div class="wp-block-group section section--get-in-touch" style="margin-top:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"level":4} -->
	<h4 class="wp-block-heading"><?php echo esc_html_x( 'Get in Touch', 'Get in touch section title', 'havi' ); ?></h4>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:columns {"style":{"border":{"top":{"color":"var:preset|color|contrast-5","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
		<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--contrast-5);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
				<p class="has-contrast-3-color has-text-color has-link-color"><?php echo esc_html_x( 'Email', 'Get in touch section text', 'havi' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%">
				<!-- wp:paragraph {"align":"right"} -->
				<p class="has-text-align-right"><?php echo wp_kses_post( _x( '<a href="mailto:#">hello@daviddev.com</a>', 'Get in touch section text', 'havi' ) ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"style":{"border":{"top":{"color":"var:preset|color|contrast-5","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
		<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--contrast-5);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
				<p class="has-contrast-3-color has-text-color has-link-color"><?php echo esc_html_x( 'Phone', 'Get in touch section text', 'havi' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%">
				<!-- wp:paragraph {"align":"right"} -->
				<p class="has-text-align-right"><?php echo wp_kses_post( _x( '<a href="tel:#">+44 209 555 014</a>', 'Get in touch section text', 'havi' ) ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"style":{"border":{"top":{"color":"var:preset|color|contrast-5","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
		<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--contrast-5);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
				<p class="has-contrast-3-color has-text-color has-link-color"><?php echo esc_html_x( 'LinkedIn', 'Get in touch section text', 'havi' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%">
				<!-- wp:paragraph {"align":"right"} -->
				<p class="has-text-align-right"><?php echo wp_kses_post( _x( '<a href="#">@daviddev</a>', 'Get in touch section text', 'havi' ) ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"style":{"border":{"top":{"color":"var:preset|color|contrast-5","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
		<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--contrast-5);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
				<p class="has-contrast-3-color has-text-color has-link-color"><?php echo esc_html_x( 'Facebook', 'Get in touch section text', 'havi' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%">
				<!-- wp:paragraph {"align":"right"} -->
				<p class="has-text-align-right"><?php echo wp_kses_post( _x( '<a href="#">@daviddev</a>', 'Get in touch section text', 'havi' ) ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"style":{"border":{"top":{"color":"var:preset|color|contrast-5","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
		<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--contrast-5);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
				<p class="has-contrast-3-color has-text-color has-link-color"><?php echo esc_html_x( 'X', 'Get in touch section text', 'havi' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%">
				<!-- wp:paragraph {"align":"right"} -->
				<p class="has-text-align-right"><?php echo wp_kses_post( _x( '<a href="#">@daviddev</a>', 'Get in touch section text', 'havi' ) ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:heading {"level":6} -->
	<h6 class="wp-block-heading"><?php echo esc_html_x( 'Response Time', 'Get in touch section text', 'havi' ); ?></h6>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p><?php echo esc_html_x( 'I strive to respond to all inquiries within 24 hours. Your time is valuable, and I\'m committed to providing prompt and thorough responses to all your questions and needs.', 'Get in touch section text', 'havi' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
