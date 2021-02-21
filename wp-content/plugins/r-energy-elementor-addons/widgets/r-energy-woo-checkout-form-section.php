<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Woo_Checkout_Form_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-woo-checkout-form-section';
    }
    public function get_title() {
        return 'Woo Checkout Form';
    }
    public function get_icon() {
        return 'eicon-shortcode';
    }
    public function get_categories() {
        return [ 'r-energy-woo' ];
    }
    // Registering Controls
    protected function _register_controls() {
        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_woo_ma_account_settings',
            [
                'label'          => esc_html__( 'Checkout Form', 'r-energy' ),
                'tab'            => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
    }
    protected function render() {

        if (class_exists('woocommerce')) {
            echo '<div class="shopping-checkout"><div class="checkout">'.do_shortcode('[woocommerce_checkout]').'</div></div>';

        }
    }
}
