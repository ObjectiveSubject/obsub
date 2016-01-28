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
	add_theme_support( 'post-thumbnails', array(
		'post', 'case_study', 'bio'
	) );

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

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . "/js/jquery-2.1.4.js", array(), '', true );
	wp_register_script( 'mapboxgl', get_template_directory_uri() . "/js/mapboxgl.js", array(), '', true );
	wp_register_script( 'velocity', get_template_directory_uri() . "/js/velocity.min.js", array('jquery'), '', true );
	wp_register_script( 'velocity_ui', get_template_directory_uri() . "/js/velocity.ui.min.js", array('jquery'), '', true );
	wp_register_script( 'jquery_color', get_template_directory_uri() . "/js/jquery.color-2.1.0.js", array('jquery'), '', true );
	wp_register_script( 'slick', get_template_directory_uri() . "/js/slick.js", array('jquery'), '', true );
	
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . "/js/modernizr.min.js", array(), '', false );
	if ( is_page('contact') ) { wp_enqueue_script( 'mapboxgl' ); }
	wp_enqueue_script( 'velocity' );
	wp_enqueue_script( 'velocity_ui' );
	wp_enqueue_script( 'jquery_color' );
	wp_enqueue_script( 'slick' );
	wp_enqueue_script( 'os', get_template_directory_uri() . "/js/os.js", array('jquery'), '', true );
	wp_enqueue_script( 'core', get_template_directory_uri() . "/js/core{$postfix}.js", array('jquery'), '', true );

	wp_localize_script( "core",
        'osAdmin',
        array(
            'ajaxUrl' => admin_url( 'admin-ajax.php' ), //url for php file that process ajax request to WP
            'nonce' => wp_create_nonce( "contact_form_nonce" ),// this is a unique token to prevent form hijacking
        )
    );
}
add_action( 'wp_enqueue_scripts', 'obsub_scripts' );




/** Form Handling.
--------------------------------------------------*/
require get_template_directory() . '/includes/forms.php';


/** Custom Admin style.
--------------------------------------------------*/
require get_template_directory() . '/includes/admin.php';


/** Custom template tags for this theme.
--------------------------------------------------*/
require get_template_directory() . '/includes/template-tags.php';


/** Custom Post Types
--------------------------------------------------*/
require get_template_directory() . '/includes/post-types.php';


/** Custom Taxonomies
--------------------------------------------------*/
require get_template_directory() . '/includes/taxonomies.php';

