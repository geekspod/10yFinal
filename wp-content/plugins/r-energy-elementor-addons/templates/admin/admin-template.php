<?php
/**
* R-Energy Admin Page Template
*/
?>

<div class="r-energy-admin-wrapper">
    <div class="container">

        <div class="page-heading">
            <h1 class="page-title"><?php _e( 'R-Energy Addons', 'r-energy' ); ?></h1>
            <p class="page-description">
                <?php _e( 'Premium & Advanced Essential Elements for Elementor', 'r-energy' ); ?>
            </p>
        </div>

        <form class="r-energy-form" method="post">

            <div class="row widget-row">
                
                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_one_page_menu', 0 );
                        if ( isset( $_POST['disable_r_energy_one_page_menu'] ) ) {
                            update_option( 'disable_r_energy_one_page_menu', $_POST['disable_r_energy_one_page_menu'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_one_page_menu" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_one_page_menu" name="disable_r_energy_one_page_menu" value="0" <?php checked( 0, get_option( 'disable_r_energy_one_page_menu' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_one_page_menu"><?php _e( 'One Page Menu', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_home_slider_one', 0 );
                        if ( isset( $_POST['disable_r_energy_home_slider_one'] ) ) {
                            update_option( 'disable_r_energy_home_slider_one', $_POST['disable_r_energy_home_slider_one'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_home_slider_one" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_home_slider_one" name="disable_r_energy_home_slider_one" value="0" <?php checked( 0, get_option( 'disable_r_energy_home_slider_one' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_home_slider_one"><?php _e( 'Home Slider 1', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_home_slider_two', 0 );
                        if ( isset( $_POST['disable_r_energy_home_slider_two'] ) ) {
                            update_option( 'disable_r_energy_home_slider_two', $_POST['disable_r_energy_home_slider_two'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_home_slider_two" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_home_slider_two" name="disable_r_energy_home_slider_two" value="0" <?php checked( 0, get_option( 'disable_r_energy_home_slider_two' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_home_slider_two"><?php _e( 'Home Slider 2', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_home_slider_three', 0 );
                        if ( isset( $_POST['disable_r_energy_home_slider_three'] ) ) {
                            update_option( 'disable_r_energy_home_slider_three', $_POST['disable_r_energy_home_slider_three'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_home_slider_three" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_home_slider_three" name="disable_r_energy_home_slider_three" value="0" <?php checked( 0, get_option( 'disable_r_energy_home_slider_three' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_home_slider_three"><?php _e( 'Home Slider 2', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_cooperation_slider_section', 0 );
                        if ( isset( $_POST['disable_r_energy_cooperation_slider_section'] ) ) {
                            update_option( 'disable_r_energy_cooperation_slider_section', $_POST['disable_r_energy_cooperation_slider_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_cooperation_slider_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_cooperation_slider_section" name="disable_r_energy_cooperation_slider_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_cooperation_slider_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_cooperation_slider_section"><?php _e( 'Corporation Slider', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_partners_slider_section', 0 );
                        if ( isset( $_POST['disable_r_energy_partners_slider_section'] ) ) {
                            update_option( 'disable_r_energy_partners_slider_section', $_POST['disable_r_energy_partners_slider_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_partners_slider_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_partners_slider_section" name="disable_r_energy_partners_slider_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_partners_slider_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_partners_slider_section"><?php _e( 'Partners Slider', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_brands_slider_section', 0 );
                        if ( isset( $_POST['disable_r_energy_brands_slider_section'] ) ) {
                            update_option( 'disable_r_energy_brands_slider_section', $_POST['disable_r_energy_brands_slider_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_brands_slider_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_brands_slider_section" name="disable_r_energy_brands_slider_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_brands_slider_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_brands_slider_section"><?php _e( 'Brands Slider', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_project_gallery_slider_section', 0 );
                        if ( isset( $_POST['disable_r_energy_project_gallery_slider_section'] ) ) {
                            update_option( 'disable_r_energy_project_gallery_slider_section', $_POST['disable_r_energy_project_gallery_slider_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_project_gallery_slider_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_project_gallery_slider_section" name="disable_r_energy_project_gallery_slider_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_project_gallery_slider_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_project_gallery_slider_section"><?php _e( 'Project Gallery Slider', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_instagram_slider_section', 0 );
                        if ( isset( $_POST['disable_r_energy_instagram_slider_section'] ) ) {
                            update_option( 'disable_r_energy_instagram_slider_section', $_POST['disable_r_energy_instagram_slider_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_instagram_slider_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_instagram_slider_section" name="disable_r_energy_instagram_slider_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_instagram_slider_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_instagram_slider_section"><?php _e( 'Instagram Slider', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_rev_slider', 0 );
                        if ( isset( $_POST['disable_r_energy_rev_slider'] ) ) {
                            update_option( 'disable_r_energy_rev_slider', $_POST['disable_r_energy_rev_slider'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_rev_slider" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_rev_slider" name="disable_r_energy_rev_slider" value="0" <?php checked( 0, get_option( 'disable_r_energy_rev_slider' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_rev_slider"><?php _e( 'Revolution Slider', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_page_hero_section', 0 );
                        if ( isset( $_POST['disable_r_energy_page_hero_section'] ) ) {
                            update_option( 'disable_r_energy_page_hero_section', $_POST['disable_r_energy_page_hero_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_page_hero_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_page_hero_section" name="disable_r_energy_page_hero_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_page_hero_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_page_hero_section"><?php _e( 'Page Hero', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_section_heading', 0 );
                        if ( isset( $_POST['disable_r_energy_section_heading'] ) ) {
                            update_option( 'disable_r_energy_section_heading', $_POST['disable_r_energy_section_heading'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_section_heading" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_section_heading" name="disable_r_energy_section_heading" value="0" <?php checked( 0, get_option( 'disable_r_energy_section_heading' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_section_heading"><?php _e( 'Section Heading', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_button', 0 );
                        if ( isset( $_POST['disable_r_energy_button'] ) ) {
                            update_option( 'disable_r_energy_button', $_POST['disable_r_energy_button'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_button" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_button" name="disable_r_energy_button" value="0" <?php checked( 0, get_option( 'disable_r_energy_button' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_button"><?php _e( 'Button', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_alert', 0 );
                        if ( isset( $_POST['disable_r_energy_alert'] ) ) {
                            update_option( 'disable_r_energy_alert', $_POST['disable_r_energy_alert'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_alert" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_alert" name="disable_r_energy_alert" value="0" <?php checked( 0, get_option( 'disable_r_energy_alert' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_alert"><?php _e( 'Alert', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_charts', 0 );
                        if ( isset( $_POST['disable_r_energy_charts'] ) ) {
                            update_option( 'disable_r_energy_charts', $_POST['disable_r_energy_charts'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_charts" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_charts" name="disable_r_energy_charts" value="0" <?php checked( 0, get_option( 'disable_r_energy_charts' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_charts"><?php _e( 'Charts', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_progressbar', 0 );
                        if ( isset( $_POST['disable_r_energy_progressbar'] ) ) {
                            update_option( 'disable_r_energy_progressbar', $_POST['disable_r_energy_progressbar'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_progressbar" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_progressbar" name="disable_r_energy_progressbar" value="0" <?php checked( 0, get_option( 'disable_r_energy_progressbar' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_progressbar"><?php _e( 'Progressbar', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_about_us_one_section', 0 );
                        if ( isset( $_POST['disable_r_energy_about_us_one_section'] ) ) {
                            update_option( 'disable_r_energy_about_us_one_section', $_POST['disable_r_energy_about_us_one_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_about_us_one_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_about_us_one_section" name="disable_r_energy_about_us_one_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_about_us_one_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_about_us_one_section"><?php _e( 'Abour Us 1', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_about_us_two_section', 0 );
                        if ( isset( $_POST['disable_r_energy_about_us_two_section'] ) ) {
                            update_option( 'disable_r_energy_about_us_two_section', $_POST['disable_r_energy_about_us_two_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_about_us_two_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_about_us_two_section" name="disable_r_energy_about_us_two_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_about_us_two_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_about_us_two_section"><?php _e( 'Abour Us 2', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_about_us_three_section', 0 );
                        if ( isset( $_POST['disable_r_energy_about_us_three_section'] ) ) {
                            update_option( 'disable_r_energy_about_us_three_section', $_POST['disable_r_energy_about_us_three_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_about_us_three_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_about_us_three_section" name="disable_r_energy_about_us_three_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_about_us_three_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_about_us_three_section"><?php _e( 'Abour Us 3', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_product_description_section', 0 );
                        if ( isset( $_POST['disable_r_energy_product_description_section'] ) ) {
                            update_option( 'disable_r_energy_product_description_section', $_POST['disable_r_energy_product_description_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_product_description_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_product_description_section" name="disable_r_energy_product_description_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_product_description_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_product_description_section"><?php _e( 'Product Description', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_product_info_parallax_section', 0 );
                        if ( isset( $_POST['disable_r_energy_product_info_parallax_section'] ) ) {
                            update_option( 'disable_r_energy_product_info_parallax_section', $_POST['disable_r_energy_product_info_parallax_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_product_info_parallax_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_product_info_parallax_section" name="disable_r_energy_product_info_parallax_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_product_info_parallax_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_product_info_parallax_section"><?php _e( 'Product Info Parallax', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_product_book_download', 0 );
                        if ( isset( $_POST['disable_r_energy_product_book_download'] ) ) {
                            update_option( 'disable_r_energy_product_book_download', $_POST['disable_r_energy_product_book_download'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_product_book_download" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_product_book_download" name="disable_r_energy_product_book_download" value="0" <?php checked( 0, get_option( 'disable_r_energy_product_book_download' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_product_book_download"><?php _e( 'Product Book Download', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_gallery_grid_section', 0 );
                        if ( isset( $_POST['disable_r_energy_gallery_grid_section'] ) ) {
                            update_option( 'disable_r_energy_gallery_grid_section', $_POST['disable_r_energy_gallery_grid_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_gallery_grid_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_gallery_grid_section" name="disable_r_energy_gallery_grid_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_gallery_grid_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_gallery_grid_section"><?php _e( 'Gallery Section', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_pricing_item', 0 );
                        if ( isset( $_POST['disable_r_energy_pricing_item'] ) ) {
                            update_option( 'disable_r_energy_pricing_item', $_POST['disable_r_energy_pricing_item'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_pricing_item" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_pricing_item" name="disable_r_energy_pricing_item" value="0" <?php checked( 0, get_option( 'disable_r_energy_pricing_item' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_pricing_item"><?php _e( 'Pricing Item', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_testimonials_one_section', 0 );
                        if ( isset( $_POST['disable_r_energy_testimonials_one_section'] ) ) {
                            update_option( 'disable_r_energy_testimonials_one_section', $_POST['disable_r_energy_testimonials_one_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_testimonials_one_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_testimonials_one_section" name="disable_r_energy_testimonials_one_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_testimonials_one_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_testimonials_one_section"><?php _e( 'Testimonials Section', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_blog_grid_section', 0 );
                        if ( isset( $_POST['disable_r_energy_blog_grid_section'] ) ) {
                            update_option( 'disable_r_energy_blog_grid_section', $_POST['disable_r_energy_blog_grid_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_blog_grid_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_blog_grid_section" name="disable_r_energy_blog_grid_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_blog_grid_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_blog_grid_section"><?php _e( 'Blog Grid Section', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_blog_list_section', 0 );
                        if ( isset( $_POST['disable_r_energy_blog_list_section'] ) ) {
                            update_option( 'disable_r_energy_blog_list_section', $_POST['disable_r_energy_blog_list_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_blog_list_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_blog_list_section" name="disable_r_energy_blog_list_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_blog_list_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_blog_list_section"><?php _e( 'Blog List Section', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_blog_zigzag_section', 0 );
                        if ( isset( $_POST['disable_r_energy_blog_zigzag_section'] ) ) {
                            update_option( 'disable_r_energy_blog_zigzag_section', $_POST['disable_r_energy_blog_zigzag_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_blog_zigzag_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_blog_zigzag_section" name="disable_r_energy_blog_zigzag_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_blog_zigzag_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_blog_zigzag_section"><?php _e( 'Blog Zigzag Section', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_banner_one_section', 0 );
                        if ( isset( $_POST['disable_r_energy_banner_one_section'] ) ) {
                            update_option( 'disable_r_energy_banner_one_section', $_POST['disable_r_energy_banner_one_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_banner_one_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_banner_one_section" name="disable_r_energy_banner_one_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_banner_one_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_banner_one_section"><?php _e( 'Banner 1 Section', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_contact_form7_map_section', 0 );
                        if ( isset( $_POST['disable_r_energy_contact_form7_map_section'] ) ) {
                            update_option( 'disable_r_energy_contact_form7_map_section', $_POST['disable_r_energy_contact_form7_map_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_contact_form7_map_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_contact_form7_map_section" name="disable_r_energy_contact_form7_map_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_contact_form7_map_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_contact_form7_map_section"><?php _e( 'Map & Contact Form', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_contact_form7', 0 );
                        if ( isset( $_POST['disable_r_energy_contact_form7'] ) ) {
                            update_option( 'disable_r_energy_contact_form7', $_POST['disable_r_energy_contact_form7'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_contact_form7" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_contact_form7" name="disable_r_energy_contact_form7" value="0" <?php checked( 0, get_option( 'disable_r_energy_contact_form7' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_contact_form7"><?php _e( 'Contact Form 7', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_counterup_item', 0 );
                        if ( isset( $_POST['disable_r_energy_counterup_item'] ) ) {
                            update_option( 'disable_r_energy_counterup_item', $_POST['disable_r_energy_counterup_item'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_counterup_item" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_counterup_item" name="disable_r_energy_counterup_item" value="0" <?php checked( 0, get_option( 'disable_r_energy_counterup_item' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_counterup_item"><?php _e( 'CounterUp Item', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_counterup', 0 );
                        if ( isset( $_POST['disable_r_energy_counterup'] ) ) {
                            update_option( 'disable_r_energy_counterup', $_POST['disable_r_energy_counterup'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_counterup" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_counterup" name="disable_r_energy_counterup" value="0" <?php checked( 0, get_option( 'disable_r_energy_counterup' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_counterup"><?php _e( 'CounterUp Section', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_about_counterup', 0 );
                        if ( isset( $_POST['disable_r_energy_about_counterup'] ) ) {
                            update_option( 'disable_r_energy_about_counterup', $_POST['disable_r_energy_about_counterup'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_about_counterup" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_about_counterup" name="disable_r_energy_about_counterup" value="0" <?php checked( 0, get_option( 'disable_r_energy_about_counterup' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_about_counterup"><?php _e( 'About CounterUp Section', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_platform_section', 0 );
                        if ( isset( $_POST['disable_r_energy_platform_section'] ) ) {
                            update_option( 'disable_r_energy_platform_section', $_POST['disable_r_energy_platform_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_platform_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_platform_section" name="disable_r_energy_platform_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_platform_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_platform_section"><?php _e( 'Platform Section', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_services_section', 0 );
                        if ( isset( $_POST['disable_r_energy_services_section'] ) ) {
                            update_option( 'disable_r_energy_services_section', $_POST['disable_r_energy_services_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_services_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_services_section" name="disable_r_energy_services_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_services_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_services_section"><?php _e( 'Services Section', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_features_one_section', 0 );
                        if ( isset( $_POST['disable_r_energy_features_one_section'] ) ) {
                            update_option( 'disable_r_energy_features_one_section', $_POST['disable_r_energy_features_one_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_features_one_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_features_one_section" name="disable_r_energy_features_one_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_features_one_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_features_one_section"><?php _e( 'Features Zigzag', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_mobile_app_section', 0 );
                        if ( isset( $_POST['disable_r_energy_mobile_app_section'] ) ) {
                            update_option( 'disable_r_energy_mobile_app_section', $_POST['disable_r_energy_mobile_app_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_mobile_app_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_mobile_app_section" name="disable_r_energy_mobile_app_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_mobile_app_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_mobile_app_section"><?php _e( 'Mobile App Section', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_video_popup_item', 0 );
                        if ( isset( $_POST['disable_r_energy_video_popup_item'] ) ) {
                            update_option( 'disable_r_energy_video_popup_item', $_POST['disable_r_energy_video_popup_item'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_video_popup_item" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_video_popup_item" name="disable_r_energy_video_popup_item" value="0" <?php checked( 0, get_option( 'disable_r_energy_video_popup_item' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_video_popup_item"><?php _e( 'Video Popup', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_team_member_item', 0 );
                        if ( isset( $_POST['disable_r_energy_team_member_item'] ) ) {
                            update_option( 'disable_r_energy_team_member_item', $_POST['disable_r_energy_team_member_item'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_team_member_item" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_team_member_item" name="disable_r_energy_team_member_item" value="0" <?php checked( 0, get_option( 'disable_r_energy_team_member_item' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_team_member_item"><?php _e( 'Team Box', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_accordion_tabs_section', 0 );
                        if ( isset( $_POST['disable_r_energy_accordion_tabs_section'] ) ) {
                            update_option( 'disable_r_energy_accordion_tabs_section', $_POST['disable_r_energy_accordion_tabs_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_accordion_tabs_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_accordion_tabs_section" name="disable_r_energy_accordion_tabs_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_accordion_tabs_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_accordion_tabs_section"><?php _e( 'Accordion Tabs', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_vertical_tabs_section', 0 );
                        if ( isset( $_POST['disable_r_energy_vertical_tabs_section'] ) ) {
                            update_option( 'disable_r_energy_vertical_tabs_section', $_POST['disable_r_energy_vertical_tabs_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_vertical_tabs_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_vertical_tabs_section" name="disable_r_energy_vertical_tabs_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_vertical_tabs_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_vertical_tabs_section"><?php _e( 'Vertical Tabs', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_cases_cpt_section', 0 );
                        if ( isset( $_POST['disable_r_energy_cases_cpt_section'] ) ) {
                            update_option( 'disable_r_energy_cases_cpt_section', $_POST['disable_r_energy_cases_cpt_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_cases_cpt_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_cases_cpt_section" name="disable_r_energy_cases_cpt_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_cases_cpt_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_cases_cpt_section"><?php _e( 'Cases CPT', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-toggle">
                        <?php
                        add_option( 'disable_r_energy_woo_section', 0 );
                        if ( isset( $_POST['disable_r_energy_woo_section'] ) ) {
                            update_option( 'disable_r_energy_woo_section', $_POST['disable_r_energy_woo_section'] );
                        }
                        ?>
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="disable_r_energy_woo_section" value="1">
                            <input type="checkbox" class="custom-control-input" id="disable_r_energy_woo_section" name="disable_r_energy_woo_section" value="0" <?php checked( 0, get_option( 'disable_r_energy_woo_section' ), true ); ?>>
                            <label class="custom-control-label" for="disable_r_energy_woo_section"><?php _e( 'WooCommerce', 'r-energy' ); ?></label>
                        </div>
                    </div>
                </div>

            </div>

            <div class="page-actions">
                <div class="row">
                    <div class="col-sm-12 submit-container">
                        <?php wp_nonce_field( 'r_energy_admin_nonce_field' ); ?>
                        <button type="submit" class="btn btn-primary"><?php _e( 'Save Settings', 'r-energy' ); ?></button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
