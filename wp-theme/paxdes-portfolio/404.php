<?php
/**
 * 404 Error Page Template
 *
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

get_header();
?>

<section class="error-404 not-found">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="error-content shadow-box text-center" data-aos="fade-up">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    
                    <h1 class="error-code">404</h1>
                    <h2 class="error-title"><?php esc_html_e( 'Seite nicht gefunden', 'paxdes-portfolio' ); ?></h2>
                    <p class="error-description">
                        <?php esc_html_e( 'Die von Ihnen gesuchte Seite existiert leider nicht oder wurde verschoben.', 'paxdes-portfolio' ); ?>
                    </p>

                    <div class="error-actions">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="theme-btn">
                            <i class="iconoir-home"></i>
                            <?php esc_html_e( 'Zur Startseite', 'paxdes-portfolio' ); ?>
                        </a>
                    </div>

                    <div class="error-search mt-5">
                        <h3><?php esc_html_e( 'Oder versuchen Sie eine Suche:', 'paxdes-portfolio' ); ?></h3>
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
