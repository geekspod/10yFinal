<?php

/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package WordPress
* @subpackage R-Energy
* @since 1.0.0
*/

get_header();

    if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {

        // you can use this action to add any content before single page
        do_action( "r_energy_before_post_single" );

        ?>
        <!-- Single page general div -->
        <div id="nt-single" class="nt-single">

            <?php
            r_energy_hero_section();

            if (is_active_sidebar( 'r-energy-single-sidebar' )) {
                if ('full-width' == r_energy_settings( 'single_layout','right-sidebar' )) {
                    r_energy_single_page_layout_fullwidth();
                } else {
                    r_energy_single_page_layout_sidebar();
                }
            } else {
                r_energy_single_page_layout_fullwidth();
            }
            ?>

        </div>
        <!--End single page general div -->

        <?php

        do_action( "r_energy_after_post_single" );
    }

get_footer();
?>
