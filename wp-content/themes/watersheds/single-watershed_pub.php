<?php
/**
 * The Template for displaying all single publications
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
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<div class="entry-content resource">
				<?php the_content(); ?>
				<?php get_attachment_pdf($echo=true); ?>
			</div>	
			
		</div><!-- #post-## -->



<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>
