<section class="section_four">
	
	<div class="why_choose_wrapper">
		
		<div class="why_choose_content_wrapper">
			
			
			
			<svg id="why_choose_gold_twolines" viewBox="0 0 51.9 10.39"><defs><style>.cls-1{fill:none;}</style></defs><title>new</title>
			
				<polyline transform="translate(0,3)" class="cls-1" points="0 10.39 8.7 4 17.3 10.39 26 4 34.7 10.39 43.3 4 51.9 10.39"/>
				<polyline class="cls-1" points="0 6.39 8.7 0 17.3 6.39 26 0 34.7 6.39 43.3 0 51.9 6.39"/>
			
			</svg>
			
			<span class="why_choose_header"><?php the_field( 'why_choose_title' ); ?></span><!-- why_choose_header -->

			
			<div class="why_choose_slideshow">
				
				
				
				<?php if(get_field('why_choose_slider')): ?>
				 
					<?php while(has_sub_field('why_choose_slider')): ?>
				 
						
						
						<div class="single_slide">
				
							<div class="slide_count_wrapper">
					
								<span>#<?php the_sub_field( 'number' ); ?></span>
					
							</div><!-- slide_count_wrapper -->
				
							<span class="slide_title"><?php the_sub_field( 'why_chose_title' ); ?></span><!-- slide_title -->
				
							<span class="slide_content"><?php the_sub_field( 'why_chose_content' ); ?></span>
				
						</div><!-- single_slide -->
						
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- why_choose_slideshow -->
			
			<div class="why_choose_buttons">
				
				<div class="why_choose_back single_button">
					
					<img src="<?php bloginfo('template_directory');?>/images/white-arrow-l.png"/>
					
				</div><!-- why_choose_back -->
				
				<div class="why_choose_next single_button">
					
					<img src="<?php bloginfo('template_directory');?>/images/white-arrow-r.png"/>
					
				</div><!-- why_choose_next -->
				
			</div><!-- why_choose_buttons -->
			
		</div><!-- why_choose_content_wrapper -->
		
		<div class="why_choose_bg_wrapper">
			
			
			<div class="why_choose_bg_slideshow">
				
				
				<?php if(get_field('why_choose_slider')): ?>
			 
					<?php while(has_sub_field('why_choose_slider')): ?>
			 
					
						<div class="bg_slide <?php the_sub_field( 'why_choose_class' ); ?>">
				
							<img src="<?php the_sub_field( 'desktop_image' ); ?>" />
				
						</div><!-- bg_slide -->
					
					
			    <?php endwhile; ?>
			 
				<?php endif; ?>

			
			
			</div><!-- why_choose_bg_slideshow -->
			
		</div><!-- why_choose_bg_wrapper -->
		
<!-- 		<div style="clear:both"></div> -->
		
	</div><!-- why_choose_wrapper -->
	
	
	
	<div class="section_four_lower">
		
		<div class="section_four_lower_wrapper">
			
			<span class="large_header"><?php the_field( 'testimonial_titles' ); ?></span><!-- large_header -->
			
			<svg id="section_four_gold_threelines" overflow="visible" data-name="section three gold twolines" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 190.06 86"><defs><style>.cls-1{fill:none;}</style></defs>
			
			<polyline id="line_one" points="145.2 9 133 0 121.9 8.2 110.8 0 99.7 8.2 88.7 0 77.6 8.2 66.5 0 55.4 8.2 44.3 0 33.3 8.2 22.2 0 10 9"/>
			<polyline id="line_two" points="190.06 18.9 177.86 9.9 166.76 18.1 155.66 9.9 144.56 18.1 133.56 9.9 122.46 18.1 111.36 9.9 100.26 18.1 89.16 9.9 78.16 18.1 67.06 9.9 54.86 18.9"/>
			<polyline id="line_three" points="168.2 29 156 20 144.9 28.2 133.8 20 122.7 28.2 111.7 20 100.6 28.2 89.5 20 78.4 28.2 67.3 20 56.3 28.2 45.2 20 33 29"/>
		
			</svg>
			
			<span class="sub_header"><?php the_field( 'testimonials_sub_titles' ); ?></span><!-- sub_header -->
			
			<div class="testi_wrapper">
				
				
				
				<?php if(get_field('testimonials', 21)): ?>
				 
					<?php while(has_sub_field('testimonials', 21)): ?>
				 
						<div class="testi_col">
					
							<span class="testi_excerpt"><?php the_sub_field( 'testimonial_header' ); ?></span><!-- testi_excerpt -->
					
							<svg id="testi_red_line_one" class="testi_red_line" viewBox="0 0 52.79 8.27">
		
								<polyline class="red_line_two" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
			
							</svg><!-- red_line_form -->
					
					<div class="testi_content">
						
						
						<?php $acf_testi_content = get_sub_field( 'testimonial_content' ); ?>
						<?php echo wp_trim_words( $acf_testi_content, 50, '<a class="testi_read_more" href="'. get_permalink( 21 ) . '">...</a>' );?>
						
						
					</div><!-- testi_content -->
					
					<span class="name"><?php the_sub_field( 'name' ); ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?php the_sub_field( 'monthyear' ); ?></span>
					
				</div><!-- test_col -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
				
				
								
				<div class="testi_buttons">
					
					<div class="testi_back single_button">
						
						<img src="<?php bloginfo('template_directory');?>/images/white-arrow-l.png"/>
						
						<span>Previous</span>
						
					</div><!-- testi_back -->
					
					<div class="testi_next single_button">
						
						
						
						<span>Next</span>
						
						<img src="<?php bloginfo('template_directory');?>/images/white-arrow-r.png"/>
						
					</div><!-- testi_next -->
					
				</div><!-- testi_buttons -->
				
			</div><!-- testi_wrapper -->
			
		</div><!-- section_four_lower_wrapper -->
		
	</div><!-- section_lower_content -->
	
	
	
	
</section><!-- section_four -->