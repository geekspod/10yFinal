<?php
/**
* single post parts
*/

/*************************************************
## SINGLE PAGE PARTS
*************************************************/


if (! function_exists('r_energy_single_page_layout_sidebar')) {
    function r_energy_single_page_layout_sidebar()
    {
        ?>
        <!-- Section Post -->
        <div class="nt-theme-inner-container section blog-detail nt-has-sidebar">
            <div class="container">
                <div class="row">

                    <!-- Left sidebar -->
                    <?php if( 'left-sidebar' == r_energy_settings( 'single_layout', 'right-sidebar' ) ) { ?>
                        <div id="nt-sidebar" class="col-lg-4 nt-sidebar left-sidebar">
                            <div class="nt-sidebar-inner">
                                <?php
                                if (is_active_sidebar( 'r-energy-single-sidebar' )) {
                                    dynamic_sidebar( 'r-energy-single-sidebar' );
                                }
                                ?>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- Content column control -->
                    <div class="col-lg-8">
                        <!-- start posts -->
                        <div class="nt-theme-content nt-clearfix">
                            <?php
                            // Post content
                            while ( have_posts() ) : the_post();
                            r_energy_single_page_layout_sidebar_content();
                        endwhile;
                        ?>
                    </div>

                    <div class="comments-block">
                        <?php

                        // Author box
                        r_energy_single_post_author_box();
                        // Post comments
                        if ( comments_open() || '0' != get_comments_number() ) {
                            comments_template();
                        }
                        ?>
                    </div>
                </div><!-- End column content -->

                <!-- Right sidebar -->
                <?php if( 'right-sidebar' == r_energy_settings( 'single_layout', 'right-sidebar' ) ) { ?>
                    <div id="nt-sidebar" class="col-lg-4 nt-sidebar right-sidebar">
                        <div class="nt-sidebar-inner">
                            <?php
                            if (is_active_sidebar( 'r-energy-single-sidebar' )) {
                                dynamic_sidebar( 'r-energy-single-sidebar' );
                            }
                            ?>
                        </div>
                    </div>
                <?php } ?>

            </div><!-- End row -->
        </div><!-- End container -->
        <?php r_energy_single_post_related(); ?>
    </div><!-- End Section Post -->
    <?php
}
}

if (! function_exists('r_energy_single_page_layout_fullwidth')) {
    function r_energy_single_page_layout_fullwidth()
    {
        ?>
        <!-- Section Post -->
        <div class="nt-theme-inner-container section blog-detail">

            <div class="nt-theme-content nt-clearfix">
                <?php
                // Post content
                while ( have_posts() ) : the_post();
                r_energy_single_page_fullwidth_content();
            endwhile;
            ?>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="comments-block">
                        <?php


                        r_energy_single_post_tags();

                        // Author box
                        r_energy_single_post_author_box();
                        // Post comments
                        if ( comments_open() || '0' != get_comments_number() ) {
                            comments_template();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php r_energy_single_post_related(); ?>

    </div>
    <!-- End Section Post -->
    <?php
}
}

/*************************************************
## SINGLE PAGE POST CONTENT FUNCTION
*************************************************/

if (! function_exists('r_energy_single_page_layout_sidebar_content')) {
    function r_energy_single_page_layout_sidebar_content()
    {
        ?>


        <div class="content-block">
            <div class="date-block">
                <svg class="icon" viewBox="0 0 14.389 16" xmlns="http://www.w3.org/2000/svg"><path d="M12.79 1.6h-.799V0h-1.599v1.6H3.997V0H2.398v1.6h-.799C.716 1.6.008 2.316.008 3.2L0 14.4c0 .884.715 1.6 1.599 1.6H12.79a1.6 1.6 0 001.599-1.6V3.2a1.6 1.6 0 00-1.599-1.6zm0 12.8H1.599V5.6H12.79v8.8zm-1.974-6.352L9.968 7.2l-3.901 3.904-1.694-1.696-.847.848L6.067 12.8l4.749-4.752z" fill-rule="evenodd" clip-rule="evenodd"/></svg>
                <span class="date"><?php esc_html_e( 'Posted On:', 'r-energy' ) ?> <?php the_date(); ?></span>
            </div>
            <h3 class="title"><?php the_title(); ?></h3>
            <div class="promo-holder">
                <?php r_energy_post_format(); ?>
            </div>
            <?php
            the_content();
            r_energy_wp_link_pages();
            r_energy_single_post_tags();
            ?>
        </div>
        <?php
    }
}

if (! function_exists('r_energy_single_page_post_content')) {
    function r_energy_single_page_fullwidth_content()
    {
        ?>

        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">

                    <div class="content-block">

                        <div class="date-block">
                            <svg class="icon" viewBox="0 0 14.389 16" xmlns="http://www.w3.org/2000/svg"><path d="M12.79 1.6h-.799V0h-1.599v1.6H3.997V0H2.398v1.6h-.799C.716 1.6.008 2.316.008 3.2L0 14.4c0 .884.715 1.6 1.599 1.6H12.79a1.6 1.6 0 001.599-1.6V3.2a1.6 1.6 0 00-1.599-1.6zm0 12.8H1.599V5.6H12.79v8.8zm-1.974-6.352L9.968 7.2l-3.901 3.904-1.694-1.696-.847.848L6.067 12.8l4.749-4.752z" fill-rule="evenodd" clip-rule="evenodd"/></svg>
                            <span class="date"><?php the_date(); ?></span>
                        </div>

                        <h2 class="title"><?php the_title(); ?></h2>


                        <div class="promo-holder">
                            <?php r_energy_post_format(); ?>
                        </div>

                        <?php
                        the_content();
                        r_energy_wp_link_pages();
                        ?>

                    </div>

                </div>
            </div>
        </div>

        <?php
    }
}
