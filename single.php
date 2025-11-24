<?php
/**
 * The template for displaying all single posts
 *
 * @package CORES_Theme
 * @version 3.0.0
 */

get_header();
?>

<!-- Reading Progress Bar -->
<div id="progress-container">
    <div id="progress-bar"></div>
</div>

<main class="page-container">
    
    <?php while ( have_posts() ) : the_post(); ?>

    <!-- Article Hero -->
    <div class="article-hero">
        <div class="container">
            <div class="article-meta text-center mb-3">
                <span class="post-cat"><?php the_category(', '); ?></span>
                <span class="post-date"><?php echo get_the_date(); ?></span>
            </div>
            <h1 class="article-title text-center"><?php the_title(); ?></h1>
        </div>
    </div>

    <!-- Featured Image -->
    <?php if ( has_post_thumbnail() ) : ?>
    <div class="container mb-5">
        <div class="article-thumbnail">
            <?php the_post_thumbnail('full'); ?>
        </div>
    </div>
    <?php endif; ?>

    <!-- Article Content -->
    <div class="container">
        <div class="article-content-wrapper">
            
            <!-- Main Text -->
            <article class="entry-content">
                <?php the_content(); ?>
            </article>

            <!-- Share & Tags -->
            <div class="article-footer mt-5">
                <div class="tags">
                    <?php the_tags('<i class="fas fa-tags"></i> ', ', ', ''); ?>
                </div>
                <div class="share-buttons">
                    <span>Share:</span>
                    <a href="#" class="share-icon"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="share-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="share-icon"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

        </div>
    </div>

    <!-- Related Posts -->
    <section class="related-posts section-padding bg-light mt-5">
        <div class="container">
            <h3 class="text-center mb-4">Berita Lainnya</h3>
            <div class="row">
                <?php
                $related = new WP_Query( array(
                    'category__in' => wp_get_post_categories(get_the_ID()),
                    'posts_per_page' => 3,
                    'post__not_in' => array(get_the_ID())
                ) );

                if( $related->have_posts() ) : 
                    while( $related->have_posts() ) : $related->the_post(); ?>
                    <div class="col-md-4">
                        <div class="news-card">
                            <div class="news-image">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php else: ?>
                                    <img src="https://picsum.photos/600/400?random=<?php echo rand(1,100); ?>" alt="Dummy">
                                <?php endif; ?>
                            </div>
                            <div class="news-content">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <span class="news-date"><?php echo get_the_date(); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <?php endwhile; ?>

</main>

<style>
    /* Progress Bar Style */
    #progress-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: transparent;
        z-index: 1001; /* Above Navbar */
    }
    #progress-bar {
        height: 100%;
        background: var(--accent);
        width: 0%;
        transition: width 0.1s;
    }
    
    /* Article Layout */
    .article-title { font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 1rem; }
    .article-meta span { margin: 0 10px; font-weight: 500; color: var(--secondary); text-transform: uppercase; font-size: 0.9rem; }
    .article-thumbnail img { width: 100%; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
    .article-content-wrapper { max-width: 800px; margin: 0 auto; }
    .entry-content { font-size: 1.1rem; line-height: 1.8; color: var(--dark); }
    .entry-content p { margin-bottom: 1.5rem; }
</style>

<script>
    // Simple script for Reading Progress Bar
    window.onscroll = function() {
        let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        let scrolled = (winScroll / height) * 100;
        document.getElementById("progress-bar").style.width = scrolled + "%";
    };
</script>

<?php get_footer(); ?>