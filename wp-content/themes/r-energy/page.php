<?php

/**
* default page template
*/

get_header();

$r_energy_page_layout = function_exists('get_field') ? get_field('r_energy_page_layout'): 'full-width';
$r_energy_justify = 'full-width' == $r_energy_page_layout ? ' justify-content-center' : '';

do_action( "r_energy_before_page" );
?>

<div id="nt-page-container" class="nt-page-layout">

    <?php if ( class_exists( 'WooCommerce' ) && ( is_checkout() || is_cart() || is_account_page() ) ) : ?>

        <?php r_energy_hero_section(); ?>

        <?php
        while ( have_posts() ) :
            the_post();

            /* translators: %s: Name of current post */
            the_content( sprintf(
                esc_html__( 'Continue reading %s', 'r-energy' ),
                the_title( '<span class="screen-reader-text">', '</span>', false )
                ) );

                /* theme page link pagination */
                r_energy_wp_link_pages();

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }

                // End the loop.
            endwhile;

            ?>

        <?php else : ?>

            <!-- Hero section - this function using on all inner pages -->
            <?php r_energy_hero_section(); ?>

            <div id="nt-page" class="nt-theme-inner-container section">
                <div class="container">
                    <div class="row<?php echo esc_attr($r_energy_justify); ?>">

                        <!-- Left sidebar -->
                        <?php if( $r_energy_page_layout =='left-sidebar' ){
                            get_sidebar();
                        } ?>

                        <!-- Sidebar control column -->
                        <div class="col-md-8">

                            <?php while ( have_posts() ) : the_post(); ?>

                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                    <div class="nt-theme-content nt-clearfix content-container">
                                        <?php

                                        /* translators: %s: Name of current post */
                                        the_content( sprintf(
                                            esc_html__( 'Continue reading %s', 'r-energy' ),
                                            the_title( '<span class="screen-reader-text">', '</span>', false )
                                            ) );

                                            /* theme page link pagination */
                                            r_energy_wp_link_pages();

                                            ?>
                                        </div><!-- End .nt-theme-content -->

                                    </div><!--End article -->

                                    <?php

                                    // If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) {
                                        comments_template();
                                    }

                                    // End the loop.
                                endwhile;

                                ?>

                            </div>

                            <!-- Right sidebar -->
                            <?php if( $r_energy_page_layout =='right-sidebar' ){
                                get_sidebar();
                            } ?>

                        </div><!--End row -->
                    </div><!--End container -->
                </div><!--End #nt-page -->

            <?php endif; ?>

        </div><!--End page general div -->

        <?php

        // you can use this action for add any content after container element
        do_action( "r_energy_after_page" );

        get_footer();

        ?>
