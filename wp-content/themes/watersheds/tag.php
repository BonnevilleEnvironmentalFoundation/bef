<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
				
				<div id="breadcrumb">
					<div id="crumbs"><a href="/watersheds">Home</a> » <a href="/watersheds/field-notes/">Field Notes</a> » <span class="current"><?php single_tag_title(); ?></span></div>
					<div class="share">
						<span class='st_sharethis' ></span><span class='st_facebook' ></span><span class='st_twitter' ></span><span class='st_email' ></span>
					</div>
				</div>
				
				<h1 class="page-title"><?php
					printf( __( 'Tag Archives: %s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				?></h1>
				<?php
				/* Run the loop for the tag archive to output the posts
				 * If you want to overload this in a child theme then include a file
				 * called loop-tag.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'tag' );
				?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
