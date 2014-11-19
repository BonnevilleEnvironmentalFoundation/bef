<?php
/**
 * chee initial setup and constants
 */

// Register Nav Menus

register_nav_menu( 'main', 'Main Nav' );
register_nav_menu( 'partner', 'Partner Area' );

    // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support('post-thumbnails');
  // set_post_thumbnail_size(150, 150, false);
  // add_image_size('category-thumb', 300, 9999); // 300px wide (and unlimited height)

  // Add post formats (http://codex.wordpress.org/Post_Formats)
  // add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

//Custom Image Sizes in Media Library Dropdown

/*add_filter( 'image_size_names_choose', 'custom_image_sizes_choose' );  
function custom_image_sizes_choose( $sizes ) {  
    $custom_sizes = array(  
        'square-50' => 'Square',
        'square-100' => 'Square',
        'panoramic' => 'Panoramic',
    );
    return array_merge( $sizes, $custom_sizes );  
}*/

function theme_styles()  
{ 
  // Register the style like this for a theme:  
  // (First the unique name for the style (custom-style) then the src, 
  // then dependencies and ver no. and media type)
  wp_register_style( 'custom-style', 
    get_template_directory_uri() . '/style.css', 
    array(), 
    'v1', 
    'all' );

  // enqueing:
  wp_enqueue_style( 'custom-style' );

}
add_action('wp_enqueue_scripts', 'theme_styles');


