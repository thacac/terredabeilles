<?php
/**
 * webmasterblog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage webmasterblog
 * Use a find and replace
 * to change 'webmasterblog' to the name of your theme in all the template files.
 */
function webmasterblog_setup() {
	/*
	 * Make theme available for translation.
	 * 
	 */
	load_theme_textdomain( 'webmasterblog' );

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
	add_theme_support( 'post-thumbnails' );

	// Set the default content width.
	$GLOBALS['content_width'] = 1500;

	// This theme uses wp_nav_menu() in 3 locations.
	register_nav_menus(
		array(
			'principal'    => __( 'Menu principal', 'webmasterblog' ),
			'mobile' => __( 'Menu mobile', 'webmasterblog' ),
            'pied' => __( 'Menu pied de page', 'webmasterblog' ),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
    
}
add_action( 'after_setup_theme', 'webmasterblog_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function webmasterblog_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Colonne', 'webmasterblog' ),
			'id'            => 'colonne',
			'description'   => __( 'Widgets à afficher dans la colonne', 'webmasterblog' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

}
add_action( 'widgets_init', 'webmasterblog_widgets_init' );


/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function webmasterblog_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'webmasterblog_pingback_header' );


/**
 * Enqueue scripts and styles.
 */
function webmasterblog_scripts() {
    
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
    
    wp_enqueue_style( 'editor-style', get_template_directory_uri() . '/css/editor-style.css' );

	// Theme stylesheet.
	wp_enqueue_style( 'webmasterblog-style', get_stylesheet_uri() );
	
	// Theme script.
    wp_enqueue_script( 'jquery' );
    
    // wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js','','',true );  

}
add_action( 'wp_enqueue_scripts', 'webmasterblog_scripts' );

/**
 * Résumé de l'article.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Taille d'image personnalisée.
 */
add_image_size( 'custom-size', 750, 370, true );

/**Logo custom */

function webmasterblog_custom_logo_setup() {
	$defaults = array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );