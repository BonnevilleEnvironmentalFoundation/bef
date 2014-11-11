<?php
/*
Template Name: Page - CTC Membership Area
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

	<div class="four columns">
	<div class="sidebar-callout request-consultation logout">
<p>
	<a class="button" href="<?php echo wp_logout_url( home_url() ); ?> ">Logout</a>
</p>
	</div>
</div>

<div class="eight columns">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content();?>
	<?php endwhile; ?>
	<?php endif;?>
	<?php wp_reset_query(); ?>


<?php $posts = get_field('additional_asset_downloads');
 
if( $posts ): ?>
		<ul class="bef-tabs tab-nav">
			<li><a href="#logo">LOGO SETS</a></li>
			<li><a href="#engagement">ENGAGEMENT TOOLS</a></li>
			<li><a href="#story">STORY ASSETS</a></li>
		</ul>

<div class="profile tab-content" role="main" id="logo">
	<h2>Logo Sets</h2>
<?php foreach( $posts as $post_object): ?>
<?php $category = get_field('category', $post_object->ID); ?>

<?php if ($category == 'Logo Sets') { ?>	
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
	    <?php } ?>
	<?php endforeach; ?>
	</div>

<div class="profile tab-content" id="engagement">
	<h2>Engagement Tools</h2>
<?php foreach( $posts as $post_object): ?>
<?php $category = get_field('category', $post_object->ID); ?>

<?php if ($category == 'Engagement Tools') { ?>	
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
	    <?php } ?>
	<?php endforeach; ?>
	</div>

<div class="profile tab-content" id="story">
	<h2>Story Assets</h2>
<?php foreach( $posts as $post_object): ?>
<?php $category = get_field('category', $post_object->ID); ?>

<?php if ($category == 'Story Assets') { ?>	
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
	    <?php } ?>
	<?php endforeach; ?>
	</div>
	
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
<?php get_sidebar('ctcmember');?>


<?php get_footer(); ?>
<div class="clearfix"></div>
</div>