<?php


get_header();
?>
<?php if (get_field('nav_menu')):?>
<div class="four columns subnav">
	<?php the_field('nav_menu'); else:?>
	<div class="four columns"> <?php echo '&nbsp;';
		endif;?> </div>
		<div class="eight columns">
		<br />
<br />
<h1>That page doesn't exist anymore, or has possibly moved.</h1>
<br />
<p><a href="<?php bloginfo('url');?>/sitemap/">View our Sitemap</a> and see if you can find the page you're looking for.</p>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>