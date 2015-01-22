<?php get_header(); ?>
<?php get_template_part('partials/breadcrumbs'); ?>
<div class="four columns subnav">
	<?php wp_nav_menu( array ('menu' => 'Our Partners', 'container' => 'nav','menu_class' => '','depth' => 0) ); ?>
</div>
<div class="eight columns">
	
	<?php $slideshow = get_field('slideshow');
			$single_image = get_field('single_image');?>
	<?php if($slideshow) : ?>
	<div class="slideshow-wrap">
		<div id="prev">PREV</div>
		<div id="next">NEXT</div>
		<div class="cycle-slideshow" data-cycle-pause-on-hover="true"data-cycle-prev="#prev"
        data-cycle-next="#next" data-cycle-speed="1000" data-cycle-timeout="5000">
			<?php while (the_repeater_field('slideshow')):?>
			<img src="<?php the_sub_field('image');?>" />
			<?php endwhile;?>
		</div>
	</div>
	<?php elseif ($single_image) :?>
	<img src="<?php the_field('single_image');?>" />
	<?php else : ?>
	<?php endif;?>
	<?php the_field('profile');?>
</div>
<?php endwhile; ?>
<?php endif;?>
<?php get_template_part('partials/sidebar'); ?>
<?php get_template_part('partials/footer'); ?>
