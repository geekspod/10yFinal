<?php


/**
* Custom template parts for this theme.
*
* Eventually, some of the functionality here could be replaced by core features.
*
* @package r-energy
*/

if ( ! function_exists( 'r_energy_footer' ) ) {
    function r_energy_footer()
    {
        $sidebar = is_active_sidebar('footer-widget-area') ? '' : ' footer-copyright';
        $trans_bg = 'elementor' == r_energy_settings('footer_type') ? ' elementor-custom-footer trans-bg' : '';
        echo '<footer id="nt-footer" class="footer'.esc_attr($sidebar.$trans_bg).'">';
        do_action( 'r_energy_footer_widgetize_action' );
        do_action( 'r_energy_copyright_action' );
        echo '</footer>';
    }
}


/*************************************************
##  WIDGETIZE FOOTER
*************************************************/

if ( ! function_exists( 'r_energy_footer_widgetize' ) ) {
    function r_energy_footer_widgetize()
    {
        $fw_visibility = r_energy_settings('footer_widgetize_visibility', '0');
        $fw_visibility = is_page_template( 'default' ) && class_exists('ACF') && function_exists('get_field') && true === get_field('r_energy_hide_page_footer_widget_area') ? '0' : $fw_visibility;
        if ('0' != $fw_visibility) {

            echo '<div class="footer-top nt-footer-sidebar">
            <div class="container">
            <div class="row justify-content-md-center">';
            if (is_active_sidebar('footer-widget-area')) {
                dynamic_sidebar('footer-widget-area');
            }
            echo '</div>
            </div>
            </div>';
        }
    }
}
add_action( 'r_energy_footer_widgetize_action',  'r_energy_footer_widgetize', 10 );



/*************************************************
##  FOOTER COPYRIGHT
*************************************************/

if ( ! function_exists( 'r_energy_copyright' ) ) {
    function r_energy_copyright()
    {
        $copy_visibility = r_energy_settings('footer_copyright_visibility', '1');
        $copy_visibility = is_page_template( 'default' ) && class_exists('ACF') && function_exists('get_field') && true === get_field('r_energy_hide_page_footer') ? '0' : $copy_visibility;

        if ( '0' != $copy_visibility ) {

            if ( 'custom' == r_energy_settings('footer_type') ) {

                // custom footer allowed html
                echo r_energy_settings('custom_footer');

            } elseif ( 'elementor' == r_energy_settings('footer_type') ) {
                if (class_exists('\Elementor\Frontend')) {
                    if (!empty(r_energy_settings('footer_elementor_templates'))) {
                        wp_enqueue_style('r-energy-elementor');
                        $r_energy_template_id = r_energy_settings('footer_elementor_templates');
                        $r_energy_frontend = new \Elementor\Frontend;
                        echo r_energy_sanitize_data( $r_energy_frontend->get_builder_content( $r_energy_template_id, true ) ); // variables within $r_energy_frontend have already been escaped
                    } else {
                        echo sprintf('<p class="copyright text-center ptb-40">'.esc_html__('No template exist for footer.', 'r-energy').' <a class="main-color" href="%s">'.esc_html__('Add new section template.', 'r-energy').'</a></p>', admin_url( 'edit.php?post_type=elementor_library&tabs_group=library&elementor_library_type=section' ));
                    }
                }
            } else {
                echo'<div class="container">
                <div class="row">
                <div class="col-12">
                <div class="footer-lower">
                <div class="row align-items-baseline">';
                if ( '' != r_energy_settings( 'footer_copyright' ) ) {
                    echo '<div class="col-lg-4 col-md-6">
                    <p class="copyright">'.wp_kses( r_energy_settings( 'footer_copyright' ), r_energy_allowed_html() ).'</p>
                    </div>';
                } else {
                    echo sprintf('<div class="col-lg-4 col-md-6"><p class="copyright"><i class="fa fa-copyright"></i> %s R-Energy. '. esc_html__('All rights reserved by ', 'r-energy') .'<a class="__dev" href="https://ninetheme.com/contact/" target="_blank">'.esc_html__('Ninetheme.', 'r-energy').'</a></p></div>', date('Y'));
                }
                if ( '' != r_energy_settings( 'footer_link' ) ) {
                    echo '<div class="col-lg-4 col-md-6">
                    <div class="privacy-block">'.wp_kses( r_energy_settings( 'footer_link' ), r_energy_allowed_html() ).'</div>
                    </div>';
                }
                $socials = r_energy_settings('footer_social');
                if($socials){
                    echo '<div class="col-lg-4 col-md-6">
                    <nav class="socials-holder socials-desktop">
                    <ul class="socials-primary">';
                    for ($i=0; $i < (count($socials)); $i++) {
                        $icon = $socials[$i] ? $socials[$i] : '';
                        $url = $socials[$i+1] ? $socials[$i+1] : '#';
                        if($icon){
                            echo '<li><a href="'.esc_url($url).'"><i class="'.esc_html($icon).'" aria-hidden="true"></i></a></li>';
                        }
                        $i = $i+1;
                    }
                    echo '</ul>
                    </nav>
                    </div>';
                }
                echo '</div>
                </div>
                </div>
                </div>
                </div>';
            }
        }
    }
}
add_action( 'r_energy_copyright_action',  'r_energy_copyright', 10 );
