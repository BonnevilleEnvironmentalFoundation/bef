<?php
/*
Template Name: Page - Partner Profiles
*/
?>
<?php get_header(); ?>

	<?php get_template_part('partials/breadcrumbs'); ?>

	<div class="four columns subnav">
		<?php wp_nav_menu( array ('menu' => 'Our Partners', 'container' => 'nav','menu_class' => '','depth' => 0) ); ?>
	</div>
	
	<div class="eight columns">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>
<?php $posts = new WP_Query(array( 
   'post_type' => 'partner',
   'orderby' => 'title',
   'order' => 'ASC',
   'posts_per_page' => -1
)); ?>

<p></p>
<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
	<div class="row partner-entry">
<div class="partner-image">
<p><a href="<?php the_permalink();?>"><img src="<?php the_field('thumbnail_image');?>" /></a>
</div>
<div class="partner-info">
<img src="<?php the_field('logo');?>" />
<p><?php the_field('snippet');?></p>
<p><a href="<?php the_permalink();?>">Read full partner profile</a></p>
</div>
</div>
<?php endwhile; ?>
<?php endif;?>
<?php wp_reset_query(); ?>
		
	</div>
	<?php get_template_part('partials/sidebar'); ?>
	<?php get_template_part('partials/footer'); ?>
