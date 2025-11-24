<?php
/**
 * The sidebar containing the main widget area.
 * In CORES V3, this is used as the Mobile Slide Menu content.
 *
 * @package CORES_Theme
 * @version 3.0.0
 */
?>

<div class="mobile-menu-wrapper">
    
    <h3 class="mobile-menu-title">Menu</h3>
    
    <!-- Mobile Navigation -->
    <nav class="mobile-nav">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary-menu',
            'container'      => false,
            'menu_class'     => 'mobile-menu-ul',
            'fallback_cb'    => 'cores_menu_fallback', // Fallback to our custom function
        ) );
        ?>
    </nav>

    <!-- Quick Contact Widget -->
    <div class="mobile-widget mt-5">
        <h4>Quick Contact</h4>
        <ul class="contact-list">
            <li><i class="fas fa-envelope"></i> coastalresearchers@gmail.com</li>
            <li><i class="fas fa-map-marker-alt"></i> Malang, Indonesia</li>
        </ul>
    </div>

    <!-- Social Icons -->
    <div class="mobile-social mt-4">
        <a href="#"><i class="fab fa-linkedin"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
    </div>

</div>

<style>
    /* Styles for Sidebar content */
    .mobile-menu-wrapper { padding: 1rem; color: #fff; }
    .mobile-menu-title { font-size: 1.5rem; border-bottom: 1px solid rgba(255,255,255,0.2); padding-bottom: 10px; margin-bottom: 20px; }
    .mobile-menu-ul { list-style: none; padding: 0; margin: 0; }
    .mobile-menu-ul li { margin-bottom: 15px; }
    .mobile-menu-ul a { color: #fff; font-size: 1.1rem; font-weight: 500; text-decoration: none; display: block; transition: 0.3s; }
    .mobile-menu-ul a:hover { transform: translateX(10px); color: var(--accent); }
    
    .mobile-widget h4 { font-size: 1.2rem; color: var(--accent); margin-bottom: 10px; }
    .contact-list { list-style: none; padding: 0; font-size: 0.9rem; opacity: 0.8; }
    .contact-list li { margin-bottom: 8px; }
    .contact-list i { width: 20px; color: var(--accent); }
    
    .mobile-social a { color: #fff; font-size: 1.2rem; margin-right: 15px; transition: 0.3s; }
    .mobile-social a:hover { color: var(--accent); }
</style>