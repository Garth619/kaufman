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
     wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', '', 31, 'all' ); 

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





/* Legal Intake form
 ----------------------------------------------------------- */

/*add_action("gform_post_submission", "set_post_content", 10, 2);
function set_post_content($entry, $form){
 // Lets get the IDs of the relevant fields and prepare an email message
 //$message = print_r($entry, true);
 // In case any of our lines are larger than 70 characters, we should use wordwrap()
// $message = wordwrap($message, 70);
 // Send
 //mail('garrett@processpeak.com', 'Getting the Gravity Form Field IDs', $message);
 function post_to_url($url, $data) {
   $fields = '';
   foreach($data as $key => $value) {
    $fields .= $key . '=' . $value . '&';
   }
   rtrim($fields, '&');
   $post = curl_init();
   curl_setopt($post, CURLOPT_URL, $url);
   curl_setopt($post, CURLOPT_POST, count($data));
   curl_setopt($post, CURLOPT_POSTFIELDS, $fields);
   curl_setopt($post, CURLOPT_RETURNTRANSFER, 1);
   $result = curl_exec($post);
   curl_close($post);
 }


 if($form["id"] == 1){
   $submitValues = array(
    'ApiKey' => "1584", 
    'FirstName' => $entry['1.1'], 
    'LastName' => $entry['1.2'],
    'PhoneNumber' => $entry['1.3'],
    'Email' => $entry['1.4'],
    'Comments' => $entry['1.5'],
    'Encryption' => "SHA"
   );



   //LIPNET
   $encryptStr = "Aa+yeK10wKl/s66KlEH9HQ=="; //value provided by LIP
  foreach($submitValues as $key => $value)
  {
  $encryptStr .= $key.$value;
  }
  $encryptStr = base64_encode(sha1($encryptStr, true));
  $submitValues["FormHash"] = $encryptStr;
  $postOptions = array('http' => array(
   'method' => 'POST',
   'content' => http_build_query($values)
  ));
  $context = stream_context_create($postOptions);
  $fOpen = @fopen($lipApiUrl, 'rb', false, $context);
  $response = @stream_get_contents($fOpen);
  print_r($response);
  if (!$response)
  {
   print("Error occurred");
   //do error handling here
  }

   post_to_url("https://lipack.legalintake.com/v1/api/outbound", $submitValues);
 }
}*/