<?php
/**
 * obsub functions and definitions
 *
 * @package obsub
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'obsub_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function obsub_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on obsub, use a find and replace
	 * to change 'obsub' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'obsub', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'obsub' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

}
endif; // obsub_setup
add_action( 'after_setup_theme', 'obsub_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function obsub_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'obsub' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'obsub_widgets_init' );

/** Enqueue scripts and styles.
--------------------------------------------------*/
function obsub_scripts() {
	$postfix = ( defined( 'WP_DEBUG' ) && true === WP_DEBUG ) ? '' : '.min';

	wp_enqueue_style( 'obsub-style', get_template_directory_uri() . "/style{$postfix}.css" );

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . "/js/modernizr.min.js", array(), '', false );
	wp_enqueue_script( 'core', get_template_directory_uri() . "/js/core{$postfix}.js", array('jquery'), '', true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'obsub_scripts' );





/** Custom Admin Dashboard styles.
-------------------------------------------------- */
function load_dashboard_style() {
  wp_register_style( 'admin_dashboard_style', get_template_directory_uri() . '/admin/dashboard/admin-dashboard.css', false, '1.0.0' );
  wp_enqueue_style( 'admin_dashboard_style' );
}
add_action( 'admin_enqueue_scripts', 'load_dashboard_style' );


/** Custom Admin Color Scheme.
-------------------------------------------------- */
require get_template_directory() . '/admin/color-scheme/admin-color-scheme.php';

/** Set custom color scheme as default. ---------- */
function set_default_admin_color($user_id) {
  $args = array(
      'ID' => $user_id,
      'admin_color' => 'obsub'
  );
  wp_update_user( $args );
}
add_action('user_register', 'set_default_admin_color');


/** Custom Admin Login.
-------------------------------------------------- */
function load_login_style() {
	wp_register_style( 'admin_login_style', get_template_directory_uri() . '/admin/login/admin-login.css', false, '1.0.0' );
  wp_enqueue_style( 'admin_login_style' );
}
function login_logo_url() { return home_url(); }
function login_logo_url_title() { return get_bloginfo('name'); }
add_action( 'login_enqueue_scripts', 'load_login_style' );
add_filter( 'login_headerurl', 'login_logo_url' );
add_filter( 'login_headertitle', 'login_logo_url_title' );


/** Add Custom Options pages
-------------------------------------------------- */
// if( function_exists('acf_add_options_page') ) {
	
// 	acf_add_options_page(array(
// 		'page_title' 	=> 'Theme General Settings',
// 		'menu_title'	=> 'Theme Settings',
// 		'menu_slug' 	=> 'theme-general-settings',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false
// 	));
	
// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'Theme Header Settings',
// 		'menu_title'	=> 'Header',
// 		'parent_slug'	=> 'theme-general-settings',
// 	));
	
// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'Theme Footer Settings',
// 		'menu_title'	=> 'Footer',
// 		'parent_slug'	=> 'theme-general-settings',
// 	));
	
// }


/** Custom template tags for this theme.
--------------------------------------------------*/
require get_template_directory() . '/includes/template-tags.php';


/** Custom Post Types
--------------------------------------------------*/
require get_template_directory() . '/includes/post-types.php';


/** Custom Taxonomies
--------------------------------------------------*/
require get_template_directory() . '/includes/taxonomies.php';

