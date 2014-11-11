<?php
/*
Template Name: Page - CTC Landing
*/
?>
<?php get_header('ctc'); ?>

<div class="accordion-wrap">

<div id="accordion">
    <h3 data-src="<?php bloginfo('template_directory'); ?>/images/ctc-01.jpg"><a href="#">the problem</a></h3>
    <div>
        <p>
  Less than 1% of the planet’s water is fresh and accessible. And throughout the world thousands of miles of overtapped rivers and streams are drying up, threatening critical habitats and water vital to industry, agriculture, economic development and recreation. The iconic Colorado River, pictured here, is so heavily dammed, diverted and depleted that in most years it no longer reaches the sea. 
        </p>
    </div>
    <h3 data-src="<?php bloginfo('template_directory'); ?>/images/ctc-02.jpg"><a href="#">an innovative solution</a></h3>
    <div>
        <p>
It doesn’t have to be this way. National Geographic, Bonneville Environmental Foundation and Participant Media have teamed up to create CHANGE THE COURSE, an innovative freshwater restoration campaign designed to redefine how we value, use and manage freshwater. With the support of corporate sponsors, every individual’s pledge to conserve water made at ChangeTheCourse.us will be matched with 1,000 gallons restored to the Colorado River Basin. 
        </p>
    </div>
    <h3  data-src="<?php bloginfo('template_directory'); ?>/images/ctc-03.jpg"><a href="#">anticipated results</a></h3>
    <div>
        <p>
Through a robust consumer engagement campaign directed by Participant Media and National Geographic, Change the Course aims to attract hundreds of thousands of pledges to conserve. Targeted restoration projects managed by BEF aim to restore approximately one billion gallons of water by 2014 to critically dewatered rivers and streams from the headwaters to the Delta. 
        </p>
    </div>
    <h3 data-src="<?php bloginfo('template_directory'); ?>/images/ctc-04.jpg"><a href="#">sponsorship options</a></h3>
    <div>
        <p>
  Several sponsorship levels are available, providing sponsors with invaluble exposure via this first-of-its-kind national campaign. Sponsors enjoy access to highly effective engagement tools to activate employees and customers via email marketing, web promotions and social media. Download our sponsor packet or schedule a consultation to learn more.
        </p>
    </div>
</div>
<div id="posterHolder"><div class="poster">
	<img id="placeholder" src="<?php bloginfo('template_directory'); ?>/images/ctc-01.jpg" alt="">

</div></div>

<div class="ctc-form">
    <h3>request a sponsor consultation</h3>
    <a href="<?php bloginfo('url'); ?>/privacy-policy/">Privacy Policy</a>
	<?php gravity_form(9, false, false, false, "", true) ?>
</div>

</div>

<div class="row main">
	<div class="twelve columns partners omega">
		<h2>about the campaign partners:</h2>

<div class="row">

	<?php if(get_field('campaign_partners')): ?>
	<?php while(the_repeater_field('campaign_partners')): ?>
	<div class="four columns alpha omega partner-detail">
		<?php the_sub_field('partner_details');?>
	</div>
	<?php endwhile;?>
	<?php endif;?>
	
</div>
<div class="row map-container">
    <div class="map-header">Change The Course<br>
flow restoration projects</div>
		<img class="map" src="<?php bloginfo('template_directory'); ?>/images/ctc-map.jpg" alt="">
		<a title="Working with Pronatura Noroeste and the Colorado River Delta Water Trust, Change the Course has supported an initial WRC pilot project that restores approximately 39 million gallons per year to help recover critically dewatered areas of the Delta." class="colorado" href="#"><img src="<?php bloginfo('template_directory'); ?>/images/map-image-colorado.png" alt=""></a>
		<a title="Change the Course partnered with The Nature Conservancy to support a project that works collaboratively with irrigators to improve irrigation systems and restore hundreds of thousands of gallons of water to dewatered sections of the Verde river—Arizona’s only designated Wild and Scenic river." class="verde" href="#"><img src="<?php bloginfo('template_directory'); ?>/images/map-image-verde.png" alt=""></a>
		<a title="Change the Course partnered with the Colorado Water Trust to support a project that restored significant flow to the Yampa during the 2012 summer drought (and is in development for summer of 2013), staving off a recreation closure, supporting the local economy and protecting native and sport fisheries." class="yampa" href="#"><img src="<?php bloginfo('template_directory'); ?>/images/map-image-yampa.png" alt=""></a>
	
</div>
	</div>
<div class="four columns ctc-sidebar omega">


<div class="sidebar-entry">
  <a href="http://www.changethecourse.us/" onclick="window.open(this.href);return false;"> <img src="<?php bloginfo('template_directory'); ?>/images/ctc-campaign.jpg" alt=""></a> 
</div>

<div class="sidebar-entry">
   <a href="http://environment.nationalgeographic.com/environment/freshwater/" onclick="window.open(this.href);return false;"><img src="<?php bloginfo('template_directory'); ?>/images/ctc-nat-geo.jpg" alt=""> </a>
</div>


<h2>selected campaign stories, video and images</h2>

<?php $posts = get_field('included_assets');
 
if( $posts ): ?>
	<?php foreach( $posts as $post_object): ?>
 <div class="row">


<div class="asset-entry"><div class="asset-image">
    <p><a onclick="window.open(this.href);return false;" href="<?php the_field('file_url', $post_object->ID); ?>"><img src="<?php the_field('asset_image', $post_object->ID);?>" /></a>
    </div>
    <div class="asset-info">
    <p><?php the_field('asset_date', $post_object->ID); ?> - <a onclick="window.open(this.href);return false;" href="<?php the_field('file_url', $post_object->ID); ?>"><?php the_field('title', $post_object->ID); ?></a><br><span class="asset-source"><?php the_field('asset_source', $post_object->ID); ?></span></p>
    
    </div> </div>
	    </div>
	<?php endforeach; ?>
<?php endif;?>




</div>
</div>

<div class="clearfix"></div>
<?php get_footer(); ?>
