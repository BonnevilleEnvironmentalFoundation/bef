<?php get_header('solutions'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('partials/breadcrumbs'); ?>
	<div class="four columns">
	<div class="four columns alpha omega subnav">
		<h4>Projects and Programs</h4>
		<?php wp_nav_menu( array ('menu' => 'Projects and Programs', 'container' => 'nav','menu_class' => '','depth' => 0) ); ?>
	</div>
		</div> 
	<div class="twelve columns">
<p class="back-projects"><a href="javascript:history.back()">RETURN TO ALL PROJECTS</a></p>
	<?php $slideshow = get_field('slideshow');
			$single_image = get_field('main_image');?>
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
	<img src="<?php the_field('main_image');?>" />
	<?php else : ?>
	<?php endif;?>
	<h1><?php the_title();?></h1>
	<p class="uppercase"><?php the_field('location');?></p>
	<?php the_field('project_information');?>
	</div>
	<?php endwhile; ?>
	<?php endif;?>
	<?php get_template_part('partials/footer'); ?>