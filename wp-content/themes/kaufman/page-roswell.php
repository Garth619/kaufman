<?php 
	
	/* Template Name: Roswell Subfolder */
	
	get_header(); ?>
	


<section class="start_here_track"> <!-- finishes in footer template -->

<?php get_template_part('starthere','button');?>

<div class="non_banner_layout">

<div class="internal_container">
	
	<?php get_template_part('mobile','fixedheader');?>
	
	
	
	<div class="inner_container">
		
		<div class="internal_content content">
			
			<div class="default_header_wrapper">
			
				<h1 class="intro"><?php the_title();?></h1>
				
				<svg id="default_page_gold_twolines" viewBox="0 0 158.39 21.46">
					
					<polyline transform="translate(24 0)" class="red_line_one" points="135.79 20.66 123.59 11.66 112.49 19.86 101.39 11.66 90.29 19.86 79.29 11.66 68.19 19.86 57.09 11.66 45.99 19.86 34.89 11.66 23.89 19.86 12.79 11.66 0.59 20.66"/>
					
					<polyline transform="translate(-20 -2)" class="red_line_two" points="157.79 10.24 145.59 1.25 134.49 9.45 123.39 1.25 112.29 9.45 101.29 1.25 90.19 9.45 79.09 1.25 67.99 9.45 56.89 1.25 45.89 9.45 34.79 1.25 22.59 10.24"/>
					
				</svg><!-- inetrnal_gold_twolines -->
				
				<svg id="default_red_twolines" viewBox="0 0 158.39 21.46">
					
					<polyline class="red_line_one" points="135.79 20.66 123.59 11.66 112.49 19.86 101.39 11.66 90.29 19.86 79.29 11.66 68.19 19.86 57.09 11.66 45.99 19.86 34.89 11.66 23.89 19.86 12.79 11.66 0.59 20.66"/>
					<polyline class="red_line_two" points="157.79 10.24 145.59 1.25 134.49 9.45 123.39 1.25 112.29 9.45 101.29 1.25 90.19 9.45 79.09 1.25 67.99 9.45 56.89 1.25 45.89 9.45 34.79 1.25 22.59 10.24"/>
					
				</svg><!-- internal_red_twolines -->
				
				</div><!-- default_header_wrapper -->
							
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

					
					<?php $thecontent = get_the_content();
						
						if(empty($thecontent)):?>
						
						<p>Please Add Content</p>
					
					<?php else: ?>
					
						<?php the_content();?>
					
						<?php endif;?>
					
					
					<?php endwhile; // end of loop ?> 
				
				<?php endif; ?>

			
			
		</div><!-- internal_content -->
		
		
		<?php get_template_part('sidebar','subfolder'); ?>
		
		
	</div><!-- inner_container -->
	
	
</div><!-- internal_container -->


</div><!-- edgeless_layout -->




<?php get_footer(); ?>
