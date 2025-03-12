<?php
/**
 * Title: Main Archive Default 
 * Slug: moare-steppe/main-archive-default
 * Categories: moarepatterns
 * Description: The main of archives default
 * Keywords: Content
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|200","bottom":"var:preset|spacing|200"}}},"className":"ms-content"} -->
<main class="wp-block-group ms-content" style="margin-top:var(--wp--preset--spacing--200);margin-bottom:var(--wp--preset--spacing--200)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:query-title {"type":"archive","showPrefix":false} /-->
		<!-- wp:term-description {"fontSize":"large"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:query {"layout":{"type":"constrained"},"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"className":"list-entries-default"} -->
			<!-- wp:post-title {"isLink":true} /-->
			<!-- wp:post-date {"fontSize":"small"} /-->
			<!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
			<!-- wp:post-excerpt {"fontSize":"base"} /-->
		<!-- /wp:post-template -->
	
		<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
			<p></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</main>
<!-- /wp:group -->