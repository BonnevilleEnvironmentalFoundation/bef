<?php
/**
 * * Template Name: Site Map
 */

get_header(); ?>

		<div id="container" class="one-column">
			<div id="content"role="main">
			
			<div id="breadcrumb">
				<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
				<div class="share">
					<span class='st_sharethis' ></span><span class='st_facebook' ></span><span class='st_twitter' ></span><span class='st_email' ></span>
				</div>
			</div>
			
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<?php if ( !is_front_page() ) { ?>
						<?php $h1 = c2c_get_current_custom("h1"); ?>
						<?php if(isset($h1)) { ?>
							<h1><?php echo $h1; ?></h1>
							<?php } else { ?>
							<h1><?php the_title(); ?></h1>
						<?php } ?>
					<?php } ?>
					
					<div class="entry-content">
						<?php the_content(); ?>
						<ul class="sitemap">
							<?php wp_list_pages("exclude=".$post->ID.",251&title_li="); ?>
						</ul>
						<?php edit_post_link( __( 'Edit', 'watershed' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

			<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>