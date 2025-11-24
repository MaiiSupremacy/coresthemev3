<?php
/**
 * Template Name: People Page
 *
 * @package CORES_Theme
 * @version 3.0.0
 */

get_header();
?>

<main class="page-container">
    <div class="container">
        
        <header class="page-header text-center">
            <h1 class="page-title">Our Team</h1>
            <p class="page-subtitle">Meet the experts behind our research</p>
        </header>

        <!-- Lecturers Section -->
        <section class="people-section">
            <h2 class="section-title-small">Faculty & Supervisors</h2>
            <div class="people-grid">
                <!-- Dummy Data based on Main Page 3.html -->
                <?php 
                $lecturers = [
                    'Dr. Ir. Runi Asmaranto', 'Dr. Ir. Very Dermawan', 
                    'Dr. Sebrian Mirdeklis', 'Muhammad Amar Sajali, Ph.D.'
                ];
                foreach($lecturers as $name): 
                ?>
                <div class="people-card">
                    <div class="people-img">
                        <img src="https://picsum.photos/300/300?random=<?php echo rand(1,100); ?>" alt="<?php echo $name; ?>">
                        <!-- Hover Overlay -->
                        <div class="people-overlay">
                            <a href="mailto:<?php echo strtolower(str_replace(' ', '.', $name)); ?>@gmail.com" class="email-link">
                                <i class="fas fa-envelope"></i> Email Me
                            </a>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fas fa-graduation-cap"></i></a> <!-- Scopus/Scholar -->
                            </div>
                        </div>
                    </div>
                    <div class="people-info">
                        <h4><?php echo $name; ?></h4>
                        <span class="role">Lecturer / Supervisor</span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Researchers Section -->
        <section class="people-section section-padding-top">
            <h2 class="section-title-small">Research Team</h2>
            <div class="people-grid">
                <?php 
                $researchers = [
                    'Shareef Abdurrahim', 'Aan Mustaqim', 'Bilan Ayu Ardita',
                    'Maharani Dewi', 'Laode Almay', 'Lhefiardo Syajidan'
                ];
                foreach($researchers as $name): 
                ?>
                <div class="people-card">
                    <div class="people-img">
                        <img src="https://picsum.photos/300/300?random=<?php echo rand(101,200); ?>" alt="<?php echo $name; ?>">
                        <div class="people-overlay">
                            <a href="mailto:researcher@gmail.com" class="email-link"><i class="fas fa-envelope"></i> Email Me</a>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="people-info">
                        <h4><?php echo $name; ?></h4>
                        <span class="role">Researcher</span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>