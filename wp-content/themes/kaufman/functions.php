<?php 



/* jQuery from Google
-------------------------------------------------------------- */


if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", false, null,true);
   wp_enqueue_script('jquery');
}


/* Enqueued Scripts
-------------------------------------------------------------- */



 function load_my_styles_scripts() {
     // Load my stylesheet
     wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', '', 36, 'all' ); 

     // Load my javascripts
     
     wp_enqueue_script( 'jquery-addon', get_template_directory_uri() . '/js/custom-min.js', array('jquery'), '', true );
     
     
     
 }
 
 add_action( 'wp_enqueue_scripts', 'load_my_styles_scripts', 20 );



/* Force Gravity Forms to init scripts in the footer and ensure that the DOM is loaded before scripts are executed
-------------------------------------------------------------- */


add_filter( 'gform_init_scripts_footer', '__return_true' );
add_filter( 'gform_cdata_open', 'wrap_gform_cdata_open', 1 );
function wrap_gform_cdata_open( $content = '' ) {
if ( ( defined('DOING_AJAX') && DOING_AJAX ) || isset( $_POST['gform_ajax'] ) ) {
return $content;
}
$content = 'document.addEventListener( "DOMContentLoaded", function() { ';
return $content;
}
add_filter( 'gform_cdata_close', 'wrap_gform_cdata_close', 99 );
function wrap_gform_cdata_close( $content = '' ) {
if ( ( defined('DOING_AJAX') && DOING_AJAX ) || isset( $_POST['gform_ajax'] ) ) {
return $content;
}
$content = ' }, false );';
return $content;
}




/* Remove Unnecessary Scripts
-------------------------------------------------------------- */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/* Register Nav-Menus
-------------------------------------------------------------- */

register_nav_menus(array(
    'main_menu' => 'Main Menu',
    'pa_menu' => 'Practice Area Menu',
    'location_menu' => 'Location Menu',
));





/* Widgets
-------------------------------------------------------------- */

if (function_exists('register_sidebars')) {

    register_sidebar(array(
        'name' => 'Recent Posts Sidebar',
        'id' => 'recentpostssidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));
    
    
    register_sidebar(array(
        'name' => 'Categories Sidebar',
        'id' => 'categoriessidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));
    
    
    
    register_sidebar(array(
        'name' => 'Archives Sidebar',
        'id' => 'archivessidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));

 }

/* Add Theme Support Page Thumbnails
-------------------------------------------------------------- */

add_theme_support('post-thumbnails');

/* Modify the_excerpt() " read more "
-------------------------------------------------------------- */

function new_excerpt_more($more)
{
    global $post;
    return '... <a href="' . get_permalink($post->ID) . '">' . 'read more' . '</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');

/* Add Page Slug to Body Class
-------------------------------------------------------------- */
function add_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}

add_filter('body_class', 'add_slug_body_class');



/* ACF: CREATE OPTIONS PAGE
-------------------------------------------------------------- */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Header',
        'menu_title' => 'Header',
        'menu_slug' => 'theme-header-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    acf_add_options_page(array(
        'page_title' => 'Sidebars',
        'menu_title' => 'Sidebars',
        'menu_slug' => 'theme-sidebar-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    acf_add_options_page(array(
        'page_title' => 'Footer',
        'menu_title' => 'Footer',
        'menu_slug' => 'theme-footer-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    acf_add_options_page(array(
        'page_title' => 'Smart Form',
        'menu_title' => 'Smart Form',
        'menu_slug' => 'theme-smartform-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    acf_add_options_page(array(
        'page_title' => 'Review Page Styles',
        'menu_title' => 'Review Page Styles',
        'menu_slug' => 'theme-reviewpage-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    
}

/* ALLOW SVGs IN MEDIA UPLOAD
-------------------------------------------------------------- */
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');




/* Case Results CPT 
 ----------------------------------------------------------- */
 
 

   	 
  function case_results() {    
    	$args = array(    
        	'label' => __('Case Results'),    
        	'singular_label' => __('Case Result'),    
        	'public' => true,    
        	'show_ui' => true,
        	'has_archive' => false,	 
        	'capability_type' => 'post',
        	'hierarchical' => false,    
        	'rewrite' => array('with_front' => false,'slug' => 'results'),    
        	'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )    
       	);    
   	 
    	register_post_type( 'case_results' , $args );    
	}    


	add_action('init', 'case_results');
	

/* Category count span tags */ 
	
	
add_filter('wp_list_categories', 'cat_count_span');

function cat_count_span($links) {
  $links = str_replace('</a> (', '</a> <span class="my_cat_count">(', $links);
  $links = str_replace(')', ')</span>', $links);
  return $links;
}

/* Landing Page Custom Post Types
 --------------------------------------------------------------------------------------- */

// Create custom post type
function create_post_type() {
  register_post_type( 'landing',
        array(
            'labels' => array(
                'name' => __( 'Landing Page' ),
                'singular_name' => __( 'Landing Page' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'lp')
        )
    );
}
add_action( 'init', 'create_post_type' );


function my_deregister_styles() {
  if (is_user_logged_in()) {
    return true;
  } else {
    remove_action('wp_head', '_admin_bar_bump_cb');
    wp_deregister_style( 'dashicons' );
  }
}
add_action( 'wp_print_styles', 'my_deregister_styles', 100 );




/*

add_action( 'wp_head', 'internal_css_print' );
function internal_css_print() {
   echo '<style>';
   
   include_once get_template_directory() . '/style.css';
  
   echo '</style>';
}
*/








