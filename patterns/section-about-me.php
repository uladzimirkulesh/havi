<?php
/**
 * Title: About me section
 * Slug: havi/section-about-me
 * Categories: text, about, havi-theme
 * Keywords: text, about
 */
?>

<!-- wp:group {"metadata":{"name":"About Me"},"className":"section section--about-me","layout":{"type":"default"}} -->
<div class="wp-block-group section section--about-me">
	<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|grayscale"}}} -->
	<figure class="wp-block-image size-large"><img alt="" style="aspect-ratio:3/4;object-fit:cover"/></figure>
	<!-- /wp:image -->

	<!-- wp:heading {"fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'I\'m a web developer with a knack for turning ideas into stunning digital experiences.', 'About me section title', 'havi' ); ?></h2>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->
