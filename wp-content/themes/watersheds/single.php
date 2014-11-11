<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
			<div id="breadcrumb">
				<div id="crumbs"><a href="/watersheds">Home</a> » <a href="/watersheds/field-notes/">Field Notes</a> » <span class="current"><?php the_title(); ?></span></div>
				<div class="share">
					<span class='st_sharethis' ></span><span class='st_facebook' ></span><span class='st_twitter' ></span><span class='st_email' ></span>
				</div>
			</div>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="nav-above" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'watershed' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'watershed' ) . '</span>' ); ?></div>
				</div><!-- #nav-above -->

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'watershed' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<div class="author"><strong class="date">Posted <?php the_time('F jS, Y') ?></strong></div>

			<div class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'watershed' ) ); ?>
				<p><em>– <a href="<?php the_author_meta('user_url') ?>"><?php the_author(); ?></a></em></p>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'watershed' ), 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content -->
			
			<?php if ( count( get_the_category() ) ) : ?>
				<div class="cat-links">
					<?php the_category(', ') ?>
				</div>
			<?php endif; ?>
			
			<div class="entry-utility">
				
				<?php
					$tags_list = get_the_tag_list( '', ', ' );
					if ( $tags_list ):
				?>
					<div class="tag-links">
						<?php printf( __( '%2$s', 'watershed' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
					</div>
					
				<?php endif; ?>
				<span class="comments-link"><?php comments_popup_link( __( '', 'watershed' ), __( '1 Comment', 'watershed' ), __( '% Comments', 'watershed' ) ); ?></span>
				<?php edit_post_link( __( 'Edit', 'watershed' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-utility -->
		</div><!-- #post-## -->

				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'watershed' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'watershed' ) . '</span>' ); ?></div>
				</div><!-- #nav-below -->

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
