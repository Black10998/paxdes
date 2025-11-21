<?php
/**
 * Header Template
 *
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if ( paxdes_show_preloader() ) : ?>
<div id="preloader" class="preloader">
    <div class="black_wall"></div>
    <div class="loader"></div>
</div>
<?php endif; ?>

<main class="main-homepage">

<!-- Header -->
<header class="header-area">
    <div class="container">
        <div class="gx-row d-flex align-items-center justify-content-between">
            
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                    <img src="<?php echo esc_url( PAXDES_THEME_URI . '/assets/images/logo.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
                </a>
            <?php endif; ?>

            <!-- Navigation -->
            <nav class="navbar">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'menu',
                    'container'      => false,
                    'fallback_cb'    => false,
                ) );
                ?>
            </nav>

            <?php
            $cta_text = paxdes_get_option( 'paxdes_cta_text', 'Kontakt aufnehmen' );
            $cta_url  = paxdes_get_option( 'paxdes_cta_url', '#contact' );
            ?>
            <a href="<?php echo esc_url( $cta_url ); ?>" class="theme-btn"><?php echo esc_html( $cta_text ); ?></a>

            <!-- Mobile Menu Toggle -->
            <div class="show-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
