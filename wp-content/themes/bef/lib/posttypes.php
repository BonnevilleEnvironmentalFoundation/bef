<?php 

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
?>