<?php
/*
Template Name: Homepage Temp
*/
?>
<?php get_header('store'); ?>

	<div class="slideshow-wrap">
	<div id="prev">PREV</div>
    <div id="next">NEXT</div>
		<div class="cycle-slideshow" data-cycle-pause-on-hover="true"data-cycle-prev="#prev"
        data-cycle-next="#next" data-cycle-speed="1000" data-cycle-timeout="3000"data-cycle-slides="> a"><?php $posts = new WP_Query(array( 
   'post_type' => 'slideshow',
   'orderby' => 'date',
   'order' => 'DESC',
   'posts_per_page' => 99
)); ?>
<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>

				<?php if(get_field('homepage_slideshow')) : ?>
				<?php while (the_repeater_field('homepage_slideshow')):?>
<?php foreach(get_sub_field('link_destination') as $link):?>
 <a href="<?php echo get_permalink($link->ID); ?>">
 
	<img src="<?php the_sub_field('image');?>" />
	</a>
<?php endforeach; ?>
	<?php endwhile;?>
	<?php endif;?>
	
<?php endwhile; ?>
<?php endif;?>
<?php wp_reset_query(); ?>
		</div>
	</div>

<div class="row">

	<?php if(get_field('homepage_callouts', 780)): ?>
	<?php while(the_repeater_field('homepage_callouts', 780)): ?>
	<div class="homepage-callouts"> 
	<div class="content">
		<?php the_sub_field('text');?>
		</div>
	</div>
	<?php endwhile;?>
	<?php endif;?>
	
</div>


<div class="homepage-content-banner">
<div class="row">
<div class="fourteen offset-by-one columns">

<?php the_field('secondary_callout', 780);?>


</div>
</div>
</div>
<div class="clearfix"></div>

<div class="clearfix"></div>
<footer>
<div class="container">
<div class="row">
<div class="columns footer first">
<h2>BEF WEBSITES:</h2>
<p><a onclick="window.open(this.href);return false;" href="http://store.b-e-f.org/">•  BEF Business Store</a></p>
<p><a onclick="window.open(this.href);return false;" href="http://www.b-e-f.org/watersheds">•  Model Watershed Program</a></p>
<p><a onclick="window.open(this.href);return false;" href="http://www.solar4rschools.org/">•  Solar 4R Schools&trade;</a></p>
<p><a onclick="window.open(this.href);return false;" href="http://www.shrinkyourfoot.org">•  Shrink Your Foot</a></p>
<p><a onclick="window.open(this.href);return false;" href="http://www.skigreen.org">•  SkiGreen&trade;</a></p>
</div>

<div class="columns footer">
<h2>CONTACT US:</h2>
<p><strong>Bonneville Environmental Foundation</strong><br />
240 SW 1st Avenue<br />
Portland OR 97204<br />
phone: 503-248-1905 • fax: 503-248-1908<br />
<a class="bold" href="mailto:info@b-e-f.org">email</a></p>
</div>
<div class="columns footer last">
<h2>Find Us</h2>
<ul class="social">
<li class="fb"><a onclick="window.open(this.href);return false;" href="http://www.facebook.com/pages/Bonneville-Environmental-Foundation/27532836780"></a></li>
<li class="li"><a onclick="window.open(this.href);return false;" href="http://us.linkedin.com/company/bonneville-environmental-foundation"></a></li>
<li class="yt"><a onclick="window.open(this.href);return false;" href="http://www.youtube.com/user/BEFoffsets"></a></li>
</ul>
</div>

</div>
<?php  wp_nav_menu( array ('menu' => 'Footer Nav', 'container' => 'nav','menu_class' => 'footer-nav','depth' => 0) ); ?>
<?php  wp_nav_menu( array ('menu' => 'Footer Nav Secondary', 'container' => 'nav','menu_class' => 'footer-nav secondary','depth' => 0) ); ?>

</div>
</footer>
</div>
</div>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/plugins.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/script.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-370359-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php wp_footer(); ?>
</body>
</html>