<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Alert_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-alert';
    }
    public function get_title() {
        return 'Alert';
    }
    public function get_icon() {
        return 'eicon-alert';
    }
    public function get_categories() {
        return [ 'r-energy' ];

    }

    // Registering Controls
    protected function _register_controls() {

        /*****   Button Options   ******/
        $this->start_controls_section('r_energy_alert_settings',
            [
                'label' => esc_html__( 'Alert', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Text', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'Well done!'
            ]
        );
        $this->add_control( 'desc',
            [
                'label' => esc_html__( 'Description', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'You successfully read this important alert message'
            ]
        );
        $this->add_control( 'type',
            [
                'label' => esc_html__( 'Type', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'success',
                'options' => [
                    'success' => esc_html__( 'Success', 'r-energy' ),
                    'attention' => esc_html__( 'Attention', 'r-energy' ),
                    'warning' => esc_html__( 'Warning', 'r-energy' ),
                    'error' => esc_html__( 'Error', 'r-energy' ),
                ]
            ]
        );
        $this->add_control( 'style',
            [
                'label' => esc_html__( 'Style', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'filled',
                'options' => [
                    'filled' => esc_html__( 'filled', 'r-energy' ),
                    'linear' => esc_html__( 'Outline', 'r-energy' ),
                ]
            ]
        );
        $this->add_control( 'dismiss',
            [
                'label' => esc_html__( 'Dismiss Button', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'show',
                'options' => [
                    'show' => esc_html__( 'Show', 'r-energy' ),
                    'hide' => esc_html__( 'Hide', 'r-energy' ),
                ]
            ]
        );
        $this->end_controls_section();
        /*****   End Button Options   ******/

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        if ( $settings['title'] || $settings['desc'] ) {
            echo '<div class="alert alert--'.$settings['style'].' alert--'.$settings['type'].'">';
                if ( $settings['type'] == 'success' ) {
                    echo '<span class="alert-icon"><svg class="icon" viewBox="0 0 492 492" id="confirm" xmlns="http://www.w3.org/2000/svg"><path d="M484.128 104.478l-16.116-16.116c-5.064-5.068-11.816-7.856-19.024-7.856s-13.964 2.788-19.028 7.856L203.508 314.81 62.024 173.322c-5.064-5.06-11.82-7.852-19.028-7.852-7.204 0-13.956 2.792-19.024 7.852l-16.12 16.112C2.784 194.51 0 201.27 0 208.47c0 7.204 2.784 13.96 7.852 19.028l159.744 159.736c.212.3.436.58.696.836l16.12 15.852c5.064 5.048 11.82 7.572 19.084 7.572h.084c7.212 0 13.968-2.524 19.024-7.572l16.124-15.992c.26-.256.48-.468.612-.684l244.784-244.76c10.5-10.476 10.5-27.52.004-38.008z"/></svg></span>';
                }
                if ( $settings['type'] == 'attention' ) {
                    echo '<span class="alert-icon">?</span>';
                }
                if ( $settings['type'] == 'warning' ) {
                    echo '<span class="alert-icon">!</span>';
                }
            	if ( $settings['type'] == 'error' ) {
            	    echo '<span class="alert-icon"><svg class="icon" viewBox="0 0 47.971 47.971" id="close" xmlns="http://www.w3.org/2000/svg"><path d="M28.228 23.986L47.092 5.122a2.998 2.998 0 000-4.242 2.998 2.998 0 00-4.242 0L23.986 19.744 5.121.88a2.998 2.998 0 00-4.242 0 2.998 2.998 0 000 4.242l18.865 18.864L.879 42.85a2.998 2.998 0 104.242 4.241l18.865-18.864L42.85 47.091c.586.586 1.354.879 2.121.879s1.535-.293 2.121-.879a2.998 2.998 0 000-4.242L28.228 23.986z"/></svg></span>';
            	}
            	echo '<div class="text">';
            	    if ( $settings['title'] ) {
            	        echo '<span class="title">'.$settings['title'].'</span>';
            	    }
            	    if ( $settings['desc'] ) {
            	        echo '<span>'.$settings['desc'].'</span>';
            	    }
            	echo '</div>';
            	if ( $settings['dismiss'] == 'show' ) {
            	    echo '<span class="close"><svg class="icon" viewBox="0 0 47.971 47.971" id="close" xmlns="http://www.w3.org/2000/svg"><path d="M28.228 23.986L47.092 5.122a2.998 2.998 0 000-4.242 2.998 2.998 0 00-4.242 0L23.986 19.744 5.121.88a2.998 2.998 0 00-4.242 0 2.998 2.998 0 000 4.242l18.865 18.864L.879 42.85a2.998 2.998 0 104.242 4.241l18.865-18.864L42.85 47.091c.586.586 1.354.879 2.121.879s1.535-.293 2.121-.879a2.998 2.998 0 000-4.242L28.228 23.986z"/></svg></span>';
            	}
            echo '</div>';
        }
    }
}
