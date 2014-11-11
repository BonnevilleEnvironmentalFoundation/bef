<?php
/**
 * Template Name: Partners Landing
 */

get_header(); ?>

		<div id="container" class="partners-landing">
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
				
	
					<div id="gallery-cycle">
						<ul id="gallerynav"></ul>
						<?php echo do_shortcode('[gallery itemtag="div" icontag="span" captiontag="p" link="url" size="full" columns="0" orderby="rand" order="ASC"]'); ?>
					</div>	
					
					<div class="group">
					
						<div class="entry-content">
							<?php the_content(); ?>
							<?php edit_post_link( __( 'Edit', 'watershed' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .entry-content -->
						
						<div class="map" id="partners-map">
							<?php if ( has_post_thumbnail() ) { 
						 	 the_post_thumbnail();
							} ?>
						</div>
					
					</div>
					
				</div><!-- #post-## -->
				
				<map name="partnersMap">
					<area shape="poly" coords="153,18,153,17,147,21,141,20,136,26,134,31,137,38,141,43,145,50,150,53,153,47,156,39,215,37,214,26" href="/watersheds/partners/methow-subbasin-model-watershed/" alt="Methow">
					<area shape="poly" coords="132,46,139,53,145,62,142,69,131,73,90,74,91,63,128,63" href="/watersheds/partners/entiat-river-model-watershed/" alt="Entiat">
					<area shape="poly" coords="235,41,229,27,236,22,308,26,308,36" href="/watersheds/partners/kootenai-tribe-of-idaho/" alt="Kootenai">
					<area shape="rect" coords="220,66,283,89" href="/watersheds/partners/coeur-dalene-tribe/" alt="Benewah">
					<area shape="poly" coords="284,110,284,98,305,79,365,98,367,110" href="/watersheds/partners/clearwater-model-watershed/" alt="Clearwater">
					<area shape="rect" coords="279,200,376,232" href="/watersheds/partners/friends-of-the-teton-river/" alt="Upper Teton">
					<area shape="poly" coords="21,332,10,316,24,304,80,304,80,314" href="/watersheds/partners/mattole-river-and-range-partnership/" alt="Mattole">
					<area shape="poly" coords="21,214,25,207,28,197,38,201,44,214,64,221,65,231,33,231" href="/watersheds/partners/coos-watershed-association/" alt="Coos">
					<area shape="poly" coords="96,166" href="#"><area shape="poly" coords="92,190,96,166,109,173,226,184,224,195,107,195" href="/watersheds/partners/upper-deschutes-watershed-council/" alt="Upper Deschutes">
					<area shape="poly" coords="75,187,68,198,53,192,47,166,49,159,55,142,137,142,137,153,76,153" href="/watersheds/partners/willamette-model-watershed-program/" alt="Willamette">
				</map>

			<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar( 'partners'); ?>
<?php get_footer(); ?>