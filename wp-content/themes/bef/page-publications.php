<?php
/*
Template Name: Page - Publications
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
		<?php wp_nav_menu( array ('menu' => 'Learn', 'container' => 'nav','menu_class' => '','depth' => 0) ); ?>
	</div>
	<div class="eight columns">
		<?php /* wp_nav_menu( array ('menu' => 'Publications', 'container' => 'nav','menu_class' => 'tab-nav','depth' => 0) );*/ ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>
	<ul class="bef-tabs tab-nav">
			<li><a href="#project-profiles">RENEWABLE ENERGY PROJECT PROFILES</a></li>
			<li><a href="#energy">RENEWABLE ENERGY PUBLICATIONS</a></li>
			<li><br />
<a href="#watershed">WATERSHED PUBLICATIONS</a></li>
		</ul>
		<div class="profile tab-content" role="main" id="project-profiles">
		<?php $posts = new WP_Query(array( 
   'post_type' => 'publication',
	 'type' => 'renewable-energy-project-profiles',
   'orderby' => 'date',
   'order' => 'DESC',
   'posts_per_page' => 99
)); ?>
		<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
		<div class="row publication-entry">
			<div class="publication-image">
				<?php 
 if ( has_post_thumbnail()) {
   echo get_the_post_thumbnail($post->ID, 'full'); 
 }
?>
			</div>
			<div class="publication-info">
				<?php the_content();?>
			</div>
		</div>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>
		</div>
		<div class="profile tab-content" role="main" id="energy">
		<?php $posts = new WP_Query(array( 
   'post_type' => 'publication',
	 'type' => 'renewable-energy-publications',
   'orderby' => 'date',
   'order' => 'DESC',
   'posts_per_page' => 99
)); ?>
		<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
		<div class="row publication-entry">
			<div class="publication-info">
							<?php 
 if ( has_post_thumbnail()) {
   echo get_the_post_thumbnail($post->ID, 'full'); 
 }
?>
				<?php the_content();?>
			</div>
		</div>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>
		</div>
		<div class="profile tab-content" role="main" id="watershed">
		<?php $posts = new WP_Query(array( 
   'post_type' => 'publication',
	 'type' => 'watershed-publications',
   'orderby' => 'date',
   'order' => 'DESC',
   'posts_per_page' => 99
)); ?>
		<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
		<div class="row publication-entry">
			<div class="publication-info">
							<?php 
 if ( has_post_thumbnail()) {
   echo get_the_post_thumbnail($post->ID, 'full'); 
 }
?>
				<?php the_content();?>
			</div>
		</div>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>
		</div>
		
	</div>
	<?php get_sidebar();?>
	<?php get_footer(); ?>
