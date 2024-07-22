<?php
/**
 * Title: Let's connect section
 * Slug: havi/cta-lets-connect
 * Categories: text, call-to-action, havi-theme
 * Keywords: text, connect
 */
?>

<!-- wp:group {"metadata":{"name":"Let's Connect"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"className":"section section--lets-connect","layout":{"type":"constrained"}} -->
<div class="wp-block-group section section--lets-connect" style="margin-top:var(--wp--preset--spacing--50)">
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|grayscale"}}} -->
	<figure class="wp-block-image size-large"><img alt=""/></figure>
	<!-- /wp:image -->

	<!-- wp:heading {"level":4} -->
	<h4 class="wp-block-heading"><?php echo esc_html_x( 'Let\'s Build Something Great Together!', 'Let\'s connect section title', 'havi' ); ?></h4>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p><?php echo esc_html_x( 'Whether you\'re looking to build a new website from scratch, revamp your existing site, or need ongoing development support, I\'m here to help. Let\'s connect and discuss how we can turn your vision into a reality.', 'Let\'s connect section text', 'havi' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button">
			<a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Contact Me', 'Let\'s connect section button text', 'havi' ); ?></a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
