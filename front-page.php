<?php
/**
 * The front page template file
 *
 * @package CORES_Theme
 * @version 3.0.0
 */

get_header();
?>

<main id="main-content" class="site-main">

    <!-- 1. HERO SLIDER SECTION -->
    <section id="home" class="hero-section">
        <!-- Slide Backgrounds (Dummies for now) -->
        <div class="hero-bg active" style="background-image: url('https://picsum.photos/1920/1080?random=1');"></div>
        <div class="hero-overlay"></div>
        
        <div class="hero-content">
            <h1 class="hero-title">Welcome to CORES</h1>
            <p class="hero-subtitle">Advancing Coastal Science through Innovation & Research</p>
            <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="cta-button">Learn More About Us</a>
        </div>
        
        <!-- Scroll Down Indicator (Optional) -->
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- 2. INTRO & ACTIVITIES SECTION -->
    <section id="intro" class="section-padding">
        <div class="container">
            <h2 class="section-title">What We Do</h2>
            <div class="intro-content">
                <p class="lead-text">
                    CORES (Coastal Researchers) is dedicated to understanding complex coastal dynamics. 
                    We combine field measurements, numerical modeling, and remote sensing to provide sustainable solutions for coastal management.
                </p>
                <div class="text-center" style="margin-bottom: 3rem;">
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="link-with-arrow">More about what we do <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Activities Gallery (Swiper) -->
            <h3 class="subsection-title">Recent Activities</h3>
            <div class="swiper activity-carousel">
                <div class="swiper-wrapper">
                    <!-- Dummy Slides -->
                    <?php for($i=1; $i<=5; $i++): ?>
                    <div class="swiper-slide">
                        <img src="https://picsum.photos/600/400?random=<?php echo $i; ?>0" alt="Activity <?php echo $i; ?>">
                        <div class="slide-caption">
                            <h4>Field Survey Activity <?php echo $i; ?></h4>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <!-- 3. NEWS CAROUSEL SECTION -->
    <section id="news" class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Latest News</h2>
            
            <div class="swiper news-carousel">
                <div class="swiper-wrapper">
                    <!-- Dummy News Items -->
                    <?php for($i=1; $i<=4; $i++): ?>
                    <div class="swiper-slide news-card">
                        <div class="news-image">
                            <img src="https://picsum.photos/600/400?random=<?php echo $i; ?>5" alt="News <?php echo $i; ?>">
                        </div>
                        <div class="news-content">
                            <span class="news-date"><?php echo date('M d, Y'); ?></span>
                            <h4>New Research Grant Awarded for Coastal Resilience Project</h4>
                            <p>We are excited to announce a new collaboration focused on sustainable coastal infrastructure...</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>