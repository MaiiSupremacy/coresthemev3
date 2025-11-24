<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package CORES_Theme
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

	<footer id="colophon" class="site-footer">
        
        <!-- Decorative Wave Top -->
        <div class="footer-wave">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="#ffffff"></path>
            </svg>
        </div>

        <div class="footer-content">
            
            <!-- About Column -->
            <div class="footer-section">
                <h3>About CORES</h3>
                <p>
                    Coastal Researchers (CORES) is a dedicated team at Brawijaya University focused on advancing coastal science through innovative research and technology.
                </p>
                <div class="social-icons" style="margin-top: 1rem;">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <!-- Quick Links Column -->
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/research/' ) ); ?>">Research Focus</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/publications/' ) ); ?>">Publications</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/people/' ) ); ?>">Our Team</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/supervision/' ) ); ?>">Student Opportunities</a></li>
                </ul>
            </div>

            <!-- Contact Column -->
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>
                    <strong>Address:</strong><br>
                    Water Resources Engineering Dept.<br>
                    Brawijaya University, Malang, Indonesia
                </p>
                <p>
                    <strong>Email:</strong><br>
                    coastalresearchers@gmail.com
                </p>
            </div>

        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date( 'Y' ); ?> CORES Research Group. All rights reserved.</p>
        </div>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>