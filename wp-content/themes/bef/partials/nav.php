<div class="container"> 

	<a class="logo" href="<?php bloginfo('url');?>/"><img src="<?php bloginfo('template_directory');?>/assets/images/bef-org-logo-tagline.jpg" alt=""></a>


	<ul class="meta-nav">
		<li class="login"><a href="/contact-us/">LOGIN</a> | <a href="#">Create an Account</a></li>
		<li class="cart"><a onclick="window.open(this.href);return false;" href="http://store.b-e-f.org/make-a-purchase">CART</a></li>
		<li class="calculate"><a onclick="window.open(this.href);return false;" href="http://store.b-e-f.org/">calculate your footprint</a></li>
		<li class="buy"><a onclick="window.open(this.href);return false;" href="http://store.b-e-f.org/make-a-purchase">BUY NOW</a></li>
	</ul>

	<?php wp_nav_menu( array(
		'theme_location'  => 'main',             
		'container'       => 'nav', 
		'container_class' => 'main-nav', 
		'menu_class'      => '', 
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 2
		)); ?>

	</div>