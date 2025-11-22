<?php
/**
 * Template Name: Kontakt
 * 
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

get_header();
?>

<section class="contact-page-content">
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
                    $contact_hero_id = paxdes_get_option( 'paxdes_contact_hero_image' );
                    if ( $contact_hero_id ) :
                    ?>
                        <div class="hero-image-wrapper">
                            <?php echo wp_get_attachment_image( $contact_hero_id, 'full', false, array(
                                'class' => 'hero-image',
                                'alt' => 'Kontakt',
                                'decoding' => 'async'
                            ) ); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="hero-content text-center">
                        <h1 class="page-title">Kontakt</h1>
                        <p class="lead">Lassen Sie uns über Ihr Projekt sprechen</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Content -->
        <div class="row">
            <!-- Contact Information -->
            <div class="col-lg-5 mb-4" data-aos="fade-up">
                <div class="contact-info-box shadow-box">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    
                    <h2>Kontaktinformationen</h2>
                    <p class="intro-text">Ich freue mich auf Ihre Nachricht und antworte in der Regel innerhalb von 24 Stunden.</p>

                    <div class="contact-details-list">
                        <?php
                        $email = paxdes_get_option( 'paxdes_contact_email', 'info@paxdes.com' );
                        $phone = paxdes_get_option( 'paxdes_contact_phone' );
                        ?>

                        <?php if ( $email ) : ?>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="iconoir-mail"></i>
                            </div>
                            <div class="details">
                                <h4>E-Mail</h4>
                                <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if ( $phone ) : ?>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="iconoir-phone"></i>
                            </div>
                            <div class="details">
                                <h4>Telefon</h4>
                                <a href="tel:<?php echo esc_attr( str_replace( ' ', '', $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="contact-item">
                            <div class="icon">
                                <i class="iconoir-clock"></i>
                            </div>
                            <div class="details">
                                <h4>Verfügbarkeit</h4>
                                <p>Montag - Freitag: 9:00 - 18:00 Uhr<br>
                                Termine nach Vereinbarung</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="social-section">
                        <h4>Folgen Sie mir</h4>
                        <?php echo paxdes_social_links(); ?>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-form-box shadow-box">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    
                    <h2>Senden Sie mir eine Nachricht</h2>
                    <p class="intro-text">Füllen Sie das Formular aus und ich melde mich schnellstmöglich bei Ihnen.</p>

                    <?php
                    // Contact Form 7 Integration
                    if ( function_exists( 'wpcf7_contact_form' ) ) {
                        // Versuche das Kontaktformular zu finden
                        $contact_forms = get_posts( array(
                            'post_type'      => 'wpcf7_contact_form',
                            'posts_per_page' => 1,
                        ) );
                        
                        if ( ! empty( $contact_forms ) ) {
                            echo do_shortcode( '[contact-form-7 id="' . $contact_forms[0]->ID . '"]' );
                        } else {
                            echo '<p class="notice">Bitte erstellen Sie ein Kontaktformular in Contact Form 7.</p>';
                        }
                    } else {
                        // Fallback: Standard HTML-Formular
                        ?>
                        <form class="paxdes-contact-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
                            <input type="hidden" name="action" value="paxdes_contact_form">
                            <?php wp_nonce_field( 'paxdes_contact_form', 'paxdes_contact_nonce' ); ?>

                            <div class="form-group">
                                <label for="contact_name">Name *</label>
                                <input type="text" id="contact_name" name="contact_name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="contact_email">E-Mail *</label>
                                <input type="email" id="contact_email" name="contact_email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="contact_phone">Telefon</label>
                                <input type="tel" id="contact_phone" name="contact_phone" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="contact_subject">Betreff *</label>
                                <input type="text" id="contact_subject" name="contact_subject" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="contact_message">Nachricht *</label>
                                <textarea id="contact_message" name="contact_message" class="form-control" rows="6" required></textarea>
                            </div>

                            <div class="form-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="contact_privacy" required>
                                    Ich habe die <a href="<?php echo esc_url( home_url( '/datenschutz' ) ); ?>" target="_blank">Datenschutzerklärung</a> gelesen und akzeptiere diese.
                                </label>
                            </div>

                            <button type="submit" class="theme-btn">
                                <i class="iconoir-send"></i>
                                Nachricht senden
                            </button>
                        </form>

                        <p class="form-notice">
                            <i class="iconoir-info-circle"></i>
                            <strong>Hinweis:</strong> Für ein vollständig funktionsfähiges Kontaktformular installieren Sie bitte das Plugin <strong>Contact Form 7</strong>.
                        </p>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- Additional Info Section -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="additional-info shadow-box" data-aos="fade-up">
                    <img decoding="async" src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/bg1.png' ); ?>" alt="BG" class="bg-img">
                    
                    <div class="row">
                        <div class="col-md-4 text-center mb-4">
                            <div class="info-item">
                                <i class="iconoir-fast-arrow-right"></i>
                                <h4>Schnelle Antwort</h4>
                                <p>Antwortzeit in der Regel unter 24 Stunden</p>
                            </div>
                        </div>

                        <div class="col-md-4 text-center mb-4">
                            <div class="info-item">
                                <i class="iconoir-shield-check"></i>
                                <h4>Vertraulich</h4>
                                <p>Ihre Daten werden vertraulich behandelt</p>
                            </div>
                        </div>

                        <div class="col-md-4 text-center mb-4">
                            <div class="info-item">
                                <i class="iconoir-chat-bubble"></i>
                                <h4>Unverbindlich</h4>
                                <p>Kostenlose Erstberatung ohne Verpflichtung</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
