<?php 
	
	/* Template Name: Testimonials */
	
	get_header(); ?>

<?php get_template_part( 'internal', 'banner' );?>

<section class="start_here_track"> <!-- finishes in footer template -->

<?php get_template_part('starthere','button');?>


<div class="internal_container">
	
	<div class="inner_container">
		
		<div class="internal_content content">
			
			
			<div class="internal_testi_wrapper">
				
				
				
				<?php if(get_field('testimonials')): ?>
				 
					<?php while(has_sub_field('testimonials')): ?>
				 
				
					<div class="internal_single_testi">
					
						<h2><?php the_sub_field( 'testimonial_header' ); ?></h2>
					
						<?php the_sub_field( 'testimonial_content' ); ?>

						<span class="internal_testi_name"><?php the_sub_field( 'name' ); ?> <?php the_sub_field( 'monthyear' ); ?></span><!-- internal_testi_name -->
					
					</div><!-- internal_single_testi -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				

				
			</div><!-- internal_testi_wrapper -->
			
			
		</div><!-- internal_content -->
		
		
		<?php get_sidebar(); ?>
		
		
	</div><!-- inner_container -->
	
	
</div><!-- internal_container -->



<?php get_footer(); ?>
