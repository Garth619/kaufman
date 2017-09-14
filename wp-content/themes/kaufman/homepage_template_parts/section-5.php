<section class="section_five">
	
	
	<div class="mobile_header_wrapper">
			
		<span class="mobile_header"><?php the_field( 'our_attorneys_title' ); ?></span><!-- mobile_header -->
			
		<div class="mobile_line_wrapper">
			
			<span class="mobile_line"></span><!-- mobile_line -->
		
			<span class="mobile_square"></span><!-- mobile_line -->
			
			
		</div><!-- mobile_line_wrapper -->
		
	</div><!-- mobile_header -->
	
	<div class="section_five_inner_wrapper">
		
		<div class="featured_attorney">
			
			<div class="featured_att_image">
				
				<?php $feat_att_img = get_field( 'profile_image', 49); ?>
				
				<img src="<?php echo $feat_att_img['url']; ?>" alt="<?php echo $feat_att_img['alt']; ?>" /><!-- featured_att_image -->
				
			</div><!-- featured_att_image-->
			
			
			<div class="featured_attorney_content">
				
				
				<div class="founding_wrapper">
				
					<span class="founding_attorney"><?php the_field( 'founding_attorney_title' ); ?></span><!-- founding_attorney -->
					
					<svg id="founding_red_line" viewBox="0 0 52.79 8.27">
		
						<polyline class="red_line_two" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
			
					</svg><!-- red_line_form -->
					
				</div><!-- founding_wrapper -->
				
				
				<?php $feat_att_title = get_the_title(49);?>
											
				<span class="name"><?php echo $feat_att_title ;?></span><!-- name -->
				    
											
				<span class="att_content"><?php the_field( 'featured_att_description' ); ?></span><!-- att_content -->
				
				<?php $feat_att_link = get_the_permalink(49);?>
				
				<a class="view_button" href="<?php echo $feat_att_link ;?>">
					
					<span class="view_text"><?php the_field( 'view_attorney_button_verbiage' ); ?></span> 
					
					<span class="view_arrow">
					
						<img src="<?php bloginfo('template_directory');?>/images/white-arrow-r.png"/>
						
					</span>
					
				</a><!-- view_button -->
				
			</div><!-- featured_attorney_content -->
			
			
			
		</div><!-- featured_attorney -->
		
		<div class="our_attorneys_wrapper">
			
			
			<span class="our_att_title">Our Attorneys</span><!-- our_att_title -->
		
			<span class="our_att_line"></span><!-- our_att_line -->
			
		
		</div><!-- our_attorneys_title -->
		
		<div class="att_slideshow_wrapper">
			
			
			<div class="att_slideshow">
				
				<div class="att_buttons">
				
					<div class="spacers "></div>
					
					<div class="spacers"></div>
					
					<div class="spacers"></div>
					
					<div class="spacers"></div>
				
					<div class="spacers att_next att_single_button">
					
						<img src="<?php bloginfo('template_directory');?>/images/white-arrow-r.png"/>
					
					</div><!-- att_single_button -->
				
				</div><!-- att_buttons -->
				
				
				
				
				
			<?php $attorneys_slideshow = get_field( 'attorneys_slideshow' ); ?>
				
				<?php if ( $attorneys_slideshow ): ?>
				
					<?php foreach ( $attorneys_slideshow as $post ):  ?>
					
					<?php setup_postdata ( $post ); ?>
					
					
					<a class="att_single_slide_link" href="<?php the_permalink();?>">
				
					<div class="att_single_slide">
					
						<div class="att_image_wrapper">
						
							<?php $profile_image = get_field( 'profile_image' ); ?>
														
							<img src="<?php echo $profile_image['url']; ?>" alt="<?php echo $profile_image['alt']; ?>" />
						
							<div class="att_overlay">
							
								<div class="view_att_wrapper">
							
									<span class="view_att_link">View Attorney Profile</span><!-- view_att_link -->
							
									<svg id="att_arrow" viewBox="0 0 7.6 40.7">
						
										<line class="arrow_line" x1="3.8" x2="3.8" y2="36.9"/>
					
										<polygon class="arrow_tri" points="3.8 36 7.6 36 5.7 38.4 3.8 40.7 1.9 38.4 0 36 3.8 36"/>
				
									</svg><!-- start_arrow -->
						
								</div><!-- view_att_wrapper -->
							
						</div><!-- att_overlay -->
						
					</div><!-- att_image_wrapper -->
					
					<div class="att_title_wrapper">
						
						<svg id="att_red_line" viewBox="0 0 52.79 8.27">
		
							<polyline class="red_line_two" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
			
						</svg><!-- red_line_form -->
						
						<span><?php the_title();?></span>
					
					</div><!-- att_title_wrapper -->
					
					
				</div><!-- att_single_slide -->
				
				</a><!-- att_single_slide_link -->
					
					
					
					
					
					
					<?php endforeach; ?>
					
					<?php wp_reset_postdata(); ?>
					
				<?php endif; ?>
				
			
				
			</div><!-- att_slideshow -->

			
		</div><!-- att_slideshow_wrapper -->
		
		
		<div class="att_buttons_mobile_wrapper">
				
				
				<div class="att_mobile_back att_mobile_buttons">
					
					<img src="<?php bloginfo('template_directory');?>/images/white-arrow-l.png"/>
					
					<span class="prev">Previous</span><!-- prev -->
					
				</div><!-- att_mobile_back -->
				
				<div class="att_mobile_next att_mobile_buttons">
					
					<span class="next">Next</span><!-- prev -->
					
					<img src="<?php bloginfo('template_directory');?>/images/white-arrow-r.png"/>
					
				</div><!-- att_mobile_back -->
				
			</div><!-- att_buttons_mobile -->
		
	</div><!-- section_five_inner_wrapper -->
	
	
</section><!-- section_five -->