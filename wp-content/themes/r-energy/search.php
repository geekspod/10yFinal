<?php
/**
* The template for displaying search results pages
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
*
* @package WordPress
* @subpackage R-Energy
* @since 1.0.0
*/
get_header();
// you can use this action for add any content before container element
do_action( 'r_energy_before_search' );
$renergy_layout = r_energy_settings( 'search_layout', 'full-width' );
$renergy_justify = 'full-width' == r_energy_settings( 'search_layout', 'full-width' ) ? ' justify-content-center' : '';

?>
<!-- search page general div -->
<div id="nt-search" class="nt-search">
    <?php r_energy_hero_section(); ?>
    <div class="nt-theme-inner-container section">
        <div class="container">
            <div class="row<?php echo esc_attr($renergy_justify); ?>">

                <!-- Left sidebar -->
                <?php if( 'left-sidebar' == $renergy_layout ) { ?>
                    <div id="nt-sidebar" class="col-md-4 nt-sidebar left-sidebar">
                        <div class="nt-sidebar-inner">
                            <?php
                            if (is_active_sidebar( 'r-energy-search-sidebar' )) {
                                dynamic_sidebar( 'r-energy-search-sidebar' );
                            }
                            ?>
                        </div>
                    </div>
                <?php } ?>

                <!-- Content Column-->
                <div class="col-md-8">
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
                            if (is_active_sidebar( 'r-energy-search-sidebar' )) {
                                dynamic_sidebar( 'r-energy-search-sidebar' );
                            }
                            ?>
                        </div>
                    </div>
                <?php } ?>

            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End #blog-post -->
</div>
<!--End search page general div -->

<?php
// you can use this action to add any content after search page
do_action( 'r_energy_after_search' );

get_footer();
?>
