<?php
/*
Template Name: Page - Partner Profiles
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
		Partner Profile Nav
	</div>
	
	<div class="eight columns">
<?php/* wp_nav_menu( array ('menu' => 'Partner Profiles', 'container' => 'nav','menu_class' => 'tab-nav','depth' => 0) ); */ ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1>renewable energy certificate</h1>
<h2>Project Portfolio</h2>
		<?php the_content();?>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>
		
<?php $posts = new WP_Query(array( 
   'post_type' => 'bgmp',
   'orderby' => 'title',
   'order' => 'ASC',
   'posts_per_page' => 99
)); ?>

<p></p>
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
	<?php get_sidebar();?>
	<?php get_footer(); ?>
