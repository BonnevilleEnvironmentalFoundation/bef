<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<input type="text" value="Enter Search..." name="s" id="search-box" />
	<input type="submit" id="searchsubmit" value="Search" onSubmit="_gaq.push(['_trackEvent', 'SearchBtn', 'HeaderSearch']);"  />
</form>
