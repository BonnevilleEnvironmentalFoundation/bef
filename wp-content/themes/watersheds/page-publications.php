<?php
/**
 * Template Name: Resources
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
				
				<?php $h1 = c2c_get_current_custom("h1"); ?>
				<?php if(isset($h1)) { ?>
					<h1><?php echo $h1; ?></h1>
					<?php } else { ?>
					<h1><?php the_title(); ?></h1>
				<?php } ?>
				
				<?php rewind_posts(); ?>
		
				<?php $my_query = new WP_Query( array( 'post_type' => 'watershed_pub', 'posts_per_page' => 100 ) ); ?>
	
				<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
				
					<h2 name="<?php the_title(); ?>" id="<?php the_title(); ?>"><?php the_title(); ?></h2>
				
					<div class="entry-content resource">
						<?php the_content(); ?>
						<?php get_attachment_pdf($echo=true); ?>
					</div>
				<?php endwhile; ?>
				
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<?php the_content(); ?>
					<?php edit_post_link( __( 'Edit', 'watershed' ), '<span class="edit-link">', '</span>' ); ?>

				<?php endwhile; ?>			
				
						
				</div><!-- #post-## -->

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar( 'page'); ?>
<?php get_footer(); ?>