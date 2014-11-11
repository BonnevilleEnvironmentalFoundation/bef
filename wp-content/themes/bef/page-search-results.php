<?php
/*
Template Name: Page - Search Results
*/
?>
<?php get_header(''); ?>

	<div class="breadcrumbs sixteen columns">
		<p>
			<?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
		</p>
	</div>
<?php if (get_field('nav_menu')):?>
<div class="four columns subnav">
	<?php the_field('nav_menu'); else:?>
	<div class="four columns"> <?php echo '&nbsp;';
		endif;?> </div>
	<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
 ?>
	<div class="twelve columns">
		<?php 
  the_post_thumbnail('full');
?>
	</div>
	<div class="clearfix"></div>
	<div class="eight offset-by-four columns">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>
<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>' ); ?>
	</div>
	<?php get_sidebar();?>
	<?php 
} else { ?>
	<div class="eight columns">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>
		<?php endif;?>
		<?php wp_reset_query(); ?>	

<p class="return-to-search"><a href="<?php bloginfo('url'); ?>/solarguide/">RETURN TO SEARCH ::</a></p>
<hr>
		<?php
$states = $_GET['state'];
  ?>

  <?php if ($states) { ?>
  <h1>Search Results</h1>
  <p>For a complete description of each incentive program, click the program name and you will be directed to it's full description on the DSIREUSA.org website.</p>
  <br>
  <h4><strong><?php echo $states; ?></strong></h4>
  <br>
<!--
<h2>Federal</h2>
<p><strong><?php echo 'Corporate Tax Incentive' ?></p></strong>
<ul>
  <li><a target="_blank" href="http://dsireusa.org/incentives/incentive.cfm?Incentive_Code=US06F&re=1&ee=1">Modified Accelerated Cost-Recovery System (MACRS)</a></li>
  <li><a target="_blank" href="http://dsireusa.org/incentives/incentive.cfm?Incentive_Code=US02F&re=1&ee=1">Business Energy Investment Tax Credit (ITC)</a></li>
  </ul>
<p><strong><?php echo 'Grant Program' ?></p></strong>
<ul>
  <li><a target="_blank" href="http://dsireusa.org/incentives/incentive.cfm?Incentive_Code=US07F&re=1&ee=1">Tribal Energy Program Grant</a></li>
  </ul>
  <p><strong><?php echo 'Loan Program' ?></p></strong>
<ul>
  <li><a target="_blank" href="http://dsireusa.org/incentives/incentive.cfm?Incentive_Code=US51F&re=1&ee=1">Qualified Energy Conservation Bonds (QECBs)</a></li>
  </ul>
<h2>State</h2>
-->
  <?php } ?>

<!-- Begin Incentive Loop -->
 <?php 
  $args=array(
    'post_type' => 'incentive',
    'orderby'=>'title',
    'order'=>'ASC',
    'meta_value' => $states,
    'meta_query' => array(
array(
'key' => 'state',
'value' => $states
),
array(
'key' => 'type',
'value' => 'Corporate Deduction'
),
  ));
  query_posts($args);
?>
<?php $i=0; ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
  <?php if($i == 0) { $i++?>
<p><strong><?php echo 'Corporate Deduction' ?></p></strong>
<?php } ?>
<ul>
  <li><a target="_blank" href="<?php the_field('source_website'); ?>"><?php the_field('program_name'); ?></a></li>
  </ul>

<?php endwhile;  ?>
<?php endif; ?>
 <?php wp_reset_query(); ?>
<!-- End Incentive Loop -->

<!-- Begin Incentive Loop -->
 <?php 
  $args=array(
    'post_type' => 'incentive',
    'orderby'=>'title',
    'order'=>'ASC',
    'meta_value' => $states,
    'meta_query' => array(
array(
'key' => 'state',
'value' => $states
),
array(
'key' => 'type',
'value' => 'Corporate Exemption'
),
  ));
  query_posts($args);
?>
<?php $i=0; ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
  <?php if($i == 0) { $i++?>
<p><strong><?php echo 'Corporate Exemption' ?></p></strong>
<?php } ?>
<ul>
  <li><a target="_blank" href="<?php the_field('source_website'); ?>"><?php the_field('program_name'); ?></a></li>
  </ul>

<?php endwhile;  ?>
<?php endif; ?>
 <?php wp_reset_query(); ?>
<!-- End Incentive Loop -->

<!-- Begin Incentive Loop -->
 <?php 
  $args=array(
    'post_type' => 'incentive',
    'orderby'=>'title',
    'order'=>'ASC',
    'meta_value' => $states,
    'meta_query' => array(
array(
'key' => 'state',
'value' => $states
),
array(
'key' => 'type',
'value' => 'Corporate Tax Credit'
),
  ));
  query_posts($args);
?>
<?php $i=0; ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<?php if($i == 0) { $i++?>
<p><strong><?php echo 'Corporate Tax Credit' ?></p></strong>
<?php } ?>
<ul>
  <li><a target="_blank" href="<?php the_field('source_website'); ?>"><?php the_field('program_name'); ?></a></li>
  </ul>

<?php endwhile;  ?>
<?php endif; ?>
 <?php wp_reset_query(); ?>
<!-- End Incentive Loop -->

<!-- Begin Incentive Loop -->
 <?php 
  $args=array(
    'post_type' => 'incentive',
    'orderby'=>'title',
    'order'=>'ASC',
    'meta_value' => $states,
    'meta_query' => array(
array(
'key' => 'state',
'value' => $states
),
array(
'key' => 'type',
'value' => 'Corporate Tax Incentive'
),
  ));
  query_posts($args);
?>
<?php $i=0; ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
  <?php if($i == 0) { $i++?>
<p><strong><?php echo 'Corporate Tax Incentive' ?></p></strong>
<?php } ?>
<ul>
  <li><a target="_blank" href="<?php the_field('source_website'); ?>"><?php the_field('program_name'); ?></a></li>
  </ul>

<?php endwhile;  ?>
<?php endif; ?>
 <?php wp_reset_query(); ?>
<!-- End Incentive Loop -->

<!-- Begin Incentive Loop -->
 <?php 
  $args=array(
    'post_type' => 'incentive',
    'orderby'=>'title',
    'order'=>'ASC',
    'meta_value' => $states,
    'meta_query' => array(
array(
'key' => 'state',
'value' => $states
),
array(
'key' => 'type',
'value' => 'Grant Program'
),
  ));
  query_posts($args);
?>
<?php $i=0; ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
  <?php if($i == 0) { $i++?>
<p><strong><?php echo 'Grant Program' ?></p></strong>
<?php } ?>
<ul>
  <li><a target="_blank" href="<?php the_field('source_website'); ?>"><?php the_field('program_name'); ?></a></li>
  </ul>

<?php endwhile;  ?>
<?php endif; ?>
 <?php wp_reset_query(); ?>
<!-- End Incentive Loop -->

<!-- Begin Incentive Loop -->
 <?php 
  $args=array(
    'post_type' => 'incentive',
    'orderby'=>'title',
    'order'=>'ASC',
    'meta_value' => $states,
    'meta_query' => array(
array(
'key' => 'state',
'value' => $states
),
array(
'key' => 'type',
'value' => 'Loan Program'
),
  ));
  query_posts($args);
?>
<?php $i=0; ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
  <?php if($i == 0) { $i++?>
<p><strong><?php echo 'Loan Program' ?></p></strong>
<?php } ?>
<ul>
  <li><a target="_blank" href="<?php the_field('source_website'); ?>"><?php the_field('program_name'); ?></a></li>
  </ul>

<?php endwhile;  ?>
<?php endif; ?>
 <?php wp_reset_query(); ?>
<!-- End Incentive Loop -->

<!-- Begin Incentive Loop -->
 <?php 
  $args=array(
    'post_type' => 'incentive',
    'orderby'=>'title',
    'order'=>'ASC',
    'meta_value' => $states,
    'meta_query' => array(
array(
'key' => 'state',
'value' => $states
),
array(
'key' => 'type',
'value' => 'Performance-Based Incentive'
),
  ));
  query_posts($args);
?>
<?php $i=0; ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
  <?php if($i == 0) { $i++?>
<p><strong><?php echo 'Performance-Based Incentive' ?></p></strong>
<?php } ?>
<ul>
  <li><a target="_blank" href="<?php the_field('source_website'); ?>"><?php the_field('program_name'); ?></a></li>
  </ul>

<?php endwhile;  ?>
<?php endif; ?>
 <?php wp_reset_query(); ?>
<!-- End Incentive Loop -->

<!-- Begin Incentive Loop -->
<?php 
  $args=array(
    'post_type' => 'incentive',
    'orderby'=>'title',
    'order'=>'ASC',
    'meta_value' => $states,
    'meta_query' => array(
array(
'key' => 'state',
'value' => $states
),
array(
'key' => 'type',
'value' => 'Personal Tax Credit'
),
  ));
  query_posts($args);
?>
<?php $i=0; ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<?php if($i == 0) { $i++?>
<p><strong><?php echo 'Personal Tax Credit' ?></p></strong>
<?php } ?>
<ul>
  <li><a target="_blank" href="<?php the_field('source_website'); ?>"><?php the_field('program_name'); ?></a></li>
  </ul>

<?php endwhile;  ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
<!-- End Incentive Loop -->

<!-- Begin Incentive Loop -->
 <?php 
  $args=array(
    'post_type' => 'incentive',
    'orderby'=>'title',
    'order'=>'ASC',
    'meta_value' => $states,
    'meta_query' => array(
array(
'key' => 'state',
'value' => $states
),
array(
'key' => 'type',
'value' => 'Property Tax Incentive'
),
  ));
  query_posts($args);
?>
<?php $i=0; ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
  <?php if($i == 0) { $i++?>
<p><strong><?php echo 'Property Tax Incentive' ?></p></strong>
<?php } ?>
<ul>
  <li><a target="_blank" href="<?php the_field('source_website'); ?>"><?php the_field('program_name'); ?></a></li>
  </ul>

<?php endwhile;  ?>
<?php endif; ?>
 <?php wp_reset_query(); ?>
<!-- End Incentive Loop -->

<!-- Begin Incentive Loop -->
 <?php 
  $args=array(
    'post_type' => 'incentive',
    'orderby'=>'title',
    'order'=>'ASC',
    'meta_value' => $states,
    'meta_query' => array(
array(
'key' => 'state',
'value' => $states
),
array(
'key' => 'type',
'value' => 'Sales Tax Incentive'
),
  ));
  query_posts($args);
?>
<?php $i=0; ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
  <?php if($i == 0) { $i++?>
<p><strong><?php echo 'Sales Tax Incentive' ?></p></strong>
<?php } ?>
<ul>
  <li><a target="_blank" href="<?php the_field('source_website'); ?>"><?php the_field('program_name'); ?></a></li>
  </ul>

<?php endwhile;  ?>
<?php endif; ?>
 <?php wp_reset_query(); ?>
<!-- End Incentive Loop -->

<!-- Begin Incentive Loop -->
 <?php 
  $args=array(
    'post_type' => 'incentive',
    'orderby'=>'title',
    'order'=>'ASC',
    'meta_value' => $states,
    'meta_query' => array(
array(
'key' => 'state',
'value' => $states
),
array(
'key' => 'type',
'value' => 'State Bond Program'
),
  ));
  query_posts($args);
?>
<?php $i=0; ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
  <?php if($i == 0) { $i++?>
<p><strong><?php echo 'State Bond Program' ?></p></strong>
<?php } ?>
<ul>
  <li><a target="_blank" href="<?php the_field('source_website'); ?>"><?php the_field('program_name'); ?></a></li>
  </ul>

<?php endwhile;  ?>
<?php endif; ?>
 <?php wp_reset_query(); ?>
<!-- End Incentive Loop -->

<!-- Begin Incentive Loop -->
 <?php 
  $args=array(
    'post_type' => 'incentive',
    'orderby'=>'title',
    'order'=>'ASC',
    'meta_value' => $states,
    'meta_query' => array(
array(
'key' => 'state',
'value' => $states
),
array(
'key' => 'type',
'value' => 'State Grant Program'
),
  ));
  query_posts($args);
?>
<?php $i=0; ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
  <?php if($i == 0) { $i++?>
<p><strong><?php echo 'State Grant Program' ?></p></strong>
<?php } ?>
<ul>
  <li><a target="_blank" href="<?php the_field('source_website'); ?>"><?php the_field('program_name'); ?></a></li>
  </ul>

<?php endwhile;  ?>
<?php endif; ?>
 <?php wp_reset_query(); ?>
<!-- End Incentive Loop -->


<!-- Begin Incentive Loop -->
  <?php 
  $args=array(
    'post_type' => 'incentive',
    'orderby'=>'title',
    'order'=>'ASC',
    'meta_value' => $states,
    'meta_query' => array(
array(
'key' => 'state',
'value' => $states
),
array(
'key' => 'type',
'value' => 'State Loan Program'
),
  ));
  query_posts($args);
?>
<?php $i=0; ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
  <?php if($i == 0) { $i++?>
<p><strong><?php echo 'State Loan Program'; ?></p></strong>
<?php } ?>

<ul>
  <li><a target="_blank" href="<?php the_field('source_website'); ?>"><?php the_field('program_name'); ?></a></li>
  </ul>

<?php endwhile;  ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
<!-- End Incentive Loop -->

<!-- Begin Incentive Loop -->
 <?php 
  $args=array(
    'post_type' => 'incentive',
    'orderby'=>'title',
    'order'=>'ASC',
    'meta_value' => $states,
    'meta_query' => array(
array(
'key' => 'state',
'value' => $states
),
array(
'key' => 'type',
'value' => 'State Rebate Program'
),
  ));
  query_posts($args);
?>
<?php $i=0; ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
  <?php if($i == 0) { $i++?>
<p><strong><?php echo 'State Rebate Program' ?></p></strong>
<?php } ?>
<ul>
  <li><a target="_blank" href="<?php the_field('source_website'); ?>"><?php the_field('program_name'); ?></a></li>
  </ul>

<?php endwhile;  ?>
<?php endif; ?>
 <?php wp_reset_query(); ?>
<!-- End Incentive Loop -->

 <!-- end main loops -->

<?php wp_reset_query(); ?>
<?php edit_post_link( __( 'Edit Page'), '<span class="edit-link">', '</span>' ); ?>
	</div>
	<?php get_sidebar('partner');?>
	<?php }?>
	<?php get_footer(); ?>
