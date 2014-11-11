<?php
/*
Template Name: Page - Simple
*/
?>
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

<body <?php body_class('simple'); ?>>

	<header>
		<div class="container">
			<a class="logo" href="<?php bloginfo('url');?>/"><img src="<?php bloginfo('template_directory');?>/images/simple-template-logo.jpg" alt=""></a>
		</div>
	</header>
	<div class="wrap">
		<div class="container main">

			<?php if (get_field('nav_menu')):?>
			<div class="four columns subnav">
				<?php the_field('nav_menu'); else:?>
				<div class="four columns"> <?php echo '&nbsp;';
				endif;?> </div>

				<div class="eight columns">
				<?php if ( has_post_thumbnail() ) : // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail('full');
				elseif (get_field('optional_slideshow') ): //if not, check for slideshow?>
				<div class="slideshow-wrap">
					<div id="prev">PREV</div>
					<div id="next">NEXT</div>
					<div class="cycle-slideshow" data-cycle-pause-on-hover="true"data-cycle-prev="#prev"
					data-cycle-next="#next" data-cycle-speed="1000" data-cycle-timeout="3000">
					<?php if ( get_field('optional_slideshow') ) : ?>

					<?php for( $i = 0; has_sub_field('optional_slideshow'); $i++ ) : ?>

					<?php if ( get_sub_field('images') ) : $image = get_sub_field('images'); ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
				<?php endif; //end images ?>            

			<?php endfor; //end images loop ?>
		<?php else: //if neither F.A. or Slideshow ?>
	<?php endif; //if neither, end conditional ?>
</div>
</div>
<?php endif; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content();?>
<?php endwhile; ?>
<?php endif;?>
<?php wp_reset_query(); ?>
<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>' ); ?>
</div
<?php get_sidebar();?>




<?php get_footer(); ?>
<div class="clearfix"></div>
</div>