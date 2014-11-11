<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 */
?>


<div id="sidebar" class="widget-area" role="complementary">
	<ul class="xoxo">
		<li class="widget-container widget_categories">
			
			<?php if($post->post_parent) { ?>
			  <h3><a href="<?php echo get_permalink($post->post_parent); ?>"><?php echo get_the_title($post->post_parent); ?></a></h3>

			  <?php } else { ?>
			  <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
			  <?php } ?>
	
			<?php
			  if($post->post_parent)
			  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
			  else
			  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
			  if ($children) { ?>
			  <ul>
			  <?php echo $children; ?>
			  </ul>
			<?php } ?>
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
			<?php if( !is_page(array('about-our-program')) ) { ?><a href="/watersheds/about-our-program/" class="learnmore"><img src="<?php bloginfo('template_directory') ?>/images/btn-learn-more.png" class="alignright" title="Learn More"/></a><?php } ?>
		</div>
	</div>
</div><!-- #sidbear -->
