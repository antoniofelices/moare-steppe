<?php
/**
 * Title: Main Singular
 * Slug: moare-steppe/main-singular
 * Categories: moarepatterns
 * Description: The main of singulars without header
 * Keywords: Content
 */
?>

<!-- wp:group {"tagName":"main","className":"ms-content","style":{"spacing":{"margin":{"top":"var:preset|spacing|200","bottom":"var:preset|spacing|200"}}}} -->
<main
  class="wp-block-group ms-content"
  style="
    margin-top: var(--wp--preset--spacing--200);
    margin-bottom: var(--wp--preset--spacing--200);
  "
>
	<!-- wp:group {"tagName":"article", "className":"ms-entry"} -->
	<article class="wp-block-group ms-entry">
		<!-- wp:post-content {"layout":{"type":"constrained"}} /-->
	</article>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->