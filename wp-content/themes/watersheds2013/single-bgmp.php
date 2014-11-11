<?php get_header(''); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php $model = get_field('model');
		  $willamette = get_field('willamette');
		  $consulting = get_field('consulting');
	 ?>

<div class="breadcrumbs sixteen columns">
	<p>
		<?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?></p>
</div>
<div class="four columns subnav">

	<?php $willamette = get_field('willamette');
$model = get_field('model');
			 if ($willamette) : ?>
	<?php wp_nav_menu( array ('menu' =>
	'Willamette  Watershed Profiles', 'container' => 'nav','menu_class' => 'sub-nav profile-nav','depth' => 0,'walker' => new description_walker())); ?>
	<?php elseif($model) :?>
	<?php wp_nav_menu( array ('menu' =>
	'Model  Watershed Profiles', 'container' => 'nav','menu_class' => 'sub-nav profile-nav','depth' => 0,'walker' => new description_walker())); ?>
	<?php elseif($consulting) :?>
	<?php wp_nav_menu( array ('menu' =>
	'Consulting  Watershed Profiles', 'container' => 'nav','menu_class' => 'sub-nav profile-nav','depth' => 0,'walker' => new description_walker())); ?>
	<?php endif; ?>

	<div class="clearfix"></div>

</div>
<div class="twelve columns">

	<?php if($model) : ?>
	<?php wp_nav_menu( array ('menu' =>
	'Model Watershed Categories', 'container' => 'nav','menu_class' => 'tab-nav','depth' => 0) ); ?>
	<?php elseif($consulting) : ?>
	<?php wp_nav_menu( array ('menu' =>
	'Consulting Watershed Categories', 'container' => 'nav','menu_class' => 'tab-nav','depth' => 0) ); ?>
	<?php endif; ?>

	<?php $slideshow = get_field('slideshow');
			$single_image = get_field('main_image');?>
	<?php if($slideshow) : ?>
	<div class="slideshow-wrap">
		<div id="prev">PREV</div>
		<div id="next">NEXT</div>
		<div class="cycle-slideshow" data-cycle-pause-on-hover="true"data-cycle-prev="#prev"
        data-cycle-next="#next" data-cycle-speed="1000" data-cycle-timeout="3500">
			<?php while (the_repeater_field('slideshow')):?>
			<img src="<?php the_sub_field('image');?>
			" />
			<?php endwhile;?></div>
	</div>
	<?php elseif ($single_image) :?>
	<img src="<?php the_field('main_image');?>
	" />
	<?php else : ?>
	<?php endif;?></div>

<div class="partner-detail">
	<div class="eight columns">
		<?php if($model) : ?>
		<h2>model watershed program partners</h2>

		<?php elseif($willamette) : ?>
		<h2>williamette watershed program partners</h2>

		<?php elseif($consulting) : ?>
		<h2>consulting partners</h2>
		<?php endif; ?>
		<h1>
			<?php the_title();?></h1>
		<p class="partner-location">
			<?php the_field('location');?></p>
		<?php the_field('project_information');?>
		<?php edit_post_link( __( 'Edit Partner'), '<span class="edit-link">', '</span>
	' ); ?>
</div>
<div class="four columns">


	<?php $map = get_field('large_map_image');
		if ($map) {
	 ?>
	<div class="view-map">
		<a class="fancybox" href="<?php the_field('large_map_image'); ?>">
			<img src="<?php the_field('map_image'); ?>" alt=""></a>
		<p>
			<a class="fancybox" href="<?php the_field('large_map_image'); ?>">View Enlarged Map ::</a>
		</p>
	</div>
	<?php } ?>
	<div class="partner-info">
	<?php the_field('partner_info'); ?>
	</div>

</div>

</div>


<?php endwhile; ?>
<?php endif;?>

<?php get_footer(); ?>