<?php
/**
 * Template part for displaying a message when no content is found
 *
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<section class="no-results not-found shadow-box">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e( 'Nichts gefunden', 'paxdes-portfolio' ); ?></h1>
    </header>

    <div class="page-content">
        <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
            <p>
                <?php
                printf(
                    wp_kses(
                        /* translators: 1: link to WP admin new post page. */
                        __( 'Bereit, Ihren ersten Beitrag zu veröffentlichen? <a href="%1$s">Legen Sie hier los</a>.', 'paxdes-portfolio' ),
                        array(
                            'a' => array(
                                'href' => array(),
                            ),
                        )
                    ),
                    esc_url( admin_url( 'post-new.php' ) )
                );
                ?>
            </p>
        <?php elseif ( is_search() ) : ?>
            <p><?php esc_html_e( 'Leider konnte nichts zu Ihrer Suchanfrage gefunden werden. Bitte versuchen Sie es mit anderen Suchbegriffen.', 'paxdes-portfolio' ); ?></p>
            <?php get_search_form(); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Es scheint, dass hier nichts gefunden werden konnte. Möchten Sie eine Suche starten?', 'paxdes-portfolio' ); ?></p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </div>
</section>
