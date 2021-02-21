<?php
/**
* Display single product reviews (comments)
*
* This template can be overridden by copying it to yourtheme/woocommerce/single-product-reviews.php.
*
* HOWEVER, on occasion WooCommerce will need to update template files and you
* (the theme developer) will need to copy the new files to your theme to
* maintain compatibility. We try to do this as little as possible, but it does
* happen. When this occurs the version of the template file will be bumped and
* the readme will list any important changes.
* Edited by NineTheme
*
*/

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! comments_open() ) {
    return;
}

?>
<div id="reviews" class="woocommerce-Reviews">

    <div class="row">
        <div class="col-lg-7 col-md-10 offset-md-1 offset-lg-0">
            <div id="comments">
                <h4 class="woocommerce-Reviews-title">
                    <?php
                    $count = $product->get_review_count();
                    if ( $count && wc_review_ratings_enabled() ) {
                        /* translators: 1: reviews count 2: product name */
                        $reviews_title = sprintf( esc_html( _n( '%1$s review for %2$s', '%1$s reviews for %2$s', $count, 'r-energy' ) ), esc_html( $count ), '<span>' . get_the_title() . '</span>' );
                        echo apply_filters( 'woocommerce_reviews_title', $reviews_title, $count, $product ); // WPCS: XSS ok.
                    } else {
                        esc_html_e( 'Reviews', 'r-energy' );
                    }
                    ?>
                </h4>

                <?php if ( have_comments() ) : ?>

                    <div class="comments-block">
                        <div class="content">
                            <div class="comment-item">
                                <ul class="item">
                                    <?php wp_list_comments( apply_filters( 'woocommerce_product_review_list_args', array( 'callback' => 'woocommerce_comments' ) ) ); ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php
                    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                        echo '<nav class="woocommerce-pagination">';
                        paginate_comments_links(
                            apply_filters(
                                'woocommerce_comment_pagination_args',
                                array(
                                    'prev_text' => '&larr;',
                                    'next_text' => '&rarr;',
                                    'type'      => 'list',
                                )
                                )
                            );
                            echo '</nav>';
                        endif;
                        ?>
                    <?php else : ?>
                        <p class="woocommerce-noreviews"><?php esc_html_e( 'There are no reviews yet.', 'r-energy' ); ?></p>
                    <?php endif; ?>
            </div>

                <?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->get_id() ) ) : ?>
                    <div id="review_form_wrapper">
                        <div id="review_form" class="reviews-form form contact--form comment-form comment-form--with-rating">

                            <?php
                            $commenter    = wp_get_current_commenter();
                            $comment_form = array(
                                /* translators: %s is product title */
                                'title_reply'         => have_comments() ? sprintf( '<h4 class="title">%s <span>%s<span></h4>',esc_html__( 'Live', 'r-energy' ),esc_html__( 'Comment', 'r-energy' )) : sprintf( '<h4 class="title">%s <span>%s<span></h4>',esc_html__( 'Be the first to review', 'r-energy' ), get_the_title() ),
                                /* translators: %s is product title */
                                'title_reply_to'      => esc_html__( 'Leave a Reply to %s', 'r-energy' ),
                                'title_reply_before'  => '',
                                'title_reply_after'   => '',
                                'comment_notes_after' => '',
                                'label_submit'        => esc_html__( 'Submit', 'r-energy' ),
                                'class_submit'        => 'button button--transparent btn mt-0',
                                'logged_in_as'        => '',
                                'comment_field'       => '',
                            );

                            $name_email_required = (bool) get_option( 'require_name_email', 1 );
                            $fields = array(
                                'author' => array(
                                    'label'    => __( 'Name', 'r-energy' ),
                                    'type'     => 'text',
                                    'value'    => $commenter['comment_author'],
                                    'required' => $name_email_required,
                                ),
                                'email' => array(
                                    'label'    => __( 'Email', 'r-energy' ),
                                    'type'     => 'email',
                                    'value'    => $commenter['comment_author_email'],
                                    'required' => $name_email_required,
                                ),
                            );

                            $comment_form['fields'] = array();
                            ?>

                            <?php
                            foreach ( $fields as $key => $field ) {
                                $field_html  = '<div class="row"><div class="col-12">';
                                $field_html .= '<label class="input-label" for="' . esc_attr( $key ) . '">';

                                $field_html .= '<input class="form-field input" id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '" type="' . esc_attr( 	$field['type'] ) . '" value="' . esc_attr( $field['value'] ) . '" size="30" ' . ( $field['required'] ? 'required' : '' ) . ' />';
                                $requiredd = $field['required'] ? '*' : '';
                                $field_html .= '<span>' . esc_html( $field['label'] ).$requiredd.'</span>';
                                $field_html .= '</label>';
                                $field_html .= '</div></div>';

                                $comment_form['fields'][ $key ] = $field_html;
                            }
                            ?>

                            <?php
                            $account_page_url = wc_get_page_permalink( 'myaccount' );
                            if ( $account_page_url ) {
                                /* translators: %s opening and closing link tags respectively */
                                $comment_form['must_log_in'] = '<div class="row"><div class="col-12"><p class="must-log-in">' . sprintf( esc_html__( 'You must be %1$slogged in%2$s to post a review.', 'r-energy' ), '<a href="' . esc_url( $account_page_url ) . '">', '</a>' ) . '</p></div></div>';
                            }

                            $comment_form['comment_field'] .= '<div class="row"><div class="col-12">';
                            $comment_form['comment_field'] .= '<label class="textarea-label" for="comment">';
                            $comment_form['comment_field'] .= '<textarea class="form-field textarea" id="comment" name="comment" cols="45" rows="4" required></textarea>';
                            $comment_form['comment_field'] .= '<span>' . esc_html__( 'Your review', 'r-energy' ) . '*</span>';
                            $comment_form['comment_field'] .= '</label>';
                            $comment_form['comment_field'] .= '</div></div>';

                            $comment_form['comment_field'] .= '<div class="row"><div class="col-12">';
                            $comment_form['comment_field'] .= '<div class="r-button-holder">';
                            $comment_form['comment_field'] .= '<button class="r-button r-button--transparent" type="submit" name="submit" data-hover="'.$comment_form['label_submit'].'"><span>'.$comment_form['label_submit'].'</span></button>';
                            if ( wc_review_ratings_enabled() ) {
                                $comment_form['comment_field'] .= '<div class="comment-form-rating rating-block"><p>' . esc_html__( 'Your rating', 'r-energy' ) . ': </p><select name="rating" id="rating" required>
                                <option value="">' . esc_html__( 'Rate&hellip;', 'r-energy' ) . '</option>
                                <option value="5">' . esc_html__( 'Perfect', 'r-energy' ) . '</option>
                                <option value="4">' . esc_html__( 'Good', 'r-energy' ) . '</option>
                                <option value="3">' . esc_html__( 'Average', 'r-energy' ) . '</option>
                                <option value="2">' . esc_html__( 'Not that bad', 'r-energy' ) . '</option>
                                <option value="1">' . esc_html__( 'Very poor', 'r-energy' ) . '</option>
                                </select></div>';
                            }
                            $comment_form['comment_field'] .= '</div></div></div>';

                            comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );
                            ?>
                        </div>
                    </div>
                <?php else : ?>
                    <p class="woocommerce-verification-required"><?php esc_html_e( 'Only logged in customers who have purchased this product may leave a review.', 'r-energy' ); ?></p>
                <?php endif; ?>
        </div>
    </div>
</div>
