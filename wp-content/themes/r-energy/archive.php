<?php
/**
* The template for displaying archive pages
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package WordPress
* @subpackage R-Energy
* @since 1.0.0
*/

get_header();

do_action( 'r_energy_before_archive' );

$renergy_layout = r_energy_settings( 'archive_layout', 'full-width' );
$renergy_justify = 'full-width' == r_energy_settings( 'archive_layout', 'full-width' ) ? ' justify-content-center' : '';

?>

<!-- archive page general div -->
<div id="nt-archive" class="nt-archive" >

    <?php r_energy_hero_section(); ?>
    <div class="nt-theme-inner-container section">
        <div class="container">
            <div class="row<?php echo esc_attr($renergy_justify); ?>">

                <!-- Left sidebar -->
                <?php if( 'left-sidebar' == $renergy_layout ) { ?>
                    <div id="nt-sidebar" class="col-md-4 nt-sidebar left-sidebar">
                        <div class="nt-sidebar-inner">
                            <?php
                            if (is_active_sidebar( 'r-energy-archive-sidebar' )) {
                                dynamic_sidebar( 'r-energy-archive-sidebar' );
                            }
                            ?>
                        </div>
                    </div>
                <?php } ?>

                <!-- Content column -->
                <?php if( 'left-sidebar' == $renergy_layout || 'right-sidebar' == $renergy_layout  ) { ?>
                    <div class="col-md-8">
                    <?php } else { ?>
                        <div class="col-md-9">
                        <?php } ?>
                        <?php
                        if ( have_posts() ) {

                            while ( have_posts() ) : the_post();
                            r_energy_post_style_one();
                        endwhile;

                        echo '<div class="clearfix"></div>';
                        // this function working with wp reading settins + posts
                        r_energy_index_loop_pagination();
                    } else {
                        // if there are no posts, read content none function
                        r_energy_content_none();
                    }
                    ?>
                </div>
                <!-- End content -->

                <!-- Right sidebar -->
                <?php if( 'right-sidebar' == $renergy_layout ) { ?>
                    <div id="nt-sidebar" class="col-md-4 nt-sidebar right-sidebar">
                        <div class="nt-sidebar-inner">
                            <?php
                            if (is_active_sidebar( 'r-energy-archive-sidebar' )) {
                                dynamic_sidebar( 'r-energy-archive-sidebar' );
                            }
                            ?>
                        </div>
                    </div>
                <?php } ?>

            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End #blog-post -->

</div>
<!-- End archive page general div-->

<?php

do_action( 'r_energy_after_archive' );

get_footer();
?>
