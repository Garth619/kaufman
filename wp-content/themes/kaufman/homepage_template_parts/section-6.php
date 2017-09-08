<section class="section_six">
	
	<div class="inner_section_six">
		
		<div class="pa_sidebar">
			
			<svg id="red_lines_pa" viewBox="0 0 52.79 8.27">
				
				<polyline transform="translate(0, 0)" class="red_line_three" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				<polyline transform="translate(0, 6)" class="red_line_two" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				<polyline transform="translate(0, 12)" class="red_line_one" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				
			</svg><!-- red_line_form -->
			
			<span class="large_header"><strong>Areas</strong><br/> of Practice</span>
			
			
			
			
			
			<?php if(get_field('practice_area_sidebar_home')): ?>
			 
				<ul>
				
				<?php while(has_sub_field('practice_area_sidebar_home')): ?>
			 
					
			    
				
				
					<?php $post_object = get_sub_field( 'practice_area_home' ); ?>
		
						<?php if ( $post_object ): ?>
			
			
							<?php $post = $post_object; ?>
			
							<?php setup_postdata( $post ); ?> 
				
				
								<li>
				
									<a href="<?php the_permalink();?>">
					
										
										<?php if(get_sub_field('practice_area_override')):?>
										
											<span><?php the_sub_field( 'practice_area_override' ); ?></span>
											
											<?php else:?>
											
											<span><?php the_title(); ?></span>
											
										
										<?php endif;?>
					
										<svg id="list_item_white_line" viewBox="0 0 52.79 8.27">
		
											<polyline class="red_line_two" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
			
										</svg><!-- red_line_form -->
					
					
									</a>
				
								</li>
			
							
							<?php wp_reset_postdata(); ?>
						
						
						<?php endif; ?>
					
				
				
				
				
				
				<?php endwhile; ?>
				
				</ul>
			 
			<?php endif; ?>
			
			
			
			
						
		</div><!-- pa_sidebar -->
		
		<div class="pa_content content">
			
		<p>
				
				
				<span class="first_letter"><span>A</span></span>t Kaufman Law, P.C., we understand that our clients are not always able to come to our office after 				they have been the victim of a serious injury. If you are in this predicament, we are willing to come 				see you in the hospital or at your home in order to get a jumpstart on your case. When we work with you, our Atlanta catastrophic injury attorneys will utilize our experience, resources, and passion for justice to help you secure the most favorable outcome possible. We will not hesitate to go to battle for you in the courtroom, and we will ensure your rights are protected against any insurance company, business or corporation. Rest-assured that in working with our firm, we will ensure your legal rights are protected so you can focus on moving forward.</p>

			<blockquote>MAKING A DIFFERENCE IN EVERY CLIENT'S&nbsp;LIFE</blockquote>

			<p>If you have any questions regarding your personal injury case or about the claims-filing process, we would be happy to provide you with the answers you need. We will guide you through the entire legal process so that you don't become overwhelmed or confused. We are here to make the aftermath of your accident less stressful.</p>

<p>When it comes to protecting the rights of our clients, we let nothing stand in our way. We work tirelessly to secure the compensation victims need to get back on their feet. For this reason, you can trust that your case will be in capable hands when you work with the dedicated team of personal injury lawyers at Kaufman Law, P.C.</p>
			
			
		</div><!-- pa_content -->
		
	</div><!-- inner_section_six -->
	
</section><!-- section_six -->