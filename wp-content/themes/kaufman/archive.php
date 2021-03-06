<?php get_header(); ?>



<section class="start_here_track"> <!-- finishes in footer template -->

<?php get_template_part('starthere','button');?>

<div class="non_banner_layout">

<div class="internal_container">
	
	<?php get_template_part('mobile','fixedheader');?>
	
	
	
	<div class="inner_container">
		
		<div class="internal_content content">
			
			<div class="default_header_wrapper">
			
				<?php
					/*
					* Queue the first post, that way we know
					* what date we're dealing with (if that is the case).
					*
					* We reset this later so we can run the loop
					* properly with a call to rewind_posts().
	 				*/
	 				if ( have_posts() )
	 				the_post();
				?>

			<h1 class="intro">
				<?php if ( is_day() ) : ?>
					
					<?php printf( __( '<span>%s</span>' ), get_the_date() ); ?>
				
				<?php elseif ( is_month() ) : ?>
					<?php printf( __( '<span>%s</span>' ), get_the_date( _x( 'F Y', 'monthly archives date format' ) ) ); ?>
				
				<?php elseif ( is_year() ) : ?>
				
				<?php printf( __( '<span>%s</span>' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) ); ?>
				
				<?php endif; ?>
			
			</h1>
				
				<svg id="default_page_gold_twolines" viewBox="0 0 158.39 21.46">
					
					<polyline transform="translate(24 0)" class="red_line_one" points="135.79 20.66 123.59 11.66 112.49 19.86 101.39 11.66 90.29 19.86 79.29 11.66 68.19 19.86 57.09 11.66 45.99 19.86 34.89 11.66 23.89 19.86 12.79 11.66 0.59 20.66"/>
					
					<polyline transform="translate(-20 -2)" class="red_line_two" points="157.79 10.24 145.59 1.25 134.49 9.45 123.39 1.25 112.29 9.45 101.29 1.25 90.19 9.45 79.09 1.25 67.99 9.45 56.89 1.25 45.89 9.45 34.79 1.25 22.59 10.24"/>
					
				</svg><!-- inetrnal_gold_twolines -->
				
				<svg id="default_red_twolines" viewBox="0 0 158.39 21.46">
					
					<polyline class="red_line_one" points="135.79 20.66 123.59 11.66 112.49 19.86 101.39 11.66 90.29 19.86 79.29 11.66 68.19 19.86 57.09 11.66 45.99 19.86 34.89 11.66 23.89 19.86 12.79 11.66 0.59 20.66"/>
					<polyline class="red_line_two" points="157.79 10.24 145.59 1.25 134.49 9.45 123.39 1.25 112.29 9.45 101.29 1.25 90.19 9.45 79.09 1.25 67.99 9.45 56.89 1.25 45.89 9.45 34.79 1.25 22.59 10.24"/>
					
				</svg><!-- internal_red_twolines -->
				
				</div><!-- default_header_wrapper -->
			
			
				<div class="blog_wrapper">
					
						

<?php
	/*
	 * Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();

	/* include a file called loop-archive.php and that will be used instead.
	 */
	get_template_part( 'loop', 'archive' );
?>

					
				</div><!-- blog_wrapper -->
				
			
			
			
		</div><!-- internal_content -->
		
		
		<?php get_template_part('sidebar','blog'); ?>
		
		
	</div><!-- inner_container -->
	
	
</div><!-- internal_container -->


</div><!-- edgeless_layout -->



<?php get_footer(); ?>

