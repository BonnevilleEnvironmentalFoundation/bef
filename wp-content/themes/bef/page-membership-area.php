<?php
/*
Template Name: Page - Membership Area
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
?></div>
	<div class="clearfix"></div>
	<div class="eight offset-by-four columns">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>
		<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>
	' ); ?>
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


<?php $posts = get_field('additional_asset_downloads');
 
if( $posts ): ?>
	<h2>downloads</h2>
	<?php foreach( $posts as $post_object): ?>
 <div class="row project-entry">

<?php 
$link = get_field('link', $post_object->ID);
$download = get_field('download', $post_object->ID);
$image = get_field('asset_image', $post_object->ID);
$new  = get_field('flag_as_new', $post_object->ID);
if ($image): ?>
<div class="project-image">
<?php if($new){?>
<span class="new"><img src="<?php bloginfo('template_directory'); ?>/images/new-ribbon.png" alt=""></span>
<?php } ?>
<p><a onclick="window.open(this.href);return false;" href="<?php the_field('file_url', $post_object->ID); ?>"><img src="<?php the_field('asset_image', $post_object->ID);?>" /></a>
</div>
<div class="project-info">
<h4><?php the_field('title', $post_object->ID); ?></h4>
<?php the_field('description', $post_object->ID); ?>
<?php

 if ($link) : ?>
<p><a onclick="window.open(this.href);return false;" class="button" href="<?php the_field('file_url', $post_object->ID); ?>">go to link</a></p>

<?php elseif ($download) : ?>
<p><a onclick="window.open(this.href);return false;" class="button" href="<?php the_field('file_url', $post_object->ID); ?>">download</a></p>
<?php else : ?>

<?php endif; ?>
<?php $sharethis = get_field('sharethis', $post_object->ID);
if ($sharethis) {
 ?>
<span class='st_sharethis' st_title='<?php the_field('title', $post_object->ID); ?>' st_url='<?php the_field('file_url', $post_object->ID); ?>' displayText='ShareThis'></span> 
<?php } ?>
</div> 

<?php else: ?>  
<div class="project-info no-image">
<h4><?php the_field('title', $post_object->ID); ?></h4>
<?php the_field('description', $post_object->ID); ?>
<?php
  if ($link): ?>
<p><a onclick="window.open(this.href);return false;" class="button" href="<?php the_field('file_url', $post_object->ID); ?>">go to link</a></p>

<?php elseif ($download) : ?>
<p><a onclick="window.open(this.href);return false;" class="button" href="<?php the_field('file_url', $post_object->ID); ?>">download</a></p>
<?php else : ?>

<?php endif; ?>
<?php $sharethis = get_field('sharethis', $post_object->ID);
if ($sharethis) {
 ?>
<span class='st_sharethis' st_title='<?php the_field('title', $post_object->ID); ?>' st_url='<?php the_field('file_url', $post_object->ID); ?>' displayText='ShareThis'></span> 
<?php } ?>
</div>
<?php endif; ?>
	    </div>
	<?php endforeach; ?>
<?php endif;?>

	<?php if(get_field('embed_codes')) : ?>
	<h2>embed codes:</h2>
	<?php while( has_sub_field('embed_codes' ) ): $count++?>
	<div class="embed-code">
		<p><strong><?php the_sub_field('title'); ?></strong></p>
		<code>
		<div class="code" id="code-<?php echo $count; ?>"><?php the_sub_field('embed_code'); ?></div>
	</code>
		<p>
			<a href="" class="copy button" id="<?php echo $count; ?>">Copy to Clipboard</a>
		</p>
	</div>

	<?php endwhile;?>
	<?php endif;?>

	<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>' ); ?>

</div>
<?php get_sidebar('membership');?>
<?php }?>

<?php get_template_part('partials/footer'); ?>
<div class="clearfix"></div>
</div>