<?php

/*
Template name: R-Energy Elementor
*/
get_header();

    // Get the page settings manager
    $r_energy_page_settings_model = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' )->get_model( get_the_ID() );

    $r_energy_hide_page_header  = $r_energy_page_settings_model->get_settings( 'r_energy_hide_page_header' );
    $r_energy_page_header_type  = $r_energy_page_settings_model->get_settings( 'r_energy_page_header_type' );
    $r_energy_hide_page_fw      = $r_energy_page_settings_model->get_settings( 'r_energy_hide_page_footer_widgetize' );
    $r_energy_hide_page_footer  = $r_energy_page_settings_model->get_settings( 'r_energy_hide_page_footer' );
    $r_energy_page_header_type  = '' != $r_energy_page_header_type ? $r_energy_page_header_type : r_energy_settings('nav_type', 'header--style-1');
    // page header
    if (function_exists('r_energy_preloader') ) {
        r_energy_preloader();
    }
    if ('0' != r_energy_settings('nav_visibility', '1')) {

        if ( 'yes' != $r_energy_hide_page_header ) {

            r_energy_header_mobile_menu();

            if ( 'shop' == $r_energy_page_header_type ) {

                do_action('r_energy_shop_header_action');

            } elseif ( 'boxedbar' == $r_energy_page_header_type ) {

                do_action('r_energy_header_boxedbar_action');

            } elseif ( 'boxed' == $r_energy_page_header_type ) {

                do_action('r_energy_header_boxed_action');

            } elseif ( 'fullwidth' == $r_energy_page_header_type ) {

                do_action('r_energy_header_fullwidth_action');

            } else {

                do_action('r_energy_header_action');

            }
        }
    }
    r_energy_backtop();
    // start page main wrapper
    echo'<main class="main">';
    // start page content
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    endif;
    echo '</main>';

    if ( 'yes' != $r_energy_hide_page_fw || 'yes' != $r_energy_hide_page_footer ) {
        $sidebar = is_active_sidebar('footer-widget-area') ? '' : ' footer-copyright';
        $trans_bg = 'elementor' == r_energy_settings('footer_type', 'default') ? ' elementor-custom-footer trans-bg' : '';
        echo '<footer id="nt-footer" class="footer'.esc_attr($sidebar.$trans_bg).'">';
        // footer widgetize part
        if ( 'yes' != $r_energy_hide_page_fw ) {
            do_action('r_energy_footer_widgetize_action');
        }
        // footer main part
        if ( 'yes' != $r_energy_hide_page_footer ){
            do_action('r_energy_copyright_action');
        }
        echo '</footer>';
    }

    echo '</div>'; // end page wrapper from header.php
    echo '<div style="display: none"><?xml version="1.0" encoding="utf-8"?><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><symbol viewBox="0 0 19.481 19.481" id="star" xmlns="http://www.w3.org/2000/svg"><path d="M10.201.758l2.478 5.865 6.344.545a.5.5 0 01.285.876l-4.812 4.169 1.442 6.202a.5.5 0 01-.745.541l-5.452-3.288-5.452 3.288a.5.5 0 01-.745-.541l1.442-6.202-4.813-4.17a.5.5 0 01.285-.876l6.344-.545L9.28.758a.5.5 0 01.921 0z"/></symbol><symbol viewBox="0 0 21.999 22" id="tilemode" xmlns="http://www.w3.org/2000/svg"><path d="M10.977 21.995c-3.576 0-7.152-.002-10.729.005C.041 22 0 21.94 0 21.745c.006-7.16.006-14.32 0-21.479C0 .058.044 0 .26 0c7.16.006 14.32.006 21.48 0 .218 0 .26.059.26.266-.006 7.16-.006 14.32-.001 21.479 0 .196-.043.255-.249.254-3.591-.006-7.182-.004-10.773-.004zM9.996 7.009c0-1.597-.002-3.194.004-4.792 0-.17-.043-.223-.219-.223-2.52.006-5.041.005-7.561.001-.169 0-.226.042-.226.22.005 3.187.005 6.374 0 9.561 0 .183.053.234.235.233 2.513-.006 5.026-.006 7.539 0 .183 0 .233-.048.232-.231-.007-1.59-.004-3.179-.004-4.769zm2.008 7.997c0 1.59.003 3.18-.004 4.77-.001.184.051.231.233.231 2.513-.006 5.026-.006 7.539 0 .184 0 .234-.053.234-.235-.006-3.181-.006-6.36 0-9.54 0-.2-.062-.241-.25-.241-2.506.006-5.011.007-7.517-.001-.199-.001-.241.058-.24.246.008 1.59.005 3.18.005 4.77zm4.009-13.008c-1.268 0-2.536.003-3.803-.004-.164-.001-.21.044-.21.21.006 1.861.006 3.723 0 5.584 0 .171.043.221.219.221 2.521-.006 5.042-.005 7.563-.001.167 0 .225-.036.224-.216a793.23 793.23 0 01-.001-5.562c.001-.18-.047-.238-.233-.236-1.252.007-2.506.004-3.759.004zM6.01 20.003c1.253 0 2.506-.004 3.759.004.186.001.231-.053.231-.234a859.331 859.331 0 010-5.562c.001-.174-.048-.22-.221-.219-2.521.005-5.042.005-7.563 0-.17 0-.223.04-.223.218.007 1.854.007 3.708.001 5.562-.001.183.052.236.234.235 1.261-.008 2.521-.004 3.782-.004z"/></symbol><symbol viewBox="0 0 47.971 47.971" id="close" xmlns="http://www.w3.org/2000/svg"><path d="M28.228 23.986L47.092 5.122a2.998 2.998 0 000-4.242 2.998 2.998 0 00-4.242 0L23.986 19.744 5.121.88a2.998 2.998 0 00-4.242 0 2.998 2.998 0 000 4.242l18.865 18.864L.879 42.85a2.998 2.998 0 104.242 4.241l18.865-18.864L42.85 47.091c.586.586 1.354.879 2.121.879s1.535-.293 2.121-.879a2.998 2.998 0 000-4.242L28.228 23.986z"/></symbol></svg></div>';

    wp_footer();
    echo'</body>';
echo'</html>';
