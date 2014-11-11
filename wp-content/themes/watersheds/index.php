<?php
/**
 * The main template file.
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
			<div id="breadcrumb">
				<div id="crumbs"><a href="/watersheds">Home</a> » <span class="current">Field Notes</span></div>
				<div class="share">
					<span class='st_sharethis' ></span><span class='st_facebook' ></span><span class='st_twitter' ></span><span class='st_email' ></span>
				</div>
			</div>
			<h1>Learning as we go. Sharing what we know.</h1>
			<p class="intro">Through our Model Watershed program, BEF has created a funding strategy that enables us to evaluate what it really takes to achieve comprehensive, long-term, community-supported watershed restoration. By sharing our experiences and insights, we hope to add to the conversation about creative ways to support watershed restoration.</p>
			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>