<?php
/**
 * Template Name: Projekte
 * 
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

get_header();
?>

<section class="projects-page-content">
    <div class="container">
        <!-- Hero Section -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="page-hero shadow-box" data-aos="fade-up">
                    <?php
                    $bg_pattern = paxdes_get_option( 'paxdes_bg_pattern' );
                    $bg_url = $bg_pattern ? wp_get_attachment_image_url( $bg_pattern, 'full' ) : PAXDES_THEME_URI . '/assets/images/bg1.png';
                    ?>
                    <img decoding="async" src="<?php echo esc_url( $bg_url ); ?>" alt="BG" class="bg-img">
                    
                    <?php
                    $projects_hero_id = paxdes_get_option( 'paxdes_projects_hero_image' );
                    if ( $projects_hero_id ) :
                    ?>
                        <div class="hero-image-wrapper">
                            <?php echo wp_get_attachment_image( $projects_hero_id, 'full', false, array(
                                'class' => 'hero-image',
                                'alt' => 'Projekte',
                                'decoding' => 'async'
                            ) ); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="hero-content text-center">
                        <h1 class="page-title">Projekte</h1>
                        <p class="lead">Ausgewählte Arbeiten und Referenzen</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Intro -->
        <div class="row mb-5">
            <div class="col-lg-10 mx-auto">
                <div class="intro-box shadow-box text-center" data-aos="fade-up">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <div class="content-wrapper">
                        <p class="lead">Eine Auswahl meiner erfolgreich umgesetzten Projekte. Jedes Projekt wurde mit höchster Sorgfalt, technischer Exzellenz und Fokus auf die individuellen Anforderungen des Kunden realisiert.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter (optional) -->
        <div class="row mb-4">
            <div class="col-lg-12">
                <div class="project-filter text-center" data-aos="fade-up">
                    <button class="filter-btn active" data-filter="*">Alle Projekte</button>
                    <button class="filter-btn" data-filter=".webentwicklung">Webentwicklung</button>
                    <button class="filter-btn" data-filter=".plattform">Plattform-Architektur</button>
                    <button class="filter-btn" data-filter=".sicherheit">IT-Sicherheit</button>
                    <button class="filter-btn" data-filter=".ecommerce">E-Commerce</button>
                </div>
            </div>
        </div>

        <!-- Projects Grid -->
        <div class="row projects-grid">
            <?php
            $projects = new WP_Query( array(
                'post_type'      => 'project',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ) );

            if ( $projects->have_posts() ) :
                while ( $projects->have_posts() ) : $projects->the_post();
                    $categories = get_the_terms( get_the_ID(), 'project_category' );
                    $cat_classes = '';
                    if ( $categories && ! is_wp_error( $categories ) ) {
                        $cat_slugs = wp_list_pluck( $categories, 'slug' );
                        $cat_classes = implode( ' ', $cat_slugs );
                    }
            ?>
                <div class="col-md-6 col-lg-4 mb-4 project-item <?php echo esc_attr( $cat_classes ); ?>" data-aos="fade-up">
                    <div class="project-box shadow-box">
                        <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                        <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                        
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="project-img">
                                <?php the_post_thumbnail( 'paxdes-portfolio-thumb' ); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="project-info">
                            <h3><?php the_title(); ?></h3>
                            <?php if ( $categories && ! is_wp_error( $categories ) ) : ?>
                                <p class="project-category">
                                    <?php echo esc_html( implode( ', ', wp_list_pluck( $categories, 'name' ) ) ); ?>
                                </p>
                            <?php endif; ?>
                            <div class="project-excerpt">
                                <?php echo wp_trim_words( get_the_excerpt(), 15 ); ?>
                            </div>
                            <div class="project-link">
                                <span>Details ansehen <i class="iconoir-arrow-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Fallback: Beispiel-Projekte anzeigen
                $example_projects = array(
                    array(
                        'title'    => 'E-Commerce Plattform',
                        'category' => 'Webentwicklung, E-Commerce',
                        'desc'     => 'Entwicklung einer skalierbaren E-Commerce-Lösung mit individuellen Features und nahtloser Payment-Integration.',
                        'class'    => 'webentwicklung ecommerce',
                    ),
                    array(
                        'title'    => 'Unternehmens-Dashboard',
                        'category' => 'Plattform-Architektur',
                        'desc'     => 'Aufbau einer komplexen Dashboard-Lösung für Echtzeit-Datenvisualisierung und Business Intelligence.',
                        'class'    => 'plattform',
                    ),
                    array(
                        'title'    => 'Security Audit System',
                        'category' => 'IT-Sicherheit',
                        'desc'     => 'Implementierung eines automatisierten Security-Audit-Systems mit Penetrationstest-Funktionen.',
                        'class'    => 'sicherheit',
                    ),
                    array(
                        'title'    => 'Corporate Website',
                        'category' => 'Webentwicklung',
                        'desc'     => 'Moderne Unternehmenswebsite mit CMS-Integration, mehrsprachiger Unterstützung und SEO-Optimierung.',
                        'class'    => 'webentwicklung',
                    ),
                    array(
                        'title'    => 'SaaS-Plattform',
                        'category' => 'Plattform-Architektur',
                        'desc'     => 'Entwicklung einer Multi-Tenant SaaS-Plattform mit Subscription-Management und API-Integration.',
                        'class'    => 'plattform',
                    ),
                    array(
                        'title'    => 'Online-Shop Modernisierung',
                        'category' => 'E-Commerce, Webentwicklung',
                        'desc'     => 'Migration und Modernisierung eines bestehenden Online-Shops auf moderne Technologien.',
                        'class'    => 'ecommerce webentwicklung',
                    ),
                );

                foreach ( $example_projects as $index => $project ) :
                    $delay = ( $index % 3 ) * 100;
            ?>
                <div class="col-md-6 col-lg-4 mb-4 project-item <?php echo esc_attr( $project['class'] ); ?>" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $delay ); ?>">
                    <div class="project-box shadow-box">
                        <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                        
                        <div class="project-img placeholder">
                            <div class="placeholder-content">
                                <i class="iconoir-code"></i>
                            </div>
                        </div>
                        
                        <div class="project-info">
                            <h3><?php echo esc_html( $project['title'] ); ?></h3>
                            <p class="project-category"><?php echo esc_html( $project['category'] ); ?></p>
                            <div class="project-excerpt">
                                <?php echo esc_html( $project['desc'] ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>

        <!-- CTA Section -->
        <div class="row mt-5">
            <div class="col-lg-8 mx-auto">
                <div class="cta-box shadow-box text-center" data-aos="fade-up">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <h2>Haben Sie ein Projekt im Kopf?</h2>
                    <p>Lassen Sie uns gemeinsam Ihre Vision in die Realität umsetzen.</p>
                    <a href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>" class="theme-btn">
                        Projekt besprechen
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Simple Filter Functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectItems = document.querySelectorAll('.project-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');

            projectItems.forEach(item => {
                if (filter === '*') {
                    item.style.display = 'block';
                } else {
                    if (item.classList.contains(filter.substring(1))) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                }
            });
        });
    });
});
</script>

<?php
get_footer();
