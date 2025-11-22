<?php
/**
 * ACF Field Definitions
 * 
 * Definiert Custom Fields für Projekte und andere Post Types
 * Funktioniert nur wenn ACF installiert ist
 *
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Registriere ACF-Felder für Projekte
 */
function paxdes_register_acf_fields() {
    // Prüfe ob ACF verfügbar ist
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    acf_add_local_field_group( array(
        'key'      => 'group_project_details',
        'title'    => 'Projekt-Details',
        'fields'   => array(
            array(
                'key'          => 'field_project_url',
                'label'        => 'Projekt-URL',
                'name'         => 'project_url',
                'type'         => 'url',
                'instructions' => 'Link zum Live-Projekt',
                'required'     => 0,
            ),
            array(
                'key'          => 'field_project_client',
                'label'        => 'Kunde',
                'name'         => 'project_client',
                'type'         => 'text',
                'instructions' => 'Name des Kunden oder Auftraggebers',
                'required'     => 0,
            ),
            array(
                'key'          => 'field_project_date',
                'label'        => 'Projektdatum',
                'name'         => 'project_date',
                'type'         => 'text',
                'instructions' => 'z.B. "Januar 2024" oder "2024"',
                'required'     => 0,
            ),
            array(
                'key'          => 'field_project_technologies',
                'label'        => 'Technologien',
                'name'         => 'project_technologies',
                'type'         => 'text',
                'instructions' => 'Verwendete Technologien (z.B. "WordPress, PHP, React")',
                'required'     => 0,
            ),
            array(
                'key'          => 'field_project_gallery',
                'label'        => 'Projekt-Galerie',
                'name'         => 'project_gallery',
                'type'         => 'gallery',
                'instructions' => 'Zusätzliche Bilder für das Projekt',
                'required'     => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'project',
                ),
            ),
        ),
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
    ) );

    acf_add_local_field_group( array(
        'key'      => 'group_service_details',
        'title'    => 'Leistungs-Details',
        'fields'   => array(
            array(
                'key'          => 'field_service_icon',
                'label'        => 'Icon-Klasse',
                'name'         => 'service_icon',
                'type'         => 'text',
                'instructions' => 'Iconoir CSS-Klasse (z.B. "iconoir-code")',
                'required'     => 0,
                'default_value' => 'iconoir-code',
            ),
            array(
                'key'          => 'field_service_features',
                'label'        => 'Features',
                'name'         => 'service_features',
                'type'         => 'textarea',
                'instructions' => 'Liste der Features (eine pro Zeile)',
                'required'     => 0,
                'rows'         => 5,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'service',
                ),
            ),
        ),
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
    ) );

    // Editierbare Bildbereiche für Startseite
    acf_add_local_field_group( array(
        'key'      => 'group_homepage_images',
        'title'    => 'Startseiten-Bilder',
        'fields'   => array(
            array(
                'key'          => 'field_hero_image',
                'label'        => 'Hero-Bild (Profilbild)',
                'name'         => 'hero_image',
                'type'         => 'image',
                'instructions' => 'Hauptbild im Hero-Bereich - Ihr Profilbild (empfohlen: 800x800px, quadratisch)',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),
            array(
                'key'          => 'field_credentials_signature',
                'label'        => 'Signatur-Bild',
                'name'         => 'credentials_signature',
                'type'         => 'image',
                'instructions' => 'Signatur für Qualifikationen-Box (empfohlen: 200x100px, transparent PNG)',
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
            ),
            array(
                'key'          => 'field_featured_star',
                'label'        => 'Featured-Banner Stern-Icon',
                'name'         => 'featured_star',
                'type'         => 'image',
                'instructions' => 'Stern-Icon für den Featured-Banner (empfohlen: SVG oder PNG, 50x50px)',
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
            ),
            array(
                'key'          => 'field_background_pattern',
                'label'        => 'Hintergrund-Muster',
                'name'         => 'background_pattern',
                'type'         => 'image',
                'instructions' => 'Hintergrund-Textur für alle Shadow-Boxen (empfohlen: 500x500px, subtil)',
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
            ),
            array(
                'key'          => 'field_about_btn_icon',
                'label'        => 'About-Button Icon',
                'name'         => 'about_btn_icon',
                'type'         => 'image',
                'instructions' => 'Icon für About-Buttons (empfohlen: SVG, 30x30px)',
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'page_type',
                    'operator' => '==',
                    'value'    => 'front_page',
                ),
            ),
        ),
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
    ) );

    // Editierbare Bilder für alle Seiten
    acf_add_local_field_group( array(
        'key'      => 'group_page_images',
        'title'    => 'Seiten-Bilder',
        'fields'   => array(
            array(
                'key'          => 'field_page_header_image',
                'label'        => 'Header-Bild',
                'name'         => 'page_header_image',
                'type'         => 'image',
                'instructions' => 'Bild für den Seiten-Header (optional)',
                'return_format' => 'array',
                'preview_size' => 'large',
            ),
            array(
                'key'          => 'field_page_gallery',
                'label'        => 'Bilder-Galerie',
                'name'         => 'page_gallery',
                'type'         => 'gallery',
                'instructions' => 'Zusätzliche Bilder für die Seite',
                'return_format' => 'array',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'page',
                ),
            ),
        ),
        'menu_order'            => 10,
        'position'              => 'side',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
    ) );
}

// Hook zum Registrieren der ACF-Felder
add_action( 'acf/init', 'paxdes_register_acf_fields' );

/**
 * Helper-Funktion: Hole ACF-Feld oder Fallback zu Post Meta
 */
function paxdes_get_field( $field_name, $post_id = null ) {
    if ( function_exists( 'get_field' ) ) {
        return get_field( $field_name, $post_id );
    }
    
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    
    return get_post_meta( $post_id, $field_name, true );
}

/**
 * Helper-Funktion: Hole Bild-URL mit Fallback
 */
function paxdes_get_image( $field_name, $size = 'full', $default = '' ) {
    $image = paxdes_get_field( $field_name );
    
    if ( $image && is_array( $image ) ) {
        return isset( $image['sizes'][ $size ] ) ? $image['sizes'][ $size ] : $image['url'];
    } elseif ( $image && is_numeric( $image ) ) {
        $img = wp_get_attachment_image_src( $image, $size );
        return $img ? $img[0] : $default;
    }
    
    return $default ? $default : PAXDES_THEME_URI . '/assets/images/bg1.png';
}
