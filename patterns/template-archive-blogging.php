<?php
/**
 * Title: Blogging archive template, 3 columns
 * Slug: havi/template-archive-blogging
 * Template Types: archive, category, tag, author, date
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header","tagName":"header","className":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"className":"content","layout":{"type":"constrained"}} -->
<main id="content" class="wp-block-group content">
	<!-- wp:group {"tagName":"header","metadata":{"name":"Page Header"},"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"className":"page-header","layout":{"type":"default"}} -->
	<header class="wp-block-group alignwide page-header" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:query-title {"type":"archive","showPrefix":false} /-->
	</header>
	<!-- /wp:group -->

	<!-- wp:pattern {"slug":"havi/posts-3-col"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"footer"} /-->
