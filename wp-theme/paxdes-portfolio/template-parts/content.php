<?php
/**
 * Template part for displaying posts
 *
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'shadow-box mb-4' ); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
    <div class="entry-thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'large' ); ?>
        </a>
    </div>
    <?php endif; ?>

    <div class="entry-content-wrap">
        <header class="entry-header">
            <?php
            if ( is_singular() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;
            ?>

            <div class="entry-meta">
                <span class="posted-on">
                    <i class="iconoir-calendar"></i>
                    <?php echo get_the_date(); ?>
                </span>
                <span class="author">
                    <i class="iconoir-user"></i>
                    <?php the_author(); ?>
                </span>
            </div>
        </header>

        <div class="entry-content">
            <?php
            if ( is_singular() ) {
                the_content();
            } else {
                the_excerpt();
            }
            ?>
        </div>

        <?php if ( ! is_singular() ) : ?>
        <div class="entry-footer">
            <a href="<?php the_permalink(); ?>" class="read-more">
                <?php esc_html_e( 'Weiterlesen', 'paxdes-portfolio' ); ?>
                <i class="iconoir-arrow-right"></i>
            </a>
        </div>
        <?php endif; ?>
    </div>
</article>
