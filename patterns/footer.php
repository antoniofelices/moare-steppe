<?php
/**
 * Title: Footer
 * Slug: moare-steppe/footer
 * Categories: moarepatterns
 * Description: The main footer
 * Keywords: footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|200","bottom":"var:preset|spacing|200"}}},"layout":{"type":"constrained","contentSize":"90vw"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--200);padding-bottom:var(--wp--preset--spacing--200)">
	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:list {"style":{"typography":{"textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|gray-darker"}}}},"className":"ms-list-inline no-text-decoration","fontSize":"small"} -->
		<ul style="text-decoration:none" class="ms-list-inline no-text-decoration has-link-color has-small-font-size">
			<!-- wp:list-item -->
			<li><a href="#">Privacy policy</a></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Lorem Ipsum</li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:social-links {"iconColor":"gray-darker","iconColorValue":"#1c1c1c","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
				<!-- wp:social-link {"url":"https://twitter.com","service":"x"} /-->
				<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
				<!-- wp:social-link {"url":"nf@nf.com","service":"mail"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->