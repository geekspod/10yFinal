<?php

/**
* The template for displaying 404 pages (not found)
*
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
*
* @package WordPress
* @subpackage R-Energy
* @since 1.0.0
*/

get_header();

// you can use this action for add any content before container element
do_action( "r_energy_before_404" );

?>

<div id="nt-404" class="nt-404 error">
    <div class="section error">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading primary-heading">
                        <?php if ( '0' != r_energy_settings('error_content_title_visibility', '1')) { ?>
                            <h5 class="subtitle"><?php echo r_energy_settings( 'error_content_title', '<span>Someting</span> <span>Went Wrong</span>' ); ?></h5>
                        <?php } ?>
                        <?php if ( '0' != r_energy_settings('error_content_desc_visibility', '1')) { ?>
                            <p class="error-desc"><?php echo r_energy_settings( 'error_content_desc', 'The page not found' ); ?></p>
                        <?php } ?>
                        <?php if ( '0' != r_energy_settings('error_content_btn_visibility', '1')) { ?>
                            <a class="r-button r-button--filled"
                            href="<?php echo esc_url(home_url('/')); ?>"
                            data-hover="<?php echo esc_html( r_energy_settings( 'error_content_btn_title', 'Home Page' ) ); ?>">
                            <span><?php echo esc_html( r_energy_settings( 'error_content_btn_title', 'Home Page' ) ); ?></span></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

// use this action to add any content after 404 page container element
do_action( "r_energy_after_404" );

get_footer();

?>
