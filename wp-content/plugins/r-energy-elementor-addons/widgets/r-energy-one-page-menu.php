<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_One_Page_Menu_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-one-page-menu';
    }
    public function get_title() {
        return 'One Page Menu';
    }
    public function get_icon() {
        return 'eicon-nav-menu';
    }
    public function get_categories() {
        return [ 'r-energy' ];
    }

    // Registering Controls
    protected function _register_controls() {
                /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section('renergy_onepage_menu_general_settings',
            [
                'label' => esc_html__( 'General', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT
            ]
        );
        $this->add_control( 'type',
            [
                'label' => esc_html__( 'Link Type', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => '1',
                'options' => [
                    '1' => esc_html__( 'Type 1', 'r-energy' ),
                    '2' => esc_html__( 'Type 2', 'r-energy' )
                ]
            ]
        );
        $this->add_control( 'usemenu',
            [
                'label' => esc_html__( 'Use Custom Menu', 'r-energy' ),
                'type' => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'no'
            ]
        );
        $this->add_control( 'sticky',
            [
                'label' => esc_html__( 'Sticky Menu?', 'r-energy' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'r-energy' ),
                'label_off' => esc_html__( 'No', 'r-energy' ),
                'return_value' => 'yes',
                'default' => 'no',
                'condition' => [ 'usemenu' => 'yes' ]
            ]
        );
        $this->add_control( 'register_menus',
            [
                'label' => esc_html__( 'Select Menu', 'r-energy' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => false,
                'label_block' => true,
                'options' => $this->r_energy_registered_nav_menus(),
                'condition' => [ 'usemenu!' => 'yes' ]
            ]
        );
        $this->add_control( 'hidelang',
            [
                'label' => esc_html__( 'Hide Lang Menu', 'r-energy' ),
                'type' => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'no',
                'separator' => 'before'
            ]
        );
        $this->add_control( 'hidelogo',
            [
                'label' => esc_html__( 'Hide Logo', 'r-energy' ),
                'type' => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'no',
                'separator' => 'before',
            ]
        );
        $this->add_control( 'hidebutton',
            [
                'label' => esc_html__( 'Hide Button', 'r-energy' ),
                'type' => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'no',
                'separator' => 'before',
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section('renergy_custom_menu__general_settings',
            [
                'label' => esc_html__( 'Custom Menu', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                'condition' => [ 'usemenu' => 'yes' ]
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control( 'name',
            [
                'label' => esc_html__( 'Name', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Home',
                'label_block' => true
            ]
        );
        $repeater->add_control( 'link',
            [
                'label' => esc_html__( 'Link', 'r-energy' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default' => [
                    'url' => '#sectionid',
                    'is_external' => 'true'
                ],
                'placeholder' => esc_html__( 'Place URL here', 'r-energy' )
            ]
        );
        $this->add_control( 'menus',
            [
                'label' => esc_html__( 'Items', 'r-energy' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{name}} <i class="fa fa-arrow-right"></i> {{link.url}}',
                'default' => [
                    [
                        'name' => 'Home',
                        'link' => '#'
                    ],
                    [
                        'name' => 'Home',
                        'link' => '#'
                    ],
                    [
                        'name' => 'Home',
                        'link' => '#'
                    ]
                ]
            ]
        );

        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'header_mobile_toggle_style_controls_section',
            [
                'label' => esc_html__( 'Mobile Toggle Bar', 'r-energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        //  Tabs
        $this->start_controls_tabs('header_mobile_toggle_normal_tabs');
        //  Normal
        $this->start_controls_tab( 'header_mobile_toggle_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r-energy' ) ]
        );

        $this->end_controls_tab();
        //  Normal
        //  Hover
        $this->start_controls_tab('header_mobile_toggle_hover_tab',
        [ 'label' => esc_html__( 'Hover', 'r-energy' ) ]
        );

        $this->end_controls_tab();
        //  Hover
        $this->end_controls_tabs();
        //  Tabs
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
    }

    public function menus_custom()
    {
        $settings = $this->get_settings_for_display();

        if ('yes' == $settings['usemenu']) {

            foreach ($settings['menus'] as $item) {

                if ( $item['name'] ) {

                    echo '<li class="menu-item">';
                    echo '<a class="menu-link" href="'.$item['link']['url'].'">'.$item['name'].'</a>';
                    echo '</li>';

                }

            }

        } else {

            echo wp_nav_menu(
                array(
                    'menu' => $settings['register_menus'],
                    'theme_location' => 'header_menu',
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => '',
                    'menu_id' => '',
                    'items_wrap' => '%3$s',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'depth' => 2,
                    'echo' => true,
                    'fallback_cb' => 'R_EnergyWp_Bootstrap_Navwalker::fallback',
                    'walker' => new \R_EnergyWp_Bootstrap_Navwalker()
                )
            );
        }
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $id       = $this->get_id();
        $sticky   = 'yes' == $settings['sticky'] ? ' sticky-header' : '';

        echo '<div class="mobile-nav">';
            echo '<div class="nav-inner">';
                echo '<div class="nav-item">';
                    echo '<nav class="menu-holder intro-mobile-menu">';
                        echo '<ul class="mobile-menu">';
                            $this->menus_custom();
                        echo '</ul>';
                    echo '</nav>';
                echo '</div>';
            echo '</div>';
        echo '</div>';

        if ( '1' != $settings['type'] ) {
            echo '<header class="header widget-header header--style-1'. $sticky .'" id="header">';
                echo '<div class="container-fluid">';
                    echo '<div class="row">';
                        echo '<div class="col-12 column">';

                            if ( 'yes' != $settings['hidelogo'] ) {
                                echo '<div class="logo-block">';
                                    r_energy_logo();
                                echo '</div>';
                            }

                            echo '<div class="menu-block">';
                                echo '<nav class="menu-holder">';
                                    echo '<ul class="main-menu">';

                                        $this->menus_custom();

                                    echo '</ul>';
                                echo '</nav>';
                            echo '</div>';

                            echo '<div class="lang-block lang-mobile-'.r_energy_settings( 'lang_mobile_visibility', '0' ).'">';

                                if ( 'yes' != $settings['hidelang'] ) {
                                    r_energy_header_lang();
                                }

                                if ( 'yes' != $settings['hidebutton'] ) {
                                    r_energy_header_right_button();
                                }

                                echo '<div class="hamburger">';
                                    echo '<div class="hamburger-box">';
                                        echo '<div class="hamburger-inner"></div>';
                                    echo '</div>';
                                echo '</div>';

                            echo '</div>';

                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</header>';

        } else {

            echo '<header class="header widget-header header--style-2'. $sticky .'" id="header">';
                echo '<div class="container-fluid">';
                    echo '<div class="row">';
                        echo '<div class="col-12 column">';

                            if ( 'yes' != $settings['hidelogo'] ) {
                                echo '<div class="logo-block">';
                                    r_energy_logo();
                                echo '</div>';
                            }

                            echo '<div class="menu-block">';
                                echo '<nav class="menu-holder">';
                                    echo '<ul class="main-menu">';
                                        $this->menus_custom();
                                    echo '</ul>';
                                echo '</nav>';
                            echo '</div>';

                            echo '<div class="lang-block lang-mobile-'.r_energy_settings( 'lang_mobile_visibility', '0' ).'">';
                                if ( 'yes' != $settings['hidelang'] ) {
                                    r_energy_header_lang();
                                }

                                if ( 'yes' != $settings['hidebutton'] ) {
                                    r_energy_header_right_button();
                                }
                                echo '<div class="hamburger">';
                                    echo '<div class="hamburger-box">';
                                        echo '<div class="hamburger-inner"></div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';

                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</header>';
        }
    }
}
