<?php
/**
 * Plugin Name: R-Energy Elementor Addons
 * Description: Premium & Advanced Essential Elements for Elementor
 * Plugin URI:  http://themeforest.net/user/Ninetheme
 * Version:     1.0.2
 * Author:      Ninetheme
 * Author URI:  http://themeforest.net/user/Ninetheme
 */

 /*
  * Exit if accessed directly.
  */

if ( ! defined( 'ABSPATH' ) ) exit;

define('RENERGY_PLUGIN_FILE', __FILE__);
define('RENERGY_PLUGIN_BASENAME', plugin_basename(__FILE__));
define('RENERGY_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('RENERGY_PLUGIN_URL', plugins_url('/', __FILE__));

final class R_Energy_Elementor_Addons {

    /**
     * Plugin Version
     *
     * @since 1.0
     *
     * @var string The plugin version.
     */
    const VERSION = '1.0.2';

    /**
     * Minimum Elementor Version
     *
     * @since 1.0
     *
     * @var string Minimum Elementor version required to run the plugin.
     */
    const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

    /**
     * Minimum PHP Version
     *
     * @since 1.0
     *
     * @var string Minimum PHP version required to run the plugin.
     */
    const MINIMUM_PHP_VERSION = '7.0';

    /**
     * Instance
     *
     * @since 1.0
     *
     * @access private
     * @static
     *
     * @var R_Energy_Elementor_Addons The single instance of the class.
     */
    private static $_instance = null;

    /**
     * Instance
     *
     * Ensures only one instance of the class is loaded or can be loaded.
     *
     * @since 1.0
     *
     * @access public
     * @static
     *
     * @return R_Energy_Elementor_Addons An instance of the class.
     */
    public static function instance() {

        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Constructor
     *
     * @since 1.0
     *
     * @access public
     */
    public function __construct() {
        add_action( 'init', [ $this, 'i18n' ] );
        add_action( 'plugins_loaded', [ $this, 'init' ] );
    }

    /**
     * Load Textdomain
     *
     * Load plugin localization files.
     *
     * Fired by `init` action hook.
     *
     * @since 1.0
     *
     * @access public
     */
    public function i18n() {
        load_plugin_textdomain( 'r-energy' );
    }

    /**
     * Initialize the plugin
     *
     * Load the plugin only after Elementor (and other plugins) are loaded.
     * Checks for basic plugin requirements, if one check fail don't continue,
     * if all check have passed load the files required to run the plugin.
     *
     * Fired by `plugins_loaded` action hook.
     *
     * @since 1.0
     *
     * @access public
     */
    public function init() {

        // Check if Elementor is installed and activated
        if ( ! did_action( 'elementor/loaded' ) ) {
            add_action( 'admin_notices', [ $this, 'r_energy_admin_notice_missing_main_plugin' ] );
            return;
        }
        // Check for required Elementor version
        if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
            add_action( 'admin_notices', [ $this, 'r_energy_admin_notice_minimum_elementor_version' ] );
            return;
        }
        // Check for required PHP version
        if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
            add_action( 'admin_notices', [ $this, 'r_energy_admin_notice_minimum_php_version' ] );
            return;
        }

        /* Custom plugin helper functions */
        require_once( __DIR__ . '/classes/class-helpers-functions.php' );
        /* Elementor section parallax */
        require_once( __DIR__ . '/classes/class-custom-elementor-section.php' );
        /* Add custom controls to default widgets */
        require_once( __DIR__ . '/classes/class-customizing-default-widgets.php' );
        /* Add custom controls to page settings */
        require_once( __DIR__ . '/classes/class-customizing-page-settings.php' );
        /* Image resizer */
        require_once( __DIR__ . '/classes/class-image-resizer.php' );
        /* R-Energy Elementor template */
        require_once( __DIR__ . '/classes/class-templater.php' );
        /* R-Energy Elementor template */
        require_once( __DIR__ . '/classes/class-r-energy-footer-widget.php' );
        /* Admin template */
        require_once( __DIR__ . '/templates/admin/admin.php' );
        // Categories registered
        add_action( 'elementor/elements/categories_registered', [ $this, 'r_energy_add_widget_category' ] );
        // Widgets registered
        add_action( 'elementor/widgets/widgets_registered', [ $this, 'init_widgets' ] );
        // Register Widget Styles
        add_action( 'elementor/frontend/after_enqueue_styles', [ $this, 'widget_styles' ] );
        // Register Widget Scripts
        add_action( 'elementor/frontend/after_enqueue_scripts', [ $this, 'widget_scripts' ] );
        // Register Widget Scripts
        add_action('elementor/editor/after_enqueue_scripts', [ $this, 'admin_custom_scripts' ]);
        //elementor custom editor style
        add_action( 'wp_print_styles', [ $this, 'r_energy_elementor_addons_dequeue_style' ], 100 );
    }

    public function r_energy_elementor_addons_dequeue_style() {
        if( is_page_template( 'r-energy-elementor-page.php' ) ){
            wp_dequeue_style( 'r-energy-framework-style' );
        }
    }
    public function admin_custom_scripts()
    {
        // Plugin custom css
        wp_enqueue_style( 'renergy-elementor-editor', RENERGY_PLUGIN_URL. 'assets/front/css/plugin-editor.css' );
    }
    /**
     * Admin notice
     *
     * Warning when the site doesn't have Elementor installed or activated.
     *
     * @since 1.0
     *
     * @access public
     */

    public function r_energy_admin_notice_missing_main_plugin() {

        if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

        $message = sprintf(
            /* translators: 1: Plugin name 2: Elementor */
            esc_html__( '%1$s requires %2$s to be installed and activated.', 'r-energy' ),
            '<strong>' . esc_html__( 'R-Energy Elementor Addons', 'r-energy' ) . '</strong>',
            '<strong>' . esc_html__( 'Elementor', 'r-energy' ) . '</strong>'
        );

        printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

    }

    /**
     * Admin notice
     *
     * Warning when the site doesn't have a minimum required Elementor version.
     *
     * @since 1.0
     *
     * @access public
     */
    public function r_energy_admin_notice_minimum_elementor_version() {

        if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

        $message = sprintf(
            /* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
            esc_html__( '%1$s requires %2$s version %3$s or greater.', 'r-energy' ),
            '<strong>' . esc_html__( 'R-Energy Elementor Addons', 'r-energy' ) . '</strong>',
            '<strong>' . esc_html__( 'Elementor', 'r-energy' ) . '</strong>',
             self::MINIMUM_ELEMENTOR_VERSION
        );

        printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

    }

    /**
     * Admin notice
     *
     * Warning when the site doesn't have a minimum required PHP version.
     *
     * @since 1.0
     *
     * @access public
     */
    public function r_energy_admin_notice_minimum_php_version() {
        if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );
        $message = sprintf(
            /* translators: 1: Plugin name 2: PHP 3: Required PHP version */
            esc_html__( '%1$s requires %2$s version %3$s or greater.', 'r-energy' ),
            '<strong>' . esc_html__( 'R-Energy Elementor Addons', 'r-energy' ) . '</strong>',
            '<strong>' . esc_html__( 'PHP', 'r-energy' ) . '</strong>',
             self::MINIMUM_PHP_VERSION
        );
        printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
    }

    /**
     * Register Widgets Category
     *
     */
    public function r_energy_add_widget_category( $elements_manager ) {
        $elements_manager->add_category( 'r-energy', ['title' => esc_html__( 'R-Energy Addons', 'r-energy' )]);
        $elements_manager->add_category( 'r-energy-cases', ['title' => esc_html__( 'R-Energy Cases (CPT)', 'r-energy' )]);
        $elements_manager->add_category( 'r-energy-portfolio', ['title' => esc_html__( 'R-Energy Portfolio (CPT)', 'r-energy' )]);
        $elements_manager->add_category( 'r-energy-woo', ['title' => esc_html__( 'R-Energy WooCommerce', 'r-energy' )]);
    }

    /**
     * Init Widgets
     *
     * Include widgets files and register them
     *
     * @since 1.0
     *
     * @access public
     */
    public function init_widgets() {

        /*
        * Register widgets and include widget files
        */
        // R_Energy_One_Page_Menu_Widget
        if ( ! get_option( 'disable_r_energy_one_page_menu' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-one-page-menu.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_One_Page_Menu_Widget() );
        }
        // R_Energy_Home_Slider_One_Widget
        if ( ! get_option( 'disable_r_energy_home_slider_one' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-home-slider-one.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Home_Slider_One_Widget() );
        }
        // R_Energy_Home_Slider_Two_Widget
        if ( ! get_option( 'disable_r_energy_home_slider_two' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-home-slider-two.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Home_Slider_Two_Widget() );
        }
        // R_Energy_Home_Slider_Three_Widget
        if ( ! get_option( 'disable_r_energy_home_slider_three' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-home-slider-three.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Home_Slider_Three_Widget() );
        }
        // R_Energy_Cooperation_Slider_Section_Widget
        if ( ! get_option( 'disable_r_energy_cooperation_slider_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-cooperation-slider-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Cooperation_Slider_Section_Widget() );
        }
        // R_Energy_Partners_Slider_Section_Widget
        if ( ! get_option( 'disable_r_energy_partners_slider_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-partners-slider-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Partners_Slider_Section_Widget() );
        }
        // R_Energy_Brands_Slider_Section_Widget
        if ( ! get_option( 'disable_r_energy_brands_slider_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-brands-slider-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Brands_Slider_Section_Widget() );
        }
        // R_Energy_Brands_Slider_Section_Widget
        if ( ! get_option( 'disable_r_energy_project_gallery_slider_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-project-gallery-slider-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Project_Gallery_Slider_Section_Widget() );
        }
        // R_Energy_Brands_Slider_Section_Widget
        if ( ! get_option( 'disable_r_energy_instagram_slider_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-instagram-slider-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Instagram_Slider_Section_Widget() );
        }
        // R_Energy_Rev_Slider_Widget
        if ( ! get_option( 'disable_r_energy_rev_slider' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-rev-sliders.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new R_Energy_Rev_Slider_Widget() );
        }
        // R_Energy_Page_Hero_Widget
        if ( ! get_option( 'disable_r_energy_page_hero_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-page-hero-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Page_Hero_Widget() );
        }
        // R_Energy_Section_Heading_Widget
        if ( ! get_option( 'disable_r_energy_section_heading' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-section-heading.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Section_Heading_Widget() );
        }
        // R_Energy_Button_Widget
        if ( ! get_option( 'disable_r_energy_button' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-button.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Button_Widget() );
        }
        // R_Energy_Alert_Widget
        if ( ! get_option( 'disable_r_energy_alert' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-alert.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Alert_Widget() );
        }
        // R_Energy_Charts_Widget
        if ( ! get_option( 'disable_r_energy_charts' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-charts.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Charts_Widget() );
        }
        // R_Energy_Progressbar_Widget
        if ( ! get_option( 'disable_r_energy_progressbar' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-progressbar.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Progressbar_Widget() );
        }
        // R_Energy_About_Us_One_Section_Widget
        if ( ! get_option( 'disable_r_energy_about_us_one_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-about-us-one-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_About_Us_One_Section_Widget() );
        }
        // R_Energy_About_Us_Two_Section_Widget
        if ( ! get_option( 'disable_r_energy_about_us_two_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-about-us-two-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_About_Us_Two_Section_Widget() );
        }
        // R_Energy_About_Us_Three_Section_Widget
        if ( ! get_option( 'disable_r_energy_about_us_three_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-about-us-three-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_About_Us_Three_Section_Widget() );
        }
        // R_Energy_Product_Description_Section_Widget
        if ( ! get_option( 'disable_r_energy_product_description_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-product-description-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Product_Description_Section_Widget() );
        }
        // R_Energy_Product_Info_Parallax_Section_Widget
        if ( ! get_option( 'disable_r_energy_product_info_parallax_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-product-info-parallax-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Product_Info_Parallax_Section_Widget() );
        }
        // R_Energy_Product_Book_Download_Widget
        if ( ! get_option( 'disable_r_energy_product_book_download' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-product-book-download.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Product_Book_Download_Widget() );
        }
        // R_Energy_Gallery_Grid_Section_Widget
        if ( ! get_option( 'disable_r_energy_gallery_grid_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-gallery-grid-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Gallery_Grid_Section_Widget() );
        }
        // R_Energy_Pricing_Item_Widget
        if ( ! get_option( 'disable_r_energy_pricing_item' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-pricing-item.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Pricing_Item_Widget() );
        }
        // R_Energy_Testimonials_One_Section_Widget
        if ( ! get_option( 'disable_r_energy_testimonials_one_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-testimonials-one-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Testimonials_One_Section_Widget() );
        }
        // R_Energy_Blog_Grid_Section_Widget
        if ( ! get_option( 'disable_r_energy_blog_grid_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-blog-grid-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Blog_Grid_Section_Widget() );
        }
        // R_Energy_Blog_List_Section_Widget
        if ( ! get_option( 'disable_r_energy_blog_list_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-blog-list-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Blog_List_Section_Widget() );
        }
        // R_Energy_Blog_List_Section_Widget
        if ( ! get_option( 'disable_r_energy_blog_zigzag_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-blog-zigzag-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Blog_Zigzag_Section_Widget() );
        }
        // R_Energy_Banner_One_Section_Widget
        if ( ! get_option( 'disable_r_energy_banner_one_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-banner-one-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Banner_One_Section_Widget() );
        }
        // R_Energy_Contact_Form_Section_Widget
        if ( ! get_option( 'disable_r_energy_contact_form7_map_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-contact-form-map-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Contact_Form_Map_Section_Widget() );
        }
        // R_Energy_Contact_Form_7_Widget
        if ( ! get_option( 'disable_r_energy_contact_form7' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-contact-form-7.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Contact_Form_7_Widget() );
        }
        // R_Energy_Counter_Up_Widget
        if ( ! get_option( 'disable_r_energy_counterup_item' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-counterup-item.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Counter_Up_Item_Widget() );
        }
        // R_Energy_Counter_Up_Widget
        if ( ! get_option( 'disable_r_energy_counterup' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-counterup.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Counter_Up_Widget() );
        }
        // R_Energy_Counter_Up_Widget
        if ( ! get_option( 'disable_r_energy_about_counterup' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-about-counter-up.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_About_Counter_Up_Widget() );
        }
        // R_Energy_Cases_Cpt_Slider_Section_Widget
        if ( ! get_option( 'disable_r_energy_platform_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-platform-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Platform_Section_Widget() );
        }
        // R_Energy_Services_Two_Section_Widget
        if ( ! get_option( 'disable_r_energy_services_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-services-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Services_Section_Widget() );
        }
        // R_Energy_Features_One_Section_Widget
        if ( ! get_option( 'disable_r_energy_features_one_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-features-one-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Features_One_Section_Widget() );
        }
        // R_Energy_Mobile_App_Section_Widget
        if ( ! get_option( 'disable_r_energy_mobile_app_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-mobile-app-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Mobile_App_Section_Widget() );
        }
        // R_Energy_Video_Popup_Item_Widget
        if ( ! get_option( 'disable_r_energy_video_popup_item' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-video-popup-item.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Video_Popup_Item_Widget() );
        }
        // R_Energy_Team_Member_Item_Widget
        if ( ! get_option( 'disable_r_energy_team_member_item' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-team-member-item.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Team_Member_Item_Widget() );
        }
        // R_Energy_Accordion_Tabs_Section_Widget
        if ( ! get_option( 'disable_r_energy_accordion_tabs_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-accordion-tabs-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Accordion_Tabs_Section_Widget() );
        }
        // R_Energy_Vertical_Tabs_Section_Widget
        if ( ! get_option( 'disable_r_energy_vertical_tabs_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-vertical-tabs-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Vertical_Tabs_Section_Widget() );
        }
        // R_Energy_Cases_Cpt_Grid_Section_Widget
        if ( ! get_option( 'disable_r_energy_cases_cpt_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-cases-cpt-gallery-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Cases_Cpt_Gallery_Section_Widget() );
            require_once( __DIR__ . '/widgets/r-energy-cases-cpt-slider-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Cases_Cpt_Slider_Section_Widget() );
            require_once( __DIR__ . '/widgets/r-energy-cases-cpt-post-navigation.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Cases_Cpt_Post_Navigation_Widget() );
            require_once( __DIR__ . '/widgets/r-energy-cases-cpt-post-information.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Cases_Cpt_Post_Information_Widget() );
            require_once( __DIR__ . '/widgets/r-energy-cases-cpt-post-technical.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Cases_Cpt_Post_Technical_Widget() );
            require_once( __DIR__ . '/widgets/r-energy-cases-cpt-post-recommendation.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Cases_Cpt_Post_Recommendation_Widget() );
        }

        // R_Energy_Woo_Product_Slider_Section_Widget
        if ( ! get_option( 'disable_r_energy_woo_section' ) == 1 ) {
            require_once( __DIR__ . '/widgets/r-energy-woo-product-slider-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Woo_Product_Slider_Section_Widget() );
            require_once( __DIR__ . '/widgets/r-energy-woo-product-gallery-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Woo_Product_Gallery_Section_Widget() );
            require_once( __DIR__ . '/widgets/r-energy-woo-my-account-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Woo_My_Account_Section_Widget() );
            require_once( __DIR__ . '/widgets/r-energy-woo-checkout-form-section.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\R_Energy_Woo_Checkout_Form_Section_Widget() );
        }

    }

    public function widget_styles() {
        // Plugin custom css
        wp_enqueue_style( 'r-energy-slick', plugins_url( 'assets/front/js/slick/slick.min.css', __FILE__ ) );
        wp_enqueue_style( 'r-energy-addons-plugin-custom', plugins_url( 'assets/front/css/custom.css', __FILE__ ) );
    }

    public function widget_scripts() {
        // Plugin custom scripts
        wp_enqueue_script( 'r-energy-js-slick', plugins_url( 'assets/front/js/slick/slick.min.js', __FILE__ ), true );
        wp_enqueue_script( 'r-energy-isotope', plugins_url( 'assets/front/js/isotope/isotope.min.js', __FILE__ ), true );
        wp_enqueue_script( 'r-energy-addons-custom-scripts', plugins_url( 'assets/front/js/custom-scripts.js', __FILE__ ), true );
    }
}
R_Energy_Elementor_Addons::instance();
