<?php 
$nav_menu = get_field('nav_menu'); // check for deprecated nav field
$subnav = get_field('subnav_menu'); // check for new nav field
if ($nav_menu): //if using depracated nav menu field ?>
<div class="four columns subnav">
	<?php the_field('nav_menu');
	elseif($subnav): //otherwise check for new subnav menu picker?>
	<div class="four columns subnav">
		<?php if ( get_field('subnav_menu_header') ) : ?>
		<h4><?php echo get_field('subnav_menu_header'); //if $subnav, echo header ?></h4>
	<?php endif; ?>
	<?php wp_nav_menu( array ('menu' => $subnav, 'container' => '','menu_class' => '','depth' => 0) ); //echo Subnav ?>
<?php else: //if neither, show empty column ?>
	<div class="four columns"> 
		&nbsp;
	<?php endif; ?>
</div>