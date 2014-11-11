<?php
/*
Template Name: Page - Project Portfolio - Water Potential
*/
?>
<?php get_header('solutions'); ?>

<div class="breadcrumbs sixteen columns">
		<p>
			<?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
		</p>
	</div>
<?php if (get_field('nav_menu')):?>
<div class="four columns subnav">
	<?php the_field('nav_menu'); else:?>
	<div class="four columns"> <?php echo '&nbsp;';
		endif;?> </div>
	
	<div class="eight columns">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>
		<?php wp_nav_menu( array ('menu' => 'Water Project Portfolio', 'container' => '','menu_class' => 'tab-nav','depth' => 0) ); ?>
<?php $posts = new WP_Query(array( 
   'post_type' => 'bgmp',
   'orderby' => 'meta_value_num',
	 'meta_key' => 'bgmp_zIndex',
   'order' => 'DESC',
	 'bgmp-category' => 'arc-potential',
   'posts_per_page' => 99
)); ?>
		<h6>Potential Water Projects</h6>
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
<?php else :?>
<br />
<h3>No projects in this category currently, please check back soon!</h3>
<?php endif;?>
<?php wp_reset_query(); ?>
		
	</div>
	<?php get_sidebar();?>
	<?php get_footer(); ?>
