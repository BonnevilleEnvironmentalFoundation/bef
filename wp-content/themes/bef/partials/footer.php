<div class="clearfix"></div>
<footer>
<div class="container">
<div class="row">
<div class="columns footer first">
<p class="header">BEF WEBSITES:</p>
<p><a href="http://store.b-e-f.org/">•  BEF Business Store</a></p>
<p><a onclick="window.open(this.href);return false;" href="http://store.shrinkyourfoot.org">•  Shrink Your Foot Residential Store</a></p>
<p><a onclick="window.open(this.href);return false;" href="http://www.b-e-f.org/watersheds">•  Model Watershed Program</a></p>
<p><a onclick="window.open(this.href);return false;" href="http://www.solar4rschools.org/">•  Solar 4R Schools&trade;</a></p>
</div>

<div class="columns footer">
<p class="header">CONTACT US:</p>
<p><strong>Bonneville Environmental Foundation</strong><br />
240 SW 1st Avenue<br />
Portland OR 97204<br />
phone: 503-248-1905 • fax: 503-248-1908<br />
<a class="bold" href="mailto:info@b-e-f.org">email</a></p>
</div>
<div class="columns footer last">
<p class="header">Find Us</p>
<ul class="social">
<li class="fb"><a onclick="window.open(this.href);return false;" href="http://www.facebook.com/pages/Bonneville-Environmental-Foundation/27532836780"></a></li>
<li class="li"><a onclick="window.open(this.href);return false;" href="http://us.linkedin.com/company/bonneville-environmental-foundation"></a></li>
<li class="yt"><a onclick="window.open(this.href);return false;" href="http://www.youtube.com/user/BEFoffsets"></a></li>
</ul>
</div>

</div>
<div class="row footer-login">

<p class="header">Partner Portal Login</p>
<?php wp_login_form(); ?>
</div>
<?php  wp_nav_menu( array ('menu' => 'Footer Nav', 'container' => 'nav','menu_class' => 'footer-nav','depth' => 0) ); ?>
<?php  wp_nav_menu( array ('menu' => 'Footer Nav Secondary', 'container' => 'nav','menu_class' => 'footer-nav secondary','depth' => 0) ); ?>
<?php  wp_nav_menu( array ('menu' => 'Footer Nav Tertiary', 'container' => 'nav','menu_class' => 'footer-nav tertiary','depth' => 0) ); ?>
</div>
</footer>
</div>
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-370359-2']);
  _gaq.push(['_setDomainName', 'b-e-f.org']);
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