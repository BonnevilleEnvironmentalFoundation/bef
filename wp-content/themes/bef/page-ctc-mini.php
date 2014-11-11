<?php
/*
Template Name: Page - CTC Minisite
*/
?>

<?php get_header('ctc-mini'); ?>


<?php if (get_field('nav_menu')):?>
<div class="four columns subnav">
	<?php the_field('nav_menu'); else:?>
	<div class="four columns"> <?php echo '&nbsp;';
		endif;?> </div>
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
<?php get_sidebar();?>
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