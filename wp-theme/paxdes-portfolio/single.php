<?php
/**
 * Single Post Template
 *
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

get_header();
?>

<section class="single-post-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php
                while ( have_posts() ) :
                    the_post();
                ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'shadow-box' ); ?>>
                        <header class="entry-header">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                            <div class="entry-meta">
                                <span class="posted-on">
                                    <i class="iconoir-calendar"></i>
                                    <?php echo get_the_date(); ?>
                                </span>
                                <span class="author">
                                    <i class="iconoir-user"></i>
                                    <?php the_author(); ?>
                                </span>
                                <?php if ( has_category() ) : ?>
                                <span class="categories">
                                    <i class="iconoir-folder"></i>
                                    <?php the_category( ', ' ); ?>
                                </span>
                                <?php endif; ?>
                            </div>
                        </header>

                        <?php if ( has_post_thumbnail() ) : ?>
                        <div class="entry-thumbnail">
                            <?php the_post_thumbnail( 'large' ); ?>
                        </div>
                        <?php endif; ?>

                        <div class="entry-content">
                            <?php
                            the_content();

                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html__( 'Seiten:', 'paxdes-portfolio' ),
                                'after'  => '</div>',
                            ) );
                            ?>
                        </div>

                        <?php if ( has_tag() ) : ?>
                        <footer class="entry-footer">
                            <div class="tags">
                                <?php the_tags( '<span class="tags-label">' . esc_html__( 'Tags:', 'paxdes-portfolio' ) . '</span> ', ', ' ); ?>
                            </div>
                        </footer>
                        <?php endif; ?>
                    </article>

                    <?php
                    the_post_navigation( array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Vorheriger Beitrag:', 'paxdes-portfolio' ) . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Nächster Beitrag:', 'paxdes-portfolio' ) . '</span> <span class="nav-title">%title</span>',
                    ) );

                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>
                <?php
                endwhile;
                ?>
            </div>

            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
get_footer();
