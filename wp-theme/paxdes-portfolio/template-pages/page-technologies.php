<?php
/**
 * Template Name: Technologien
 * 
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

get_header();
?>

<section class="technologies-page-content">
    <div class="container">
        <!-- Hero Section -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="page-hero shadow-box" data-aos="fade-up">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <div class="hero-content text-center">
                        <h1 class="page-title">Technologien</h1>
                        <p class="lead">Moderne Tools und Frameworks für zukunftssichere Lösungen</p>
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
                        <p class="lead">Ich arbeite mit bewährten und zukunftsorientierten Technologien, die höchste Qualität, Performance und Sicherheit gewährleisten. Mein Tech-Stack wird kontinuierlich aktualisiert, um stets die besten Lösungen für Ihre Projekte zu bieten.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Frontend Technologies -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="section-heading" data-aos="fade-up">
                    <h6>
                        <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/star-2.png' ); ?>" alt="Star">
                        Frontend
                    </h6>
                    <h2>Client-Side Technologien</h2>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <?php
            $frontend_techs = array(
                array( 'name' => 'HTML5 & CSS3', 'level' => 95, 'icon' => 'iconoir-code' ),
                array( 'name' => 'JavaScript (ES6+)', 'level' => 90, 'icon' => 'iconoir-code-brackets' ),
                array( 'name' => 'React.js', 'level' => 85, 'icon' => 'iconoir-atom' ),
                array( 'name' => 'Vue.js', 'level' => 80, 'icon' => 'iconoir-hexagon' ),
                array( 'name' => 'TypeScript', 'level' => 75, 'icon' => 'iconoir-code' ),
                array( 'name' => 'Tailwind CSS', 'level' => 90, 'icon' => 'iconoir-design-pencil' ),
                array( 'name' => 'Bootstrap', 'level' => 95, 'icon' => 'iconoir-layout' ),
                array( 'name' => 'SASS/SCSS', 'level' => 90, 'icon' => 'iconoir-color-filter' ),
            );

            foreach ( $frontend_techs as $tech ) :
            ?>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up">
                <div class="tech-box shadow-box">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <div class="tech-icon">
                        <i class="<?php echo esc_attr( $tech['icon'] ); ?>"></i>
                    </div>
                    <h4><?php echo esc_html( $tech['name'] ); ?></h4>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: <?php echo esc_attr( $tech['level'] ); ?>%"></div>
                    </div>
                    <span class="skill-level"><?php echo esc_html( $tech['level'] ); ?>%</span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Backend Technologies -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="section-heading" data-aos="fade-up">
                    <h6>
                        <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/star-2.png' ); ?>" alt="Star">
                        Backend
                    </h6>
                    <h2>Server-Side Technologien</h2>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <?php
            $backend_techs = array(
                array( 'name' => 'PHP', 'level' => 95, 'icon' => 'iconoir-code' ),
                array( 'name' => 'Node.js', 'level' => 80, 'icon' => 'iconoir-server' ),
                array( 'name' => 'Python', 'level' => 75, 'icon' => 'iconoir-code-brackets' ),
                array( 'name' => 'MySQL / MariaDB', 'level' => 90, 'icon' => 'iconoir-database' ),
                array( 'name' => 'PostgreSQL', 'level' => 80, 'icon' => 'iconoir-database' ),
                array( 'name' => 'MongoDB', 'level' => 70, 'icon' => 'iconoir-database' ),
                array( 'name' => 'Redis', 'level' => 75, 'icon' => 'iconoir-flash' ),
                array( 'name' => 'REST APIs', 'level' => 95, 'icon' => 'iconoir-network' ),
            );

            foreach ( $backend_techs as $tech ) :
            ?>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up">
                <div class="tech-box shadow-box">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <div class="tech-icon">
                        <i class="<?php echo esc_attr( $tech['icon'] ); ?>"></i>
                    </div>
                    <h4><?php echo esc_html( $tech['name'] ); ?></h4>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: <?php echo esc_attr( $tech['level'] ); ?>%"></div>
                    </div>
                    <span class="skill-level"><?php echo esc_html( $tech['level'] ); ?>%</span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- CMS & Frameworks -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="section-heading" data-aos="fade-up">
                    <h6>
                        <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/star-2.png' ); ?>" alt="Star">
                        CMS & Frameworks
                    </h6>
                    <h2>Content Management & Entwicklungs-Frameworks</h2>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <?php
            $cms_frameworks = array(
                array( 'name' => 'WordPress', 'level' => 95, 'icon' => 'iconoir-page' ),
                array( 'name' => 'Laravel', 'level' => 85, 'icon' => 'iconoir-code' ),
                array( 'name' => 'Symfony', 'level' => 75, 'icon' => 'iconoir-code-brackets' ),
                array( 'name' => 'Next.js', 'level' => 80, 'icon' => 'iconoir-atom' ),
                array( 'name' => 'Express.js', 'level' => 75, 'icon' => 'iconoir-server' ),
                array( 'name' => 'Django', 'level' => 70, 'icon' => 'iconoir-code' ),
            );

            foreach ( $cms_frameworks as $tech ) :
            ?>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="tech-box shadow-box">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <div class="tech-icon">
                        <i class="<?php echo esc_attr( $tech['icon'] ); ?>"></i>
                    </div>
                    <h4><?php echo esc_html( $tech['name'] ); ?></h4>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: <?php echo esc_attr( $tech['level'] ); ?>%"></div>
                    </div>
                    <span class="skill-level"><?php echo esc_html( $tech['level'] ); ?>%</span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- DevOps & Tools -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="section-heading" data-aos="fade-up">
                    <h6>
                        <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/star-2.png' ); ?>" alt="Star">
                        DevOps & Tools
                    </h6>
                    <h2>Entwicklungs- und Deployment-Tools</h2>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up">
                <div class="tool-box shadow-box text-center">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <i class="iconoir-git-branch"></i>
                    <h4>Git & GitHub</h4>
                    <p>Versionskontrolle und Collaboration</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tool-box shadow-box text-center">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <i class="iconoir-cloud"></i>
                    <h4>Docker</h4>
                    <p>Containerisierung und Deployment</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tool-box shadow-box text-center">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <i class="iconoir-terminal"></i>
                    <h4>CI/CD</h4>
                    <p>Automatisierte Pipelines</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="tool-box shadow-box text-center">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <i class="iconoir-server"></i>
                    <h4>AWS / Azure / GCP</h4>
                    <p>Cloud-Infrastruktur</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up">
                <div class="tool-box shadow-box text-center">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <i class="iconoir-wrench"></i>
                    <h4>Webpack / Vite</h4>
                    <p>Build-Tools und Bundler</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tool-box shadow-box text-center">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <i class="iconoir-shield"></i>
                    <h4>Security Tools</h4>
                    <p>Penetrationstests und Audits</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tool-box shadow-box text-center">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <i class="iconoir-eye"></i>
                    <h4>Monitoring</h4>
                    <p>Performance und Uptime</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="tool-box shadow-box text-center">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <i class="iconoir-design-pencil"></i>
                    <h4>Figma / Adobe XD</h4>
                    <p>UI/UX Design Tools</p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="cta-box shadow-box text-center" data-aos="fade-up">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    <h2>Lassen Sie uns die richtige Technologie für Ihr Projekt wählen</h2>
                    <p>Gemeinsam finden wir den optimalen Tech-Stack für Ihre Anforderungen.</p>
                    <a href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>" class="theme-btn">
                        Beratung anfragen
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
