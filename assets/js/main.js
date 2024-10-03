/**
 * Remove anchor border hover, anchor contain images.
 */
(function($) {

	$('img').parent('a').addClass('contains-image');

})(jQuery);

/**
 * Add class main header.
 */
(function($) {

	$(document).scroll(function(){
		var $nav = $(".ms-site-header");
		$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
	})

})(jQuery);