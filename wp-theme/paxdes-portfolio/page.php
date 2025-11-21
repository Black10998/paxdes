<?php
/**
 * Page Template
 *
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

get_header();
?>

<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                while ( have_posts() ) :
                    the_post();
                ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'shadow-box' ); ?>>
                        <header class="entry-header">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
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
                    </article>

                    <?php
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>
                <?php
                endwhile;
                ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
