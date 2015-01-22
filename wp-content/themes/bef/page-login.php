<?php
/*
Template Name: Page - Login
*/
?>
<?php get_header(); ?>

<?php get_template_part('partials/breadcrumbs'); ?>
<?php get_template_part('partials/subnav'); ?>
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
	a
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content();?>
<?php endwhile; ?>
<?php endif;?>
<?php wp_reset_query(); ?>
<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>' ); ?>
</div>
<?php get_template_part('partials/sidebar'); ?>
<?php 
} else { ?>
<div class="eight columns">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content();?>
<?php endwhile; ?>
<?php endif;?>
<?php wp_reset_query(); ?>
<div class="login-form">

	<?php wp_login_form(); ?>

		<?php if($_GET['login'] == 'failed'){ ?>
	<div class="login-failed">
    <p style="color:red">Login Failed, incorrect username or password</p>
</div>
<?php } ?>

</div>
<?php gravity_form(12, false, false, false, '', true); ?>
<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>' ); ?>
</div>
<?php get_template_part('partials/sidebar'); ?>
<?php }?>



<?php get_template_part('partials/footer'); ?>
<div class="clearfix"></div>
		</div>