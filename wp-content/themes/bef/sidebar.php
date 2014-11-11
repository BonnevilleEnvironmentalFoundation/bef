<div class="four columns sidebar">
<?php if(get_field('optional_sidebar_content')): ?>
	<?php echo get_field('optional_sidebar_content'); ?>
<?php else: ?>
<div class="sidebar-callout request-consultation">
<h3><a href="<?php bloginfo('url');?>/contact-us/consultation-request-form/">schedule a one-on-one consultation</a></h3>

<p>Share your goals, learn more about BEF and explore the benefits of a BEF partnership.</p>
<a class="button" href="<?php bloginfo('url');?>/contact-us/consultation-request-form/">GO</a>
</div
><div class="sidebar-callout newsletter">
<h3><a href="<?php bloginfo('url');?>/bef-enewsletter/">stay in touch with our ebulletin</a></h3>

<p>Get industry insight, BEF news and latest partner and project stories delivered right in your inbox.</p>
<a class="button" href="<?php bloginfo('url');?>/bef-enewsletter/">GO</a>
</div>
<?php endif; ?>
</div>