<?php
/**
 * Archive Template for Projects
 *
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

get_header();
?>

<section class="projects-archive">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading text-center" data-aos="fade-up">
                    <h6>
                        <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/star-2.png' ); ?>" alt="Star">
                        <?php esc_html_e( 'Portfolio', 'paxdes-portfolio' ); ?>
                    </h6>
                    <h1><?php esc_html_e( 'Alle Projekte', 'paxdes-portfolio' ); ?></h1>
                    <?php
                    $archive_description = get_the_archive_description();
                    if ( $archive_description ) :
                    ?>
                        <div class="archive-description"><?php echo wp_kses_post( $archive_description ); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
            ?>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="project-box shadow-box">
                        <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="project-img">
                                <?php the_post_thumbnail( 'paxdes-portfolio-thumb' ); ?>
                            </div>
                        <?php endif; ?>
                        <div class="project-info">
                            <h3><?php the_title(); ?></h3>
                            <?php
                            $categories = get_the_terms( get_the_ID(), 'project_category' );
                            if ( $categories && ! is_wp_error( $categories ) ) :
                                $cat_names = wp_list_pluck( $categories, 'name' );
                            ?>
                                <p class="project-category"><?php echo esc_html( implode( ', ', $cat_names ) ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php
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
    </div>
</section>

<?php
get_footer();
