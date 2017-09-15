<section class="section_six">
	
	<div class="inner_section_six">
		
		<div class="pa_sidebar">
			
			<svg id="red_lines_pa" viewBox="0 0 52.79 8.27">
				
				<polyline transform="translate(0, 0)" class="red_line_three" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				<polyline transform="translate(0, 6)" class="red_line_two" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				<polyline transform="translate(0, 12)" class="red_line_one" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				
			</svg><!-- red_line_form -->
			
			<span class="large_header"><?php the_field( 'practice_areas_title' ); ?></span>
			
			
			
			
			
			<?php if(get_field('practice_area_sidebar_home')): ?>
			 
				<ul>
				
				<?php while(has_sub_field('practice_area_sidebar_home')): ?>
			 
					
			    
				
				
					<?php $post_object = get_sub_field( 'practice_area_home' ); ?>
		
						<?php if ( $post_object ): ?>
			
			
							<?php $post = $post_object; ?>
			
							<?php setup_postdata( $post ); ?> 
				
				
								<li>
				
									<a href="<?php the_permalink();?>">
					
										
										<?php if(get_field('practice_areas_override_title')):?>
										
										<span><?php the_field( 'practice_areas_override_title' ); ?></span>
										
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
			
		<?php the_field( 'section_six_content' ); ?>
			
			
		</div><!-- pa_content -->
		
	</div><!-- inner_section_six -->
	
</section><!-- section_six -->