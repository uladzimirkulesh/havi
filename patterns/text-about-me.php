<?php
/**
 * Title: About me section
 * Slug: havi/text-about-me
 * Categories: text, about, havi-theme
 * Keywords: text, about
 */
?>

<!-- wp:group {"metadata":{"name":"About Me"},"className":"section section--about-me","layout":{"type":"constrained"}} -->
<div class="wp-block-group section section--about-me">
	<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|contrast"}}}}},"textColor":"contrast","fontSize":"large"} -->
	<p class="has-contrast-color has-text-color has-link-color has-large-font-size"><?php echo esc_html_x( 'Hello, I\'m David, a passionate web developer with a knack for turning ideas into stunning digital experiences. I bring your visions to life on the screen.', 'About me section text', 'havi' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><?php echo esc_html_x( 'My journey into web development began with a simple fascination for technology and design. Over the years, I honed my skills, delving deep into the world of coding, user experience, and digital artistry. Today, I stand as a seasoned professional, ready to tackle projects of all sizes and complexities.', 'About me section text', 'havi' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:gallery {"columns":2,"linkTo":"none","style":{"spacing":{"blockGap":{"top":"0.5rem","left":"0.5rem"}}}} -->
	<figure class="wp-block-gallery has-nested-images columns-2 is-cropped">
		<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|grayscale"}}} -->
		<figure class="wp-block-image size-large"><img alt=""/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|grayscale"}}} -->
		<figure class="wp-block-image size-large"><img alt=""/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|grayscale"}}} -->
		<figure class="wp-block-image size-large"><img alt=""/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|grayscale"}}} -->
		<figure class="wp-block-image size-large"><img alt=""/></figure>
		<!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
