<?php
/**
 * Title: Blogging home template, 3 columns
 * Slug: havi/template-home-blogging-2
 * Template Types: front-page, index, home
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header","tagName":"header","className":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"className":"content","layout":{"type":"constrained"}} -->
<main id="content" class="wp-block-group content">
	<!-- wp:group {"tagName":"header","metadata":{"name":"Page Header"},"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"className":"page-header","layout":{"type":"default"}} -->
	<header class="wp-block-group alignwide page-header" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading"><?php echo wp_kses_post( _x( 'My thoughts about<br>design and development', 'Portfolio page title', 'havi' ) ); ?></h1>
		<!-- /wp:heading -->
	</header>
	<!-- /wp:group -->

	<!-- wp:pattern {"slug":"havi/posts-3-col"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"footer"} /-->
