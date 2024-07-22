<?php
/**
 * Title: Contact me section
 * Slug: havi/text-contact-me
 * Categories: text, contact, havi-theme
 * Keywords: text, contact
 */
?>

<!-- wp:group {"metadata":{"name":"Contact Me"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"section section--contact-me","layout":{"type":"constrained"}} -->
<div class="wp-block-group section section--contact-me">
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|grayscale"}}} -->
	<figure class="wp-block-image size-large"><img alt=""/></figure>
	<!-- /wp:image -->

	<!-- wp:paragraph -->
	<p><?php echo esc_html_x( 'I\'m excited to collaborate with you on your next web development project! Whether you have a question, need a quote, or want to discuss your ideas, I\'m here to help. Reach out using any of the methods below, and let\'s start building something great together.', 'Contact me section text', 'havi' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
