<?php get_template_part('partials/head'); ?>
<body <?php body_class('landing store'); ?>>
<header>
	<div class="meta-nav">
	<div class="container">
		<ul>
			<li class="contact"><a href="/contact-us/">contact</a></li>
			<li class="partner-area"><a href="/partner-login/">partner login</a></li>
			<li class="rfp"><a href="/open-rfps-and-grants/ ">open RFPs and grants</a></li>			
			<li class="leed"><a onclick="window.open(this.href);return false;"  href="http://bef-store.herokuapp.com/calculate-business-footprint/leed/">earn LEED<sup>&reg;</sup> points</a></li>
			<li class="calculate"><a onclick="window.open(this.href);return false;" href="http://store.b-e-f.org/">calculate your business or event footprint</a></li>
			<li class="shop"><a onclick="window.open(this.href);return false;" href="http://store.b-e-f.org/make-a-purchase">shop / balance your footprint</a></li>
		</ul>
	</div>
</div>
	<div class="home-banner">
		<div class="container">
			<h1>
				<?php the_field('landing_page_title');?>
			</h1>
			<div class="logo">
			<p><a href="<?php bloginfo('url');?>">Learn more about BEF</a></p>
			<a href="<?php bloginfo('url');?>/"><img src="<?php bloginfo('template_directory');?>/images/logo.png" width="70" height="70" alt=""></a>
			</div>
		</div>
	</div>
</header>
<div class="wrap">
<div class="container main">
