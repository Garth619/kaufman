<?php 
	
	/* Template Name: Video Center */
	
	get_header(); ?>

<?php get_template_part( 'internal', 'banner' );?>

<section class="start_here_track"> <!-- finishes in footer template -->

<?php get_template_part('starthere','button');?>


<div class="internal_container">
	
	<div class="inner_container">
		
		<div class="internal_content content">
			
			
		<div class="internal_video_wrapper">
			
			
			<?php if(get_field('video_center')): ?>
			 
				<?php while(has_sub_field('video_center')): ?>
			 
					
					
					
						<div class="single_video">
							
							<div class="inner_video_wrapper">
								
										<div class="internal_play_overlay">
										
										
										<svg id="play_button_svg" viewBox="0 0 204.21 204.21">
								
											<defs>
									
										
											<linearGradient id="linear-gradient" x1="130.92" y1="494.28" x2="130.92" y2="698.43" gradientTransform="matrix(0, 1, 1, 0, -494.25, -28.81)" gradientUnits="userSpaceOnUse">
										
												<stop offset="0" stop-color="#f1d69d"/>
												<stop offset="1" stop-color="#fce7ba"/>
										
											</linearGradient>
										
											</defs>
										
										
											<rect class="black_bg" x="32.59" y="33.24" width="138.4" height="138.4" transform="translate(-42.59 101.98) rotate(-45)"/>
									
											<rect class="gold_stroke" x="32.87" y="32.91" width="138.4" height="138.4" transform="translate(-42.27 102.08) rotate(-45)"/>
									
											<polygon class="play_svg" points="131.93 102.1 92.43 79.3 92.43 124.9 131.93 102.1"/>
								
								
										</svg><!-- play_button_svg -->
										
										</div><!-- internal_play_overlay -->
									
										<script src="https://fast.wistia.com/embed/medias/<?php the_sub_field( 'wistia_embed_snippet' ); ?>.jsonp" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><span class="wistia_embed wistia_async_<?php the_sub_field( 'wistia_embed_snippet' ); ?> popover=true popoverAnimateThumbnail=true videoFoam=true" style="display:inline-block;height:100%;width:100%">&nbsp;</span></div></div>
									
							</div><!-- inner_video_wrapper -->
							
							<div class="video_title_wrapper">
									
									<svg id="video_red_line_title" viewBox="0 0 52.79 8.27">
						
										<polyline class="red_line_two" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
							
									</svg><!-- red_line_form -->
									
									<span class="video_title"><?php the_sub_field( 'video_title' ); ?></span><!-- video_title -->
									
								</div><!-- video_title_wrapper -->
							
							
						</div><!-- single_video -->
								
						
					
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
			
			
						
			
		</div><!-- internal_video_wrapper -->
			
			
		</div><!-- internal_content -->
		
		
		<?php get_sidebar(); ?>
		
		
	</div><!-- inner_container -->
	
	
</div><!-- internal_container -->



<?php get_footer(); ?>
