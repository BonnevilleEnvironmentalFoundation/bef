<?php
/*
Template Name: Page - Landing
*/
?>
<?php get_header('landing'); ?>

<div class="slideshow-wrap"> <img src="<?php the_field('landing_page_image');?>" alt="" /></div>
<div class="row main">
	<?php $callouts = get_field('landing_page_callouts');
				$image = get_field('landing_page_image');?>

	<?php if(get_field('landing_page_callouts')): ?>
	<?php while(the_repeater_field('landing_page_callouts')): ?>
	<div class="four columns landing-callouts"> <img src="<?php the_sub_field('image');?>"/>
		<?php the_sub_field('text');?>
	</div>
	<?php endwhile;?>
	<?php endif;?>
	<div class="clearfix"></div>
	<div class="eight columns">
		<blockquote>
			<?php the_field('endorsement_text');?>
			<p class="cite">
				<?php the_field('endorsement_name');?>
			</p>
		</blockquote>
		<p class="link"><a href="<?php 
$posts = get_field('endorsement_link');
if( $posts ): ?>

<?php foreach(get_field('endorsement_link') as $relationship): ?>
<?php echo get_permalink($relationship->ID); ?>

	<?php endforeach; ?>

<?php endif;?>">
			<?php the_field('endorsement_link_text');?>
			</a></p>
<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>' ); ?>
	</div>
	<div class="eight columns">
		<div class="form">
			<h2>request a complimentary consultation</h2>
			<p>Tell us more about your unique sustainable campus goals, and learn what makes a partnership with BEF unique by scheduling an in-person or phone-based consultation. <a href="<?php bloginfo('url');?>/privacy-policy/">Privacy Policy</a></p>
			<?php $form = get_field('gravity_form_id');?>
			<?php gravity_form($form, false, false, false, '', true);?>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>
