(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		jQuery('nav ul').slicknav();
		

		jQuery(".gallery  a").each(function() {
			jQuery(this).attr({"data-lightbox":"galeria"});
		});

		jQuery("ul.slider").bxSlider({
		      pager:false,
			  mode: 'fade'
		});
		

		
	});
	
})(jQuery, this);
