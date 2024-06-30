<?php
/**
 * Title: List of posts, 1 column
 * Slug: havi/posts-1-col
 * Categories: query, havi-theme
 * Block Types: core/query
 */
?>

<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
		<!-- wp:group {"tagName":"header","metadata":{"name":"Entry Header"},"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"className":"entry-header","layout":{"type":"constrained"}} -->
		<header id="entry-header" class="wp-block-group entry-header">
			<!-- wp:post-title {"isLink":true,"className":"entry-title","fontSize":"x-large"} /-->
			<!-- wp:template-part {"slug":"post-meta","theme":"havi","className":"entry-meta"} /-->
		</header>
		<!-- /wp:group -->

		<!-- wp:post-excerpt {"moreText":"Read more","excerptLength":45,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}}} /-->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"paginationArrow":"arrow"} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
		<!-- wp:pattern {"slug":"havi/hidden-no-results"} /-->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
