<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Counter_Up_Item_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-counter-up-item';
    }
    public function get_title() {
        return 'Counter Up Item';
    }
    public function get_icon() {
        return 'eicon-counter';
    }
    public function get_categories() {
        return [ 'r-energy' ];
    }
    // Registering Controls
    protected function _register_controls() {
        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_counters_item_settings',
            [
                'label' => esc_html__('Number and Title', 'r-energy'),
            ]
        );
        $this->add_control( 'number',
            [
                'label' => esc_html__( 'Number', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Type your number here', 'r-energy' ),
                'input_type' => 'number',
                'default' => '50'
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => 'Cities'
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section('r_energy_counter_box_styling',
            [
                'label' => esc_html__( 'Box Style', 'r-energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        // Style function
        $this->r_energy_style_controls($hide=array('color','typo','txtshadow'),$id='r_energy_counter_box_css',$selector='.counter-block .statistics-item');

        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section('r_energy_number_styling',
            [
                'label' => esc_html__( 'Number Style', 'r-energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        // Style function
        $this->r_energy_style_controls($hide=array('border','shadow','background'),$id='r_energy_number_css',$selector='.statistics-item .counter');

        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section('r_energy_number_title_styling',
            [
                'label' => esc_html__( 'Title Style', 'r-energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        // Style function
        $this->r_energy_style_controls($hide=array('txtshadow'),$id='r_energy_number_title_css',$selector='.statistics-item .description');

        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
    }

    protected function render() {
        $settings  = $this->get_settings_for_display();
        echo '<div class="counter-block counter--text-lower">';
            echo '<div class="statistics-item">';
                if ($settings['number']) {
                    echo '<span class="counter">'.$settings['number'].'</span>';
                }
                if ($settings['title']) {
                    echo '<span class="description">'.$settings['title'].'</span>';
                }
            echo '</div>';
        echo '</div>';
	}
}
