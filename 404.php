<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package CORES_Theme
 * @version 3.0.0
 */

get_header();
?>

<main class="error-404-container">
    <div class="container text-center">
        
        <div class="error-content fade-in-up">
            <h1 class="error-code">404</h1>
            <h2 class="error-title">Halaman Tidak Ditemukan</h2>
            <p class="error-text">
                Maaf, halaman yang Anda cari mungkin telah dipindahkan atau dihapus.<br>
                Mari kembali ke beranda untuk menemukan informasi yang Anda butuhkan.
            </p>
            
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="cta-button">
                <i class="fas fa-home"></i> Kembali ke Beranda
            </a>
        </div>

    </div>

    <!-- Decorative Background Wave -->
    <div class="footer-wave" style="opacity: 0.5; bottom: 0; position: absolute;">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="#e0e1dd"></path>
        </svg>
    </div>
</main>

<style>
    /* Inline style khusus 404 agar layout center vertikal */
    .error-404-container {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        background: var(--white);
        padding-top: var(--header-height);
    }
    .error-code {
        font-size: 8rem;
        font-weight: 800;
        color: var(--accent);
        line-height: 1;
        margin-bottom: 0;
        text-shadow: 0 10px 30px rgba(5, 191, 219, 0.3);
    }
    .error-title {
        font-size: 2rem;
        color: var(--primary);
        margin-bottom: 1rem;
    }
    .error-text {
        font-size: 1.1rem;
        color: var(--dark);
        margin-bottom: 2rem;
        opacity: 0.8;
    }
</style>

<?php get_footer(); ?>