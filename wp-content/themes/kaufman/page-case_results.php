<?php 
	
	/* Template Name: Case Results */
	
	get_header(); ?>

<?php get_template_part( 'internal', 'banner' );?>

<section class="start_here_track"> <!-- finishes in footer template -->

<?php get_template_part('starthere','button');?>


<div class="internal_container">
	
	<div class="inner_container">
		
		<div class="internal_content">
			
			
			<div class="internal_case_results_wrapper">
				
				<!-- css grid coming soon :) -->
				
				<div class="case_col">
					
					
					<?php $posts = get_field('results_feed_column_one');
					
					if( $posts ): ?>
					   
					    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					        <?php setup_postdata($post); ?>
					        
					        
					        	<div class="internal_single_case">
						
											<span class="case_amount"><?php the_field( 'single_result_amount' ); ?></span>
						
											<span class="case_header"><?php the_field( 'single_result_title' ); ?></span><!-- case_header -->
						
											<svg id="caseresults_gold_line" viewBox="0 0 136.39 11.05">
				
							
												<polyline class="red_line_intro_path" points="135.79 10.24 123.59 1.25 112.49 9.45 101.39 1.25 90.29 9.45 79.29 1.25 68.19 9.45 57.09 1.25 45.99 9.45 34.89 1.25 23.89 9.45 12.79 1.25 0.59 10.24"/>
					
											</svg><!-- red_line_intro -->
						
											<span class="case_description"><?php the_content();?></span><!-- case_description -->
						
											<a class="case_read_more" href="<?php the_permalink();?>">Read More</a><!-- case_read_more -->
						
									</div><!-- internal_single_case -->
					    
					   
					    <?php endforeach; ?>
					    
					    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>
					
				</div><!-- case_col -->
					
					
					
				<div class="case_col">
					
					
					<?php $posts = get_field('results_feed_column_two');
					
					if( $posts ): ?>
					   
					    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					        <?php setup_postdata($post); ?>
					        
					        
					        	<div class="internal_single_case">
						
											<span class="case_amount"><?php the_field( 'single_result_amount' ); ?></span>
						
											<span class="case_header"><?php the_field( 'single_result_title' ); ?></span><!-- case_header -->
						
											<svg id="caseresults_gold_line" viewBox="0 0 136.39 11.05">
				
							
												<polyline class="red_line_intro_path" points="135.79 10.24 123.59 1.25 112.49 9.45 101.39 1.25 90.29 9.45 79.29 1.25 68.19 9.45 57.09 1.25 45.99 9.45 34.89 1.25 23.89 9.45 12.79 1.25 0.59 10.24"/>
					
											</svg><!-- red_line_intro -->
						
											<span class="case_description"><?php the_content();?></span><!-- case_description -->
						
											<a class="case_read_more" href="<?php the_permalink();?>">Read More</a><!-- case_read_more -->
						
									</div><!-- internal_single_case -->
					    
					   
					    <?php endforeach; ?>
					    
					    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>
					
				</div><!-- case_col -->
					
			
				
			</div><!-- internal_case_results_wrapper -->
			
			
		</div><!-- internal_content -->
		
		
		<?php get_sidebar(); ?>
		
		
	</div><!-- inner_container -->
	
	
</div><!-- internal_container -->



<?php get_footer(); ?>
