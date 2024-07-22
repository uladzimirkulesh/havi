<?php
/**
 * Title: Post Meta
 * Slug: havi/hidden-post-meta
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0.625em"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group">
	<!-- wp:post-terms {"term":"category","prefix":"<?php echo esc_html_x( 'Published in ', 'Prefix for the post category block: in category name', 'havi' ); ?>"} /-->

	<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.625rem"}},"textColor":"contrast-3"} -->
	<p class="has-contrast-3-color has-text-color" style="font-size:0.625rem">•</p>
	<!-- /wp:paragraph -->

	<!-- wp:post-date {"format":"M j, Y","isLink":true} /-->
</div>
<!-- /wp:group -->
