
<div class="sidebar_wrapper">
	
	<div class="sidebar_form_overlay">
				
		<div class="sidebar_inner_overlay">
			
			<div class="sidebar_close">
				
				<div class="sidebar_close_bar"></div>
				<div class="sidebar_close_bar"></div>
				
				<span class="sidebar_close_title">Close</span><!-- sidebar_close_title -->
				
			</div><!-- sidebar_close -->
			
			<svg id="pa_request_redline" viewBox="0 0 52.79 8.27">
		
					<polyline class="red_line_two" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
		
			</svg><!-- red_line_form -->
			
			<span class="pa_request_title">Request your<br/> free consultation</span><!-- pa_request_title -->
			
			<span class="mobile_form_title">Ready<br> to get in touch?</span><!-- mobile_form_title -->
			
			<span class="pa_required">* All Field Required</span><!-- pa_required -->
			
			<span class="pa_form_wrapper">
			
				<?php gravity_form(5, false, false, false, '', true, 456); ?>
			
			</span><!-- pa_form_wrapper -->
			
		</div><!-- sidebar_inner_overlay -->
				
	</div><!-- sidebar_form_overlay -->
	
	<div class="default_form_button">
		
		<span>Click Here To Request<br/> Your Free Consultation</span>
		
		<svg id="sidebar_start_arrow" viewBox="0 0 7.6 40.7">
						
			<line class="arrow_line" x1="3.8" x2="3.8" y2="36.9"/>
					
			<polygon class="arrow_tri" points="3.8 36 7.6 36 5.7 38.4 3.8 40.7 1.9 38.4 0 36 3.8 36"/>
				
		</svg><!-- start_arrow -->
		
	</div><!-- default_form_button -->
	
	<div class="sidebar">
		
		<div class="sidebar_pa_wrapper">
			
			<svg id="default_red_lines_sidebar" viewBox="0 0 52.79 8.27">
				
				<polyline transform="translate(0, 0)" class="red_line_three" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				<polyline transform="translate(0, 6)" class="red_line_two" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				<polyline transform="translate(0, 12)" class="red_line_one" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				
			</svg><!-- red_line_form -->
			
			<span class="sidebar_large_header"><strong>Areas</strong><br/> of Practice</span><!-- sidebar_large_header -->
			
			<div class="pa_list">
				
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
			

				
				
				
				
				
				
				
				
				<ul>
					
					<li>
					
						<a href="">Auto Accidents</a>
						
						<svg id="pa_redline" viewBox="0 0 52.79 8.27">
			
							<polyline class="red_line_two" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				
						</svg>
						
					</li>

					
				</ul>

			
			
			
			
			
			
			
			
			
			
			
			</div><!-- pa_list -->
			
			
		
		</div><!-- sidebar_pa_wrapper -->
		
	</div><!-- sidebar -->
	
	
	
	
<?php $classes = get_body_class();?>

<?php if (in_array('page-child',$classes)) :?>

	<div class="sidebar lower_sidebar">
		
		<div class="sidebar_pa_wrapper">
			
			<svg id="default_red_lines_sidebar" class="blog_svg"  viewBox="0 0 52.79 8.27">
				
				<polyline transform="translate(0, 0)" class="red_line_three" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				<polyline transform="translate(0, 6)" class="red_line_two" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				<polyline transform="translate(0, 12)" class="red_line_one" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				
			</svg><!-- red_line_form -->
			
			<span class="sidebar_blog_large_header">related</span><!-- sidebar_large_header -->
			
			<div class="recent_posts_feed sidebar_feed">

			<?php 
  
				$args = array(
					'child_of' => $post->post_parent,
					'post_type' => 'page',
					'post_status' => 'publish',
					'exclude' =>  $post->ID
				); 
  
  
				$pages = get_pages($args);  ?>
  
				<ul> 
					
					<?php $myparent_title = get_the_title($post->post_parent); ?>
					
					<?php $myparent_link = get_the_permalink($post->post_parent); ?>
					
					<li>
						
						<a href="<?php echo $myparent_link;?>"><?php echo $myparent_title;?></a>
						
						<svg id="pa_redline" viewBox="0 0 52.79 8.27">
			
							<polyline class="red_line_two" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				
						</svg>
					
					</li>
  
					<?php foreach( $pages as $page ) { ?>
   
						<li>
							
							<a href="<?php echo  get_permalink($page->ID); ?>"><?php echo $page->post_title; ?></a></a>
							
							<svg id="pa_redline" viewBox="0 0 52.79 8.27">
			
							<polyline class="red_line_two" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				
						</svg>
						
						</li>
  
					<?php } ?>

				</ul>


			</div><!-- recent_posts_feed -->
			
		</div><!-- sidebar_pa_wrapper -->
		
	</div><!-- sidebar -->


<?php endif;?>

<?php if (in_array('page-parent',$classes)) :?>


<div class="sidebar lower_sidebar">
		
		<div class="sidebar_pa_wrapper">
			
			<svg id="default_red_lines_sidebar" class="blog_svg"  viewBox="0 0 52.79 8.27">
				
				<polyline transform="translate(0, 0)" class="red_line_three" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				<polyline transform="translate(0, 6)" class="red_line_two" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				<polyline transform="translate(0, 12)" class="red_line_one" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				
			</svg><!-- red_line_form -->
			
			<span class="sidebar_blog_large_header">related</span><!-- sidebar_large_header -->
			
			<div class="recent_posts_feed sidebar_feed">

			<?php 
					$args = array(
						'parent' => $post->ID,
						'post_type' => 'page',
						'post_status' => 'publish'
     
					); 
  
  
					$pages = get_pages($args);  ?>
  
					<ul> 
					
						<?php foreach( $pages as $page ) { ?>
   
						<li>
							
							<a href="<?php echo  get_permalink($page->ID); ?>"><?php echo $page->post_title; ?></a></a>
						
							<svg id="pa_redline" viewBox="0 0 52.79 8.27">
			
								<polyline class="red_line_two" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
				
							</svg>
						
						</li>
  
					<?php } ?>
  
				</ul>

			</div><!-- recent_posts_feed -->
			
		</div><!-- sidebar_pa_wrapper -->
		
	</div><!-- sidebar -->

<?php endif;?>
	

</div><!-- sidebar_wrapper -->


			