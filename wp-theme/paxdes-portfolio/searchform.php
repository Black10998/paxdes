<?php
/**
 * Search Form Template
 *
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text"><?php esc_html_e( 'Suche nach:', 'paxdes-portfolio' ); ?></span>
        <input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Suche...', 'paxdes-portfolio' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button type="submit" class="search-submit">
        <i class="iconoir-search"></i>
        <span class="screen-reader-text"><?php esc_html_e( 'Suchen', 'paxdes-portfolio' ); ?></span>
    </button>
</form>
