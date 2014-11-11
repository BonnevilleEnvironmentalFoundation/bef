<?php get_header(); ?>

<div class="breadcrumbs sixteen columns">
<p>    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?></p>
</div>
<?php if (get_field('nav_menu')):?>
<div class="four columns subnav">
	<?php the_field('nav_menu'); else:?>
	<div class="four columns"> <?php echo '&nbsp;';
		endif;?> </div>
<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
 ?>
 <div class="twelve columns">
<?php 
$map_image = get_field('map_image');
$link = get_field('link_destination'); ?>
<?php if ($link): ?>

<a onclick="window.open(this.href);return false;" href="<?php the_field('link_destination'); ?>"><?php 
	  the_post_thumbnail('full');
	?></a>
<?php elseif ($map_image): ?>
<a class="fancybox" href="<?php the_field('map_image'); ?>"><?php 
	  the_post_thumbnail('full');
	?></a>
<?php else : ?>
	<?php 
	  the_post_thumbnail('full');
	?>
<?php endif; ?>
</div>
<div class="clearfix"></div>
<div class="eight offset-by-four columns">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content();?>
<?php endwhile; ?>
<?php endif;?>
<?php wp_reset_query(); ?>
<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>' ); ?>
</div>
<?php get_sidebar();?>
<?php 
} else { ?>
<div class="eight columns">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content();?>
<?php endwhile; ?>
<?php endif;?>
<?php wp_reset_query(); ?>
<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>' ); ?>
</div>
<?php get_sidebar();?>
<?php }?>



<?php get_footer(); ?>
<div class="clearfix"></div>
		</div>