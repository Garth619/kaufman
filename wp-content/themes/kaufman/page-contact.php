<?php 
	
	/* Template Name: Contact */
	
	get_header(); ?>

<?php get_template_part( 'internal', 'banner' );?>

<section class="start_here_track"> <!-- finishes in footer template -->

<?php get_template_part('starthere','button');?>


<div class="internal_container">
	
	<div class="inner_container">
		
		<div class="internal_content content">
			
			
			
			<div class="contact_wrapper">
				
				<span class="contact_excerpt"><?php the_field( 'contact_intro' ); ?></span><!-- contact_excerpt -->
				
				<svg id="contact_gold_line" viewBox="0 0 136.39 11.05">
				
					<defs>
					
						
					
					</defs>
					
					<polyline class="red_line_intro_path" points="135.79 10.24 123.59 1.25 112.49 9.45 101.39 1.25 90.29 9.45 79.29 1.25 68.19 9.45 57.09 1.25 45.99 9.45 34.89 1.25 23.89 9.45 12.79 1.25 0.59 10.24"/>
					
				</svg><!-- red_line_intro -->
				
				<div class="contact_info">
					
					
					<div class="contact_info_left">
					
						<span class="call_title"><?php the_field( 'call_title' ); ?></span><!-- call_title -->
					
						<a href="tel:<?php the_field( 'phone_number' ); ?>"><?php the_field( 'phone_number' ); ?></a>
					
						<span class="gold_line"></span><!-- gold_line -->
					
						<?php the_field( 'contact_description' ); ?>

					</div><!-- contact_info_left -->
					
					<div class="contact_info_right">
						
						<div class="location_wrapper">
							
							<span class="contact_location_title"><?php the_field( 'location_title' ); ?></span><!-- contact_location_title -->
							
							<a class="internal_address" href="<?php the_field( 'address_google_map_link' ); ?>" target="_blank"><?php the_field( 'address' ); ?></a><!-- internal_address -->
							
							<a class="internal_get_directions" href="<?php the_field( 'address_google_map_link' ); ?>" target="_blank"><?php the_field( 'get_directions_button_verbiage' ); ?></a><!-- internal_get_directions -->
							
							
							<div class="map">
								
								
								<?php the_field( 'google_maps_iframe' ); ?>
								
								
							</div><!-- map -->
							
							
						</div><!-- location_wrapper -->
						
					</div><!-- contact_info_right -->
					
				</div><!-- contact_info -->
				
			</div><!-- contact_wrapper -->
			
			
			
			
		</div><!-- internal_content -->
		
		
		<?php get_sidebar(); ?>
		
		
	</div><!-- inner_container -->
	
	
</div><!-- internal_container -->



<?php get_footer(); ?>
