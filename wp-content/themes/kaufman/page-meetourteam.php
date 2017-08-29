<?php 
	
	/* Template Name: Meet Our Team */
	
	get_header(); ?>
	


	<section class="start_here_track"> <!-- finishes in footer template -->
	
	<?php get_template_part('starthere','button');?>
	
	<div class="non_banner_layout centered_layout">
	
	<div class="internal_container">
		
		<?php get_template_part('mobile','fixedheader');?>
		
		<div class="inner_container">
			
			<div class="internal_content">
				
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
				
				<div class="team_wrapper">
					
				
					
					<?php if(get_field('team_directory')): ?>
					 
						<?php while(has_sub_field('team_directory')): ?>
					 
							<div class="team_group">
							
							<span class="team_group_title"><?php the_sub_field( 'group_title' ); ?></span><!-- team_group_title -->
							
							
							<?php if(get_sub_field('person')): ?>
							 
								<?php while(has_sub_field('person')): ?>
							 
									
							    
								<?php $post_object = get_sub_field( 'single_profile' ); ?>
				
									
									
									<?php $post = $post_object; ?>
									
									<?php setup_postdata( $post ); ?> 
									
									
									
											<a href="<?php the_permalink();?>">
						
												<div class="single_profile">
												
													<div class="img_wrapper">
														
														<div class="img_overlay"></div><!-- img_overlay -->
														
														
														<?php $profile_image = get_field( 'profile_image' ); ?>
														
														<img src="<?php echo $profile_image['url']; ?>" alt="<?php echo $profile_image['alt']; ?>" />
													
													</div><!-- img_wrapper -->
													
													<div class="profile_title_wrapper">
														
														<span class="profile_name"><?php the_title();?></span><!-- profile_name -->
														
														<span class="profile_title"><?php the_field( 'profile_title' ); ?></span><!-- profile_title -->
														
														<svg id="single_attr_arrow" viewBox="0 0 7.6 40.7">
												
															<line class="arrow_line" x1="3.8" x2="3.8" y2="36.9"/>
												
															<polygon class="arrow_tri" points="3.8 36 7.6 36 5.7 38.4 3.8 40.7 1.9 38.4 0 36 3.8 36"/>
												
														</svg><!-- start_arrow -->
														
														
													</div><!-- profile_title_wrapper -->
												
												
												</div><!-- single_profile -->
						
										</a>
									
									
									<?php wp_reset_postdata(); ?>
									

								
								<?php endwhile; ?>
							 
							<?php endif; ?>
							
							
							</div><!-- team group -->
							
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>

										
					
				</div><!-- team_wrapper -->
				
				
			</div><!-- internal_content -->
			
			
			<?php get_sidebar(); ?>
			
			
		</div><!-- inner_container -->
		
		
	</div><!-- internal_container -->

	</div><!-- centered_layout -->

<?php //get_template_part( 'loop', 'index' );?>








<?php get_footer(); ?>
