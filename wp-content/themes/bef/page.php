<?php get_header(); ?>

<?php get_template_part('partials/breadcrumbs'); ?>
<?php get_template_part('partials/subnav'); ?>



	<?php if ( has_post_thumbnail() ) : // check if the post has a Post Thumbnail assigned to it. ?>	
<div class="twelve columns">	
				<?php the_post_thumbnail('full');?>
			</div>
			<div class="clearfix"></div>
			<div class="eight offset-by-four columns">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content();?>
			<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>
		<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>' ); ?>
	</div>
	<?php get_template_part('partials/sidebar'); ?>

<?php	elseif (get_field('optional_slideshow') ): //if not, check for slideshow ?>
	<div class="twelve columns">
		<div class="slideshow-wrap">
			<div id="prev">PREV</div>
			<div id="next">NEXT</div>
			<div class="cycle-slideshow" data-cycle-pause-on-hover="true"data-cycle-prev="#prev"
			data-cycle-next="#next" data-cycle-speed="1000" data-cycle-timeout="3000">
			<?php if ( get_field('optional_slideshow') ) : ?>

			<?php for( $i = 0; has_sub_field('optional_slideshow'); $i++ ) : ?>

			<?php if ( get_sub_field('images') ) : $image = get_sub_field('images'); ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
		<?php endif; //end images ?>            

	<?php endfor; //end images loop ?>
<?php endif; //end slideshow ?>
</div>
</div>
</div>
<div class="clearfix"></div>
<div class="eight offset-by-four columns">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content();?>
<?php endwhile; ?>
<?php endif;?>
<?php wp_reset_query(); ?>
<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>' ); ?>
</div>
<?php get_template_part('partials/sidebar'); ?>
<?php  else : // If no Featured Image or Slideshow, Default back to standard layout ?>
<div class="eight columns">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content();?>
<?php endwhile; ?>
<?php endif;?>
<?php wp_reset_query(); ?>
<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>' ); ?>
</div>
<?php get_template_part('partials/sidebar'); ?>
<?php endif; //end conditional for featured image or slideshow ?>
</div>

<?php get_template_part('partials/footer'); ?>