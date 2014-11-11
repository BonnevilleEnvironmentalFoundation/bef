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
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php wp_enqueue_script( 'jquery' ); ?>
<?php wp_head(); ?>
 <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/modernizr.js"></script>
</head>

<body <?php body_class(); ?>>

<div class="container">
<header>
		<div class="sixteen columns">
			<h1 class="remove-bottom" style="margin-top: 40px">Skeleton</h1>
			<h5>Version 1.1</h5>
			<hr />
            <?php wp_nav_menu( array ('menu' => '', 'container' => '','menu_class' => 'main-nav','depth' => 0) ); ?>
		</div>
</header>
	
<div class="main">