<?php
/*
Template Name: Page - Video Library
*/
?>
<?php get_header(''); ?>

<?php get_template_part('partials/breadcrumbs'); ?>
	<div class="four columns subnav">
		<?php wp_nav_menu( array ('menu' => 'Learn', 'container' => 'nav','menu_class' => '','depth' => 0) ); ?>
	</div>
	<div class="eight columns">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>

	
	<?php $posts = get_field('videos_and_assets'); ?>
	<?php if ( $posts ): ?>

	    <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>

			<div class="row project-entry"> 
				<div class="project-image">
					<?php if(has_post_thumbnail()) : the_post_thumbnail(); else: echo 'Featured Image'; endif; ?>
				</div>
				<div class="project-info">
					<h4><?php echo get_field('title') ?></h4>
					<?php echo get_field('description') ?>
				</div>
				<?php $url = get_field('url');  
				$file_url = get_field('file_url'); ?>
				<p><a target="_blank" href="<?php if($url):echo $url;else:echo $file_url;endif;?>" class="button">Go To Link</a></p>
				<span class='st_sharethis' st_title='<?php the_field('title', $post_object->ID); ?>' st_url='<?php the_field('file_url', $post_object->ID); ?>' displayText='ShareThis'></span> 
			</div>
	    <?php endforeach; wp_reset_postdata(); ?>

	<?php endif; ?>
		</div>
	</div>
	<?php get_template_part('partials/sidebar'); ?>
	<?php get_template_part('partials/footer'); ?>
