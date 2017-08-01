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
		
		<nav><?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?></nav>
		
	</div><!-- header_right -->
	

</header>
	