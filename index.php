<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package CORES_Theme
 * @version 3.0.0
 */

get_header();
?>

<main class="page-container">
    <div class="container">
        
        <header class="page-header text-center mb-5">
            <h1 class="page-title">
                <?php 
                if ( is_home() && ! is_front_page() ) {
                    single_post_title();
                } else {
                    esc_html_e( 'Latest News', 'cores-theme' );
                }
                ?>
            </h1>
            <p class="page-subtitle">Updates from our research team</p>
        </header>

        <?php if ( have_posts() ) : ?>

            <div class="row">
                <?php
                // Start the Loop
                while ( have_posts() ) : the_post(); 
                ?>
                    <div class="col-md-4 mb-4">
                        <article id="post-<?php the_ID(); ?>" <?php post_class('news-card h-100'); ?>>
                            <div class="news-image">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
                                    </a>
                                <?php else : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="https://picsum.photos/600/400?random=<?php echo get_the_ID(); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="news-content p-4">
                                <span class="news-date d-block mb-2 text-muted small"><?php echo get_the_date(); ?></span>
                                <h4 class="news-title mb-3">
                                    <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <div class="news-excerpt mb-3 text-secondary">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="read-more font-weight-bold text-accent">
                                    Read More <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="pagination-wrapper text-center mt-5">
                <?php
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '<i class="fas fa-chevron-left"></i>',
                    'next_text' => '<i class="fas fa-chevron-right"></i>',
                ) );
                ?>
            </div>

        <?php else : ?>

            <div class="text-center py-5">
                <h3>No posts found</h3>
                <p>It seems we can't find what you're looking for.</p>
            </div>

        <?php endif; ?>

    </div>
</main>

<style>
    /* Styling khusus untuk grid blog/news agar konsisten */
    .news-card {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid rgba(0,0,0,0.05);
    }
    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    .news-image img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .news-title {
        font-size: 1.25rem;
        font-weight: 700;
        line-height: 1.4;
    }
    .news-title a:hover {
        color: var(--accent) !important;
    }
    .pagination .page-numbers {
        display: inline-block;
        padding: 10px 15px;
        margin: 0 5px;
        border-radius: 50px;
        background: #f5f5f5;
        color: var(--dark);
        font-weight: 600;
        text-decoration: none;
        transition: 0.3s;
    }
    .pagination .page-numbers.current,
    .pagination .page-numbers:hover {
        background: var(--accent);
        color: #fff;
    }
</style>

<?php get_footer(); ?>