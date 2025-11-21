<?php
/**
 * Single Project Template
 *
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

get_header();
?>

<section class="project-detail-area">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
        ?>
            <article id="project-<?php the_ID(); ?>" <?php post_class( 'project-detail' ); ?>>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="project-content shadow-box" data-aos="fade-up">
                            <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                            
                            <header class="project-header">
                                <h1 class="project-title"><?php the_title(); ?></h1>
                                <?php
                                $categories = get_the_terms( get_the_ID(), 'project_category' );
                                if ( $categories && ! is_wp_error( $categories ) ) :
                                    $cat_names = wp_list_pluck( $categories, 'name' );
                                ?>
                                    <p class="project-category"><?php echo esc_html( implode( ', ', $cat_names ) ); ?></p>
                                <?php endif; ?>
                            </header>

                            <?php if ( has_post_thumbnail() ) : ?>
                            <div class="project-featured-image">
                                <?php the_post_thumbnail( 'paxdes-project-large' ); ?>
                            </div>
                            <?php endif; ?>

                            <div class="project-description">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="project-info-sidebar shadow-box" data-aos="fade-up">
                            <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                            
                            <h3><?php esc_html_e( 'Projekt-Details', 'paxdes-portfolio' ); ?></h3>
                            
                            <ul class="project-meta">
                                <?php
                                $project_url = get_post_meta( get_the_ID(), 'project_url', true );
                                $project_client = get_post_meta( get_the_ID(), 'project_client', true );
                                $project_date = get_post_meta( get_the_ID(), 'project_date', true );
                                $project_technologies = get_post_meta( get_the_ID(), 'project_technologies', true );
                                ?>

                                <?php if ( $project_client ) : ?>
                                <li>
                                    <strong><?php esc_html_e( 'Kunde:', 'paxdes-portfolio' ); ?></strong>
                                    <span><?php echo esc_html( $project_client ); ?></span>
                                </li>
                                <?php endif; ?>

                                <?php if ( $project_date ) : ?>
                                <li>
                                    <strong><?php esc_html_e( 'Datum:', 'paxdes-portfolio' ); ?></strong>
                                    <span><?php echo esc_html( $project_date ); ?></span>
                                </li>
                                <?php endif; ?>

                                <?php if ( $categories && ! is_wp_error( $categories ) ) : ?>
                                <li>
                                    <strong><?php esc_html_e( 'Kategorie:', 'paxdes-portfolio' ); ?></strong>
                                    <span><?php echo esc_html( implode( ', ', $cat_names ) ); ?></span>
                                </li>
                                <?php endif; ?>

                                <?php if ( $project_technologies ) : ?>
                                <li>
                                    <strong><?php esc_html_e( 'Technologien:', 'paxdes-portfolio' ); ?></strong>
                                    <span><?php echo esc_html( $project_technologies ); ?></span>
                                </li>
                                <?php endif; ?>

                                <?php if ( $project_url ) : ?>
                                <li class="project-link">
                                    <a href="<?php echo esc_url( $project_url ); ?>" target="_blank" rel="noopener noreferrer" class="theme-btn">
                                        <i class="iconoir-link"></i>
                                        <?php esc_html_e( 'Projekt ansehen', 'paxdes-portfolio' ); ?>
                                    </a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>

            <?php
            // Navigation zu vorherigem/nächstem Projekt
            $prev_post = get_previous_post();
            $next_post = get_next_post();
            
            if ( $prev_post || $next_post ) :
            ?>
            <div class="project-navigation">
                <div class="row">
                    <?php if ( $prev_post ) : ?>
                    <div class="col-md-6">
                        <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="nav-project prev-project shadow-box">
                            <span class="nav-label"><?php esc_html_e( 'Vorheriges Projekt', 'paxdes-portfolio' ); ?></span>
                            <h4><?php echo esc_html( get_the_title( $prev_post->ID ) ); ?></h4>
                        </a>
                    </div>
                    <?php endif; ?>

                    <?php if ( $next_post ) : ?>
                    <div class="col-md-6">
                        <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="nav-project next-project shadow-box">
                            <span class="nav-label"><?php esc_html_e( 'Nächstes Projekt', 'paxdes-portfolio' ); ?></span>
                            <h4><?php echo esc_html( get_the_title( $next_post->ID ) ); ?></h4>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        <?php
        endwhile;
        ?>
    </div>
</section>

<?php
get_footer();
