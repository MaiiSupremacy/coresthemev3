<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package CORES_Theme
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	
    <!-- Custom Cursor (Desktop Only) -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>

    <!-- Preloader -->
    <div class="loader" id="loader">
        <div class="loader-content">
            <div class="wave-loader">
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave-icon">
                    <i class="fas fa-water"></i>
                </div>
            </div>
            <div class="loader-text">CORES</div>
            <div class="loader-progress">
                <div class="loader-progress-bar"></div>
            </div>
        </div>
    </div>

	<header id="masthead" class="site-header">
        <nav id="navbar">
            <div class="logo-container">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link">
                    <!-- You can replace this with a dynamic logo from Customizer later -->
                    <span class="logo-text">CORES</span>
                </a>
            </div>

            <!-- Main Desktop Navigation -->
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary-menu',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'menu_class'     => 'main-nav-ul',
                    'fallback_cb'    => 'cores_menu_fallback', // Defined in functions.php
                )
            );
            ?>

            <!-- Mobile Hamburger -->
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>

        <!-- Mobile Slide Menu -->
        <div class="slide-menu" id="slideMenu">
            <div class="menu-close" id="menuClose">
                <i class="fas fa-times"></i>
            </div>
            
            <!-- 
                Updated Section:
                Memanggil sidebar.php untuk mengisi konten menu slide.
                Ini akan menampilkan navigasi mobile + kontak cepat + sosial media.
            -->
            <div class="slide-menu-content">
                <?php get_sidebar(); ?>
            </div>
        </div>
	</header><!-- #masthead -->