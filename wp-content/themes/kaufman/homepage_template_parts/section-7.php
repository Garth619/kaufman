<section class="section_seven">
	
	<div class="news_header_wrapper">
		
		<div class="inner_news">
		
			<svg id="news_white_twolines" viewBox="0 0 51.9 10.39"><defs><style>.cls-1{fill:none;}</style></defs><title>new</title>
				
				<polyline transform="translate(0,3)" class="cls-1" points="0 10.39 8.7 4 17.3 10.39 26 4 34.7 10.39 43.3 4 51.9 10.39"/>
				<polyline class="cls-1" points="0 6.39 8.7 0 17.3 6.39 26 0 34.7 6.39 43.3 0 51.9 6.39"/>
				
			</svg><!-- news_header_wrapper -->
		
		<span class="large_header">
		
			<span class="letter_ani"><?php the_field( 'blog_sub_header' ); ?></span><!-- letter_ani -->
			
			<span class="lower_header"> <?php the_field( 'blog_large_header' ); ?></span>
			
			</span><!-- large_header -->
		
		</div><!-- inner_news -->
		
	</div><!-- news_header_wrapper -->
	
	<div class="news_slidehow_wrapper">
		
		<div class="news_slidehow">
			
			
			
			
					
			
			<div class="news_buttons">
				
				
				<div class="spacers news_back news_single_button">
					
					<img src="<?php bloginfo('template_directory');?>/images/white-arrow-l.png"/>
					
				</div><!-- news_single_button -->
					
				<div class="spacers"></div>
					
				<div class="spacers"></div>
				
				<div class="spacers news_next news_single_button">
					
					<img src="<?php bloginfo('template_directory');?>/images/white-arrow-r.png"/>
						
				</div><!-- news_single_button -->
					

			</div><!-- news_buttons -->
			
			
		
				<?php $mymain_query = new WP_Query( array( 'post_type' => array ('post' ),'posts_per_page' => '8', 'order' => 'DSC' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
                	
                	
                	
                	
                	
                	
      <a class="news_single_link" href="<?php the_permalink();?>">
				
				
				<div class="single_slide_wrapper">
					
					<div class="inner_slide_content">
					
					<svg id="news_post_twolines" viewBox="0 0 51.9 10.39"><defs><style>.cls-1{fill:none;}</style></defs><title>new</title>
			
						<polyline transform="translate(0,3)" class="cls-1" points="0 10.39 8.7 4 17.3 10.39 26 4 34.7 10.39 43.3 4 51.9 10.39"/>
						<polyline class="cls-1" points="0 6.39 8.7 0 17.3 6.39 26 0 34.7 6.39 43.3 0 51.9 6.39"/>
			
					</svg><!-- news_header_wrapper -->
					
					<span class="news_date"><?php $pfx_date = get_the_date(); ?><?php echo $pfx_date; ?></span><!-- news_date -->
					
					<span class="post_title"><?php the_title();?></span><!-- post_title -->
					
					<span class="excerpt"><?php echo wp_trim_words( get_the_content(), 40, '...' );?></span><!-- excerpt -->
					
					
					
					
					</div><!-- inner_slide_content -->
					
					<div class="read_more_wrapper"> 
						
						<span class="read_more">Read More</span>
						
						<img src="<?php bloginfo('template_directory');?>/images/white-arrow-r.png"/>
						
					</div><!-- read_more -->
					
				</div><!-- single_slide_wrapper -->
				
			</a><!-- news_single_link -->

                	
				<?php endwhile; ?>
      <?php wp_reset_postdata(); // reset the query ?>


				

			
			
			
			

		</div><!-- news_slidehow -->
		
	</div><!-- news_slidehow_wrapper -->
	
</section><!-- section_seven -->