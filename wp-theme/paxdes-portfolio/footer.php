<?php
/**
 * Footer Template
 *
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<!-- Footer -->
<footer class="footer-area">
    <div class="container">
        <div class="footer-content text-center">

            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                    <img src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/logo.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
                </a>
            <?php endif; ?>

            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer',
                'menu_class'     => 'footer-menu',
                'container'      => false,
                'fallback_cb'    => false,
            ) );
            ?>

            <p class="copyright">
                &copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php esc_html_e( 'Alle Rechte vorbehalten', 'paxdes-portfolio' ); ?> 
                <span><?php bloginfo( 'name' ); ?></span>
            </p>
        </div>
    </div>
</footer>

</main>

<?php wp_footer(); ?>
</body>
</html>
