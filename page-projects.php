<?php
/**
 * Template Name: Projects Page
 *
 * @package CORES_Theme
 * @version 3.0.0
 */

get_header();
?>

<main class="page-container">
    <div class="container">
        
        <header class="page-header text-center">
            <h1 class="page-title">Projects</h1>
            <p class="page-subtitle">Ongoing and Completed Research Initiatives</p>
        </header>

        <!-- Project Gallery -->
        <div class="swiper project-carousel mb-5">
            <div class="swiper-wrapper">
                <?php for($i=1; $i<=4; $i++): ?>
                <div class="swiper-slide">
                    <img src="https://picsum.photos/800/500?random=<?php echo $i; ?>3" alt="Project <?php echo $i; ?>">
                    <div class="slide-caption">
                        <h4>Project Site: Location <?php echo $i; ?></h4>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <!-- Project List -->
        <div class="project-grid">
            <?php for($j=1; $j<=3; $j++): ?>
            <div class="project-card">
                <div class="project-status">Ongoing</div>
                <h3>Integrated Coastal Management of Clungup Mangrove Conservation</h3>
                <p>A multi-year project focused on restoring mangrove habitats and developing eco-tourism infrastructure.</p>
                <a href="#" class="details-link">View Details</a>
            </div>
            <?php endfor; ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>