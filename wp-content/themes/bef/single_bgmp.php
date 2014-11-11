<?php get_header('solutions'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container main">
	<div class="breadcrumbs sixteen columns">
		<p>
			<?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
		</p>
	</div>
	<div class="four columns subnav">
	BGMP
		<?php wp_nav_menu( array ('menu' => 'REC', 'container' => 'nav','menu_class' => '','depth' => 0) ); ?>
		<ul class="project-profile-callout">
			<li>
				<p><strong>LOCATION:</strong></p>
				<p>
					<?php the_field('location');?>
				</p>
			</li>
			<li>
				<p><strong>Project Owner & Developer:</strong></p>
				<p>
					<?php the_field('project_developer');?>
				</p>
			</li>
			<li>
				<p><strong>Online Date:</strong></p>
				<p>
					<?php the_field('online_date');?>
				</p>
			</li>
			<li>
				<p><strong>Total Capacity:</strong></p>
				<p>
					<?php the_field('total_capacity');?>
				</p>
			</li>
			<li>
				<p><strong>Product Certificate Standard:</strong></p>
				<p>
					<?php the_field('product_certificate_standard');?>
				</p>
			</li>
			<li>
				<p><strong>Estimated Annual Energy Generation:</strong></p>
				<p>
					<?php the_field('estimated_annual');?>
				</p>
			</li>
			
		</ul>
	</div>
	<div class="eight columns">
<?php wp_nav_menu( array ('menu' => 'REC Project Portfolio', 'container' => '','menu_class' => 'tab-nav','depth' => 0) ); ?>
	<?php the_field('project_information');?>
	</div>
	<?php endwhile; ?>
	<?php endif;?>
	<?php get_sidebar();?>
	<?php get_footer(); ?>
	<div class="clearfix"></div>
</div>
