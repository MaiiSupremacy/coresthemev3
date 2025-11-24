<?php
/**
 * CORES Theme V3 Functions and Definitions
 *
 * @package CORES_Theme
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * 1. Theme Setup
 */
function cores_theme_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Register Navigation Menus
	register_nav_menus(
		array(
			'primary-menu' => esc_html__( 'Primary Menu', 'cores-theme' ),
			'footer-menu'  => esc_html__( 'Footer Menu', 'cores-theme' ),
		)
	);

	// HTML5 Support
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
    
    // Add support for wide blocks (Gutenberg)
    add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'cores_theme_setup' );

/**
 * 2. Enqueue Scripts and Styles
 */
function cores_enqueue_assets() {
	// 1. Google Fonts (Poppins)
	wp_enqueue_style( 'cores-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap', array(), null );

	// 2. Font Awesome 6 (Icons)
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );

	// 3. Leaflet CSS (Map)
	wp_enqueue_style( 'leaflet-css', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css', array(), '1.9.4' );

	// 4. Swiper CSS (Carousel)
	wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0' );

	// 5. Main Stylesheet
	// Versioning uses filemtime to prevent cache issues during development
	wp_enqueue_style( 'cores-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ) );

	// --- SCRIPTS ---

	// 6. Leaflet JS
	wp_enqueue_script( 'leaflet-js', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js', array(), '1.9.4', true );

	// 7. Swiper JS
	wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true );

    // 8. Chart.js (For Research Data Visualization)
    wp_enqueue_script( 'chart-js', 'https://cdn.jsdelivr.net/npm/chart.js', array(), '4.4.0', true );

	// 9. Main JS
    // Note: We create a dummy dependency array first, actual file will be created in Phase 4
	wp_enqueue_script( 'cores-main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery', 'leaflet-js', 'swiper-js', 'chart-js' ), filemtime( get_template_directory() . '/js/main.js' ), true );

    // 10. Localize Script (Pass PHP data to JS)
    wp_localize_script( 'cores-main-js', 'coresData', array(
        'siteUrl' => home_url( '/' ),
        'themeUrl' => get_template_directory_uri(),
    ));
}
add_action( 'wp_enqueue_scripts', 'cores_enqueue_assets' );

/**
 * 3. Register Custom Post Types (CPT)
 * Ini biar lu bisa isi data Team, Project, dll via Dashboard WordPress dengan rapi.
 */
function cores_register_cpts() {
    // Team Members CPT
    register_post_type( 'team_member', array(
        'labels' => array( 'name' => 'Team Members', 'singular_name' => 'Team Member' ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-groups',
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ), // Editor for Bio
        'rewrite' => array( 'slug' => 'team' ),
    ));

    // Projects CPT
    register_post_type( 'project', array(
        'labels' => array( 'name' => 'Projects', 'singular_name' => 'Project' ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'rewrite' => array( 'slug' => 'projects' ),
    ));

    // Publications CPT
    register_post_type( 'publication', array(
        'labels' => array( 'name' => 'Publications', 'singular_name' => 'Publication' ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-book',
        'supports' => array( 'title', 'editor', 'custom-fields' ), // Title=Paper Name, Editor=Abstract
        'rewrite' => array( 'slug' => 'publications' ),
    ));
    
    // Milestones CPT (For Research Timeline)
    register_post_type( 'milestone', array(
        'labels' => array( 'name' => 'Milestones', 'singular_name' => 'Milestone' ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-flag',
        'supports' => array( 'title', 'editor', 'thumbnail' ), // Title=Event Name, Editor=Description
    ));
}
add_action( 'init', 'cores_register_cpts' );

/**
 * 4. Custom Menu Fallback (Home, About, etc.)
 * Kalau user belum set menu di WP Admin, tampilin default link ini.
 */
function cores_menu_fallback() {
    echo '<ul class="main-nav-ul">';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/about/' ) ) . '">About</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/people/' ) ) . '">People</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/research/' ) ) . '">Research</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/publications/' ) ) . '">Publications</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/projects/' ) ) . '">Projects</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/supervision/' ) ) . '">Supervision</a></li>';
    echo '</ul>';
}