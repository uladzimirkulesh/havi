<?php
/**
 * Title: List of projects, 3 columns
 * Slug: havi/projects-3-col
 * Categories: query, portfolio, havi-theme
 * Block Types: core/query
 */
?>

<!-- wp:query {"query":{"perPage":12,"pages":0,"offset":0,"postType":"uk-project","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"align":"wide","className":"uk-portfolio__query"} -->
<div class="wp-block-query alignwide uk-portfolio__query">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"medium"} /-->

		<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":35,"style":{"spacing":{"margin":{"top":"1rem","bottom":"1rem"}}}} /-->

		<!-- wp:post-date {"format":"M j, Y"} /-->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
