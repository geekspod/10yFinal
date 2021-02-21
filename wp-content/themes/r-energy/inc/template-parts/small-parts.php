<?php


/**
* Custom template parts for this theme.
*
* preloader, backtotop, conten-none
*
* Eventually, some of the functionality here could be replaced by core features.
*
* @package r-energy
*/



/*************************************************
## START PRELOADER
*************************************************/

if ( ! function_exists( 'r_energy_preloader' ) ) {
    function r_energy_preloader() {
        if ( '0' != r_energy_settings('preloader_visibility', '1') ) {
            if ( 'custom' == r_energy_settings('pre_type', '1') ) {
                echo'<div id="nt-preloader" class="preloader justify-content-center align-items-center d-flex"><img src="'.esc_url(r_energy_settings('pre_custom_img')['url']).'" class="nt-custom-preloader"></div>';
            } else {
                echo'<div id="nt-preloader" class="preloader">
                <div class="loader'.r_energy_settings('pre_type').'"></div>
                </div>';
            }
        }
    }
}

/*************************************************
##  BACKTOP
*************************************************/

if ( ! function_exists( 'r_energy_backtop' ) ) {
    function r_energy_backtop() {

        if ( '1' == r_energy_settings('backtotop_visibility') ) {

            echo'<a href="#" id="js-back-to-top" class="btn-scroll-top"><svg viewBox="0 0 291.49 492" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M198.608 246.104L382.664 62.04c5.068-5.056 7.856-11.816 7.856-19.024 0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12C361.476 2.792 354.712 0 347.504 0s-13.964 2.792-19.028 7.864L109.328 227.008c-5.084 5.08-7.868 11.868-7.848 19.084-.02 7.248 2.76 14.028 7.848 19.112l218.944 218.932c5.064 5.072 11.82 7.864 19.032 7.864 7.208 0 13.964-2.792 19.032-7.864l16.124-16.12c10.492-10.492 10.492-27.572 0-38.06L198.608 246.104z"/></svg></a>';

        }

    }
}


/*************************************************
##  CONTENT NONE
*************************************************/


if ( ! function_exists( 'r_energy_content_none' ) ) {
    function r_energy_content_none() {
        $r_energy_centered = is_search() && 'full-width' == r_energy_settings( 'search_layout') ? ' text-center' : '';
        ?>

        <div class="content-none-container section-heading">


            <h2 class="__title<?php echo esc_attr($r_energy_centered); ?>"><?php esc_html_e( 'Nothing', 'r-energy' ); ?> <span><?php esc_html_e( 'Found', 'r-energy' ); ?></span></h2>

            <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

                <p><?php printf( esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'r-energy' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

            <?php elseif ( is_search() ) : ?>

                <p class="__nothing<?php echo esc_attr($r_energy_centered); ?>"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'r-energy' ); ?></p>
                <div class="spacer py-4"></div>
                <?php echo r_energy_content_custom_search_form(); ?>

            <?php else : ?>
                <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'r-energy' ); ?></p>
                <div class="spacer py-4"></div>
                <?php r_energy_content_custom_search_form(); ?>

            <?php endif; ?>

        </div> <!-- End article -->

        <?php
    }
}
