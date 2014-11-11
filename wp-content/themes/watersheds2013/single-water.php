<?php get_header('solutions'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="breadcrumbs sixteen columns">
		<p>
			<?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
		</p>
	</div>
	<div class="four columns">
	<div class="four columns alpha omega subnav">
		<?php wp_nav_menu( array ('menu' => 'REC', 'container' => 'nav','menu_class' => '','depth' => 0) ); ?>
	</div>
	<div class="clearfix"></div>

		</div> 
	<div class="eight columns">
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
	<p class="uppercase"><?php the_field('location');?> | <a onclick="window.open(this.href);return false;" href="<?php the_field('map_project');?>">MAP THIS</a></p>
	<?php the_field('project_information');?>
	</div>
	<?php endwhile; ?>
	<?php endif;?>
	<?php get_sidebar();?>
	<?php get_footer(); ?>
