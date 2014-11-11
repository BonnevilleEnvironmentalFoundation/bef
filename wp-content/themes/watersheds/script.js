jQuery(document).ready(function() {

		if(document.getElementById("gallery-cycle")){
			/* jQuery('br:last-child','div.gallery').remove();  // Wordpress adds a clearing <br> that's not needed */
			jQuery('.gallery-icon a').click(function (e) { // disable linking on fading galleries
			    e.preventDefault();
			});
			jQuery('.gallery-item').each(function(index) {
				$image_title = jQuery(this).find('.gallery-icon img').attr('alt');
				jQuery(this).append('<h2>' + $image_title + '</h2>');
			});
		}
		
		jQuery('#gallery-cycle .gallery').cycle({
        	fx:      'fade',
        	timeout:  6000,
        	pager:   '#gallerynav',
        	pagerAnchorBuilder: pagerFactory
   	 	});

    	function pagerFactory(idx, slide) {
        	var s = idx > 2 ? ' style="display:none"' : '';
        	return '<li><a href="#">'+(idx+1)+'</a></li>';
    	};
    	
    	jQuery('#partners-map img').attr('usemap', '#partnersMap');
    		
	}
);