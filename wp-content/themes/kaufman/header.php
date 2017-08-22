<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
				

<header>
	
	<div class="logo_wrapper">
		
		<a href="">
			
			<img src="<?php bloginfo('template_directory');?>/images/kaufmanlogo.svg"/>
			
		</a>
		
	</div><!-- logo_wrapper -->
	
	<div class="header_right">
		
		<div class="call_wrapper">
			
			<span class="call">Call For a <strong>Free</strong> Consultation</span>
			<a href="tel:6787261425">(678) 726-1425</a>
			
		</div><!-- call_wrapper -->
		
		<nav>
			
			<div class="mobile_nav_close_wrapper">
				
				<div class="close_bar"></div><!-- close_bar -->
				<div class="close_bar"></div><!-- close_bar -->
				
			</div><!-- mobile_nav_close_wrapper -->
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
			
		</nav>
		
	</div><!-- header_right -->
	
	<div class="mobile_header_right">
		
		
		<div class="menu_bars_wrapper">
			
			<div class="menu_bars"></div><!-- menu_bars -->
			<div class="menu_bars"></div><!-- menu_bars -->
			<div class="menu_bars"></div><!-- menu_bars -->
			
			<span class="menu">Menu</span><!-- menu -->
			
		</div><!-- menu_bars_wrapper -->
		
		<div class="mobile_request_wrapper">
			
			<a class="mobile_phone" href="">(678) 726-1425</a>
			
			<svg id="mobile_request_line" viewBox="0 0 136.39 11.05">
				
					<defs>
					
						
					
					</defs>
					
					<polyline class="red_line_intro_path" points="135.79 10.24 123.59 1.25 112.49 9.45 101.39 1.25 90.29 9.45 79.29 1.25 68.19 9.45 57.09 1.25 45.99 9.45 34.89 1.25 23.89 9.45 12.79 1.25 0.59 10.24"/>
					
				</svg><!-- red_line_intro -->
			
			<span class="mobile_cta">Call For a <strong>Free</strong> Consultation</span><!-- mobile_cta -->
			
		</div><!-- mobile_request_wrapper -->
		
		
	</div><!-- mobile_header_right -->
	

</header>


<div class="mobile_fixed_menu_wrapper">
	
	<div class="fixed_request">
		
		<a class="large_header" href="tel:(678) 712-1115">(678) 712-1115</a><!-- large_header -->
		
		<span class="small_header">Call For a <strong>Free</strong> Consultation</span><!-- small_header -->
		
	</div><!-- fixed_request -->
	
	<div class="mobile_fixed_start_here">
		
		<span>Start Here</span>
		
		<svg id="mobile_fixed_start_now" viewBox="0 0 7.6 40.7">
						
				<line class="arrow_line" x1="3.8" x2="3.8" y2="36.9"/>
					
				<polygon class="arrow_tri" points="3.8 36 7.6 36 5.7 38.4 3.8 40.7 1.9 38.4 0 36 3.8 36"/>
				
			</svg><!-- start_arrow -->
		
	</div><!-- mobile_fixed_start_here -->
	
</div><!-- mobile_fixed_menu_wrapper -->
	