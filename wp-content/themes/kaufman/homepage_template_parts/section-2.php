<section class="section_two">
	
	
	<?php get_template_part('mobile','fixedheader');?>
	
	<div class="case_results_wrapper">
	
	
	<div class="case_results">
		
		
		<span class="current_cases"><?php the_field( 'case_results_title' ); ?></span><!-- current_cases -->
		
		
		
		<?php if(get_field('case_results_intro_slider')): ?>
		 
			<?php while(has_sub_field('case_results_intro_slider')): ?>
		 
			<div class="single_case">
			
				<div class="single_case_content">
			
					<span class="case_amount"><?php the_sub_field( 'case_amount' ); ?></span><!--case_amount-->
					<span class="case_title"><?php the_sub_field( 'case_results_title' ); ?></span><!-- case_title -->
					<span class="case_results_content"><?php the_sub_field( 'case_results_description' ); ?></span><!-- case_results_content -->
			
				</div><!-- single_case_content -->
			
				<div class="case_icon">
				
					<?php the_sub_field( 'svg_cr' ); ?>
			
				
			</div><!-- case_icon -->
			
		</div><!-- single_case -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		

		
		
		
	</div><!-- case_results -->
	
	<div class="buttons">
			
			<div class="back single_button">
				
				<img src="<?php bloginfo('template_directory');?>/images/white-arrow-l.png"/>
				
			</div><!-- back -->
			
			<div class="next single_button">
				
				<img src="<?php bloginfo('template_directory');?>/images/white-arrow-r.png"/>
				
			</div><!-- next -->
			
		</div><!-- buttons -->
	
	</div><!-- case_results_wrapper -->
	
</section><!-- section_two -->