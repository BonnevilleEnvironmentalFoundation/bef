<?php
/*
Template Name: Page - Partner Profiles - Willamette model watershed 
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
		<h3>OUR PARTNERS</h3>
		<?php wp_nav_menu( array ('menu' => 'Willamette  Watershed Profiles', 'container' => 'nav','menu_class' => 'sub-nav profile-nav','depth' => 0,'walker' => new description_walker())); ?>
	</div>
	
	<div class="eight columns">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php the_content();?>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>

	<?php 
$page_slug = $post->post_name;
$will = new WP_Query(array( 
   'post_type' => 'bgmp',
   'orderby' => 'title',
   'order' => 'ASC',
   'posts_per_page' => 99
)); ?>

	<h2>willamette watershed program partners</h2>
<?php if ( $will->have_posts() ) : while ( $will->have_posts() ) : $will->the_post(); ?>
	<?php $willamette = get_field('willamette'); ?>
<?php if($willamette) : ?>
<?php single_cat_title(); ?>
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
<?php endif; ?>
<?php endwhile; ?>

<?php endif;?>
<?php wp_reset_query(); ?>

		
	</div>
	<?php get_sidebar();?>
	<?php get_footer(); ?>
