<?php
/*
Template Name: Page - Partner Area
*/
?>
<?php get_header('partner'); ?>
<div class="container main">
<?php wp_nav_menu( array ('theme_location' => 'partner', 'menu' => 'Partner Area', 'container' => '','menu_class' => '','depth' => 0) ); ?>
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
<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>' ); ?>
		
		<?php if( is_page( 'seal-images-downloads' ) ): ?>
		
		<ul class="bef-tabs tab-nav">
		<li><a href="#tab1">REC Seals</a></li>
		<li><a href="#tab2">Carbon Offset Seals</a></li>
		<li><a href="#tab3">WRC Seals</a></li>
		</ul>
		<?php if( get_field( "rec_seals" ) ): ?>
		<div class="profile tab-content" role="main" id="tab1">
    <?php the_field( "rec_seals" ); ?>
		</div>
		<?php endif;?>
		<?php if( get_field( "carbon_offset_seals" ) ): ?>
		<div class="profile tab-content" role="main" id="tab2">
    <?php the_field( "carbon_offset_seals" ); ?>
		</div>
		<?php endif;?>
		<?php if( get_field( "wrc_seals" ) ): ?>
		<div class="profile tab-content" role="main" id="tab3">
    <?php the_field( "wrc_seals" ); ?>
		</div>
		<?php endif;?>
		
		<?php endif;?>
		
	</div>
	<?php get_sidebar('partner');?>
	<?php }?>
	<?php get_footer(); ?>
