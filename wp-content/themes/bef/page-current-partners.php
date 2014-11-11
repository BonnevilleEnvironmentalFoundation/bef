<?php
/*
Template Name: Page - Current Partners
*/
?>

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
  the_post_thumbnail('full');
?>
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
<h1>current partners</h1>
&nbsp;

<p>We partner with a wide range of businesses, NGOs, utilities and government agencies throughout the United States. Below is a partial list of our current partners:</p>
<br />
<h2>Major Grant Funders</h2>
<p>BEF relies on the generous support and partnership of our philanthropic and corporate funders. We thank the major funders below for their continued commitment to support our work and help us advance solutions to pressing energy, water and carbon challenges.</p>

<a href="http://b-e-f.org/our-partners/current-partners/attachment/funder-logos-2/" rel="attachment wp-att-1846"><img class="alignnone size-full wp-image-1846" alt="funder-logos" src="http://b-e-f.org/wp-content/uploads/2012/11/funder-logos1.jpg" width="495" height="310" /></a>

&nbsp;

<h2>Major Corporate Partners</h2>
	<?php if(get_field('parter_logo_slides')) : ?>
<div class="cycle-slideshow" data-cycle-pause-on-hover="true" data-cycle-speed="1000" data-cycle-timeout="5000" style="float:right">
				<?php while (the_repeater_field('parter_logo_slides')):?>

	<img src="<?php the_sub_field('image');?>" />

	<?php endwhile;?>
</div>
	<?php endif;?>
<p>Chevrolet</p>

<p>Coca Cola</p>

<p>Silk</p>

<p>International Delight</p>
&nbsp;
			
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