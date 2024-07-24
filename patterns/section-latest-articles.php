<?php
/**
 * Title: Latest articles section
 * Slug: havi/section-latest-articles
 * Categories: query, havi-theme
 * Block Types: core/query
 */
?>

<!-- wp:group {"metadata":{"name":"Latest articles"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"section section--latest-articles","layout":{"type":"default"}} -->
<div class="wp-block-group section section--latest-articles">
	<!-- wp:heading {"fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-x-large-font-size"><a href="/blog"><?php echo esc_html_x( 'Thoughts & ideas', 'Latest articles section title', 'havi' ); ?></a></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"medium"} /-->

			<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":35,"style":{"spacing":{"margin":{"top":"1rem","bottom":"1rem"}}}} /-->

			<!-- wp:post-date {"format":"M j, Y"} /-->
		<!-- /wp:post-template -->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"},":hover":{"color":{"text":"var:preset|color|contrast-3"}}}},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"contrast-3","fontSize":"small"} -->
		<p class="has-contrast-3-color has-text-color has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--40)"><a href="/blog"><?php echo esc_html_x( 'Read all articles', 'Latest articles section button text', 'havi' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
