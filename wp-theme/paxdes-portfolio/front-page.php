<?php
/**
 * Front Page Template (Startseite)
 *
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

get_header();
?>

<!-- Hero / About Section -->
<section class="about-area">
    <div class="container">
        <div class="row">
            <!-- Hero Box -->
            <div class="col-md-6">
                <div data-aos="zoom-in" class="about-me-box-wrap">
                    <div class="about-me-box shadow-box">
                        <?php
                        $about_page_id = get_option( 'page_for_posts' );
                        if ( ! $about_page_id ) {
                            $about_page = get_page_by_path( 'ueber-mich' );
                            if ( ! $about_page ) {
                                $about_page = get_page_by_path( 'about' );
                            }
                            if ( $about_page ) {
                                $about_page_id = $about_page->ID;
                            }
                        }
                        if ( $about_page_id ) :
                        ?>
                            <a class="overlay-link" href="<?php echo esc_url( get_permalink( $about_page_id ) ); ?>"></a>
                        <?php endif; ?>
                        
                        <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">

                        <div class="img-box">
                            <?php
                            $hero_image_id = paxdes_get_option( 'paxdes_hero_image' );
                            if ( $hero_image_id ) {
                                echo wp_get_attachment_image( $hero_image_id, 'full', false, array( 'class' => 'proj-img', 'alt' => 'Ahmad Al Khalaf' ) );
                            } else {
                                echo '<img decoding="async" class="proj-img" src="' . esc_url( PAXDES_THEME_URI . '/assets/images/me.png' ) . '" alt="Ahmad Al Khalaf">';
                            }
                            ?>
                        </div>
                        <div class="infos">
                            <h5><?php echo esc_html( paxdes_get_option( 'paxdes_hero_title', 'Webentwickler & Systemingenieur' ) ); ?></h5>
                            <h1><?php echo esc_html( paxdes_get_option( 'paxdes_hero_name', 'Ahmad Al Khalaf' ) ); ?></h1>
                            <p><?php echo esc_html( paxdes_get_option( 'paxdes_hero_description', 'Spezialisiert auf moderne Webanwendungen, Plattform-Architektur und IT-Sicherheit.' ) ); ?></p>
                            <a href="#" class="about-btn">
                                <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/icon.svg' ); ?>" alt="Star">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Featured Banner & Credentials -->
            <div class="col-md-6">
                <!-- Featured Banner -->
                <div class="about-credentials-wrap">
                    <div data-aos="zoom-in">
                        <div class="banner shadow-box">
                            <div class="marquee">
                                <div style="animation: marquee 8s linear infinite;">
                                    <?php for ( $i = 0; $i < 7; $i++ ) : ?>
                                        <span><?php esc_html_e( 'AKTUELLE PROJEKTE UND', 'paxdes-portfolio' ); ?> <b><?php esc_html_e( 'REFERENZEN', 'paxdes-portfolio' ); ?></b><img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/star1.svg' ); ?>" alt=""></span>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Credentials & Services Boxes -->
                <div class="row mt-24">
                    <div class="col-md-6">
                        <div data-aos="zoom-in" class="about-crenditials-box">
                            <div class="info-box shadow-box h-full">
                                <?php
                                $credentials_page = get_page_by_path( 'qualifikationen' );
                                if ( ! $credentials_page ) {
                                    $credentials_page = get_page_by_path( 'credentials' );
                                }
                                if ( $credentials_page ) :
                                ?>
                                    <a class="overlay-link" href="<?php echo esc_url( get_permalink( $credentials_page->ID ) ); ?>"></a>
                                <?php endif; ?>
                                
                                <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                                <img decoding="async" class="proj-img" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/sign.png' ); ?>" alt="">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="infos">
                                        <h5><?php esc_html_e( 'MEHR ÜBER MICH', 'paxdes-portfolio' ); ?></h5>
                                        <h2><?php esc_html_e( 'Qualifikationen', 'paxdes-portfolio' ); ?></h2>
                                    </div>
                                    <?php if ( $credentials_page ) : ?>
                                        <a href="<?php echo esc_url( get_permalink( $credentials_page->ID ) ); ?>" class="about-btn">
                                            <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/icon.svg' ); ?>" alt="Star">
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div data-aos="zoom-in" class="about-project-box">
                            <div class="info-box shadow-box h-full">
                                <?php
                                $services_page = get_page_by_path( 'leistungen' );
                                if ( ! $services_page ) {
                                    $services_page = get_page_by_path( 'services' );
                                }
                                if ( $services_page ) :
                                ?>
                                    <a class="overlay-link" href="<?php echo esc_url( get_permalink( $services_page->ID ) ); ?>"></a>
                                <?php endif; ?>
                                
                                <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="infos">
                                        <h5><?php esc_html_e( 'SPEZIALISIERUNG', 'paxdes-portfolio' ); ?></h5>
                                        <h2><?php esc_html_e( 'Leistungen', 'paxdes-portfolio' ); ?></h2>
                                    </div>
                                    <?php if ( $services_page ) : ?>
                                        <a href="<?php echo esc_url( get_permalink( $services_page->ID ) ); ?>" class="about-btn">
                                            <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/icon.svg' ); ?>" alt="Star">
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="service-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading" data-aos="fade-up">
                    <h6>
                        <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/star-2.png' ); ?>" alt="Star">
                        <?php esc_html_e( 'Leistungen', 'paxdes-portfolio' ); ?>
                    </h6>
                    <h2><?php esc_html_e( 'Meine Spezialisierungen', 'paxdes-portfolio' ); ?></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $services = new WP_Query( array(
                'post_type'      => 'service',
                'posts_per_page' => 6,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ) );

            if ( $services->have_posts() ) :
                while ( $services->have_posts() ) : $services->the_post();
            ?>
                <div class="col-md-4" data-aos="fade-up">
                    <div class="service-box shadow-box">
                        <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                        <div class="icon-box">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'service-icon' ) ); ?>
                            <?php else : ?>
                                <i class="iconoir-code"></i>
                            <?php endif; ?>
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Fallback: Standard-Services anzeigen
                $default_services = array(
                    array(
                        'title' => 'Webentwicklung',
                        'desc'  => 'Entwicklung moderner, responsiver Websites und Webanwendungen mit neuesten Technologien.',
                    ),
                    array(
                        'title' => 'Plattform-Architektur',
                        'desc'  => 'Konzeption und Aufbau skalierbarer Web-Plattformen und SaaS-Lösungen.',
                    ),
                    array(
                        'title' => 'IT-Sicherheit',
                        'desc'  => 'Implementierung von Sicherheitskonzepten, Hardening und Schutzmaßnahmen.',
                    ),
                    array(
                        'title' => 'Performance-Optimierung',
                        'desc'  => 'Analyse und Optimierung der Website-Performance für maximale Geschwindigkeit.',
                    ),
                    array(
                        'title' => 'UI/UX Design',
                        'desc'  => 'Gestaltung benutzerfreundlicher Interfaces mit Fokus auf User Experience.',
                    ),
                    array(
                        'title' => 'System-Integration',
                        'desc'  => 'Integration verschiedener Systeme und APIs für nahtlose Workflows.',
                    ),
                );

                foreach ( $default_services as $service ) :
            ?>
                <div class="col-md-4" data-aos="fade-up">
                    <div class="service-box shadow-box">
                        <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                        <div class="icon-box">
                            <i class="iconoir-code"></i>
                        </div>
                        <h3><?php echo esc_html( $service['title'] ); ?></h3>
                        <p><?php echo esc_html( $service['desc'] ); ?></p>
                    </div>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="projects-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading" data-aos="fade-up">
                    <h6>
                        <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/star-2.png' ); ?>" alt="Star">
                        <?php esc_html_e( 'Portfolio', 'paxdes-portfolio' ); ?>
                    </h6>
                    <h2><?php esc_html_e( 'Ausgewählte Projekte', 'paxdes-portfolio' ); ?></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $projects = new WP_Query( array(
                'post_type'      => 'project',
                'posts_per_page' => 6,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ) );

            if ( $projects->have_posts() ) :
                while ( $projects->have_posts() ) : $projects->the_post();
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
                wp_reset_postdata();
            endif;
            ?>
        </div>

        <?php if ( $projects->have_posts() ) : ?>
        <div class="row">
            <div class="col-md-12 text-center mt-4">
                <?php
                $projects_page = get_page_by_path( 'projekte' );
                if ( ! $projects_page ) {
                    $projects_page = get_page_by_path( 'work' );
                }
                if ( $projects_page ) :
                ?>
                    <a href="<?php echo esc_url( get_permalink( $projects_page->ID ) ); ?>" class="theme-btn">
                        <?php esc_html_e( 'Alle Projekte ansehen', 'paxdes-portfolio' ); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading text-center" data-aos="fade-up">
                    <h6>
                        <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/star-2.png' ); ?>" alt="Star">
                        <?php esc_html_e( 'Kontakt', 'paxdes-portfolio' ); ?>
                    </h6>
                    <h2><?php esc_html_e( 'Lassen Sie uns zusammenarbeiten', 'paxdes-portfolio' ); ?></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6" data-aos="fade-up">
                <div class="contact-info shadow-box">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <h3><?php esc_html_e( 'Kontaktinformationen', 'paxdes-portfolio' ); ?></h3>
                    <ul class="contact-details">
                        <?php
                        $email = paxdes_get_option( 'paxdes_contact_email', 'info@paxdes.com' );
                        $phone = paxdes_get_option( 'paxdes_contact_phone' );
                        ?>
                        <?php if ( $email ) : ?>
                        <li>
                            <i class="iconoir-mail"></i>
                            <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
                        </li>
                        <?php endif; ?>
                        <?php if ( $phone ) : ?>
                        <li>
                            <i class="iconoir-phone"></i>
                            <a href="tel:<?php echo esc_attr( str_replace( ' ', '', $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <?php echo paxdes_social_links(); ?>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-up">
                <div class="contact-form shadow-box">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <?php
                    // Contact Form 7 Shortcode oder Standard-Formular
                    if ( function_exists( 'wpcf7_contact_form' ) ) {
                        echo do_shortcode( '[contact-form-7 id="contact-form" title="Kontaktformular"]' );
                    } else {
                        echo '<p>' . esc_html__( 'Bitte installieren Sie Contact Form 7 für das Kontaktformular.', 'paxdes-portfolio' ) . '</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
