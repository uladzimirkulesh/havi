<?php
/**
 * Title: Personal home page
 * Slug: havi/page-home-personal
 * Categories: page, havi-theme
 * Keywords: personal, home, starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>

<!-- wp:group {"tagName":"header","metadata":{"name":"Page Header"},"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"className":"page-header","layout":{"type":"default"}} -->
<header class="wp-block-group alignwide page-header" style="margin-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading"><?php echo wp_kses_post( _x( 'Hello, I am<br>David Gearhart', 'Personal home page title', 'havi' ) ); ?></h1>
	<!-- /wp:heading -->
</header>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Home Columns"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"className":"grid grid--home-personal","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide grid grid--home-personal">
	<!-- wp:pattern {"slug":"havi/section-about-me"} /-->
	<!-- wp:pattern {"slug":"havi/section-recent-projects"} /-->
	<!-- wp:pattern {"slug":"havi/section-latest-articles"} /-->
</div>
<!-- /wp:group -->
