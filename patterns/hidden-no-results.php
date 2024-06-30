<?php
/**
 * Title: Hidden no results content
 * Slug: havi/hidden-no-results
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} -->
	<p class="has-contrast-2-color has-text-color has-link-color"><?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'havi' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'Label', 'havi' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search...', 'Placeholder for search field', 'havi' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'havi' ); ?>"} /-->
</div>
<!-- /wp:group -->
