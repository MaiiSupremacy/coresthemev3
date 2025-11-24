<?php
/**
 * Template Name: Supervision Page
 *
 * @package CORES_Theme
 * @version 3.0.0
 */

get_header();
?>

<main class="page-container">
    <div class="container">
        
        <header class="page-header text-center">
            <h1 class="page-title">Student Supervision</h1>
            <p class="page-subtitle">Opportunities for Undergraduate and Graduate Thesis</p>
        </header>

        <div class="supervision-content">
            <div class="guidelines-box">
                <h3><i class="fas fa-graduation-cap"></i> Student Guidelines</h3>
                <ul>
                    <li>Must have completed Coastal Engineering coursework.</li>
                    <li>Proposal submission deadline: End of each semester.</li>
                    <li>Commitment to field surveys required.</li>
                </ul>
            </div>

            <div class="topics-section section-padding">
                <h3 class="text-center mb-4">Available Topics</h3>
                <div class="topics-grid">
                    <div class="topic-card">
                        <h4>Sediment Transport</h4>
                        <p>Modeling sediment movement in estuarine environments.</p>
                    </div>
                    <div class="topic-card">
                        <h4>Green Infrastructure</h4>
                        <p>Design of eco-friendly breakwaters.</p>
                    </div>
                    <div class="topic-card">
                        <h4>Climate Adaptation</h4>
                        <p>Assessing sea-level rise impacts on coastal settlements.</p>
                    </div>
                </div>
            </div>

            <!-- Alumni/Student Stories Carousel -->
            <div class="alumni-stories section-padding">
                <h3 class="text-center mb-4">Student Stories</h3>
                <div class="swiper alumni-carousel">
                    <div class="swiper-wrapper">
                        <?php for($i=1; $i<=3; $i++): ?>
                        <div class="swiper-slide testimonial-card">
                            <div class="student-img">
                                <img src="https://picsum.photos/100/100?random=<?php echo $i; ?>9" alt="Student" class="rounded-circle">
                            </div>
                            <p>"Working with CORES gave me practical experience in field measurement that was invaluable for my career."</p>
                            <h5>Student Name <?php echo $i; ?></h5>
                            <span class="year">Class of 2024</span>
                        </div>
                        <?php endfor; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>