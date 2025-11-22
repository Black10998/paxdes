<?php
/**
 * Template Name: Über mich
 * 
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

get_header();
?>

<section class="about-page-content">
    <div class="container">
        <!-- Hero Section -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="page-hero shadow-box" data-aos="fade-up">
                    <?php
                    // Hintergrund-Muster (editierbar)
                    $bg_pattern = paxdes_get_option( 'paxdes_bg_pattern' );
                    $bg_url = $bg_pattern ? wp_get_attachment_image_url( $bg_pattern, 'full' ) : PAXDES_THEME_URI . '/assets/images/bg1.png';
                    ?>
                    <img decoding="async" src="<?php echo esc_url( $bg_url ); ?>" alt="BG" class="bg-img">
                    
                    <?php
                    // About Hero Image (editierbar über Customizer)
                    $about_hero_id = paxdes_get_option( 'paxdes_about_hero_image' );
                    if ( $about_hero_id ) :
                    ?>
                        <div class="hero-image-wrapper">
                            <?php echo wp_get_attachment_image( $about_hero_id, 'full', false, array(
                                'class' => 'hero-image',
                                'alt' => 'Über mich',
                                'decoding' => 'async'
                            ) ); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="hero-content text-center">
                        <h1 class="page-title">Über mich</h1>
                        <p class="lead">Webentwickler, Systemingenieur & Plattform-Architekt</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Intro Section -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto">
                <div class="about-intro shadow-box" data-aos="fade-up">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <div class="content-wrapper">
                        <h2>Ahmad Al Khalaf</h2>
                        <h3 class="subtitle">Ihr Partner für professionelle Webentwicklung und IT-Sicherheit</h3>
                        
                        <p>Mit über einem Jahrzehnt Erfahrung in der Entwicklung moderner Webanwendungen und IT-Systeme unterstütze ich Unternehmen dabei, ihre digitale Präsenz professionell, sicher und zukunftsorientiert aufzubauen.</p>
                        
                        <p>Mein Fokus liegt auf der Entwicklung skalierbarer Plattformen, der Implementierung robuster Sicherheitskonzepte und der Optimierung von Performance-kritischen Systemen. Dabei verbinde ich technische Exzellenz mit einem tiefen Verständnis für Geschäftsprozesse und Nutzeranforderungen.</p>
                        
                        <p>Als Systemingenieur und Plattform-Architekt begleite ich Projekte von der ersten Konzeption bis zur erfolgreichen Implementierung und darüber hinaus. Meine Expertise umfasst die gesamte Bandbreite moderner Webtechnologien – von Frontend-Frameworks über Backend-Architekturen bis hin zu Cloud-Infrastrukturen.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Expertise Section -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="section-heading text-center" data-aos="fade-up">
                    <h6>
                        <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/star-2.png' ); ?>" alt="Star">
                        Expertise
                    </h6>
                    <h2>Kernkompetenzen</h2>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="expertise-box shadow-box">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <div class="icon-box">
                        <i class="iconoir-code"></i>
                    </div>
                    <h3>Webentwicklung</h3>
                    <p>Entwicklung moderner, responsiver Webanwendungen mit React, Vue.js, PHP und WordPress. Von der Konzeption bis zur Umsetzung.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="expertise-box shadow-box">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <div class="icon-box">
                        <i class="iconoir-server"></i>
                    </div>
                    <h3>Plattform-Architektur</h3>
                    <p>Konzeption und Aufbau skalierbarer Web-Plattformen und SaaS-Lösungen mit Fokus auf Performance und Wartbarkeit.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="expertise-box shadow-box">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <div class="icon-box">
                        <i class="iconoir-shield"></i>
                    </div>
                    <h3>IT-Sicherheit</h3>
                    <p>Implementierung von Sicherheitskonzepten, Penetrationstests, Hardening und Compliance-Maßnahmen für Ihre Infrastruktur.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="expertise-box shadow-box">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <div class="icon-box">
                        <i class="iconoir-flash"></i>
                    </div>
                    <h3>Performance-Optimierung</h3>
                    <p>Analyse und Optimierung von Ladezeiten, Datenbankabfragen und Server-Konfigurationen für maximale Geschwindigkeit.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="expertise-box shadow-box">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <div class="icon-box">
                        <i class="iconoir-design-pencil"></i>
                    </div>
                    <h3>UI/UX Design</h3>
                    <p>Gestaltung benutzerfreundlicher Interfaces mit Fokus auf User Experience und moderne Design-Prinzipien.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="expertise-box shadow-box">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <div class="icon-box">
                        <i class="iconoir-network"></i>
                    </div>
                    <h3>System-Integration</h3>
                    <p>Integration verschiedener Systeme, APIs und Dienste für nahtlose Workflows und automatisierte Prozesse.</p>
                </div>
            </div>
        </div>

        <!-- Approach Section -->
        <div class="row mb-5">
            <div class="col-lg-10 mx-auto">
                <div class="approach-section shadow-box" data-aos="fade-up">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <div class="content-wrapper">
                        <h2>Mein Ansatz</h2>
                        
                        <div class="approach-item">
                            <h4><i class="iconoir-check-circle"></i> Qualität vor Quantität</h4>
                            <p>Jedes Projekt wird mit höchster Sorgfalt und Aufmerksamkeit für Details umgesetzt. Ich setze auf nachhaltige Lösungen statt schneller Workarounds.</p>
                        </div>

                        <div class="approach-item">
                            <h4><i class="iconoir-check-circle"></i> Sicherheit als Grundprinzip</h4>
                            <p>IT-Sicherheit ist kein nachträglicher Gedanke, sondern integraler Bestandteil jeder Entwicklung. Von der Architektur bis zur Implementierung.</p>
                        </div>

                        <div class="approach-item">
                            <h4><i class="iconoir-check-circle"></i> Performance-orientiert</h4>
                            <p>Schnelle Ladezeiten und optimale Performance sind entscheidend für den Erfolg. Ich optimiere jeden Aspekt Ihrer Anwendung.</p>
                        </div>

                        <div class="approach-item">
                            <h4><i class="iconoir-check-circle"></i> Transparente Kommunikation</h4>
                            <p>Klare, verständliche Kommunikation auf Augenhöhe. Sie werden stets über den Projektfortschritt informiert.</p>
                        </div>

                        <div class="approach-item">
                            <h4><i class="iconoir-check-circle"></i> Langfristige Partnerschaft</h4>
                            <p>Ich begleite Sie auch nach Projektabschluss mit Wartung, Support und kontinuierlicher Optimierung.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="cta-box shadow-box text-center" data-aos="fade-up">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <h2>Lassen Sie uns Ihr Projekt besprechen</h2>
                    <p>Ich freue mich darauf, mehr über Ihre Anforderungen zu erfahren und gemeinsam die beste Lösung zu entwickeln.</p>
                    <a href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>" class="theme-btn">
                        Kontakt aufnehmen
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
