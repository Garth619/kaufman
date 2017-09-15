<section class="start_here_track"><!-- goes into footer -->

<?php get_template_part('starthere','button');?>
	
<section class="section_three">
	
	
	<h1><?php the_field( 'section_3_title' ); ?></h1>
	
	<svg id="section_three_red_twolines" viewBox="0 0 158.39 21.46" overflow="visible">
				
		<polyline class="red_line_one" points="135.79 20.66 123.59 11.66 112.49 19.86 101.39 11.66 90.29 19.86 79.29 11.66 68.19 19.86 57.09 11.66 45.99 19.86 34.89 11.66 23.89 19.86 12.79 11.66 0.59 20.66"/>
		<polyline class="red_line_two" points="157.79 10.24 145.59 1.25 134.49 9.45 123.39 1.25 112.29 9.45 101.29 1.25 90.19 9.45 79.09 1.25 67.99 9.45 56.89 1.25 45.89 9.45 34.79 1.25 22.59 10.24"/>
				
	</svg><!-- intro_red_twolines -->
	
	<h2 class="block"><?php the_field( 'section_3_sub_header' ); ?></h2>
	
	<div class="section_three_container">
		
		<div class="section_three_content content">

			<?php the_field( 'section_3_content' ); ?>
				
		</div><!-- section_three_content -->
		
		<div class="section_three_sidebar">
			
			<div class="section_three_innersidebar">
				
				<svg id="section_three_gold_twolines" viewBox="0 0 135.2 19.41">
				
					<polyline transform="translate(0, -10)" class="cls-1" points="135.2 19.41 123 10.41 111.9 18.61 100.8 10.41 89.7 18.61 78.7 10.41 67.6 18.61 56.5 10.41 45.4 18.61 34.3 10.41 23.3 18.61 12.2 10.41 0 19.41"/>
				
					<polyline class="cls-1" points="135.2 19.41 123 10.41 111.9 18.61 100.8 10.41 89.7 18.61 78.7 10.41 67.6 18.61 56.5 10.41 45.4 18.61 34.3 10.41 23.3 18.61 12.2 10.41 0 19.41"/>
				
				</svg>
				
								
				
				<span class="section_three_sidebar_content"><?php the_field( 'section_3_sidebar' ); ?></span>
				
				
				
			</div><!-- section_three_innersidebar -->
			
			<div class="diamond">
					
					<svg id="black_square" viewBox="0 0 145 145">
					
						<rect width="145" height="145"/>
					
					</svg>
					
					<img src="<?php bloginfo('template_directory');?>/images/k-icon.png"/>				
				
				
				</div><!-- diamond -->
			
		</div><!-- section_three_sidebar -->
		
	</div><!-- section_three_container -->
	
	
</section><!-- section_three -->