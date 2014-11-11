<?php
/*
Template Name: Page - Membership Area
*/
?>
<?php get_header(); ?>

<div class="breadcrumbs sixteen columns">
	<p>
		<?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?></p>
</div>
<?php if (get_field('nav_menu')):?>
<div class="four columns subnav">
	<?php the_field('nav_menu'); else:?>
	<div class="four columns">
		<?php echo '&nbsp;';
		endif;?></div>
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
<?php get_sidebar();?>
<?php 
} else { ?>
<div class="eight columns">
	<h1>partner area</h1>
	<p>&nbsp;</p>
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

<?php $image = get_field('asset_image', $post_object->ID);

if ($image):?>
<div class="project-image">
<p><a onclick="window.open(this.href);return false;" href="<?php the_field('file_url', $post_object->ID); ?>"><img src="<?php the_field('asset_image', $post_object->ID);?>" /></a>
</div>
<div class="project-info">
<h4><?php the_field('title', $post_object->ID); ?></h4>
<?php the_field('description', $post_object->ID); ?>
<p><a onclick="window.open(this.href);return false;" class="button" href="<?php the_field('file_url', $post_object->ID); ?>">download</a></p>
</div> 

<?php else: ?>  
<div class="project-info no-image">
<h4><?php the_field('title', $post_object->ID); ?></h4>
<?php the_field('description', $post_object->ID); ?>
<p><a onclick="window.open(this.href);return false;" class="button" href="<?php the_field('file_url', $post_object->ID); ?>">download</a></p>
</div>
<?php endif ?>
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

<?php get_footer(); ?>
<div class="clearfix"></div>
</div>