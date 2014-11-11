<?php get_header(); ?>

<div class="breadcrumbs sixteen columns">
		<p>
			<?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
		</p>
	</div>

	<div class="four columns subnav">
		<?php wp_nav_menu( array ('menu' => 'Our Work', 'container' => 'nav','menu_class' => '','depth' => 0) ); ?>
	</div>
	
	<div class="eight columns">
		
	<?php wp_nav_menu( array ('menu' => 'Partner Type', 'container' => 'nav','menu_class' => 'tab-nav','depth' => 0) ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="row partner-entry">
<div class="partner-image">
<p><a href="<?php the_permalink();?>"><img src="<?php the_field('thumbnail_image');?>" /></a>
</div>
<div class="partner-info">
<img src="<?php the_field('logo');?>" />
<p><?php the_field('snippet');?></p>
<p><a onclick="window.open(this.href);return false;" href="<?php the_permalink();?>">Read full partner profile</a></p>
</div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
		
	</div>
	<?php get_sidebar();?>
	<?php get_footer(); ?>
