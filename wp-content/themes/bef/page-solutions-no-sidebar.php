<?php
/*
Template Name: Page - Our Solutions No SIdebar
*/
?>
<?php get_header('solutions'); ?>

<?php get_template_part('partials/breadcrumbs'); ?>
	<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
 ?>
	<div class="twelve columns">
		<?php 
  the_post_thumbnail('full');
?>
	</div>
	<div class="clearfix"></div>
	<div class="eight offset-by-four columns">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>
	</div>
	<?php get_template_part('partials/sidebar'); ?>
	<?php 
} else { ?>
	<div class="eight offset-by-four columns">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>
	</div>
	<?php get_template_part('partials/sidebar'); ?>
	<?php }?>
	<?php get_template_part('partials/footer'); ?>
