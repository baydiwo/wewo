<?php
/**
 * Functions file.
 *
 * @package Themes
 * @author Tokopress
 *
 */

if ( ! isset( $content_width ) ) $content_width = 960;

define( 'THEME_NAME' , 'eventica-wp' );
define( 'THEME_VERSION', '1.8.0' );

define( 'THEME_DIR' , get_template_directory() );
define( 'THEME_URI', get_template_directory_uri() );

include_once( trailingslashit( THEME_DIR ) . 'inc/libs/option-framework/options-framework.php' );
include_once( trailingslashit( THEME_DIR ) . 'inc/libs/tokopress-general.php' );
include_once( trailingslashit( THEME_DIR ) . 'inc/libs/tokopress-post-meta.php' );
include_once( trailingslashit( THEME_DIR ) . 'inc/libs/tokopress-breadcrumb.php' );
include_once( trailingslashit( THEME_DIR ) . 'inc/setup.php' );

/**
 * Theme Scripts
 */
function tokopress_scripts() {

	// CMB2 styles
	// $styles = apply_filters( 'cmb2_style_dependencies', array() );
	// wp_register_style( 'cmb2-styles', THEME_URI . '/inc/libs/cmb2/cmb2.min.css', $styles );

	// Fonts
	// wp_enqueue_style( 'tokopress-fonts', 'http://fonts.googleapis.com/css?family=Noto+Sans:400,700|Raleway:400,700', array(), THEME_VERSION, 'all' );

    // custom style
    // wp_enqueue_style( 'custom-style', THEME_URI . '/assets/css/style.css', array(), '', 'all' );
	// Superfish
	wp_enqueue_script( 'tokopress-superfish-js', THEME_URI . '/js/superfish.js', array( 'jquery' ), '', true );

	// Slidebars
	wp_enqueue_script( 'tokopress-slidebars-js', THEME_URI . '/js/slidebars.js', array( 'jquery' ), '', true );

	// Sticky
	if ( of_get_option( 'tokopress_sticky_header' ) ) {
		wp_enqueue_script( 'tokopress-sticky-js', THEME_URI . '/js/jquery.sticky.js', array( 'jquery' ), '', true );
	}

	// Magnific Popup
	wp_register_script( 'tokopress-magnific-popup', THEME_URI . '/js/jquery.magnific-popup.min.js', array( 'jquery' ), '', true );
	if ( is_singular('tribe_events') ) {
		wp_enqueue_script( 'tokopress-magnific-popup' );
	}

	// OWL Carousel
	wp_register_script( 'tokopress-owl-js', THEME_URI . '/js/owl.carousel.min.js', array( 'jquery' ), '2.0', true );
	if( class_exists( 'woocommerce' ) && is_product() ) {
		wp_enqueue_script( 'tokopress-owl-js' );
	}
	if( is_page_template( 'page_home_event.php' ) ) {
		wp_enqueue_script( 'tokopress-owl-js' );
	}

	// Comments Reply
	if ( is_singular() ) {
		wp_enqueue_script( "comment-reply" );
	}

	// Gmaps
	if( is_page_template( 'page_contact.php' ) ) {
  		wp_enqueue_script( 'tokopress-maps-js', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true', array( 'jquery' ), '3', true );
  		wp_enqueue_script( 'tokopress-gmaps-js', trailingslashit( THEME_URI ) . 'js/gmaps.js', array( 'jquery' ), '0.4.12', true );
  	}

}
add_action( 'wp_enqueue_scripts', 'tokopress_scripts' );

/* This is needed to make it fully compatible with Visual Composer */
function tokopress_scripts_late() {
	// Theme script
	wp_enqueue_script( 'tokopress-js', THEME_URI . '/js/eventica.js', array( 'jquery' ), THEME_VERSION, true );
}
add_action( 'wp_footer', 'tokopress_scripts_late', 11 );

function tokopress_include_file( $file ) {
	include_once( $file );
}
function tokopress_require_file( $file ) {
	require_once( $file );
}

//set custom style to last
function high_priority_style() {
  wp_enqueue_style( 'custom-style', THEME_URI . '/assets/css/custom-style.css', array(), '', 'all' );
}
add_action('wp_enqueue_scripts', 'high_priority_style', '999');

//register custom post type for ads
/*
* Creating a function to create our CPT
*/
function custom_post_type() {
// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Banners', 'Post Type General Name', 'eventica-wp' ),
		'singular_name'       => _x( 'Banner', 'Post Type Singular Name', 'eventica-wp' ),
		'menu_name'           => __( 'Banners', 'eventica-wp' ),
		'parent_item_colon'   => __( 'Parent Banner', 'eventica-wp' ),
		'all_items'           => __( 'All Banners', 'eventica-wp' ),
		'view_item'           => __( 'View Banner', 'eventica-wp' ),
		'add_new_item'        => __( 'Add New Banner', 'eventica-wp' ),
		'add_new'             => __( 'Add New', 'eventica-wp' ),
		'edit_item'           => __( 'Edit Banner', 'eventica-wp' ),
		'update_item'         => __( 'Update Banner', 'eventica-wp' ),
		'search_items'        => __( 'Search Banner', 'eventica-wp' ),
		'not_found'           => __( 'Not Found', 'eventica-wp' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'eventica-wp' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'banners', 'eventica-wp' ),
		'description'         => __( 'Banners in homepage', 'eventica-wp' ),
		'labels'              => $labels,
		'menu_icon'			  => __( 'dashicons-welcome-view-site', 'eventica-wp'),
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		// 'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 4,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	// Registering your Custom Post Type
	register_post_type( 'banners', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );

add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

function add_my_post_types_to_query( $query ) {
	if ( is_home() && $query->is_main_query() )
		$query->set( 'post_type', array( 'post', 'banners' ) );
	return $query;
}

add_image_size( 'custom-size', 360, 220, true );
add_image_size( 'article-size', 650, 480, true );

// function get_custom_cat_template($single_template) {
// 	global $post;
// 	if (in_category('video')) {
// 		$single_template = get_template_directory_uri().'/single-video.php';
// 	}
// 	return $single_template;
// }
// add_filter("single_template","get_custom_cat_template");
