<?php
/**
 * Search Results Template
 *
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

get_header();
?>

<section class="search-results">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <header class="page-header shadow-box mb-4">
                    <h1 class="page-title">
                        <?php
                        printf(
                            /* translators: %s: search query. */
                            esc_html__( 'Suchergebnisse für: %s', 'paxdes-portfolio' ),
                            '<span>' . get_search_query() . '</span>'
                        );
                        ?>
                    </h1>
                </header>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content', 'search' );
                    endwhile;

                    the_posts_pagination( array(
                        'mid_size'  => 2,
                        'prev_text' => esc_html__( '&laquo; Zurück', 'paxdes-portfolio' ),
                        'next_text' => esc_html__( 'Weiter &raquo;', 'paxdes-portfolio' ),
                    ) );
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif;
                ?>
            </div>

            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
get_footer();
