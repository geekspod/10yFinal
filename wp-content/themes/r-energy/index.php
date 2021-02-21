<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package WordPress
* @subpackage Quadron
* @since 1.0.0
*/

get_header();

do_action( "r_energy_before_index" );

$index_type = r_energy_settings( 'index_type', 'masonry' );
$renergy_layout = r_energy_settings( 'index_layout', 'right-sidebar' );
$renergy_justify = 'full-width' == $renergy_layout ? ' justify-content-center' : '';
$renergy_column = 'full-width' == $renergy_layout && 'masonry' == $index_type ? 'col-md-12' : 'col-md-8';
$renergy_has_sidebar = is_active_sidebar('sidebar-1') && 'full-width' != $renergy_layout ? ' has--sidebar' : '';

?>
<!-- container -->
<div id="nt-index" class="nt-index">

    <!-- Hero section - this function using on all inner pages -->
    <?php r_energy_hero_section(); ?>

    <div class="nt-theme-inner-container section<?php echo esc_attr($renergy_has_sidebar); ?>">
        <div class="container">
            <div class="row<?php echo esc_attr($renergy_justify); ?>">

                <!-- left sidebar -->
                <?php if( 'left-sidebar' == $renergy_layout ) {
                    get_sidebar();
                } ?>

                <!-- Sidebar column control -->
                <div  class="<?php echo esc_attr($renergy_column); ?>">
                    <?php

                    if ( have_posts() ) {

                        // masonry type
                        if( 'masonry' == $index_type ) {
                            echo '<div class="row">';
                            echo '<div id="masonry-container">';
                        }

                        while ( have_posts() ) : the_post();

                        // if there are posts, run r_energy_post_style_one function
                        // contain supported post formats from theme
                        r_energy_post_style_one();

                    endwhile;

                    // masonry type container end
                    if( 'masonry' == $index_type ) {
                        echo '</div>';
                        echo '</div>';
                    }

                    echo '<div class="clearfix"></div>';

                    // this function working with wp reading settins + posts
                    r_energy_index_loop_pagination();

                } else {

                    // if there are no posts, read content none function
                    r_energy_content_none();

                }

                ?>
            </div>
            <!-- End sidebar column control -->

            <!-- right sidebar -->
            <?php if( 'right-sidebar' == $renergy_layout ) {
                get_sidebar();
            } ?>

        </div>
        <!--End row -->
    </div>
    <!--End container -->
</div>
<!--End #blog -->
</div>
<!--End index general div -->

<?php

// you can use this action to add any content after index page
do_action( "r_energy_after_index" );

get_footer();

?>
