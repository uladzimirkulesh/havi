<?php
/**
 * Title: Recent projects section
 * Slug: havi/section-recent-projects
 * Categories: query, portfolio, havi-theme
 * Block Types: core/query
 */
?>

<!-- wp:group {"metadata":{"name":"Resent projects"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"section section--recent-projects"} -->
<div class="wp-block-group section section--recent-projects">
	<!-- wp:heading {"fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-x-large-font-size"><a href="/portfolio"><?php echo esc_html_x( 'Recent Projects', 'Recent projects section title', 'havi' ); ?></a></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"perPage":"6","pages":0,"offset":0,"postType":"uk-project","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium"} /-->

			<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":23,"style":{"spacing":{"margin":{"top":"1rem","bottom":"1rem"}}}} /-->

			<!-- wp:post-date {"format":"M j, Y"} /-->
		<!-- /wp:post-template -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"},":hover":{"color":{"text":"var:preset|color|contrast-3"}}}},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"contrast-3","fontSize":"small"} -->
		<p class="has-contrast-3-color has-text-color has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--40)"><a href="/portfolio"><?php echo esc_html_x( 'Browse all projects', 'Recent projects section text', 'havi' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
