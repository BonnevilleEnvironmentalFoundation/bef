<?php

/*

Template Name: Blog

*/

?>

<?php get_header(); ?>

	<div class="twelve columns">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; ?>

<?php endif; ?>

<?php $posts = new WP_Query(array( 
   'post_type' => 'post',
   'orderby' => 'date',
   'order' => 'DESC',
   'posts_per_page' => 3
)); ?>

<?php $odd_or_even = 'odd'; ?>

<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>

<div class="article <?php echo $odd_or_even; ?> post-<?php the_ID();?>">

<?php $odd_or_even = ('odd'==$odd_or_even) ? 'even' : 'odd'; ?>

<h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>

<p><?php the_time('l, F jS, Y') ?></p>

<?php the_excerpt(); ?>

<p><a class="read-more" href="<?php the_permalink();?>">Read Post &raquo;</a></p>

</div>

<?php endwhile; ?>

<?php endif; ?>
<?php wp_reset_query(); ?>
		</div>
		
		



<?php get_footer(); ?>