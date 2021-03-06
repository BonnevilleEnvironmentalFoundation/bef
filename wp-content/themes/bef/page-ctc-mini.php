<?php
/*
Template Name: Page - CTC Minisite
*/
?>

<?php get_header('ctc-mini'); ?>


<?php get_template_part('partials/subnav'); ?>
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
<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>' ); ?>
</div>
<?php get_template_part('partials/sidebar'); ?>
<?php 
} else { ?>
<div class="twelve columns">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content();?>
<?php endwhile; ?>
<?php endif;?>
<?php wp_reset_query(); ?>
<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>' ); ?>
</div>
<?php }?>



<?php get_footer('ctc-mini'); ?>
<div class="clearfix"></div>
		</div>