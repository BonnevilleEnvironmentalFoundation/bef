<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
			
			<div id="breadcrumb">
				<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
				<div class="share">
					<span class='st_sharethis' ></span><span class='st_facebook' ></span><span class='st_twitter' ></span><span class='st_email' ></span>
				</div>
			</div>
			
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<h1><?php the_title(); ?></h1>

	
					<div class="entry-content">
						<?php the_content(); ?>
						<?php edit_post_link( __( 'Edit', 'watershed' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

			<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php if ( !is_front_page() ) { ?>
	<?php get_sidebar( 'page' ); ?>
<?php } ?>
<?php get_footer(); ?>
