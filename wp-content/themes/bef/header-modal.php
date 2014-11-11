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
<link rel='stylesheet' id='tribe-events-bootstrap-datepicker-css-css'  href='http://www.b-e-f.org/wp-content/plugins/the-events-calendar/vendor/bootstrap-datepicker/css/datepicker.css?ver=3.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='tribe-events-custom-jquery-styles-css'  href='http://www.b-e-f.org/wp-content/plugins/the-events-calendar/vendor/jquery/smoothness/jquery-ui-1.8.23.custom.css?ver=3.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='full-calendar-style-css'  href='http://www.b-e-f.org/wp-content/plugins/the-events-calendar/resources/tribe-events-full.min.css?ver=3.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='tribe_events-calendar-style-css'  href='http://www.b-e-f.org/wp-content/plugins/the-events-calendar/resources/tribe-events-theme.min.css?ver=3.3.1' type='text/css' media='all' />
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/modernizr.js"></script>
</head>

<body <?php body_class(); ?>>


