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
		<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>' ); ?>
		<?php $posts = new WP_Query(array( 
   'post_type' => 'publication',
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
	<?php get_sidebar();?>
	<?php get_footer(); ?>
