<?php get_header(); ?>

<div class="internal_banner_wrapper">
	
	<?php get_template_part('mobile','fixedheader');?>
	
	<div class="inner_banner_wrapper">
		
		<div class="internal_header">
			
			<svg id="inetrnal_gold_twolines" viewBox="0 0 158.39 21.46">
				
				<polyline transform="translate(24 0)" class="red_line_one" points="135.79 20.66 123.59 11.66 112.49 19.86 101.39 11.66 90.29 19.86 79.29 11.66 68.19 19.86 57.09 11.66 45.99 19.86 34.89 11.66 23.89 19.86 12.79 11.66 0.59 20.66"/>
				
				<polyline transform="translate(-20 -2)" class="red_line_two" points="157.79 10.24 145.59 1.25 134.49 9.45 123.39 1.25 112.29 9.45 101.29 1.25 90.19 9.45 79.09 1.25 67.99 9.45 56.89 1.25 45.89 9.45 34.79 1.25 22.59 10.24"/>
				
			</svg><!-- inetrnal_gold_twolines -->
			
			<svg id="internal_red_twolines" viewBox="0 0 158.39 21.46">
				
			<polyline class="red_line_one" points="135.79 20.66 123.59 11.66 112.49 19.86 101.39 11.66 90.29 19.86 79.29 11.66 68.19 19.86 57.09 11.66 45.99 19.86 34.89 11.66 23.89 19.86 12.79 11.66 0.59 20.66"/>
			<polyline class="red_line_two" points="157.79 10.24 145.59 1.25 134.49 9.45 123.39 1.25 112.29 9.45 101.29 1.25 90.19 9.45 79.09 1.25 67.99 9.45 56.89 1.25 45.89 9.45 34.79 1.25 22.59 10.24"/>
				
			</svg><!-- internal_red_twolines -->
			
			<h1>Representing the Injured for more than <span>40</span> years</h1>

			<div class="review-items-wpr">
				<div class="review-item">
	                <p>Google 4.9/5</p>
	            </div>

				<div class="review-item">
	                <p>Facebook 4.9/5</p>
	            </div>

	            <div class="review-item">
	                <p>Avvo 10/10</p>
	            </div>
	        </div>
			
		</div><!-- internal_header -->
		
	</div><!-- inner_banner_wrapper -->
	
	
</div><!-- internal_banner_wrapper -->

<section class="start_here_track"> <!-- finishes in footer template -->

<?php get_template_part('starthere','button');?>

<div class="internal_container">
	
	<div class="inner_container">
		
		<div class="internal_content content">	

			<?php the_field( 'landing' ); ?>

		</div><!-- internal_content -->
		
		<div class="landing-sidebar-main">
			<?php get_sidebar(); ?>
		</div>
		
	</div><!-- inner_container -->
	
</div><!-- internal_container -->

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
		
	</div><!-- why_choose_wrapper -->

	<div class="section_four_lower">
		
	</div><!-- section_lower_content -->	
	
</section><!-- section_four -->




<section id="landing-case-results">

	<span class="landing-case-results-title"><?php the_field( 'landing_case_results_title' ); ?></span>

	<div class="landing-case-results-cards-container">

		<?php if ( have_rows( 'landing_case_result' ) ) : ?>

		<ul class="landing-case-results-cards-wpr">


		<?php while ( have_rows( 'landing_case_result' ) ) : the_row(); ?>			

			<li class="landing-case-results-card">
				<span class="landing-case-results-amount"><?php the_sub_field( 'landing_case_amount' ); ?></span>
				<span class="landing-case-results-subtitle"><?php the_sub_field( 'landing_case_subtitle' ); ?></span>

				<svg id="inetrnal_gold_twolines" viewBox="0 0 158.39 21.46">
				
					<polyline transform="translate(24 0)" class="red_line_one" points="135.79 20.66 123.59 11.66 112.49 19.86 101.39 11.66 90.29 19.86 79.29 11.66 68.19 19.86 57.09 11.66 45.99 19.86 34.89 11.66 23.89 19.86 12.79 11.66 0.59 20.66"/>				
				
				</svg><!-- inetrnal_gold_twolines -->

				<p class="landing-case-results-text"><?php the_sub_field( 'landing_case_summary' ); ?></p>
			</li>
			<?php endwhile; ?>
		</ul>

		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>

		<section class="section_two">

			<div class="case_results_wrapper">

				<div class="buttons">
					
					<div class="back single_button">
						
						<img src="<?php bloginfo('template_directory');?>/images/white-arrow-l.png"/>
						
					</div><!-- back -->
					
					<div class="next single_button">
						
						<img src="<?php bloginfo('template_directory');?>/images/white-arrow-r.png"/>
						
					</div><!-- next -->
					
				</div><!-- buttons -->

			</div>

		</section>

	</div>

</section>

<div class="landing-sidebar-alt">

	<div class="internal_container">

		<div class="inner_container">

			<div class="sidebar_wrapper" id="int-form">
				
				<div class="sidebar">
					
					<div class="sidebar_form_wrapper">
						
						<svg id="red_line_sidebar" viewBox="0 0 52.79 8.27">
							
							<polyline class="red_line_two" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
								
						</svg><!-- red_line_form -->
						
						<span class="sidebar_large_header">Request your<br class="mobile" /> free consultation</span><!-- sidebar_large_header -->
						
						<span class="mobile_form_title">Ready<br> to get in touch?</span><!-- mobile_form_title -->
						
						<span class="internal_required">* All Fields Required</span><!-- internal_required -->
						
						<?php gravity_form(1, false, false, false, '', true, 12); ?>
					
					</div><!-- sidebar_form_wrapper -->
					
				</div><!-- sidebar -->				
				
			</div><!-- sidebar_wrapper -->

		</div>

	</div>
	
</div>

<?php get_footer(); ?>
