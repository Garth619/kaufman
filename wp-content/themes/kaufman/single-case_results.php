<?php get_header(); ?>



<section class="start_here_track"> <!-- finishes in footer template -->

<?php get_template_part('starthere','button');?>

<div class="non_banner_layout">

<div class="internal_container">
	
	<?php get_template_part('mobile','fixedheader');?>
	
	
	
	<div class="inner_container">
		
		<div class="internal_content content">
			
		<div class="results_buttons">

<?php
$prev_post = get_previous_post();
if($prev_post) {
   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
   echo "\t" . '<a href="' . get_permalink($prev_post->ID) . '" class="results_back results_button"><svg id="results_back_arrow" viewBox="0 0 7.6 40.7"><line class="arrow_line" x1="3.8" x2="3.8" y2="36.9"/><polygon class="arrow_tri" points="3.8 36 7.6 36 5.7 38.4 3.8 40.7 1.9 38.4 0 36 3.8 36"/></svg><!-- start_arrow --><span>Back</span></a>' . "\n";
}

$next_post = get_next_post();
if($next_post) {
   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
   echo "\t" . '<a href="' . get_permalink($next_post->ID) . '" class="results_next results_button"><span>Next<svg id="results_next_arrow" viewBox="0 0 7.6 40.7"><line class="arrow_line" x1="3.8" x2="3.8" y2="36.9"/><polygon class="arrow_tri" points="3.8 36 7.6 36 5.7 38.4 3.8 40.7 1.9 38.4 0 36 3.8 36"/></svg><!-- start_arrow --></span></a>' . "\n";
}
?>

</div><!-- results_buttons-->	


		<div class="default_header_wrapper">
			
				<h1 class="intro">$25,000,000</h1>
				
				<svg id="default_page_gold_twolines" viewBox="0 0 158.39 21.46">
					
					<polyline transform="translate(24 0)" class="red_line_one" points="135.79 20.66 123.59 11.66 112.49 19.86 101.39 11.66 90.29 19.86 79.29 11.66 68.19 19.86 57.09 11.66 45.99 19.86 34.89 11.66 23.89 19.86 12.79 11.66 0.59 20.66"/>
					
					<polyline transform="translate(-20 -2)" class="red_line_two" points="157.79 10.24 145.59 1.25 134.49 9.45 123.39 1.25 112.29 9.45 101.29 1.25 90.19 9.45 79.09 1.25 67.99 9.45 56.89 1.25 45.89 9.45 34.79 1.25 22.59 10.24"/>
					
				</svg><!-- inetrnal_gold_twolines -->
				
				<svg id="default_red_twolines" viewBox="0 0 158.39 21.46">
					
					<polyline class="red_line_one" points="135.79 20.66 123.59 11.66 112.49 19.86 101.39 11.66 90.29 19.86 79.29 11.66 68.19 19.86 57.09 11.66 45.99 19.86 34.89 11.66 23.89 19.86 12.79 11.66 0.59 20.66"/>
					<polyline class="red_line_two" points="157.79 10.24 145.59 1.25 134.49 9.45 123.39 1.25 112.29 9.45 101.29 1.25 90.19 9.45 79.09 1.25 67.99 9.45 56.89 1.25 45.89 9.45 34.79 1.25 22.59 10.24"/>
					
				</svg><!-- internal_red_twolines -->
				
				</div><!-- default_header_wrapper -->
			
			
				<h2>Failure To Timely Diagnose And Treat A Stroke</h2>


				<p>R. J. was a supervisor at Lockheed Martin, where he managed a large crew of people who respected him immensely.</p>

				<p>One Friday, he wasn't feeling well and was having a little bit of trouble swallowing. He went to the nurse at Lockheed Martin, who examined him and instructed him to go to the emergency room. On the way to the hospital, Mr. J stopped for a burger. As much as he chewed his food, he could not swallow at all.</p>

				<p>When Mr. J arrived at the emergency department at the hospital, he was admitted, assigned a doctor, and was ordered to have several tests administered. Of all the tests performed on Mr. J, he was not given an MRI because on that particular day, the MRI department inside the hospital was closed due to a holiday weekend. Knowing that he needed an MRI done to confirm a final diagnosis, his medical team transferred him to the neurological floor of the hospital to be monitored until the MRI department reopened.</p>

				<p>The next day, after staying with him in the hospital and in communication with hospital staff, Mr. J’s wife realized that he needed an MRI as soon as possible. She checked him out of the hospital he was in and took him to a different hospital for an MRI to be performed. The first hospital, however, called the second hospital to demand that Mr. J be returned to them as their patient. The second hospital, after having performed an MRI on Mr. J, put him and his wife in an ambulance, with MRI films placed on top of Mr. J’s chest-unread-and sent them back to the original hospital.</p>

				<p>Mr. J laid in a hospital bed at the first hospital for two additional days before the staff read the MRI films. Once the films were read, the hospital immediately realized that he was having a stroke. They sent him down to their MRI department to be re-examined, and to start administering life-saving heparin. Ten minutes before Mr. J was taken down to the MRI department, however, he went into a pontine stroke.</p>

				<p>The stroke left Mr. J paralyzed from his head to his feet, which he suffers from to this day. His condition is called “locked-in syndrome”. He is aware of what is happening around him, but he cannot move or verbally communicate due to complete paralysis of almost all voluntary muscles in his body, apart from his eyes. He can move his eyes up and down.</p>

				<p>Mr. J’s case was taken to trial, where a jury justly awarded him $25 million.</p>

				<p>Following this series of events, Mr. J was able to learn to communicate through a computer that can tell whether he looks up or down with his eyes. Based on his eye movements, the computer can answer questions on behalf of Mr. J. It also allows him, through a system of symbols, to communicate, similar to the way in which famous physicist and cosmologist, Stephen Hawking, communicates through a related device.</p>

				<p>Today, Mr. J is well taken care of by his wife, who loves him immeasurably. She takes care of him every day, and uses every bit of the money that Kaufman Law helped win for them to improve Mr. J’s quality of life. One of the more significant purchases they made using the money awarded to them at trial was a special bed. During the day, the bed separates so that Mr. J lies in a hospital-like bed, and Mrs. J has her own half of a “normal” bed. At night, the two beds unite, forming a heart-shape.</p>


			
			
		</div><!-- internal_content -->
		
		
		<?php get_template_part('sidebar','practiceareas'); ?>
		
		
	</div><!-- inner_container -->
	
	
</div><!-- internal_container -->


</div><!-- edgeless_layout -->








<?php get_footer(); ?>
