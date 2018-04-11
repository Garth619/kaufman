<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
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
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />


<style type="text/css">

.internal_banner_wrapper {
	background: rgba(0, 0, 0, 0) url(<?php the_field( 'internal_banners' ); ?>) no-repeat scroll center top / cover ;
}



.section_eight {
	background: url(<?php the_field( 'section_8_image' ); ?>) no-repeat  top left / cover;
}


<?php the_field( 'review_page_styles','option'); ?>



</style>



<?php wp_head(); ?>

<?php the_field( 'header_scripts','option' ); ?>

</head>

<body <?php body_class(); ?>>
				

<header>
	
	<div class="logo_wrapper">
		
		<a href="<?php bloginfo('url');?>">
			
			<img src="<?php bloginfo('template_directory');?>/images/kaufmanlogo.svg"/>
			
		</a>
		
	</div><!-- logo_wrapper -->
	
	<div class="header_right">
		
		<div class="call_wrapper">
			
			<span class="call"><?php the_field( 'call_verbiage','option' ); ?></span>
			<a href="tel:<?php the_field( 'phone_number','option' ); ?>"><?php the_field( 'phone_number','option' ); ?></a>
			
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
			
			<a class="mobile_phone" href="tel:<?php the_field( 'phone_number','option' ); ?>"><?php the_field( 'phone_number','option' ); ?></a>
			
			
			<div class="phone_wrapper">
				
				<div class="phone_wrapper_center">
			
					<svg id="mobile_request_line" viewBox="0 0 136.39 11.05">
					
							<defs>
						
							
						
							</defs>
						
							<polyline class="red_line_intro_path" points="135.79 10.24 123.59 1.25 112.49 9.45 101.39 1.25 90.29 9.45 79.29 1.25 68.19 9.45 57.09 1.25 45.99 9.45 34.89 1.25 23.89 9.45 12.79 1.25 0.59 10.24"/>
						
					</svg><!-- mobile_request_line -->
					
					<svg id="mobile_request_line_two" viewBox="0 0 52.79 8.27">
					
						<polyline class="red_line_two" points="0.44 7.33 9.14 0.94 17.74 7.33 26.44 0.94 35.14 7.33 43.74 0.94 52.34 7.33"/>
					
					</svg><!-- red_line_form -->
					
					<span class="mobile_cta">Call For a<br/> <strong>Free</strong> Consultation</span><!-- mobile_cta -->
				
				</div><!-- phone_wrapper_center -->
			
			</div><!-- phone_wrapper -->
			
		</div><!-- mobile_request_wrapper -->
		
		
	</div><!-- mobile_header_right -->
	
	

	

</header>



	