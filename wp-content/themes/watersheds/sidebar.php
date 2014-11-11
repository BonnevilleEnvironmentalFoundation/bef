<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 */
?>

<div id="sidebar" class="widget-area" role="complementary">
	<ul class="xoxo">
		<div class="widget_categories">
			<h3 class="widget-title"><a href="/watersheds/field-notes/">Field Notes</a></h3>
			<ul>
			<?php wp_list_categories('orderby=name&title_li='); ?>
			</ul>
		</div>
		<li><a href="<?php bloginfo('rss2_url'); ?>" class="feed">RSS</a></li>
	<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	* the widgets for that widget area. If it instead returns false,
	* then the sidebar simply doesn't exist, so we'll hard-code in
	* some default sidebar stuff just in case.
	*/
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
		<li id="search" class="widget-container widget_search">
			<?php get_search_form(); ?>
		</li>
	
		<li id="archives" class="widget-container">
			<h3 class="widget-title"><?php _e( 'Archives', 'watershed' ); ?></h3>
			<ul>
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ul>
		</li>
	
		<li id="meta" class="widget-container">
			<h3 class="widget-title"><?php _e( 'Meta', 'watershed' ); ?></h3>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</li>
	
	<?php endif; // end primary widget area ?>
	
		
	
	</ul>
	
	<div class="ten-year">
		<div class="group">
			<p><img src="<?php bloginfo('template_directory') ?>/images/img-10.png" class="alignleft" /><strong>BEF believes it takes at least a decade to make a difference.</strong> 
Our long-term funding strategy gives our partners more freedom to approach their work with a longer-term perspective, leading to more comprehensive and strategic action on the ground.</p>
			<a href="/watersheds/about-our-program/" class="learnmore"><img src="<?php bloginfo('template_directory') ?>/images/btn-learn-more.png" class="alignright" title="Learn More"/></a>
		</div>
	</div>
	
	<h3 class="resources-list">Publications</h3>
	<ul class="resources-list">
		<?php $my_query = new WP_Query( array( 'post_type' => 'watershed_pub', 'posts_per_page' => 3 ) ); ?>
		<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
			<li><a href="/watersheds/our-model/publications/#<?php the_title(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; ?>
	</ul>
	
</div><!-- #sidbear -->
