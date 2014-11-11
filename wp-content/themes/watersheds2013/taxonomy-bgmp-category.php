<?php get_header(); ?>

<div class="breadcrumbs sixteen columns">
		<p>
			<?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
		</p>
	</div>
<?php if (have_posts()) : ?>

	<div class="four columns subnav">

		<ul>
		<?php $model = get_field('model');
$willamette = get_field('willamette');
if ($model) : ?>

	<?php wp_nav_menu( array ('menu' => 'Model Watershed Profiles', 'container' => 'nav','menu_class' => 'sub-nav','depth' => 0) ); ?>

<?php elseif ($willamette) : ?>
	<?php wp_nav_menu( array ('menu' => 'Willamette Watershed Profiles', 'container' => 'nav','menu_class' => 'sub-nav','depth' => 0) ); ?>
<?php else: ?>

<?php endif; ?>

</ul>

	</div>
	
	<div class="eight columns">

<?php $model = get_field('model');
$willamette = get_field('willamette');
if ($willamette) : ?>
<?php wp_nav_menu( array ('menu' => 'Willamette Watershed Categories', 'container' => 'nav','menu_class' => 'tab-nav','depth' => 0) ); ?>
<h1>Willamette Watershed</h1>
 <?php while (have_posts()) : the_post(); ?> 
<div class="row partner-entry">
<div class="partner-image">
	<?php the_title(); ?>
<p><a href="<?php the_permalink();?>"><img src="<?php the_field('thumbnail_image');?>" /></a>
</div>
<div class="partner-info">
<img src="<?php the_field('logo');?>" />
<p><?php the_field('snippet');?></p>
<p><a onclick="window.open(this.href);return false;" href="<?php the_permalink();?>">Read full partner profile</a></p>
</div>
</div>
<?php endwhile; ?>
<?php rewind_posts(); ?>
<?php elseif ($model) : ?>

<?php wp_nav_menu( array ('menu' => 'Model Watershed Categories', 'container' => 'nav','menu_class' => 'tab-nav','depth' => 0) ); ?>
<h1>Model Watershed</h1>
<?php while (have_posts()) : the_post(); ?> 
<div class="row partner-entry">
<div class="partner-image">
	<?php the_title(); ?>
<p><a href="<?php the_permalink();?>"><img src="<?php the_field('thumbnail_image');?>" /></a>
</div>
<div class="partner-info">
<img src="<?php the_field('logo');?>" />
<p><?php the_field('snippet');?></p>
<p><a onclick="window.open(this.href);return false;" href="<?php the_permalink();?>">Read full partner profile</a></p>
</div>
</div>
<?php endwhile; ?>
<?php rewind_posts(); ?>
<?php endif; ?>


<?php endif; ?>


		
	</div>
	<?php get_sidebar();?>
	<?php get_footer(); ?>
