<?php
/**
 * Template Name: Publications Page
 *
 * @package CORES_Theme
 * @version 3.0.0
 */

get_header();
?>

<main class="page-container">
    <div class="container">
        
        <header class="page-header text-center">
            <h1 class="page-title">Publications</h1>
            <p class="page-subtitle">Academic Journals, Conference Papers, and Reports</p>
        </header>

        <div class="publication-list">
            <!-- Dummy Publication Items -->
            <?php for($i=1; $i<=5; $i++): ?>
            <div class="pub-item">
                <div class="pub-icon"><i class="fas fa-file-alt"></i></div>
                <div class="pub-details">
                    <h4>Analysis of Coastal Vulnerability Index in South Malang</h4>
                    <p class="pub-meta"><strong>Authors:</strong> Asmaranto, R., Dermawan, V. | <strong>Journal:</strong> International Journal of Coastal Science | <strong>Year:</strong> 2024</p>
                    <a href="#" class="read-paper-btn">Read Paper <i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            <?php endfor; ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>