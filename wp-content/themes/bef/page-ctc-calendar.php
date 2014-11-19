<?php

/*

Template Name: CTC Calendar

*/

?>

<?php get_header(); ?>

<?php get_template_part('partials/breadcrumbs'); ?>

<div class="sixteen columns ctc-modal-display" id="primary">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content();?>
<?php endwhile; ?>
<?php endif;?>
<?php wp_reset_query(); ?>
<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>' ); ?>


</div>




<?php get_template_part('partials/footer'); ?>

