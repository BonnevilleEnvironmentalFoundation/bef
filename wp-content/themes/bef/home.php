<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

	<div class="slideshow-wrap">
	<div id="prev">PREV</div>
    <div id="next">NEXT</div>
		<div class="cycle-slideshow" data-cycle-pause-on-hover="true"data-cycle-prev="#prev"
        data-cycle-next="#next" data-cycle-speed="1000" data-cycle-timeout="3000"data-cycle-slides="> a"><?php $posts = new WP_Query(array( 
   'post_type' => 'slideshow',
   'orderby' => 'date',
   'order' => 'DESC',
   'posts_per_page' => 99
)); ?>
<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>

				<?php if(get_field('homepage_slideshow')) : ?>
				<?php while (the_repeater_field('homepage_slideshow')):?>
<?php foreach(get_sub_field('link_destination') as $link):?>
 <a href="<?php echo get_permalink($link->ID); ?>">
 
	<img src="<?php the_sub_field('image');?>" />
	</a>
<?php endforeach; ?>
	<?php endwhile;?>
	<?php endif;?>
	
<?php endwhile; ?>
<?php endif;?>
<?php wp_reset_query(); ?>
		</div>
	</div>

<div class="row">

	<?php if(get_field('homepage_callouts', 780)): ?>
	<?php while(the_repeater_field('homepage_callouts', 780)): ?>
	<div class="homepage-callouts"> 
	<div class="content">
		<?php the_sub_field('text');?>
		</div>
	</div>
	<?php endwhile;?>
	<?php endif;?>
	
</div>


<div class="homepage-content-banner">
<div class="row">
<div class="fourteen offset-by-one columns">

<?php the_field('secondary_callout', 780);?>


</div>
</div>
</div>
<div class="clearfix"></div>

<?php get_footer(); ?>
