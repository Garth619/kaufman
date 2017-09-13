<div class="mobile_fixed_menu_wrapper">
	
	<div class="fixed_request">
		
		<a class="large_header" href="tel:(678) 712-1115">(404) 355-4000</a><!-- large_header -->
		
		<span class="small_header">Call For a <strong>Free</strong> Consultation</span><!-- small_header -->
		
	</div><!-- fixed_request -->
	
	<div class="mobile_fixed_start_here">
		
		<div class="start_content">
			
			<span>Start Here</span>
		
			<svg id="mobile_fixed_start_now" viewBox="0 0 7.6 40.7">
						
				<line class="arrow_line" x1="3.8" x2="3.8" y2="36.9"/>
					
				<polygon class="arrow_tri" points="3.8 36 7.6 36 5.7 38.4 3.8 40.7 1.9 38.4 0 36 3.8 36"/>
				
			</svg><!-- start_arrow -->
			
		</div><!-- start_content -->
		
		<div class="close_content">
			
			<span>Close&nbsp;X</span>
			
		</div><!-- close_content -->
		
	</div><!-- mobile_fixed_start_here -->
	
</div><!-- mobile_fixed_menu_wrapper -->

<div class="intro_form_wrapper">
		
		
		<div class="mobile_scroll_menu">
		
		
			<div class="form_container">
				
				<div class="first_step_wrapper">
			
				<span class="form_parts">1 of 2</span><!-- form_parts -->
			
				<svg id="red_line_form" viewBox="0 0 52.79 8.27">
			
					<polyline class="red_line_two" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				
				</svg><!-- red_line_form -->
			
				<span class="injury_title">What type of injury have you suffered?</span><!-- injury_title -->
				
				
				
				
				<div id="my_select" class="select_wrapper_update">
					
					<div class="select_parent">
						
						<span id="my_select_text">Select an Injury</span>
						
				</div><!-- select_parent -->
					
					
				<ul class="select_option_list">
					
					<li class="select_option">Select an Injury</li><!-- select_option -->		
					
										
					
					<?php if(get_field('smart_form_drop_down_options','option')): ?>
						 
							<?php while(has_sub_field('smart_form_drop_down_options','option')): ?>
						 
								<?php $post_object = get_sub_field( 'new_option' ); ?>
								
								
										<?php $post = $post_object; ?>
										
											<?php setup_postdata( $post ); ?> 
									
											
											
												<?php if(get_field( 'practice_areas_override_title')):?>
												
												
												
												<li class="select_option"><?php the_field( 'practice_areas_override_title');?></li><!-- select_option -->
												
												<?php else:?>
												
												<li class="select_option"><?php the_title();?></li><!-- select_option -->
												
												
												<?php endif;?>
											
												
								
								
											<?php wp_reset_postdata(); ?>
										
									

										<?php endwhile; ?>
						 
									<?php endif; ?>
									
								<li class="select_option">Other Personal Injury</li><!-- select_option -->

					
					</ul>
					
				</div><!-- select_wrapper_two -->
				
				
			
				
				</div><!-- first_step_wrapper -->
				
				<div class="intro_form">
					
					<span class="intro_request">Request your free consultation</span><!-- intro_request -->
			
					<span class="required_intro">*All Fields Required</span><!-- required_intro -->
					
					<?php gravity_form(2, false, false, false, '', true, 1223); ?>
					
					
					<div class="step_one_back_wrapper">
					
						<svg id="back_arrow" viewBox="0 0 7.6 40.7">
							
							<line class="arrow_line" x1="3.8" x2="3.8" y2="36.9"/>
						
							<polygon class="arrow_tri" points="3.8 36 7.6 36 5.7 38.4 3.8 40.7 1.9 38.4 0 36 3.8 36"/>
					
						</svg><!-- start_arrow -->
					
						<span class="step_one_back">Back</span><!-- step_one_back -->
					
					</div><!-- step_one_back_wrapper -->
					
				</div><!-- intro_form_wrapper -->
				
			</div><!-- form_container -->
		
		</div><!-- mobile_scroll_menu -->
		
	</div><!-- intro_form_wrapper -->