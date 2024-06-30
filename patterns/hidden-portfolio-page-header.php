<?php
/**
 * Title: Portfolio Page Header
 * Slug: havi/hidden-portfolio-page-header
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"header","metadata":{"name":"Page Header"},"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"className":"page-header","layout":{"type":"default"}} -->
<header class="wp-block-group alignwide page-header" style="margin-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading"><?php echo wp_kses_post( _x( 'Favorite projects<br>and fun little experiments', 'Portfolio page title', 'havi' ) ); ?></h1>
	<!-- /wp:heading -->
</header>
<!-- /wp:group -->
