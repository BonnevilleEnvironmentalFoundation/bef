<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html lang="en" dir="ltr" class="ie ie6">
<![endif]-->
<!--[if IE 7 ]>
<html lang="en" dir="ltr" class="ie ie7">
<![endif]-->
<!--[if IE 8 ]>
<html lang="en" dir="ltr" class="ie ie8">
<![endif]-->
<!--[if IE 9 ]>
<html lang="en" dir="ltr" class="ie ie9">
<![endif]-->
<!--[if gt IE 9]>
<html lang="en" dir="ltr" class="ie">
<![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="ltr">
<!--<![endif]-->

<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
<?php wp_title('&laquo;', true, 'right'); ?>
<?php bloginfo('name'); ?>
</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php wp_enqueue_script( 'jquery' ); ?>
<?php wp_head(); ?>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/modernizr.js">
</script>

<script>
jQuery(document).ready(function($) {
$("#accordion").accordion({
	heightStyle: "content",
    beforeActivate: function(e, ui) {
    	$("placeholder").remove();
        var src = $(ui.newHeader).data('src');
        $("#posterHolder .poster").addClass('outgoing');
        $("#posterHolder").append('<img src="' + src + '" class="poster incoming" style="display:none;" />').show(1500,function(){
            $("#posterHolder .outgoing").fadeOut(1500);
            $("#posterHolder .incoming").fadeIn(1500).removeClass('incoming');
        });
    }
});

 
$(document).tooltip({ position: { my: "left top", at: "bottom"} });
});

</script>
</head>

<body <?php body_class('ctc'); ?>>
<header>
		<div class="container">
			<h1>
				<?php the_field('landing_page_title');?>
			</h1>
			<div class="logo">
			<a href="<?php bloginfo('url');?>/"><img src="<?php bloginfo('template_directory');?>/images/ctc-logo.gif" width="462" height="58" alt=""></a>
			</div>
			<a onclick="window.open(this.href);return false;" href="<?php bloginfo('url'); ?>/wp-content/uploads/downloads/2013/07/ctc-sponsor-packet.pdf.zip" class="button ctc-download">DOWNLOAD SPONSOR PACKET NOW</a>
		</div>
</header>
<div class="wrap">
<div class="container main">
