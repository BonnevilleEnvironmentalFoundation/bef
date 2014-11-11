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
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37862388-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body <?php body_class(); ?>>

<header>
<div class="container"> 
<?php wp_nav_menu( array ('menu' => 'Header Nav', 'container' => 'nav','menu_class' => 'header-nav','depth' => 0) ); ?>
<span class='st_sharethis' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='ShareThis'></span>
<a class="logo" href="<?php bloginfo('url');?>/"><img src="<?php bloginfo('template_directory');?>/images/logo.png" width="177" height="71" alt=""></a>
<?php uberMenu_easyIntegrate(); ?>
</div>
</header>
<div class="wrap">
<div class="container main">

