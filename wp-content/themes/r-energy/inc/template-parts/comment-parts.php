<?php


/*************************************************
## Post Comment Customization
*************************************************/


// Theme custom comment list
function r_energy_custom_commentlist($comment, $args, $depth) {

    $GLOBALS['comment'] = $comment; ?>

    <li <?php comment_class('nt-comment-item'); ?> id="li-comment-<?php comment_ID() ?>">

        <div id="comment-<?php comment_ID(); ?>">

            <div class="nt-comment-left">

                <div class="nt-comment-avatar">
                    <?php echo get_avatar($comment,$size='70' ); ?>
                </div>

                <?php if ($comment->comment_approved == '0') : ?>
                    <em><?php esc_html_e('Your comment is awaiting moderation.', 'r-energy') ?></em>
                    <br />
                <?php endif; ?>

            </div>

            <div class="nt-comment-right">

                <div class="nt-comment-author comment__author-name">
                    <?php echo get_comment_author_link(); ?>
                </div>
                <div class="nt-comment-date">
                    <span class="post-meta__item __date-post">
                        <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
                            <?php printf(esc_html__('%1$s at %2$s', 'r-energy'), get_comment_date(),  get_comment_time()) ?>
                        </a>
                        <?php edit_comment_link(esc_html__('(Edit)', 'r-energy'),'  ','') ?>
                    </span>
                </div>

                <div class="nt-comment-content nt-theme-content nt-clearfix"><?php comment_text() ?></div>


                <div class="nt-comment-date post-meta">

                    <div class="nt-comment-reply-content post-meta__item"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></div>

                </div>

            </div>

        </div>
        <?php
    }



    // Unset URL from comment form
    function r_energy_move_comment_form_below( $fields ) {

        $comment_field = $fields['comment'];
        unset( $fields['comment'] );
        $fields['comment'] = $comment_field;

        return $fields;

    }
    add_filter( 'comment_form_fields', 'r_energy_move_comment_form_below' );



    // Add placeholder for Name and Email
    function r_energy_move_modify_comment_form_fields($fields){

        $commenter     = wp_get_current_commenter();
        $user          = wp_get_current_user();
        $user_identity = $user->exists() ? $user->display_name : '';
        $req           = get_option( 'require_name_email' );
        $aria_req      = ( $req ? " aria-required='true'" : '' );
        $html_req      = ( $req ? " required='required'" : '' );
        $html5         = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : false;

        $fields['author'] = '<div class="row">
        <div class="col-12 col-lg-4">
        <div class="form-group">
        <label class="input-label">
        <input class="form-field input input-name" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' required /><span>' . esc_attr__( 'Full Name', 'r-energy' ) . '</span>
        </label>
        </div>
        </div>';

        $fields['email'] = '<div class="col-12 col-lg-4">
        <div class="form-group">
        <label class="input-label">
        <input class="form-field input input-name" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' required/>
        <span>'.esc_attr__( 'E-mail', 'r-energy' ).'</span>
        </label>
        </div>
        </div>';

        $fields['url'] = '<div class="col-12 col-lg-4">
        <div class="form-group">
        <label class="input-label">
        <input class="form-field input input-name" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" required/>
        <span>'.esc_attr__( 'Website URL', 'r-energy' ).'</span>
        </label>
        </div>
        </div>

        </div>';
        return $fields;
    }
    add_filter('comment_form_default_fields','r_energy_move_modify_comment_form_fields');

    function r_energy_modify_comment_form_text_area($arg) {

        $arg['comment_field'] = '
        <div class="row form-default">
        <div class="col-12">
        <div class="form-group">
        <label class="textarea-label">
        <textarea id="comment" class="form-field textarea" name="comment" cols="45" rows="6" aria-required="true"></textarea>
        <span>'.esc_attr__( 'Comment', 'r-energy' ).'</span>
        </label>
        </div>
        </div>
        </div>';

        return $arg;
    }

    add_filter('comment_form_defaults', 'r_energy_modify_comment_form_text_area');
