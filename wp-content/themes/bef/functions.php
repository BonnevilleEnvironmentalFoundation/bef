<?php

add_theme_support( 'automatic-feed-links' );

// Register Sidebar

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
  register_sidebar(array(
    'name'          => __('CTC Sidebar'),
    'id'            => 'ctc-sidebar',
    'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));
  register_sidebar(array(
    'name'          => __('CTC Partner Sidebar'),
    'id'            => 'ctc-partner-sidebar',
    'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));
}

// Change Footer Version

function change_footer_version() {
  return '';
}
add_filter( 'update_footer', 'change_footer_version', 9999 );

// Custom Footer Text

function remove_footer_admin () {
  echo '';
}
add_filter('admin_footer_text', 'remove_footer_admin');


// Add Thumbnails

add_theme_support( 'post-thumbnails' );

// Register Nav Menus

register_nav_menu( 'main', 'Main Nav' );
register_nav_menu( 'partner', 'Partner Area' );

// Add Slug to Body Class

function post_name_in_body_class( $classes ){
if( is_singular() ) {
     global $post;
     $parent = get_page($post->post_parent);
     array_push( $classes, "{$post->post_name}" );
     array_push( $classes, "{$parent->post_name}" );
     }
return $classes;
}
add_filter( 'body_class', 'post_name_in_body_class' );

// Add Menu through Shortcodes

function print_menu_shortcode($atts, $content = null) {
    extract(shortcode_atts(array( 'name' => null, ), $atts));
    return wp_nav_menu( array( 'menu' => $name, 'echo' => false ) );
}
add_shortcode('menu', 'print_menu_shortcode');

function addAnchor($atts, $content = null) {
	return '<a name="' . $content . '"' . 'id="' . $content . '"></a>' ;
}

add_shortcode('anchor', 'addAnchor');

// Single View on Custom Taxonomy

add_filter('single_template', 'single_template_terms');
function single_template_terms($template) {
    foreach( (array) wp_get_object_terms(get_the_ID(), get_taxonomies(array('public' => true, '_builtin' => false))) as $term ) {
        if ( file_exists(TEMPLATEPATH . "/single-{$term->slug}.php") )
            return TEMPLATEPATH . "/single-{$term->slug}.php";
    }
    return $template;
}

// Replace "Howdy" on Admin 

function replace_howdy( $wp_admin_bar ) {
    $my_account=$wp_admin_bar->get_node('my-account');
    $newtitle = str_replace( 'Howdy,', 'Logged in as', $my_account->title );
    $wp_admin_bar->add_node( array(
        'id' => 'my-account',
        'title' => $newtitle,
    ) );
}
add_filter( 'admin_bar_menu', 'replace_howdy',25 );

// Hide Help on Admin

function hide_help() {
    echo '<style type="text/css">
            #contextual-help-link-wrap { display: none !important; }
          </style>';
}
add_action('admin_head', 'hide_help');

//Get The Slug

function the_slug($echo=true){
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  if( $echo ) echo $slug;
  do_action('after_slug', $slug);
  return $slug;
}

remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link' ); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version

// Gravity Forms anchor creation //
add_filter("gform_confirmation_anchor", create_function("","return true;"));

// Gravity Forms Tabindex for easy entry //
add_filter("gform_tabindex_6", create_function("", "return 15;"));
add_filter("gform_tabindex_3", create_function("", "return 15;"));

// === Slideshow Post Type === //

function post_type_slideshow() {
register_post_type('slideshow', 
array(
'labels' => array(
	'name' => __( 'Homepage Slideshow' ),
	'singular_name' => __( 'Slideshow' ),
	'add_new' => __( 'Add New' ),
	'add_new_item' => __( 'Add New Slideshow' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit Slideshow' ),
	'new_item' => __( 'New Slideshow' ),
	'view' => __( 'View Slideshow' ),
	'view_item' => __( 'View Slideshow' ),
	'search_items' => __( 'Search Slideshows' ),
	'not_found' => __( 'No Slideshows found' ),
	'not_found_in_trash' => __( 'No Slideshows found in Trash' ),
	'parent' => __( 'Parent Slideshow' ),
),
	'singular_label' => __('Slideshow'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'taxonomies' => array( ''),
	'query_var' => true,
	'rewrite' => array( 'slug' => 'slideshow', 'with_front' => false ),
	'menu_position' => 6,
	'supports' => array('title','thumbnail')
)
        );
}
add_action('init', 'post_type_slideshow');


// === Audio Post Type === //

function post_type_audio() {
register_post_type('audio', 
array(
'labels' => array(
	'name' => __( 'Audio' ),
	'singular_name' => __( 'Audio' ),
	'add_new' => __( 'Add New' ),
	'add_new_item' => __( 'Add New Audio' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit Audio' ),
	'new_item' => __( 'New Audio' ),
	'view' => __( 'View Audio' ),
	'view_item' => __( 'View Audio' ),
	'search_items' => __( 'Search Audios' ),
	'not_found' => __( 'No Audios found' ),
	'not_found_in_trash' => __( 'No Audios found in Trash' ),
	'parent' => __( 'Parent Audio' ),
),
	'singular_label' => __('Audio'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'taxonomies' => array( ''),
	'query_var' => true,
	'rewrite' => array( 'slug' => 'audio', 'with_front' => false ),
	'menu_position' => 6,
	'supports' => array('title','thumbnail')
)
        );
}
add_action('init', 'post_type_audio');

// === Video Post Type === //

function post_type_video() {
register_post_type('video', 
array(
'labels' => array(
	'name' => __( 'Video' ),
	'singular_name' => __( 'Video' ),
	'add_new' => __( 'Add New' ),
	'add_new_item' => __( 'Add New Video' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit Video' ),
	'new_item' => __( 'New Video' ),
	'view' => __( 'View Video' ),
	'view_item' => __( 'View Video' ),
	'search_items' => __( 'Search Videos' ),
	'not_found' => __( 'No Videos found' ),
	'not_found_in_trash' => __( 'No Videos found in Trash' ),
	'parent' => __( 'Parent Video' ),
),
	'singular_label' => __('Video'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'taxonomies' => array( ''),
	'query_var' => true,
	'rewrite' => array( 'slug' => 'video', 'with_front' => false ),
	'menu_position' => 6,
	'supports' => array('title','thumbnail')
)
        );
}
add_action('init', 'post_type_video');

// === Asset Post Type === //

function asset_post_type() {
	$labels = array(
		'name'                => _x( 'Assets', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Asset', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Asset Library', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Asset:', 'text_domain' ),
		'all_items'           => __( 'All Assets', 'text_domain' ),
		'view_item'           => __( 'View Asset', 'text_domain' ),
		'add_new_item'        => __( 'Add New Asset', 'text_domain' ),
		'add_new'             => __( 'New Asset', 'text_domain' ),
		'edit_item'           => __( 'Edit Asset', 'text_domain' ),
		'update_item'         => __( 'Update Asset', 'text_domain' ),
		'search_items'        => __( 'Search Assets', 'text_domain' ),
		'not_found'           => __( 'No Assets found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No Assets found in Trash', 'text_domain' ),
	);

	$args = array(
		'label'               => __( 'Asset', 'text_domain' ),
		'description'         => __( 'Asset information pages', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array('title'),
		'taxonomies'          => array(),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 10,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'asset', $args );
}
// Hook into the 'init' action
add_action( 'init', 'asset_post_type', 0 );

// === Publication Post Type === //

function post_type_publication() {
register_post_type('publication', 
array(
'labels' => array(
	'name' => __( 'Publications' ),
	'singular_name' => __( 'Publication' ),
	'add_new' => __( 'Add New' ),
	'add_new_item' => __( 'Add New Publication' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit Publication' ),
	'new_item' => __( 'New Publication' ),
	'view' => __( 'View Publication' ),
	'view_item' => __( 'View Publication' ),
	'search_items' => __( 'Search Publications' ),
	'not_found' => __( 'No Publications found' ),
	'not_found_in_trash' => __( 'No Publications found in Trash' ),
	'parent' => __( 'Parent Publication' ),
),
	'singular_label' => __('Publication'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'taxonomies' => array( 'type'),
	'query_var' => true,
	'rewrite' => array( 'slug' => 'publication', 'with_front' => false ),
	'menu_position' => 6,
	'supports' => array('title','editor','thumbnail')
)
        );
}
add_action('init', 'post_type_publication');

// === Partner Post Type === //

function post_type_partner() {
register_post_type('partner', 
array(
'labels' => array(
	'name' => __( 'Partner Profiles' ),
	'singular_name' => __( 'Partner' ),
	'add_new' => __( 'Add New' ),
	'add_new_item' => __( 'Add New Partner' ),
	'edit' => __( 'Edit' ),
	'edit_item' => __( 'Edit Partner' ),
	'new_item' => __( 'New Partner' ),
	'view' => __( 'View Partner' ),
	'view_item' => __( 'View Partner' ),
	'search_items' => __( 'Search Partners' ),
	'not_found' => __( 'No Partners found' ),
	'not_found_in_trash' => __( 'No Partners found in Trash' ),
	'parent' => __( 'Parent Partner' ),
),
	'singular_label' => __('Partner'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'taxonomies' => array( 'partner-type'),
	'query_var' => true,
	'rewrite' => array( 'slug' => 'partner', 'with_front' => false ),
	'menu_position' => 4,
	'supports' => array('title','thumbnail')
)
        );
}
add_action('init', 'post_type_partner');

// Register Custom Post Type
function incentive_post_type() {
	$labels = array(
		'name'                => _x( 'Incentives', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Incentive', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Incentive', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Incentive:', 'text_domain' ),
		'all_items'           => __( 'All Incentives', 'text_domain' ),
		'view_item'           => __( 'View Incentive', 'text_domain' ),
		'add_new_item'        => __( 'Add New Incentive', 'text_domain' ),
		'add_new'             => __( 'New Incentive', 'text_domain' ),
		'edit_item'           => __( 'Edit Incentive', 'text_domain' ),
		'update_item'         => __( 'Update Incentive', 'text_domain' ),
		'search_items'        => __( 'Search Incentives', 'text_domain' ),
		'not_found'           => __( 'No Incentives found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No Incentives found in Trash', 'text_domain' ),
	);

	$args = array(
		'label'               => __( 'Incentive', 'text_domain' ),
		'description'         => __( 'Incentive information pages', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'taxonomies'          => array(),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'incentive', $args );
}
// Hook into the 'init' action
add_action( 'init', 'incentive_post_type', 0 );


// CUSTOM TAXONOMIES 

// Custom Taxonomies for Publications

function publications_custom_taxonomies() {
	register_taxonomy(
		'type',		// internal name = machine-readable taxonomy name
		'publication',		// object type = post, page, link, or custom post-type
		array(
			'hierarchical' => true,
			'label' => 'Publication Type',	// the human-readable taxonomy name
			'show_admin_column' => true,
			'query_var' => true,	// enable taxonomy-specific querying
			'rewrite' => array( 'slug' => 'type' ),	// pretty permalinks for your taxonomy?
		)
	);

}
add_action('init', 'publications_custom_taxonomies', 0);

// Custom Taxonomies for Partners

function partners_custom_taxonomies() {
	register_taxonomy(
		'partner-type',		// internal name = machine-readable taxonomy name
		'partner',		// object type = post, page, link, or custom post-type
		array(
			'hierarchical' => true,
			'label' => 'Category',	// the human-readable taxonomy name
			'show_admin_column' => true,
			'query_var' => true,	// enable taxonomy-specific querying
			'rewrite' => array( 'slug' => 'partner-type' ),	// pretty permalinks for your taxonomy?
		)
	);

}
add_action('init', 'partners_custom_taxonomies', 0);

/**
* Conditional function to check if post belongs to term in a custom taxonomy.
*
* @param    tax        string                taxonomy to which the term belons
* @param    term    int|string|array    attributes of shortcode
* @param    _post    int                    post id to be checked
* @return             BOOL                True if term is matched, false otherwise
*/
function pa_in_taxonomy($tax, $term, $_post = NULL) {
// if neither tax nor term are specified, return false
if ( !$tax || !$term ) { return FALSE; }
// if post parameter is given, get it, otherwise use $GLOBALS to get post
if ( $_post ) {
$_post = get_post( $_post );
} else {
$_post =& $GLOBALS['post'];
}
// if no post return false
if ( !$_post ) { return FALSE; }
// check whether post matches term belongin to tax
$return = is_object_in_term( $_post->ID, $tax, $term );
// if error returned, then return false
if ( is_wp_error( $return ) ) { return FALSE; }
return $return;
}

/* Usage:

if (pa_in_taxonomy('genres', 'western')) {
echo "Western films are great";
} else {
// do something else
} */

// Always show Kitchen Sink

function unhide_kitchensink( $args ) {
$args['wordpress_adv_hidden'] = false;
return $args;
}
add_filter( 'tiny_mce_before_init', 'unhide_kitchensink' );

//Custom Comment Template

function advanced_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
 
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
   <div class="comment-author vcard">
     <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
       <div class="comment-meta"<a href="<?php the_author_meta( 'user_url'); ?>"><?php printf(__('%s'), get_comment_author_link()) ?></a></div>
       <small><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?><?php edit_comment_link(__('(Edit)'),'  ','') ?></small>
     </div>
     <div class="clear"></div>
 
     <?php if ($comment->comment_approved == '0') : ?>
       <em><?php _e('Your comment is awaiting moderation.') ?></em>
       <br />
     <?php endif; ?>
 
     <div class="comment-text">	
         <?php comment_text() ?>
     </div>
 
   <div class="reply">
      <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
   </div>
   <div class="clear"></div>
<?php } ?>