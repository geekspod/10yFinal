<?php

/**
 *
 * @package WordPress
 * @subpackage r-energy
 * @since R-Energy 1.0
 *
**/


/*************************************************
## GOOGLE FONTS
*************************************************/

if (! function_exists('r_energy_fonts_url')) {
    function r_energy_fonts_url()
    {
        $fonts_url = '';

        $heebo = _x('on', 'Heebo font: on or off', 'r-energy');

        if ('off' !== $heebo ) {
            $font_families = array();

            if ('off' !== $heebo) {
                $font_families[] = 'Heebo:100,400,500,700,900';
            }

            $query_args = array(
                'family' => urlencode(implode('|', $font_families)),
                'subset' => urlencode('latin,latin-ext'),
            );

            $fonts_url = add_query_arg($query_args, "//fonts.googleapis.com/css");
        }

        return $fonts_url;
    }
}

/*************************************************
## STYLES AND SCRIPTS
*************************************************/

function r_energy_theme_scripts()
{

    // font families
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/libs/font-awesome/font-awesome.min.css', false, '1.0');


    // plugins
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/libs/bootstrap/bootstrap.min.css', false, '1.0');
    // theme inner pages files
    wp_enqueue_style('r-energy-framework-style', get_template_directory_uri() . '/css/framework-style.css', false, '1.0');

    wp_enqueue_style('fancybox', get_template_directory_uri() . '/libs/fancybox/fancybox.min.css', false, '1.0');
    wp_enqueue_style('slick', get_template_directory_uri() . '/libs/slick/slick.min.css', false, '1.0');
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/libs/nice-select/nice-select.css', false, '1.0');

    // r-energy-main-style
    wp_enqueue_style('r-energy-main', get_template_directory_uri() . '/css/main.css', false, '1.0');
    // r-energy-update-style
    wp_register_style('r-energy-elementor', get_template_directory_uri() . '/css/elementor-custom.css', false, '1.0');
    wp_enqueue_style('r-energy-update', get_template_directory_uri() . '/css/update.css', false, '1.0');

    // upload Google Webfonts
    wp_enqueue_style('r-energy-fonts', r_energy_fonts_url(), array(), '1.0');

    // ## JS
    // theme inner page files
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/libs/bootstrap/bootstrap.bundle.min.js', array('jquery'), '1.0', false);
    wp_enqueue_script('chart', get_template_directory_uri() . '/libs/chart/chart.min.js', array('jquery'), '1.0', false);
    wp_enqueue_script('counter', get_template_directory_uri() . '/libs/counter/counter.min.js', array('jquery'), '1.0', false);
    wp_enqueue_script('slick', get_template_directory_uri() . '/libs/slick/slick.min.js', array('jquery'), '1.0', false);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/libs/fancybox/fancybox.min.js', array('jquery'), '1.0', false);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/libs/isotope/isotope.min.js', array('jquery'), '1.0', false);
    wp_enqueue_script('jarallax', get_template_directory_uri() . '/libs/jarallax/jarallax.min.js', array('jquery'), '1.0', false);
    wp_enqueue_script('ofi', get_template_directory_uri() . '/libs/ofi/ofi.min.js', array('jquery'), '1.0', false);
    wp_enqueue_script('range-slider', get_template_directory_uri() . '/libs/range-slider/range-slider.min.js', array('jquery'), '1.0', false);
    wp_enqueue_script('swipe', get_template_directory_uri() . '/libs/swipe/swipe.min.js', array('jquery'), '1.0', false);
    wp_enqueue_script('tabs', get_template_directory_uri() . '/libs/tabs/tabs.min.js', array('jquery'), '1.0', false);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/libs/waypoints/waypoints.min.js', array('jquery'), '1.0', false);
    wp_enqueue_script('jquery-nice-select', get_template_directory_uri() . '/libs/nice-select/jquery.nice-select.min.js', array('jquery'), '1.0', false);

    wp_enqueue_script('smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.polyfills.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('sliders', get_template_directory_uri() . '/js/sliders.js', array('jquery'), '1.0', true);
    wp_enqueue_script('tabs-custom', get_template_directory_uri() . '/js/tabs.js', array('jquery'), '1.0', true);
    wp_enqueue_script('r-energy-main', get_template_directory_uri() . '/js/common.js', array('jquery'), '1.0', true);

    wp_enqueue_script('framework-settings', get_template_directory_uri() . '/js/framework-settings.js', array('jquery'), '1.0', true);

    if( 'masonry' == r_energy_settings( 'index_type', 'masonry' ) ) {
        wp_enqueue_script('masonry');
    }

    // browser hacks
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.min.js', array('jquery'), '1,0', false);
    wp_script_add_data('modernizr', 'conditional', 'lt IE 9');
    wp_enqueue_script('respond', get_template_directory_uri() . '/js/respond.min.js', array('jquery'), '1.0', false);
    wp_script_add_data('respond', 'conditional', 'lt IE 9');
    wp_enqueue_script('html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js', array('jquery'), '1.0', false);
    wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');

    // comment form reply
    if (is_singular()) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'r_energy_theme_scripts');


/*************************************************
## ADMIN STYLE AND SCRIPTS
*************************************************/


function r_energy_admin_scripts()
{

    // Update CSS within in Admin
    wp_enqueue_script('r-energy-custom-admin', get_template_directory_uri() . '/js/framework-admin.js');
}
add_action('admin_enqueue_scripts', 'r_energy_admin_scripts');


// Theme post and page meta plugin for customization and more features
include get_template_directory() . '/inc/metaboxes.php';


// Template-functions
include get_template_directory() . '/inc/template-functions.php';

// Theme parts
include get_template_directory() . '/inc/template-parts/menu.php';
include get_template_directory() . '/inc/template-parts/post-formats.php';
include get_template_directory() . '/inc/template-parts/search-parts.php';
include get_template_directory() . '/inc/template-parts/single-parts.php';
include get_template_directory() . '/inc/template-parts/paginations.php';
include get_template_directory() . '/inc/template-parts/comment-parts.php';
include get_template_directory() . '/inc/template-parts/small-parts.php';
include get_template_directory() . '/inc/template-parts/header-parts.php';
include get_template_directory() . '/inc/template-parts/footer-parts.php';
include get_template_directory() . '/inc/template-parts/page-hero.php';
include get_template_directory() . '/inc/template-parts/breadcrumbs.php';

// Theme dynamic css setting file
include get_template_directory() . '/inc/custom-style.php';

// TGM plugin activation
include get_template_directory() . '/inc/class-tgm-plugin-activation.php';

// Redux theme options panel
include get_template_directory() . '/inc/theme-options/options.php';

// WooCommerce init
if (class_exists('woocommerce')) {
    include get_template_directory() . '/woocommerce/init.php';
}

/*************************************************
## THEME SETUP
*************************************************/


if (! isset($content_width)) {
    $content_width = 960;
}

function r_energy_theme_setup()
{

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');
	add_image_size('nt-related-post', 450, 450, true);
    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
    */
    add_theme_support('post-thumbnails');

    // theme supports
    add_theme_support('title-tag');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('html5', array( 'search-form' ));

    add_theme_support( 'woocommerce', array('gallery_thumbnail_image_width' => 200,'thumbnail_image_width' => 200,) );

    // Make theme available for translation
    // Translations can be filed in the /languages/ directory
    load_theme_textdomain('r-energy', get_template_directory() . '/languages');

    register_nav_menus(array(
        'header_menu_1' => esc_html__('Header Menu 1', 'r-energy'),
    ));

}
add_action('after_setup_theme', 'r_energy_theme_setup');


/*************************************************
## WIDGET COLUMNS
*************************************************/


function r_energy_widgets_init()
{

    register_sidebar(array(
        'name' => esc_html__('Blog Sidebar', 'r-energy'),
        'id' => 'sidebar-1',
        'description' => esc_html__('These widgets for the Blog page.', 'r-energy'),
        'before_widget' => '<div class="nt-sidebar-inner-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="nt-sidebar-inner-widget-title widget-title">',
        'after_title' => '</h4>'
    ));

    if (class_exists('Redux')) {
        if ('full-width' != r_energy_settings( 'archive_layout', 'full-width' )) {
            register_sidebar(array(
                'name' => esc_html__('Archive Sidebar', 'r-energy'),
                'id' => 'r-energy-archive-sidebar',
                'description' => esc_html__('These widgets for the Archive pages.', 'r-energy'),
                'before_widget' => '<div class="nt-sidebar-inner-widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="nt-sidebar-inner-widget-title widget-title">',
                'after_title' => '</h4>'
            ));
        }
        if ('full-width' != r_energy_settings( 'search_layout', 'full-width' )) {
            register_sidebar(array(
                'name' => esc_html__('Search Sidebar', 'r-energy'),
                'id' => 'r-energy-search-sidebar',
                'description' => esc_html__('These widgets for the Search pages.', 'r-energy'),
                'before_widget' => '<div class="nt-sidebar-inner-widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="nt-sidebar-inner-widget-title widget-title">',
                'after_title' => '</h4>'
            ));
        }
        if (function_exists('get_field') && 'full-width' != get_field('r_energy_page_layout')) {
            register_sidebar(array(
                'name' => esc_html__('Default Page Sidebar', 'r-energy'),
                'id' => 'r-energy-page-sidebar',
                'description' => esc_html__('These widgets for the Default Page pages.', 'r-energy'),
                'before_widget' => '<div class="nt-sidebar-inner-widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="nt-sidebar-inner-widget-title widget-title">',
                'after_title' => '</h4>'
            ));
        }
        if ('full-width' != r_energy_settings( 'single_layout', 'full-width' )) {
            register_sidebar(array(
                'name' => esc_html__('Blog Single Sidebar', 'r-energy'),
                'id' => 'r-energy-single-sidebar',
                'description' => esc_html__('These widgets for the Blog single page.', 'r-energy'),
                'before_widget' => '<div class="nt-sidebar-inner-widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="nt-sidebar-inner-widget-title widget-title">',
                'after_title' => '</h4>'
            ));
        }
        if ('1' == r_energy_settings( 'footer_widgetize_visibility', '0' )) {
            register_sidebar(array(
                'name' => esc_html__('Footer Widget Area', 'r-energy'),
                'id' => 'footer-widget-area',
                'description' => esc_html__('These widgets for the footer top section.', 'r-energy'),
                'before_widget' => '',
                'after_widget' => '',
                'before_title' => '<h4 class="nt-footer-widget-title footer-title collapse-title">',
                'after_title' => '</h4>'
            ));
        }

    } // end if redux exists
} // end r_energy_widgets_init
add_action('widgets_init', 'r_energy_widgets_init');


/*************************************************
## INCLUDE THE TGM_PLUGIN_ACTIVATION CLASS.
*************************************************/


function r_energy_register_required_plugins()
{

    $plugins = array(
        array(
            'name' => esc_html__('Custom Post Type UI', "r-energy"),
            'slug' => 'custom-post-type-ui'
        ),
        array(
            'name' => esc_html__('Contact Form 7', "r-energy"),
            'slug' => 'contact-form-7'
        ),
        array(
            'name' => esc_html__('Woo Product Filter', "r-energy"),
            'slug' => 'woo-product-filter'
        ),
        array(
            'name' => esc_html__('YITH WooCommerce Compare', "r-energy"),
            'slug' => 'yith-woocommerce-compare'
        ),
        array(
            'name' => esc_html__('YITH WooCommerce Wishlist', "r-energy"),
            'slug' => 'yith-woocommerce-wishlist'
        ),
        array(
            'name' => esc_html__('WooCommerce', "r-energy"),
            'slug' => 'woocommerce'
        ),
        array(
            'name' => esc_html__('Safe SVG', "r-energy"),
            'slug' => 'safe-svg'
        ),
        array(
            'name' => esc_html__('Theme Options Panel', "r-energy"),
            'slug' => 'redux-framework',
            'required' => true
        ),
        array(
            'name' => esc_html__('Elementor', "r-energy"),
            'slug' => 'elementor',
            'required' => true
        ),
        array(
            'name' => esc_html__('Advanced Custom Fields - ACF', "r-energy"),
            'slug' => 'advanced-custom-fields',
            'required' => true
        ),
        array(
            'name' => esc_html__('Envato Auto Update Theme', "r-energy"),
            'slug' => 'envato-market',
            'source' => 'https://docs.google.com/uc?export=download&id=14IDiuB8SzVf149WoVHT6iDW8eCScHL6a',
            'required' => false
        ),
        array(
            'name' => esc_html__('Revolution Slider', "r-energy"),
            'slug' => 'revslider',
            'source' => 'https://ninetheme.com/documentation/plugins/revolution_slider.zip',
            'required' => false,
            'version' => '6.2.9',
        ),
        array(
            'name' => esc_html__('R-Energy Elementor Addons', "r-energy"),
            'slug' => 'r-energy-elementor-addons',
            'source' => get_template_directory() . '/plugins/r-energy-elementor-addons.zip',
            'required' => true,
            'version' => '1.0.4'
        )
    );

    $config = array(
        'id' => 'tgmpa',
        'default_path' => '',
        'menu' => 'tgmpa-install-plugins',
        'has_notices' => true,
        'dismissable' => true,
        'dismiss_msg' => '',
        'is_automatic' => true,
        'message' => '',
    );

    tgmpa($plugins, $config);

}
add_action('tgmpa_register', 'r_energy_register_required_plugins');


/*************************************************
## ONE CLICK DEMO IMPORT
*************************************************/


/*************************************************
## THEME SETUP WIZARD
    https://github.com/richtabor/MerlinWP
*************************************************/

require_once get_parent_theme_file_path( '/inc/merlin/class-merlin.php' );
require_once get_parent_theme_file_path( '/inc/demo-wizard-config.php' );

function r_energy_merlin_local_import_files() {
    return array(
        array(

            'import_file_name' => esc_html__( 'Demo Import','r-energy' ),
            // xml data
            'local_import_file' => get_parent_theme_file_path( 'inc/merlin/demodata/data.xml' ),
            // widget data
            'local_import_widget_file' => get_parent_theme_file_path( 'inc/merlin/demodata/widgets.wie' ),
            // option tree -> theme options
            'local_import_redux' => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ). 'inc/merlin/demodata/redux.json',
                    'option_name' => 'r-energy'
                )
            ),
            // cptui -> custom post types data
            'import_cptui' => array(
                array(
                    'cpt_file_url' => trailingslashit( get_template_directory_uri() ) . 'inc/merlin/demodata/cpt.json',
                    'tax_file_url' => trailingslashit( get_template_directory_uri() ) . 'inc/merlin/demodata/cpttax.json'
                )
            )
        )
    );
}
add_filter( 'merlin_import_files', 'r_energy_merlin_local_import_files' );


/**
 * Execute custom code after the whole import has finished.
*/
function r_energy_merlin_after_import_setup() {
    // Assign menus to their locations.
    $header_menu_1 = get_term_by( 'name', 'Primary Menu', 'nav_menu' );

    set_theme_mod(
        'nav_menu_locations', array(
            'header_menu_1' => $header_menu_1->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home 1' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

    if ( did_action( 'elementor/loaded' ) ) {
        // disable some default elementor global settings after setup theme
        update_option( 'elementor_disable_color_schemes', 'yes' );
        update_option( 'elementor_disable_typography_schemes', 'yes' );
        update_option( 'elementor_global_image_lightbox', 'yes' );
    }
}
add_action( 'merlin_after_all_import', 'r_energy_merlin_after_import_setup' );

/**
* disable plugin redirect when tgmpa install plugin_slug*
*/
add_action('init', 'do_output_buffer'); function do_output_buffer() { ob_start(); }

add_filter( 'woocommerce_prevent_automatic_wizard_redirect', '__return_true' );

add_action( 'admin_init', function() {
	if ( did_action( 'elementor/loaded' ) ) {
		remove_action( 'admin_init', [ \Elementor\Plugin::$instance->admin, 'maybe_redirect_to_getting_started' ] );
	}
}, 1 );


/**
 * Adds social links to user profile
 *
 * @param $user_contact
 * @return mixed
 */
function r_energy_user_social_links( $user_contact ) {
   /* Add user contact methods */
   $user_contact['facebook'] = esc_html__('Facebook Link', 'r-energy');
   $user_contact['twitter'] = esc_html__('Twitter Link', 'r-energy');
   $user_contact['dribbble'] = esc_html__('Dribbble Link', 'r-energy');
   $user_contact['c'] = esc_html__('Instagram Link', 'r-energy');
   $user_contact['linkedin'] = esc_html__('LinkedIn Link', 'r-energy');
   $user_contact['youtube'] = esc_html__('Youtube', 'r-energy');

   return $user_contact;
}
add_filter('user_contactmethods', 'r_energy_user_social_links');

function r_energy_register_elementor_locations( $elementor_theme_manager ) {

    $elementor_theme_manager->register_location( 'single' );
    $elementor_theme_manager->register_location( 'header' );
    $elementor_theme_manager->register_location( 'footer' );

}
add_action( 'elementor/theme/register_locations', 'r_energy_register_elementor_locations' );
