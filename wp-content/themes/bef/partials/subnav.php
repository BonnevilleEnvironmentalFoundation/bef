<?php 
$nav_menu = get_field('nav_menu');
if ($nav_menu):?>
<div class="four columns subnav">
	<?php the_field('nav_menu');
	$subnav = get_field('project_portfolio_nav_menu'); 
	elseif($subnav):?>
	<?php if ( get_field('subnav_menu_header') ) : ?>
	<h4><?php echo get_field('subnav_menu_header'); ?></h4>
<?php endif; ?>
<?php wp_nav_menu( array ('menu' => $subnav, 'container' => '','menu_class' => '','depth' => 0) ); ?>
<?php else: ?>
	<div class="four columns"> 
		<?php echo '&nbsp;';
		endif;?> 
	</div>