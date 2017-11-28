<?php
/**
 * agi-wp-project functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package agi-wp-project
 */

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

if ( ! function_exists( 'agiwpproject_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function agiwpproject_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on agi-wp-project, use a find and replace
	 * to change 'agiwpproject' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'agiwpproject', get_template_directory() . '/languages' );

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
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */

    add_theme_support('post-thumbnails');
    add_image_size('small', 220, 152, true); // Small Thumbnail
    add_image_size('service-thumb', 171, 205, true); // Small Thumbnail
    


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'agiwpproject' ),
	) );

    function my_walker_nav_menu_start_el($item_output, $item, $depth, $args) {
        $menu_locations = get_nav_menu_locations();
    
        if ( has_term($menu_locations['primary'], 'nav_menu', $item) ) {
           $item_output = preg_replace('/<a /', '<a class="anim-link" ', $item_output, 1);
        }
    
        return $item_output;
    }
    add_filter('walker_nav_menu_start_el', 'my_walker_nav_menu_start_el', 10, 4);


	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'agiwpproject_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // agiwpproject_setup
add_action( 'after_setup_theme', 'agiwpproject_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function agiwpproject_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'agiwpproject_content_width', 640 );
}
add_action( 'after_setup_theme', 'agiwpproject_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function agiwpproject_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'agiwpproject' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'agiwpproject_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function agiwpproject_scripts() {

	    wp_enqueue_style( 'agi-wp-project-style', get_template_directory_uri() . '/dist/styles/style.min.css' );
	    wp_enqueue_script( 'agi-wp-project-scripts-lib', get_template_directory_uri() . '/dist/scripts/scripts.lib.min.js', array('jquery'), '1.1', true );
		//wp_enqueue_script( 'agi-wp-project-scripts-single', get_template_directory_uri() . '/dist/scripts/scripts.single.min.js', array('jquery'), '1.1', true );
		wp_enqueue_script( 'agi-wp-project-scripts-custom', get_template_directory_uri() . '/dist/scripts/scripts.custom.min.js', array('jquery'), '1.1', true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'agiwpproject_scripts' );
/**
 * Custom Functions
 */
require_once( __DIR__ . '/includes/custom-functions.php');



