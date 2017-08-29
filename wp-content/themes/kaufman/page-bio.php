<?php 
	
	/* Template Name: Single Bio Page */
	
	get_header(); ?>
	


	<section class="start_here_track"> <!-- finishes in footer template -->
	
	<?php get_template_part('starthere','button');?>
	
	<div class="non_banner_layout centered_layout">
	
	<div class="internal_container">
		
		<?php get_template_part('mobile','fixedheader');?>
		
		<div class="inner_container">
			
			<div class="internal_content content">
				
<!--
				<div class="default_header_wrapper">
				
					<h1 class="intro"><?php the_title();?></h1>
					
					<svg id="default_page_gold_twolines" viewBox="0 0 158.39 21.46">
						
						<polyline transform="translate(24 0)" class="red_line_one" points="135.79 20.66 123.59 11.66 112.49 19.86 101.39 11.66 90.29 19.86 79.29 11.66 68.19 19.86 57.09 11.66 45.99 19.86 34.89 11.66 23.89 19.86 12.79 11.66 0.59 20.66"/>
						
						<polyline transform="translate(-20 -2)" class="red_line_two" points="157.79 10.24 145.59 1.25 134.49 9.45 123.39 1.25 112.29 9.45 101.29 1.25 90.19 9.45 79.09 1.25 67.99 9.45 56.89 1.25 45.89 9.45 34.79 1.25 22.59 10.24"/>
						
					</svg>
					
					<svg id="default_red_twolines" viewBox="0 0 158.39 21.46">
						
						<polyline class="red_line_one" points="135.79 20.66 123.59 11.66 112.49 19.86 101.39 11.66 90.29 19.86 79.29 11.66 68.19 19.86 57.09 11.66 45.99 19.86 34.89 11.66 23.89 19.86 12.79 11.66 0.59 20.66"/>
						<polyline class="red_line_two" points="157.79 10.24 145.59 1.25 134.49 9.45 123.39 1.25 112.29 9.45 101.29 1.25 90.19 9.45 79.09 1.25 67.99 9.45 56.89 1.25 45.89 9.45 34.79 1.25 22.59 10.24"/>
						
					</svg>
					
					</div>
--><!-- default_header_wrapper -->
				
									
					
				<div class="attorney_bio_header_wrapper">
					
					
					<img src="<?php bloginfo('template_directory');?>/images/attorneys/kaufman.jpg"/>
					
					<div class="attorney_bio_header">
						
						<h1 class="att_name">Jefferey <span class="second_line">Kaufman</span></h1><!-- att_name -->
						
						<svg id="default_page_gold_twolines" viewBox="0 0 158.39 21.46">
						
						<polyline transform="translate(24 0)" class="red_line_one" points="135.79 20.66 123.59 11.66 112.49 19.86 101.39 11.66 90.29 19.86 79.29 11.66 68.19 19.86 57.09 11.66 45.99 19.86 34.89 11.66 23.89 19.86 12.79 11.66 0.59 20.66"/>
						
						<polyline transform="translate(-20 -2)" class="red_line_two" points="157.79 10.24 145.59 1.25 134.49 9.45 123.39 1.25 112.29 9.45 101.29 1.25 90.19 9.45 79.09 1.25 67.99 9.45 56.89 1.25 45.89 9.45 34.79 1.25 22.59 10.24"/>
						
					</svg>
					
					<span class="bio_title">Founding Attorney</span><!-- bio_title -->
						
					</div><!-- attorney_bio_header -->
					
					
				</div><!-- attorney_bio_beader -->
				
				<div class="internal_bio_content">
				
				<p>
					
					<span class="first_letter">
					<span>F</span>
				</span>
				
				or almost 40 years, Jeffrey Kaufman has been protecting the rights of injured individuals. As an Atlanta personal injury lawyer, he is committed to lending a helping hand to injured  victims during what is bound to be the most stressful moments in their lives. Throughout his career, he has secured millions of dollars in compensation for injured victims. In fact, his $25 million medical malpractice verdict is considered to be one of the highest in Georgia's history. He has a 10.0 Superb Avvo Rating, which is a perfect score that demonstrates his solid track record. As the founder of Kaufman Law, P.C., he continues to make personal injury law his sole focus.</p>

				<p>Attorney Jeffrey Kaufman is licensed to practice in Georgia, the U.S. District Court, Northern District of Georgia and the U.S. Court of Appeals, 11th Circuit. He earned his law degree from Mercer University's Walter F. George School of Law and he completed his undergraduate studies at Washington University in St. Louis.</p>

				<p>In his free time, Attorney Jeffrey Kaufman enjoys spending time with his family, cheering for the Braves, and reading. He and his wife Alison live in Atlanta. An active member of his community, he donates his time and efforts to many charitable and non-profit organizations. If you need help with a personal injury case, he can carefully review the details and provide guidance during a complimentary initial consultation. He will recommend the strongest course of action that you should take.</p>

				<p>For more information about how Attorney Jeffrey Kaufman can assist you, call us today.</p>


<h3>education</h3>
	
	<ul>
		<li>Mercer University, Walter F. George School of Law, J.D. - 1977</li>
    <li>Washington University in St. Louis, B.A. - 1975</li>
	</ul>

<ul>
	<li>professional assocations & memberships</li>
    <li>Georgia Trial Lawyers Association</li>
    <li>Atlanta Trial Lawyers Association</li>
    <li>State Bar of Georgia</li>
    <li>Southern Trial Lawyers Association</li>
    <li>National Crime Victim Bar Association</li>
</ul>				
				
				
				</div><!-- internal_bio_content -->
				
			</div><!-- internal_content -->
			
			
			<?php get_sidebar(); ?>
			
			
		</div><!-- inner_container -->
		
		
	</div><!-- internal_container -->

	</div><!-- centered_layout -->

<?php //get_template_part( 'loop', 'index' );?>








<?php get_footer(); ?>
