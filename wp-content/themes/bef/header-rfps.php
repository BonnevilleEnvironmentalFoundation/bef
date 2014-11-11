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
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/modernizr.js"></script>
</head>

<body <?php body_class('rfps store'); ?>>
<header>
	<div class="meta-nav">
	<div class="container">
		<ul>
			<li class="contact"><a href="/contact-us/">contact</a></li>
			<li class="partner-area"><a href="/partner-login/">partner login</a></li>
			<li class="rfp"><a href="/open-rfps-and-grants/ ">open RFPs and grants</a></li>			
			<li class="leed"><a onclick="window.open(this.href);return false;"  href="http://bef-store.herokuapp.com/calculate-business-footprint/leed/">earn LEED<sup>&reg;</sup> points</a></li>
			<li class="calculate"><a onclick="window.open(this.href);return false;" href="http://store.b-e-f.org/">calculate your business or event footprint</a></li>
			<li class="shop"><a onclick="window.open(this.href);return false;" href="http://store.b-e-f.org/make-a-purchase">shop / balance your footprint</a></li>
		</ul>
	</div>
</div>
	<div class="home-banner">
		<div class="container">
			<h1>
				<?php the_field('landing_page_title');?>
			</h1>
			<div class="logo">
			<p><a href="<?php bloginfo('url');?>">Learn more about BEF</a></p>
			<a href="<?php bloginfo('url');?>/"><img src="<?php bloginfo('template_directory');?>/images/logo.png" width="70" height="70" alt=""></a>
			</div>
		</div>
	</div>
</header>
<div class="wrap">
<div class="container main">
