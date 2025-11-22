<?php
/**
 * PAXDES Portfolio Theme Functions
 *
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Theme-Konstanten
define( 'PAXDES_VERSION', '4.0.0' );
define( 'PAXDES_THEME_DIR', get_template_directory() );
define( 'PAXDES_THEME_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function paxdes_theme_setup() {
    // Textdomain für Übersetzungen
    load_theme_textdomain( 'paxdes-portfolio', PAXDES_THEME_DIR . '/languages' );

    // Theme-Support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'wp-block-styles' );

    // Navigationsmenüs registrieren
    register_nav_menus( array(
        'primary' => esc_html__( 'Hauptmenü', 'paxdes-portfolio' ),
        'footer'  => esc_html__( 'Footer-Menü', 'paxdes-portfolio' ),
    ) );

    // Bildgrößen
    add_image_size( 'paxdes-portfolio-thumb', 600, 600, true );
    add_image_size( 'paxdes-project-large', 1200, 800, true );
}
add_action( 'after_setup_theme', 'paxdes_theme_setup' );

/**
 * Content Width
 */
function paxdes_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'paxdes_content_width', 1200 );
}
add_action( 'after_setup_theme', 'paxdes_content_width', 0 );

/**
 * Enqueue Scripts und Styles
 */
function paxdes_enqueue_scripts() {
    // Styles
    wp_enqueue_style( 'paxdes-bootstrap', PAXDES_THEME_URI . '/assets/css/bootstrap.min.css', array(), PAXDES_VERSION );
    wp_enqueue_style( 'paxdes-aos', PAXDES_THEME_URI . '/assets/css/aos.css', array(), PAXDES_VERSION );
    wp_enqueue_style( 'paxdes-iconoir', PAXDES_THEME_URI . '/assets/css/iconoir.css', array(), PAXDES_VERSION );
    wp_enqueue_style( 'paxdes-animations', PAXDES_THEME_URI . '/assets/css/animations.css', array(), PAXDES_VERSION );
    wp_enqueue_style( 'paxdes-navigation', PAXDES_THEME_URI . '/assets/css/navigation.css', array(), PAXDES_VERSION );
    wp_enqueue_style( 'paxdes-pages', PAXDES_THEME_URI . '/assets/css/pages.css', array(), PAXDES_VERSION );
    wp_enqueue_style( 'paxdes-main-style', PAXDES_THEME_URI . '/assets/css/style.css', array(), PAXDES_VERSION );
    wp_enqueue_style( 'paxdes-style', get_stylesheet_uri(), array( 'paxdes-main-style' ), PAXDES_VERSION );

    // Scripts
    wp_enqueue_script( 'paxdes-bootstrap', PAXDES_THEME_URI . '/assets/js/bootstrap.bundle.min.js', array(), PAXDES_VERSION, true );
    wp_enqueue_script( 'paxdes-aos', PAXDES_THEME_URI . '/assets/js/aos.js', array(), PAXDES_VERSION, true );
    wp_enqueue_script( 'paxdes-main', PAXDES_THEME_URI . '/assets/js/main.js', array( 'jquery' ), PAXDES_VERSION, true );

    // Kommentar-Reply-Script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'paxdes_enqueue_scripts' );

/**
 * Widget-Bereiche registrieren
 */
function paxdes_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'paxdes-portfolio' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Widgets für die Sidebar.', 'paxdes-portfolio' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 1', 'paxdes-portfolio' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Widgets für Footer Spalte 1.', 'paxdes-portfolio' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 2', 'paxdes-portfolio' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Widgets für Footer Spalte 2.', 'paxdes-portfolio' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'paxdes_widgets_init' );

/**
 * Customizer-Einstellungen
 */
function paxdes_customize_register( $wp_customize ) {
    // Hero Section
    $wp_customize->add_section( 'paxdes_hero_section', array(
        'title'    => esc_html__( 'Hero-Bereich', 'paxdes-portfolio' ),
        'priority' => 30,
    ) );

    // Hero Titel
    $wp_customize->add_setting( 'paxdes_hero_title', array(
        'default'           => 'Webentwickler & Systemingenieur',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'paxdes_hero_title', array(
        'label'   => esc_html__( 'Hero Titel', 'paxdes-portfolio' ),
        'section' => 'paxdes_hero_section',
        'type'    => 'text',
    ) );

    // Hero Name
    $wp_customize->add_setting( 'paxdes_hero_name', array(
        'default'           => 'Ahmad Al Khalaf',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'paxdes_hero_name', array(
        'label'   => esc_html__( 'Name', 'paxdes-portfolio' ),
        'section' => 'paxdes_hero_section',
        'type'    => 'text',
    ) );

    // Hero Beschreibung
    $wp_customize->add_setting( 'paxdes_hero_description', array(
        'default'           => 'Spezialisiert auf moderne Webanwendungen, Plattform-Architektur und IT-Sicherheit.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'paxdes_hero_description', array(
        'label'   => esc_html__( 'Beschreibung', 'paxdes-portfolio' ),
        'section' => 'paxdes_hero_section',
        'type'    => 'textarea',
    ) );

    // Hero Bild
    $wp_customize->add_setting( 'paxdes_hero_image', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'paxdes_hero_image', array(
        'label'       => esc_html__( 'Hero Bild (Profilbild)', 'paxdes-portfolio' ),
        'description' => esc_html__( 'Hauptbild im Hero-Bereich. Empfohlen: 800x800px, quadratisch', 'paxdes-portfolio' ),
        'section'     => 'paxdes_hero_section',
        'mime_type'   => 'image',
    ) ) );

    // Hero Bild Link
    $wp_customize->add_setting( 'paxdes_hero_image_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'paxdes_hero_image_link', array(
        'label'       => esc_html__( 'Hero Bild Link-URL', 'paxdes-portfolio' ),
        'description' => esc_html__( 'URL für Klick auf Hero-Bild (optional)', 'paxdes-portfolio' ),
        'section'     => 'paxdes_hero_section',
        'type'        => 'url',
    ) );

    // Logo/Branding Section
    $wp_customize->add_section( 'paxdes_branding_section', array(
        'title'    => esc_html__( 'Branding & Logos', 'paxdes-portfolio' ),
        'priority' => 25,
    ) );

    // Favicon
    $wp_customize->add_setting( 'paxdes_favicon', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'paxdes_favicon', array(
        'label'       => esc_html__( 'Favicon', 'paxdes-portfolio' ),
        'description' => esc_html__( 'Browser-Tab-Icon (empfohlen: 32x32px oder 64x64px, PNG/ICO)', 'paxdes-portfolio' ),
        'section'     => 'paxdes_branding_section',
        'mime_type'   => 'image',
    ) ) );

    // Background Pattern
    $wp_customize->add_setting( 'paxdes_bg_pattern', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'paxdes_bg_pattern', array(
        'label'       => esc_html__( 'Hintergrund-Muster', 'paxdes-portfolio' ),
        'description' => esc_html__( 'Subtiles Muster für Shadow-Boxen (empfohlen: 500x500px)', 'paxdes-portfolio' ),
        'section'     => 'paxdes_branding_section',
        'mime_type'   => 'image',
    ) ) );

    // Star Icon (Featured Banner)
    $wp_customize->add_setting( 'paxdes_star_icon', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'paxdes_star_icon', array(
        'label'       => esc_html__( 'Stern-Icon (Featured Banner)', 'paxdes-portfolio' ),
        'description' => esc_html__( 'Icon für das scrollende Banner (empfohlen: SVG, 20x20px)', 'paxdes-portfolio' ),
        'section'     => 'paxdes_branding_section',
        'mime_type'   => 'image',
    ) ) );

    // About Button Icon
    $wp_customize->add_setting( 'paxdes_about_btn_icon', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'paxdes_about_btn_icon', array(
        'label'       => esc_html__( 'About Button Icon', 'paxdes-portfolio' ),
        'description' => esc_html__( 'Icon für About/Mehr-Buttons (empfohlen: SVG, 40x40px)', 'paxdes-portfolio' ),
        'section'     => 'paxdes_branding_section',
        'mime_type'   => 'image',
    ) ) );

    // About Button Link
    $wp_customize->add_setting( 'paxdes_about_btn_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'paxdes_about_btn_link', array(
        'label'       => esc_html__( 'About Button Link-URL', 'paxdes-portfolio' ),
        'description' => esc_html__( 'URL für About-Button (optional, Standard: Über-Mich-Seite)', 'paxdes-portfolio' ),
        'section'     => 'paxdes_branding_section',
        'type'        => 'url',
    ) );

    // Signature Image
    $wp_customize->add_setting( 'paxdes_signature', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'paxdes_signature', array(
        'label'       => esc_html__( 'Signatur-Bild', 'paxdes-portfolio' ),
        'description' => esc_html__( 'Persönliche Signatur für Credentials-Box (empfohlen: PNG, transparent)', 'paxdes-portfolio' ),
        'section'     => 'paxdes_branding_section',
        'mime_type'   => 'image',
    ) ) );

    // Projects Preview Image
    $wp_customize->add_setting( 'paxdes_projects_preview', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'paxdes_projects_preview', array(
        'label'       => esc_html__( 'Projekte Vorschau-Bild', 'paxdes-portfolio' ),
        'description' => esc_html__( 'Bild für die Projekte-Box auf der Startseite (empfohlen: 600x400px)', 'paxdes-portfolio' ),
        'section'     => 'paxdes_branding_section',
        'mime_type'   => 'image',
    ) ) );

    // Projects Preview Link
    $wp_customize->add_setting( 'paxdes_projects_preview_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'paxdes_projects_preview_link', array(
        'label'       => esc_html__( 'Projekte Box Link-URL', 'paxdes-portfolio' ),
        'description' => esc_html__( 'URL für Klick auf Projekte-Box (optional, Standard: Projekte-Seite)', 'paxdes-portfolio' ),
        'section'     => 'paxdes_branding_section',
        'type'        => 'url',
    ) );

    // Services Preview Image
    $wp_customize->add_setting( 'paxdes_services_preview', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'paxdes_services_preview', array(
        'label'       => esc_html__( 'Leistungen Vorschau-Bild', 'paxdes-portfolio' ),
        'description' => esc_html__( 'Bild für die Leistungen-Box auf der Startseite (optional)', 'paxdes-portfolio' ),
        'section'     => 'paxdes_branding_section',
        'mime_type'   => 'image',
    ) ) );

    // Services Preview Link
    $wp_customize->add_setting( 'paxdes_services_preview_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'paxdes_services_preview_link', array(
        'label'       => esc_html__( 'Leistungen Box Link-URL', 'paxdes-portfolio' ),
        'description' => esc_html__( 'URL für Klick auf Leistungen-Box (optional, Standard: Leistungen-Seite)', 'paxdes-portfolio' ),
        'section'     => 'paxdes_branding_section',
        'type'        => 'url',
    ) );

    // Blog Preview Image
    $wp_customize->add_setting( 'paxdes_blog_preview', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'paxdes_blog_preview', array(
        'label'       => esc_html__( 'Blog Vorschau-Bild', 'paxdes-portfolio' ),
        'description' => esc_html__( 'Bild für die Blog-Box auf der Startseite (empfohlen: 600x400px)', 'paxdes-portfolio' ),
        'section'     => 'paxdes_branding_section',
        'mime_type'   => 'image',
    ) ) );

    // Contact CTA Icon
    $wp_customize->add_setting( 'paxdes_contact_cta_icon', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'paxdes_contact_cta_icon', array(
        'label'       => esc_html__( 'Kontakt CTA Icon', 'paxdes-portfolio' ),
        'description' => esc_html__( 'Großes Icon für "Let\'s work together" Box (empfohlen: PNG, 200x200px)', 'paxdes-portfolio' ),
        'section'     => 'paxdes_branding_section',
        'mime_type'   => 'image',
    ) ) );

    // Contact CTA Icon Link
    $wp_customize->add_setting( 'paxdes_contact_cta_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'paxdes_contact_cta_link', array(
        'label'       => esc_html__( 'Kontakt CTA Link-URL', 'paxdes-portfolio' ),
        'description' => esc_html__( 'URL für "Let\'s work together" Box (optional, Standard: Kontakt-Seite)', 'paxdes-portfolio' ),
        'section'     => 'paxdes_branding_section',
        'type'        => 'url',
    ) );

    // CTA Button Text
    $wp_customize->add_setting( 'paxdes_cta_text', array(
        'default'           => 'Kontakt aufnehmen',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'paxdes_cta_text', array(
        'label'   => esc_html__( 'CTA Button Text', 'paxdes-portfolio' ),
        'section' => 'paxdes_hero_section',
        'type'    => 'text',
    ) );

    // CTA Button URL
    $wp_customize->add_setting( 'paxdes_cta_url', array(
        'default'           => '#contact',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'paxdes_cta_url', array(
        'label'   => esc_html__( 'CTA Button URL', 'paxdes-portfolio' ),
        'section' => 'paxdes_hero_section',
        'type'    => 'url',
    ) );

    // Kontakt Section
    $wp_customize->add_section( 'paxdes_contact_section', array(
        'title'    => esc_html__( 'Kontakt-Informationen', 'paxdes-portfolio' ),
        'priority' => 40,
    ) );

    // E-Mail
    $wp_customize->add_setting( 'paxdes_contact_email', array(
        'default'           => 'info@paxdes.com',
        'sanitize_callback' => 'sanitize_email',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'paxdes_contact_email', array(
        'label'   => esc_html__( 'E-Mail', 'paxdes-portfolio' ),
        'section' => 'paxdes_contact_section',
        'type'    => 'email',
    ) );

    // Telefon
    $wp_customize->add_setting( 'paxdes_contact_phone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'paxdes_contact_phone', array(
        'label'   => esc_html__( 'Telefon', 'paxdes-portfolio' ),
        'section' => 'paxdes_contact_section',
        'type'    => 'text',
    ) );

    // Social Media
    $social_networks = array(
        'github'   => 'GitHub',
        'linkedin' => 'LinkedIn',
        'twitter'  => 'Twitter/X',
        'xing'     => 'Xing',
    );

    foreach ( $social_networks as $network => $label ) {
        $wp_customize->add_setting( "paxdes_social_{$network}", array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ) );
        $wp_customize->add_control( "paxdes_social_{$network}", array(
            'label'   => $label . ' ' . esc_html__( 'URL', 'paxdes-portfolio' ),
            'section' => 'paxdes_contact_section',
            'type'    => 'url',
        ) );
    }

    // Page-Specific Images Section
    $wp_customize->add_section( 'paxdes_page_images_section', array(
        'title'       => esc_html__( 'Seiten-Bilder', 'paxdes-portfolio' ),
        'description' => esc_html__( 'Bilder für spezifische Seiten und Bereiche', 'paxdes-portfolio' ),
        'priority'    => 35,
    ) );

    // About Page Hero Image
    $wp_customize->add_setting( 'paxdes_about_hero_image', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'paxdes_about_hero_image', array(
        'label'       => esc_html__( 'Über-Mich Seite: Hero-Bild', 'paxdes-portfolio' ),
        'description' => esc_html__( 'Hauptbild für die Über-Mich Seite (empfohlen: 800x800px)', 'paxdes-portfolio' ),
        'section'     => 'paxdes_page_images_section',
        'mime_type'   => 'image',
    ) ) );

    // Services Page Hero Image
    $wp_customize->add_setting( 'paxdes_services_hero_image', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'paxdes_services_hero_image', array(
        'label'       => esc_html__( 'Leistungen Seite: Hero-Bild', 'paxdes-portfolio' ),
        'description' => esc_html__( 'Hauptbild für die Leistungen Seite', 'paxdes-portfolio' ),
        'section'     => 'paxdes_page_images_section',
        'mime_type'   => 'image',
    ) ) );

    // Technologies Page Hero Image
    $wp_customize->add_setting( 'paxdes_tech_hero_image', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'paxdes_tech_hero_image', array(
        'label'       => esc_html__( 'Technologien Seite: Hero-Bild', 'paxdes-portfolio' ),
        'description' => esc_html__( 'Hauptbild für die Technologien Seite', 'paxdes-portfolio' ),
        'section'     => 'paxdes_page_images_section',
        'mime_type'   => 'image',
    ) ) );

    // Projects Page Hero Image
    $wp_customize->add_setting( 'paxdes_projects_hero_image', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'paxdes_projects_hero_image', array(
        'label'       => esc_html__( 'Projekte Seite: Hero-Bild', 'paxdes-portfolio' ),
        'description' => esc_html__( 'Hauptbild für die Projekte Seite', 'paxdes-portfolio' ),
        'section'     => 'paxdes_page_images_section',
        'mime_type'   => 'image',
    ) ) );

    // Contact Page Hero Image
    $wp_customize->add_setting( 'paxdes_contact_hero_image', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'paxdes_contact_hero_image', array(
        'label'       => esc_html__( 'Kontakt Seite: Hero-Bild', 'paxdes-portfolio' ),
        'description' => esc_html__( 'Hauptbild für die Kontakt Seite', 'paxdes-portfolio' ),
        'section'     => 'paxdes_page_images_section',
        'mime_type'   => 'image',
    ) ) );
}
add_action( 'customize_register', 'paxdes_customize_register' );

/**
 * Custom Post Type: Projekte
 */
function paxdes_register_project_post_type() {
    $labels = array(
        'name'               => esc_html__( 'Projekte', 'paxdes-portfolio' ),
        'singular_name'      => esc_html__( 'Projekt', 'paxdes-portfolio' ),
        'menu_name'          => esc_html__( 'Projekte', 'paxdes-portfolio' ),
        'add_new'            => esc_html__( 'Neues Projekt', 'paxdes-portfolio' ),
        'add_new_item'       => esc_html__( 'Neues Projekt hinzufügen', 'paxdes-portfolio' ),
        'edit_item'          => esc_html__( 'Projekt bearbeiten', 'paxdes-portfolio' ),
        'new_item'           => esc_html__( 'Neues Projekt', 'paxdes-portfolio' ),
        'view_item'          => esc_html__( 'Projekt ansehen', 'paxdes-portfolio' ),
        'search_items'       => esc_html__( 'Projekte durchsuchen', 'paxdes-portfolio' ),
        'not_found'          => esc_html__( 'Keine Projekte gefunden', 'paxdes-portfolio' ),
        'not_found_in_trash' => esc_html__( 'Keine Projekte im Papierkorb', 'paxdes-portfolio' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projekte' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'project', $args );

    // Taxonomie: Projekt-Kategorien
    $tax_labels = array(
        'name'          => esc_html__( 'Projekt-Kategorien', 'paxdes-portfolio' ),
        'singular_name' => esc_html__( 'Projekt-Kategorie', 'paxdes-portfolio' ),
        'search_items'  => esc_html__( 'Kategorien durchsuchen', 'paxdes-portfolio' ),
        'all_items'     => esc_html__( 'Alle Kategorien', 'paxdes-portfolio' ),
        'edit_item'     => esc_html__( 'Kategorie bearbeiten', 'paxdes-portfolio' ),
        'update_item'   => esc_html__( 'Kategorie aktualisieren', 'paxdes-portfolio' ),
        'add_new_item'  => esc_html__( 'Neue Kategorie hinzufügen', 'paxdes-portfolio' ),
        'new_item_name' => esc_html__( 'Neuer Kategorie-Name', 'paxdes-portfolio' ),
        'menu_name'     => esc_html__( 'Kategorien', 'paxdes-portfolio' ),
    );

    register_taxonomy( 'project_category', array( 'project' ), array(
        'hierarchical'      => true,
        'labels'            => $tax_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'projekt-kategorie' ),
        'show_in_rest'      => true,
    ) );
}
add_action( 'init', 'paxdes_register_project_post_type' );

/**
 * Custom Post Type: Leistungen
 */
function paxdes_register_service_post_type() {
    $labels = array(
        'name'               => esc_html__( 'Leistungen', 'paxdes-portfolio' ),
        'singular_name'      => esc_html__( 'Leistung', 'paxdes-portfolio' ),
        'menu_name'          => esc_html__( 'Leistungen', 'paxdes-portfolio' ),
        'add_new'            => esc_html__( 'Neue Leistung', 'paxdes-portfolio' ),
        'add_new_item'       => esc_html__( 'Neue Leistung hinzufügen', 'paxdes-portfolio' ),
        'edit_item'          => esc_html__( 'Leistung bearbeiten', 'paxdes-portfolio' ),
        'new_item'           => esc_html__( 'Neue Leistung', 'paxdes-portfolio' ),
        'view_item'          => esc_html__( 'Leistung ansehen', 'paxdes-portfolio' ),
        'search_items'       => esc_html__( 'Leistungen durchsuchen', 'paxdes-portfolio' ),
        'not_found'          => esc_html__( 'Keine Leistungen gefunden', 'paxdes-portfolio' ),
        'not_found_in_trash' => esc_html__( 'Keine Leistungen im Papierkorb', 'paxdes-portfolio' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'leistungen' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-admin-tools',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'service', $args );
}
add_action( 'init', 'paxdes_register_service_post_type' );

/**
 * Excerpt-Länge anpassen
 */
function paxdes_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'paxdes_excerpt_length' );

/**
 * Excerpt "Mehr"-Text anpassen
 */
function paxdes_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'paxdes_excerpt_more' );

/**
 * Body-Klassen hinzufügen
 */
function paxdes_body_classes( $classes ) {
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }

    if ( is_front_page() ) {
        $classes[] = 'main-homepage';
    }

    return $classes;
}
add_filter( 'body_class', 'paxdes_body_classes' );

/**
 * Preloader aktivieren/deaktivieren
 */
function paxdes_show_preloader() {
    return apply_filters( 'paxdes_show_preloader', true );
}

/**
 * Helper: Get Customizer Option
 */
function paxdes_get_option( $option, $default = '' ) {
    return get_theme_mod( $option, $default );
}

/**
 * Helper: Social Media Links ausgeben
 */
function paxdes_social_links() {
    $social_networks = array(
        'github'   => array( 'icon' => 'iconoir-github', 'label' => 'GitHub' ),
        'linkedin' => array( 'icon' => 'iconoir-linkedin', 'label' => 'LinkedIn' ),
        'twitter'  => array( 'icon' => 'iconoir-twitter', 'label' => 'Twitter' ),
        'xing'     => array( 'icon' => 'iconoir-xing', 'label' => 'Xing' ),
    );

    $output = '<ul class="social-links">';
    foreach ( $social_networks as $network => $data ) {
        $url = paxdes_get_option( "paxdes_social_{$network}" );
        if ( ! empty( $url ) ) {
            $output .= sprintf(
                '<li><a href="%s" target="_blank" rel="noopener noreferrer" aria-label="%s"><i class="%s"></i></a></li>',
                esc_url( $url ),
                esc_attr( $data['label'] ),
                esc_attr( $data['icon'] )
            );
        }
    }
    $output .= '</ul>';

    return $output;
}

/**
 * Sicherheit: Entferne WordPress-Version aus Header
 */
remove_action( 'wp_head', 'wp_generator' );

/**
 * Sicherheit: Deaktiviere XML-RPC wenn nicht benötigt
 */
add_filter( 'xmlrpc_enabled', '__return_false' );

/**
 * Performance: Deaktiviere Emojis
 */
function paxdes_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'paxdes_disable_emojis' );

/**
 * Lazy Loading für Bilder aktivieren
 */
add_filter( 'wp_lazy_loading_enabled', '__return_true' );

/**
 * Include zusätzliche Theme-Dateien
 */
require_once PAXDES_THEME_DIR . '/inc/acf-fields.php';
