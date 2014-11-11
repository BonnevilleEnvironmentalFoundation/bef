<?php
/*
Template Name: Page - Solar Database
*/
?>
<?php get_header(''); ?>

	<div class="breadcrumbs sixteen columns">
		<p>
			<?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
		</p>
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
		<?php the_content();?>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>
		<form name="search" action="<?php bloginfo('url'); ?>/solarguide/search-results/" method="get">
  <select name="state">
  <?php
  $metakey = 'state';
  $states = $wpdb->get_col($wpdb->prepare("SELECT DISTINCT meta_value FROM $wpdb->postmeta WHERE meta_key = %s ORDER BY meta_value ASC", $metakey) );
  if ($states) {
    foreach ($states as $state) {
      echo "<option value=\"" . $state . "\">" . $state . "</option>";
    }
  }
  ?>
  </select>
  <input type="submit" value="search" />
</form>
		
		<p>..........................................................................................</p>

<p><em>Disclaimer: This searchable list is not exhaustive, but is offered as an added value to our readers. Inclusion of a financial incentive program on this list in no way guarantees our reader’s qualification for this incentive. Each program name hyperlinks to an external website with further details on eligibility.</em></p>

 
<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>' ); ?>
	</div>
	<?php get_sidebar('partner');?>
	<?php }?>
	<?php get_footer(); ?>
