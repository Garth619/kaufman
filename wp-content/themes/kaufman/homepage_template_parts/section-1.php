<section class="intro_banner">
	
	<div class="intro_banner_content">
		
		
		
		<span class="intro_header">
		
			<div class="play_wrapper">
				
				
				<div class="my_wistia_container">
							
							
							<script src="https://fast.wistia.com/embed/medias/<?php the_field( 'wistia_video_intro' ); ?>.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><span class="wistia_embed wistia_async_<?php the_field( 'wistia_video_intro' ); ?> popover=true popoverAnimateThumbnail=true popoverContent=link videoFoam=true" style="display:inline"><a href="#"></a></span></div></div>
							
							
				</div><!-- my_wistia_container -->
				
				<span class="learn"><?php the_field( 'video_verbiage' ); ?></span><!-- learn -->
				
				<svg id="red_line_intro" viewBox="0 0 136.39 11.05">
				
					<defs>
					
						
					
					</defs>
					
					<polyline class="red_line_intro_path" points="135.79 10.24 123.59 1.25 112.49 9.45 101.39 1.25 90.29 9.45 79.29 1.25 68.19 9.45 57.09 1.25 45.99 9.45 34.89 1.25 23.89 9.45 12.79 1.25 0.59 10.24"/>
					
				</svg><!-- red_line_intro -->
				
		
				
				
				
						
						<div class="play_button">
					
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
					
						</div><!-- play_button -->
						
									
				
			</div><!-- play_wrapper -->
		
		
		<span class="intro_title">
		
<!-- for reference in case it breaks
	
			<span class="top_line">Representing<br/></span>
		
			<span class="middle_line">the Injured for more</span>
		
			<span class="bottom_line">than <strong>40</strong>&nbsp;Years</span>
-->

		<?php the_field( 'intro_banner_verbiage' ); ?>
		
		
		</span><!-- intro_title -->
		
		</span><!-- intro_header -->
		
		<div class="lower_intro_wrapper">
			
			
			
			<div class="lower_intro_left">
			
				<a class="intro_button" href="#request">
					
					
					<span><?php the_field( 'start_here_verbiage' ); ?></span>
				
				
				
						
						<svg id="start_arrow" viewBox="0 0 7.6 40.7">
						
							<line class="arrow_line" x1="3.8" x2="3.8" y2="36.9"/>
					
							<polygon class="arrow_tri" points="3.8 36 7.6 36 5.7 38.4 3.8 40.7 1.9 38.4 0 36 3.8 36"/>
				
						</svg><!-- start_arrow -->
				
					
				
				</a><!-- intro_button -->
			
			</div><!-- lower_intro_left -->
			
			
			
			<div class="lower_intro_right">
				
				<svg id="intro_red_twolines" viewBox="0 0 158.39 21.46" overflow="visible">
				
				<polyline class="red_line_one" points="135.79 20.66 123.59 11.66 112.49 19.86 101.39 11.66 90.29 19.86 79.29 11.66 68.19 19.86 57.09 11.66 45.99 19.86 34.89 11.66 23.89 19.86 12.79 11.66 0.59 20.66"/>						<polyline class="red_line_two" points="157.79 10.24 145.59 1.25 134.49 9.45 123.39 1.25 112.29 9.45 101.29 1.25 90.19 9.45 79.09 1.25 67.99 9.45 56.89 1.25 45.89 9.45 34.79 1.25 22.59 10.24"/>
				
				</svg><!-- intro_red_twolines -->
				
				<span><?php the_field( 'intro_paragraph' ); ?></span>
				
			</div><!-- lower_intro_right -->
			
		
		
		
		</div><!-- lower_intro_wrapper -->
		
	</div><!-- intro_banner_content -->
	
	<video src="<?php bloginfo('template_directory');?>/images/videobg.mp4" loop autoplay></video>
	
</section><!-- intro_banner -->