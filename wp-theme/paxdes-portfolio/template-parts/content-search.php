<?php
/**
 * Template part for displaying search results
 *
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'shadow-box mb-4' ); ?>>
    <header class="entry-header">
        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

        <div class="entry-meta">
            <span class="post-type">
                <i class="iconoir-folder"></i>
                <?php echo esc_html( get_post_type_object( get_post_type() )->labels->singular_name ); ?>
            </span>
            <span class="posted-on">
                <i class="iconoir-calendar"></i>
                <?php echo get_the_date(); ?>
            </span>
        </div>
    </header>

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>

    <div class="entry-footer">
        <a href="<?php the_permalink(); ?>" class="read-more">
            <?php esc_html_e( 'Weiterlesen', 'paxdes-portfolio' ); ?>
            <i class="iconoir-arrow-right"></i>
        </a>
    </div>
</article>
