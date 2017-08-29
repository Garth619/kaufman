<?php 
	
	/* Template Name: Testimonials */
	
	get_header(); ?>

<?php get_template_part( 'internal', 'banner' );?>

<section class="start_here_track"> <!-- finishes in footer template -->

<?php get_template_part('starthere','button');?>


<div class="internal_container">
	
	<div class="inner_container">
		
		<div class="internal_content content">
			
			
			Coming Shortly
			
			<?php //get_template_part( 'loop', 'index' );?>
			
			
		</div><!-- internal_content -->
		
		
		<?php get_sidebar(); ?>
		
		
	</div><!-- inner_container -->
	
	
</div><!-- internal_container -->



<?php get_footer(); ?>
