<?php
/**
 * Template Name: Leistungen
 * 
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

get_header();
?>

<section class="services-page-content">
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
                    $services_hero_id = paxdes_get_option( 'paxdes_services_hero_image' );
                    if ( $services_hero_id ) :
                    ?>
                        <div class="hero-image-wrapper">
                            <?php echo wp_get_attachment_image( $services_hero_id, 'full', false, array(
                                'class' => 'hero-image',
                                'alt' => 'Leistungen',
                                'decoding' => 'async'
                            ) ); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="hero-content text-center">
                        <h1 class="page-title">Leistungen</h1>
                        <p class="lead">Professionelle Lösungen für Ihre digitalen Herausforderungen</p>
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
                        <p class="lead">Von der Konzeption über die Entwicklung bis hin zur Wartung – ich biete Ihnen umfassende Dienstleistungen im Bereich Webentwicklung, IT-Sicherheit und Plattform-Architektur. Jedes Projekt wird individuell auf Ihre Anforderungen zugeschnitten und mit höchster Qualität umgesetzt.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Services -->
        <div class="row mb-5">
            <?php
            // Definiere Hauptleistungen
            $main_services = array(
                array(
                    'icon'        => 'iconoir-code',
                    'title'       => 'Webentwicklung',
                    'description' => 'Entwicklung moderner, responsiver Websites und Webanwendungen',
                    'features'    => array(
                        'Custom WordPress-Entwicklung',
                        'React & Vue.js Anwendungen',
                        'E-Commerce-Lösungen',
                        'Progressive Web Apps (PWA)',
                        'API-Entwicklung & Integration',
                        'Responsive Design',
                    ),
                ),
                array(
                    'icon'        => 'iconoir-server',
                    'title'       => 'Plattform-Architektur',
                    'description' => 'Konzeption und Aufbau skalierbarer Web-Plattformen',
                    'features'    => array(
                        'Architektur-Design & Planung',
                        'Microservices-Architekturen',
                        'Cloud-native Lösungen',
                        'Datenbank-Design & Optimierung',
                        'Skalierbarkeits-Konzepte',
                        'DevOps & CI/CD',
                    ),
                ),
                array(
                    'icon'        => 'iconoir-shield',
                    'title'       => 'IT-Sicherheit',
                    'description' => 'Umfassende Sicherheitslösungen für Ihre Infrastruktur',
                    'features'    => array(
                        'Security Audits & Penetrationstests',
                        'System Hardening',
                        'DSGVO-Compliance',
                        'Incident Response',
                        'Security Monitoring',
                        'Schulungen & Workshops',
                    ),
                ),
                array(
                    'icon'        => 'iconoir-flash',
                    'title'       => 'Performance-Optimierung',
                    'description' => 'Maximale Geschwindigkeit für Ihre Webanwendungen',
                    'features'    => array(
                        'Ladezeit-Optimierung',
                        'Caching-Strategien',
                        'Datenbank-Tuning',
                        'CDN-Integration',
                        'Code-Optimierung',
                        'Performance-Monitoring',
                    ),
                ),
                array(
                    'icon'        => 'iconoir-design-pencil',
                    'title'       => 'UI/UX Design',
                    'description' => 'Benutzerfreundliche Interfaces mit modernem Design',
                    'features'    => array(
                        'User Interface Design',
                        'User Experience Konzepte',
                        'Prototyping & Wireframing',
                        'Design Systems',
                        'Usability-Tests',
                        'Barrierefreiheit (WCAG)',
                    ),
                ),
                array(
                    'icon'        => 'iconoir-network',
                    'title'       => 'System-Integration',
                    'description' => 'Nahtlose Verbindung Ihrer Systeme und Dienste',
                    'features'    => array(
                        'API-Integration',
                        'Drittsystem-Anbindung',
                        'Workflow-Automatisierung',
                        'Daten-Migration',
                        'Legacy-System-Modernisierung',
                        'Middleware-Entwicklung',
                    ),
                ),
            );

            foreach ( $main_services as $index => $service ) :
                $delay = ( $index % 3 ) * 100;
            ?>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $delay ); ?>">
                <div class="service-detail-box shadow-box">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <div class="icon-box">
                        <i class="<?php echo esc_attr( $service['icon'] ); ?>"></i>
                    </div>
                    <h3><?php echo esc_html( $service['title'] ); ?></h3>
                    <p class="description"><?php echo esc_html( $service['description'] ); ?></p>
                    <ul class="features-list">
                        <?php foreach ( $service['features'] as $feature ) : ?>
                            <li><i class="iconoir-check"></i> <?php echo esc_html( $feature ); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Process Section -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="section-heading text-center" data-aos="fade-up">
                    <h6>
                        <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/star-2.png' ); ?>" alt="Star">
                        Arbeitsweise
                    </h6>
                    <h2>Mein Entwicklungsprozess</h2>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-10 mx-auto">
                <div class="process-timeline" data-aos="fade-up">
                    <?php
                    $process_steps = array(
                        array(
                            'number' => '01',
                            'title'  => 'Analyse & Konzeption',
                            'desc'   => 'Detaillierte Anforderungsanalyse, Zieldefinition und Erstellung eines maßgeschneiderten Konzepts für Ihr Projekt.',
                        ),
                        array(
                            'number' => '02',
                            'title'  => 'Planung & Design',
                            'desc'   => 'Technische Architektur, UI/UX Design und Erstellung von Prototypen zur Visualisierung der Lösung.',
                        ),
                        array(
                            'number' => '03',
                            'title'  => 'Entwicklung',
                            'desc'   => 'Agile Umsetzung mit regelmäßigen Updates, Code-Reviews und kontinuierlicher Qualitätssicherung.',
                        ),
                        array(
                            'number' => '04',
                            'title'  => 'Testing & Optimierung',
                            'desc'   => 'Umfassende Tests, Performance-Optimierung und Sicherheitsüberprüfung vor dem Go-Live.',
                        ),
                        array(
                            'number' => '05',
                            'title'  => 'Deployment & Launch',
                            'desc'   => 'Professionelle Inbetriebnahme, Monitoring und Sicherstellung eines reibungslosen Starts.',
                        ),
                        array(
                            'number' => '06',
                            'title'  => 'Support & Wartung',
                            'desc'   => 'Kontinuierliche Betreuung, Updates, Optimierungen und technischer Support nach Bedarf.',
                        ),
                    );

                    foreach ( $process_steps as $step ) :
                    ?>
                    <div class="process-step shadow-box">
                        <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                        <div class="step-number"><?php echo esc_html( $step['number'] ); ?></div>
                        <div class="step-content">
                            <h4><?php echo esc_html( $step['title'] ); ?></h4>
                            <p><?php echo esc_html( $step['desc'] ); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Additional Services -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="section-heading text-center" data-aos="fade-up">
                    <h6>
                        <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/star-2.png' ); ?>" alt="Star">
                        Zusätzlich
                    </h6>
                    <h2>Weitere Dienstleistungen</h2>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up">
                <div class="additional-service-box shadow-box text-center">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <i class="iconoir-learning"></i>
                    <h4>Beratung & Consulting</h4>
                    <p>Technische Beratung und strategische Planung für Ihre IT-Projekte</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="additional-service-box shadow-box text-center">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <i class="iconoir-wrench"></i>
                    <h4>Wartung & Support</h4>
                    <p>Kontinuierliche Betreuung und technischer Support für Ihre Systeme</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="additional-service-box shadow-box text-center">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <i class="iconoir-graduation-cap"></i>
                    <h4>Schulungen</h4>
                    <p>Workshops und Trainings für Ihr Team zu relevanten Technologien</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="additional-service-box shadow-box text-center">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <i class="iconoir-refresh"></i>
                    <h4>Migration & Modernisierung</h4>
                    <p>Aktualisierung und Migration bestehender Systeme auf moderne Technologien</p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="cta-box shadow-box text-center" data-aos="fade-up">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <h2>Bereit für Ihr Projekt?</h2>
                    <p>Lassen Sie uns gemeinsam die beste Lösung für Ihre Anforderungen entwickeln.</p>
                    <a href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>" class="theme-btn">
                        Projekt besprechen
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
