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
if ( function_exists( 'acf_add_local_field_group' ) ) {

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
}

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
