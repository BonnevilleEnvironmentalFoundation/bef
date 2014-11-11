<?php
/*
Template Name: Page - Why BEF
*/
?>
<?php get_header(); ?>

<div class="breadcrumbs sixteen columns">
		<p>
			<?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
		</p>
	</div>
	<div class="four columns subnav">
		<h3>WHY BEF</h3>
		<?php  wp_nav_menu( array ('menu' => 'Why BEF', 'container' => '','menu_class' => 'sub-nav','depth' => 0) );?>
	</div>
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
	<?php get_sidebar();?>
	<?php 
} else { ?>
	<div class="eight columns">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>
	</div>
	<?php get_sidebar();?>
	<?php }?>
	<?php get_footer(); ?>
