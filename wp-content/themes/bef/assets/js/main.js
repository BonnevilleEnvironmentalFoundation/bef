jQuery(document).ready(function($) {



	function clearInputValues() {
		$.fn.cleardefault = function() {
			return this.focus(function() {
				if (this.value == this.defaultValue) {
					this.value = "";
				}
			}).blur(function() {
				if (!this.value.length) {
					this.value = this.defaultValue;
				}
			});
		};
		$(".clearit input[type='text'], .clearit textarea").cleardefault();
	}

	function createDownloadTabs() {
jQuery(".tab-content").hide(); //Hide all content
if (location.hash != "") {
var target = "#" + location.hash.split("#")[1]; // need semicolon at end of line
jQuery(location.hash).show(); //Show first tab content
jQuery("ul.bef-tabs li:has(a[href=" + target + "])").addClass("active").show(); //need '+' either side of 'target'
} else {
jQuery("ul.bef-tabs li:first").addClass("active").show(); //Activate first tab
jQuery(".tab-content:first").show(); //Show first tab content
}

//On Click Event
jQuery("ul.bef-tabs li").click(function() {

jQuery("ul.bef-tabs li").removeClass("active"); //Remove any "active" class
jQuery(this).addClass("active"); //Add "active" class to selected tab
jQuery(".tab-content").hide(); //Hide all tab content

var activeTab = jQuery(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
jQuery(activeTab).fadeIn(); //Fade in the active ID content
return false;
});
}

function createFooterDropdown() {
	var footerNavContainer = $('footer nav');
	var footerNav = $('#menu-footer-nav');
	var navToggle = $('<div class="footer-toggle"><span class="footer-nav-toggle"></span></div>');

	$(footerNavContainer).prepend(navToggle);
	$(navToggle).click(function() {
		footerNav.slideToggle();
	});

}

function openVimeo() {
	$('.fancybox-media').fancybox({
		openEffect: 'none',
		closeEffect: 'none',
		helpers: {
			media: {}
		}
	});
	return false;
}

function jumpForm() {
	$('#jump_to_loc').click(function() {
		var jump = $(this).attr('href');
		var new_position = $('#' + jump).offset();
		window.scrollTo(new_position.left, new_position.top);
		return false;
	});
}


function copyClipboard() {
	$('.copy').zclip({
		path:'http://www.b-e-f.org/wp-content/themes/bef/js/ZeroClipboard.swf',
		copy: function() {
			var id = $(this).attr('id');
			var copythis = $('#code-' + id).text();
			return copythis;
		}
	});
}	// End function Definitions

function ctcModal() {
	$('.various').fancybox({ 
		closeClick      : true, 
		padding         : 20, 
		width       : 800, 
		arrows          : true, 
		autoSize        : false, 
		nextClick       : true, 
		'ajax'          : { 
			dataFilter: function(data) { 
				return $(data).find('#primary')[0]; 
			} 
		} 
	}); 
}
// Initiate all scripts
createFooterDropdown();
clearInputValues();
createDownloadTabs();
openVimeo();
copyClipboard();
ctcModal();
//End Document Ready




});