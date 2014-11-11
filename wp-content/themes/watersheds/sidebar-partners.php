<?php
/**
 * @package WordPress
 * partners sidebar
 */
?>
<div id="sidebar" class="widget-area" role="complementary">
	<ul class="xoxo">
	
		<li class="widget-container widget_categories">
		<h3><a href="/watersheds/partners">Partners</a></h3>
		<?php wp_nav_menu( array(
		 'container' =>false,
		 'menu_class' => 'cms-nav-sidebar',
		 'theme_location' => 'partners',
		 'walker' => new description_walker())
		); ?>
		</li>
		
		<?php
		/* When we call the dynamic_sidebar() function, it'll spit out
		* the widgets for that widget area. If it instead returns false,
		* then the sidebar simply doesn't exist, so we'll hard-code in
		* some default sidebar stuff just in case.
		*/
		if ( ! dynamic_sidebar( 'page-widget-area' ) ) : ?>
		
		<?php endif; // end primary widget area ?>
		
	</ul>
	<div class="ten-year">
		<div class="group">
			<p><img src="<?php bloginfo('template_directory') ?>/images/img-10.png" class="alignleft" /><strong>BEF believes it takes at least a decade to make a difference.</strong> 
Our long-term funding strategy gives our partners more freedom to approach their work with a longer-term perspective, leading to more comprehensive and strategic action on the ground.</p>
			<a href="/watersheds/about-our-program/"><img src="<?php bloginfo('template_directory') ?>/images/btn-learn-more.png" class="alignright" title="Learn More"/></a>
		</div>
	</div>
</div><!-- #sidbear -->
