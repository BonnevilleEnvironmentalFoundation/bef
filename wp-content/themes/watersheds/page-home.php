<?php
/**
 * Template Name: Home
 */

get_header(); ?>


			<div id="content" role="main">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<div id="gallery-cycle">
								<ul id="gallerynav"></ul>
								<?php echo do_shortcode('[gallery itemtag="div" size="full" columns="0" orderby="rand" order="ASC"]'); ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/bg-img-home-flag.png" class="flag" />
							</div>
							
					<div class="group">
						<?php the_content(); ?>
					</div>
					
				</div><!-- #post-## -->

			<?php endwhile; ?>

			</div><!-- #content -->


<?php get_footer(); ?>