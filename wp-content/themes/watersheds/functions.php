<?php
/**
 * watershed functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, watershed_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'watershed_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */


/** Tell WordPress to run watershed_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'watershed_setup' );

if ( ! function_exists( 'watershed_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override watershed_setup() in a child theme, add your own watershed_setup to your child theme's
 * functions.php file.
 *
 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses add_custom_background() To add support for a custom background.
 * @uses add_editor_style() To style the visual editor.
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_custom_image_header() To add support for a custom header.
 * @uses register_default_headers() To register the default custom header images provided with the theme.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Ten 1.0
 */
function watershed_setup() {

	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'watershed' ),
		'secondary' => __( 'Footer Navigation', 'watershed' ),
		'partners' => __( 'Partner Navigation', 'watershed' ),
	) );

}
endif;

/**
 * Extend class in order to get descriptions to show up in menus
 */
class description_walker extends Walker_Nav_Menu
{
      function start_el(&$output, $item, $depth, $args)
      {
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $item->classes ) ? array() : (array) $item->classes;

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';

           $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

           $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

           $prepend = '';
           $append = '';
           $description  = ! empty( $item->description ) ? '<div>'.esc_attr( $item->description ).'</div>' : '';
           /* replace asterisks with spans in order to get seperate line items */
           $description = str_replace('*', '<p>', $description);

           if($depth != 0)
           {
                     $description = $append = $prepend = "";
           }

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
            $item_output .= $description.$args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
}

/**
 * Breadcrumbs 
*/
function dimox_breadcrumbs() {
 
  $delimiter = '&raquo;';
  $home = 'Home'; // text for the 'Home' link
  $before = '<span class="current">'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb
 
  if ( !is_home() && !is_front_page() || is_paged() ) {
 
    echo '<div id="crumbs">';
 
    global $post;
    $homeLink = get_bloginfo('url');
    echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
 
    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
 
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;
 
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;
 
    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;
 
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo $before . get_the_title() . $after;
      }
 
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;
 
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && !$post->post_parent ) {
      echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;
 
    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;
 
    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;
 
    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }
 
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
 
    echo '</div>';
 
  }
}

/**
 * get the attachment pdf. using this in resources.php to get all the respective pdf links in the loop with a button image. also can use a shortcode to get it on any page/poost if needed, though would have to be extended/customized further
 */
function get_attachment_pdf($echo = false){
	$sAttachmentString = "<div class='documentIconsWrapper'> \n";
	if ( $files = get_children(array(   //do only if there are attachments of these qualifications
	 'post_parent' => get_the_ID(),
	 'post_type' => 'attachment',
	 'numberposts' => -1,
	 'post_mime_type' => 'application/pdf',  //MIME Type condition
	 ))){
	 foreach( $files as $file ){ //setup array for more than one file attachment
		$file_link = wp_get_attachment_url($file->ID);    //get the url for linkage
		$file_name_array=explode("/",$file_link);
		$file_name=array_reverse($file_name_array);  //creates an array out of the url and grabs the filename
		$sAttachmentString .= "<p><a href='$file_link'>";
		$sAttachmentString .= "<img src='".get_bloginfo('template_directory')."/images/btn-download.png' title='Download this article'/>";
		$sAttachmentString .= "</a></p>";
		}
	}
$sAttachmentString .= "</div>";
if($echo){
    echo $sAttachmentString;
  }
  return $sAttachmentString;
}
add_shortcode('attachment pdf', 'get_attachment_pdf');

/**
 * Sets the post excerpt length to 40 characters.
 *
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 *
 * @return int
 */
function watershed_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'watershed_excerpt_length' );

/**
 * Returns a "Continue Reading" link for excerpts
 *
 * @return string "Continue Reading" link
 */
function watershed_continue_reading_link() {
	return ' <a href="'. get_permalink() . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'watershed' ) . '</a>';
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and watershed_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 *
 * @return string An ellipsis
 */
function watershed_auto_excerpt_more( $more ) {
	return ' &hellip;' . watershed_continue_reading_link();
}
add_filter( 'excerpt_more', 'watershed_auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 *
 * @return string Excerpt with a pretty "Continue Reading" link
 */
function watershed_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= watershed_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'watershed_custom_excerpt_more' );

/**
 * Remove inline styles printed when the gallery shortcode is used.
 *
 * Galleries are styled by the theme in Twenty Ten's style.css.
 *
 * @return string The gallery style filter, with the styles themselves removed.
 */
function watershed_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
add_filter( 'gallery_style', 'watershed_remove_gallery_css' );

if ( ! function_exists( 'watershed_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own watershed_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 */
function watershed_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>
			<?php printf( __( '%s <span class="says">says:</span>', 'watershed' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div><!-- .comment-author .vcard -->
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em><?php _e( 'Your comment is awaiting moderation.', 'watershed' ); ?></em>
			<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s', 'watershed' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'watershed' ), ' ' );
			?>
		</div><!-- .comment-meta .commentmetadata -->

		<div class="comment-body"><?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->
	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'watershed' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'watershed'), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override watershed_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 * @uses register_sidebar
 */
function watershed_widgets_init() {
	// sidebar for Lessons Learned
	register_sidebar( array(
		'name' => __( 'Post Widget Area', 'watershed' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The post widget area', 'watershed' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	// 2nd sidebar widget for Lessons Learned
	//register_sidebar( array(
	//	'name' => __( 'Post Widget Area 2', 'watershed' ),
	//	'id' => 'secondary-widget-area',
	//	'description' => __( 'The 2nd post widget area', 'watershed' ),
	//	'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	//	'after_widget' => '</li>',
	//	'before_title' => '<h3 class="widget-title">',
	//	'after_title' => '</h3>',
	//) );
	
	// sidebar for Pages
	register_sidebar( array(
		'name' => __( 'Page Widget Area', 'watershed' ),
		'id' => 'page-widget-area',
		'description' => __( 'The page widget area', 'watershed' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	

	// located in the footer
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'watershed' ),
		'id' => 'footer-widget-area',
		'description' => __( 'Footer widget area', 'watershed' ),
		'before_widget' => '<div class="copyright">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// located in the header
	register_sidebar( array(
		'name' => __( 'Header Widget Area', 'watershed' ),
		'id' => 'header-widget-area',
		'description' => __( 'Header Widget', 'watershed' ),
		'before_widget' => '<div class="header-flag">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );

}
/** Register sidebars by running watershed_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'watershed_widgets_init' );

/** 
 * Register custom post type for Resources
 *
 */
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'watershed_pub',
		array(
			'labels' => array(
				'name' => __( 'Publications' ),
				'singular_name' => __( 'Publication' )
			),
			'public' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array('title','editor', 'thumbnail',  'page-attributes'),
			'menu_position' => 4,
			'rewrite' => array('slug' => 'publications')
			
		)
	);
}

/** 
 * Redefine gallery shortcode to support link=none
 *
 */
add_shortcode( 'gallery', 'new_gallery_shortcode' );

/**
* The Gallery shortcode - modified for link="none".
*/
function new_gallery_shortcode($attr) {
	global $post, $wp_locale;
	
	$output = gallery_shortcode($attr);
	
	// remove link and remove <br style="clear">
	if($attr['link'] == "none") {
		$output = preg_replace(array('/<a[^>]*>/', '/<\/a>/'), '', $output);
	}
	
	$output = preg_replace(array('/<br style=(.*)>/mi'), '', $output);

	return $output;
}

/** 
 * Exclude the thumbnail from gallery
 *
 */
function exclude_thumbnail_from_gallery($null, $attr) {
    if (!$thumbnail_ID = get_post_thumbnail_id())
        return $null; // no point carrying on if no thumbnail ID

    // temporarily remove the filter, otherwise endless loop!
    remove_filter('post_gallery', 'exclude_thumbnail_from_gallery');

    // pop in our excluded thumbnail
    if (!isset($attr['exclude']) || empty($attr['exclude']))
        $attr['exclude'] = array($thumbnail_ID);
    elseif (is_array($attr['exclude']))
        $attr['exclude'][] = $thumbnail_ID;

    // now manually invoke the shortcode handler
    $gallery = gallery_shortcode($attr);

    // add the filter back
    add_filter('post_gallery', 'exclude_thumbnail_from_gallery', 10, 2);

    // return output to the calling instance of gallery_shortcode()
    return $gallery;
}
add_filter('post_gallery', 'exclude_thumbnail_from_gallery', 10, 2);