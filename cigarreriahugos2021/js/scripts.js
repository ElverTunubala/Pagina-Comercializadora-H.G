(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		jQuery('nav ul').slicknav();
		
        jQuery(".gallery  a").each(function() {
			jQuery(this).attr({"data-lightbox":"galeria"});
		});

	});
	
})(jQuery, this);
