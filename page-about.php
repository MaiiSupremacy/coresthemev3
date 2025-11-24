<?php
/**
 * Template Name: About Page
 *
 * @package CORES_Theme
 * @version 3.0.0
 */

get_header();
?>

<main class="page-container">
    <div class="container">
        
        <!-- Page Header -->
        <header class="page-header text-center">
            <h1 class="page-title">About CORES</h1>
            <p class="page-subtitle">Our History, Vision, and Mission</p>
        </header>

        <!-- Content Section -->
        <div class="about-content-wrapper">
            <div class="row">
                <!-- Text Content -->
                <div class="col-text">
                    <h3>Our History</h3>
                    <p>Founded in 2022, Coastal Researchers (CORES) began as a small research group within the Water Resources Engineering Department at Brawijaya University. Our primary goal was to bridge the gap between theoretical coastal engineering and practical field applications.</p>
                    
                    <h3>Vision</h3>
                    <p>To be a leading center of excellence in coastal research, recognized globally for innovative solutions to climate change adaptation and coastal resilience.</p>

                    <h3>Mission</h3>
                    <ul>
                        <li>Conduct high-quality research in coastal dynamics and management.</li>
                        <li>Develop sustainable engineering solutions for coastal protection.</li>
                        <li>Educate the next generation of coastal engineers and scientists.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Supporting Gallery -->
        <div class="about-gallery-section section-padding">
            <h3 class="text-center mb-4">Life at CORES</h3>
            <div class="swiper about-carousel">
                <div class="swiper-wrapper">
                    <?php for($i=1; $i<=6; $i++): ?>
                    <div class="swiper-slide">
                        <img src="https://picsum.photos/800/600?random=<?php echo $i; ?>2" alt="About Image <?php echo $i; ?>">
                    </div>
                    <?php endfor; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>