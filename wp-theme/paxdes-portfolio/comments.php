<?php
/**
 * Comments Template
 *
 * @package PAXDES_Portfolio
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area shadow-box mt-5">
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ( '1' === $comment_count ) {
                printf(
                    /* translators: 1: title. */
                    esc_html__( 'Ein Kommentar zu &ldquo;%1$s&rdquo;', 'paxdes-portfolio' ),
                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            } else {
                printf(
                    /* translators: 1: comment count number, 2: title. */
                    esc_html( _nx( '%1$s Kommentar zu &ldquo;%2$s&rdquo;', '%1$s Kommentare zu &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'paxdes-portfolio' ) ),
                    number_format_i18n( $comment_count ),
                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size' => 60,
            ) );
            ?>
        </ol>

        <?php
        the_comments_navigation( array(
            'prev_text' => esc_html__( '&laquo; Ältere Kommentare', 'paxdes-portfolio' ),
            'next_text' => esc_html__( 'Neuere Kommentare &raquo;', 'paxdes-portfolio' ),
        ) );

        if ( ! comments_open() ) :
        ?>
            <p class="no-comments"><?php esc_html_e( 'Kommentare sind geschlossen.', 'paxdes-portfolio' ); ?></p>
        <?php
        endif;

    endif;

    comment_form( array(
        'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
        'title_reply_after'  => '</h3>',
        'class_submit'       => 'theme-btn',
        'label_submit'       => esc_html__( 'Kommentar absenden', 'paxdes-portfolio' ),
    ) );
    ?>
</div>
