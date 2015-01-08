<?php
/*
Template Name: Page - Project Portfolio Master
*/
?>
<?php get_header('solutions'); ?>

<?php get_template_part('partials/breadcrumbs'); ?>


<div class="four columns subnav">
	
	<h4>Projects and Programs</h4>
<?php wp_nav_menu( array ('menu' => 'Projects and Programs', 'container' => '','depth' => 0) ); ?>
</div>
	
	<div class="eight columns">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>

<?php $project_menu = get_field('project_portfolio_nav_menu'); ?>
<?php wp_nav_menu( array ('menu' => $project_menu, 'container' => '','menu_class' => 'tab-nav','depth' => 0) ); ?>
<?php $project_term = get_field('project_portfolio_category', $term); ?>

<?php $slug = $project_term->slug;?>
<?php $posts = new WP_Query(array( 
   'post_type' => 'bgmp',
   'orderby' => 'meta_value_num',
	 'meta_key' => 'bgmp_zIndex',
   'order' => 'DESC',
	 'bgmp-category' => $slug,
   'posts_per_page' => -1
)); ?>
<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
<div class="row project-entry">
<?php $image = get_field('mini_project_image');

if ($image):?>
<div class="project-image">
<p><a href="<?php the_permalink();?>"><img src="<?php the_field('mini_project_image');?>" /></a>
</div>
<div class="project-info">
<h4><?php the_title();?></h4>
<p class="uppercase"><?php the_field('location');?></p>
<p><?php the_field('snippet');?></p>
<p><a href="<?php the_permalink();?>">Read full profile</a></p>
</div>
<?php else:?>
<div class="project-info no-image">
<h4><?php the_title();?></h4>
<p class="uppercase"><?php the_field('location');?></p>
<p><?php the_field('snippet');?></p>
<p><a href="<?php the_permalink();?>">Read full profile</a></p>
</div>
<?php endif;?>

</div>

<?php endwhile; ?>
<?php endif;?>
<?php wp_reset_query(); ?>
		
	</div>
	<?php get_template_part('partials/sidebar'); ?>
	<?php get_template_part('partials/footer'); ?>
