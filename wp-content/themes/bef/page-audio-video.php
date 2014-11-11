<?php
/*
Template Name: Page - Audio and Video
*/
?>
<?php get_header(''); ?>

<div class="breadcrumbs sixteen columns">
		<p>
			<?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
		</p>
	</div>
	<div class="four columns subnav">
		<?php wp_nav_menu( array ('menu' => 'Learn', 'container' => 'nav','menu_class' => '','depth' => 0) ); ?>
	</div>
	<div class="eight columns">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>
		<ul class="bef-tabs tab-nav">
			<li><a href="#tab1">Audio</a></li>
			<li><a href="#tab2">Video</a></li>
		</ul>
		<div class="profile tab-content" role="main" id="tab1">
			<?php /* $posts = new WP_Query(array( 
   'post_type' => 'audio',
   'orderby' => 'date',
   'order' => 'DESC',
   'posts_per_page' => 99
));  

if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); */ ?>
			<div class="row av-entry"><!-- <img src="<?php bloginfo('template_directory');?>/images/audio-video-arrow.jpg" width="30" height="30" alt="" />
				<p> <a href="#"><?php the_title();?></a></p> -->
				
				<h3>We will be building out our library of audio addressing commonly asked questions and topics important to our partners over the year. Please check back or subscribe to our BEF eBulletin to be apprised as new audio is added to our website.</h3>
				
			</div>

			<?php wp_reset_query(); ?>
		</div>
		<div class="profile tab-content" role="main" id="tab2">
			<?php $posts = new WP_Query(array( 
   'post_type' => 'video',
   'orderby' => 'date',
   'order' => 'DESC',
   'posts_per_page' => 99
)); ?>
			<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
			<div class="row av-entry"> <img src="<?php bloginfo('template_directory');?>/images/audio-video-arrow.jpg" width="30" height="30" alt="" />
				<p> <a class="fancybox-media" href="<?php the_field('url');?>"><?php the_title();?></a></p>
			</div>
			<?php endwhile; ?>
			<?php endif;?>
			<?php wp_reset_query(); ?>
		</div>
	</div>
	<?php get_sidebar();?>
	<?php get_footer(); ?>
