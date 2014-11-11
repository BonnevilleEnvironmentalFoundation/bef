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
        data-cycle-next="#next" data-cycle-speed="1000" data-cycle-timeout="3000" data-cycle-slides="> a">
		<?php $posts = new WP_Query(array( 
   'post_type' =>'slideshow',
   'orderby' => 'date',
   'order' => 'DESC',
   'posts_per_page' => 99
)); ?>
		<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
		<?php if(get_field('homepage_slideshow')) : ?>
		<?php while (the_repeater_field('homepage_slideshow')):?>
		<a href="<?php bloginfo('url'); ?>/our-partners/"><img src="<?php the_sub_field('image');?>
		" /></a>
		<?php endwhile;?>
		<?php endif;?>

		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?></div>
</div>
	<a href="<?php bloginfo('url');?>/our-partners/">
		<img src="<?php bloginfo('template_directory'); ?>/images/homepage-banner.gif" alt=""></a>

<div class="row">

	<?php if(get_field('homepage_callouts', 6)): ?>
	<?php while(the_repeater_field('homepage_callouts', 6)): ?>
	<div class="homepage-callouts">
		<div class="content">
			<?php the_sub_field('text');?></div>
	</div>
	<?php endwhile;?>
	<?php endif;?></div>

<div class="homepage-content-banner">
	<div class="row">
		<div class="fourteen offset-by-one columns">

			<div class="five columns alpha">


	<div class="partner-slides">
		<div class="cycle-slideshow" data-cycle-speed="1000" data-cycle-timeout="3000">
			<?php if(get_field('funders_slideshow', 6)) : ?>
			<?php while (the_repeater_field('funders_slideshow', 6)):?>
			<img src="<?php the_sub_field('image');?>
			" />
			<?php endwhile;?>
			<?php endif;?>
		</div>
	</div>


			</div>

			<div class="nine columns omega">
				<?php the_field('secondary_callout', 6);?></div>

		</div>
	</div>
</div>
<div class="clearfix"></div>

<?php get_footer(); ?>