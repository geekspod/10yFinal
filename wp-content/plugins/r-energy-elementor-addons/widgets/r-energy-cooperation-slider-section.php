<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Cooperation_Slider_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-cooperation-slider-section';
    }
    public function get_title() {
        return 'Cooperation Slider';
    }
    public function get_icon() {
        return 'eicon-slider-push';
    }
    public function get_categories() {
        return [ 'r-energy' ];
    }
    // Registering Controls
    protected function _register_controls() {
        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_courses_slider_settings',
            [
                'label' => esc_html__('Slider Content', 'r-energy'),
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control( 'item_number',
            [
                'label'          => esc_html__( 'Item Number', 'r-energy' ),
                'type'           => Controls_Manager::TEXT,
                'default'        => '01',
                'label_block'    => true,
            ]
        );
        $repeater->add_control( 'item_total',
            [
                'label'          => esc_html__( 'Total Number', 'r-energy' ),
                'type'           => Controls_Manager::TEXT,
                'default'        => '06',
                'label_block'    => true,
            ]
        );
        $repeater->add_control( 'item_sep',
            [
                'label'          => esc_html__( 'Separator Between Number', 'r-energy' ),
                'type'           => Controls_Manager::TEXT,
                'default'        => '/',
                'label_block'    => true,
            ]
        );
        $repeater->add_control( 'item_title',
            [
                'label'          => esc_html__( 'Title', 'r-energy' ),
                'type'           => Controls_Manager::TEXTAREA,
                'default'        => 'Item Title',
                'label_block'    => true,
            ]
        );
        $repeater->add_control( 'item_desc',
            [
                'label'          => esc_html__( 'Description', 'r-energy' ),
                'type'           => Controls_Manager::TEXTAREA,
                'default'        => 'Streamer fish California halibut Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish',
                'label_block'    => true,
            ]
        );
        $this->add_control( 'sliders',
            [
                'label' => esc_html__( 'Items', 'nt-addons' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{item_title}}',
                'default' => [
                    [
                        'item_title' => 'Enviroment Analitic',
                        'item_desc' => 'Streamer fish California halibut Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish',
                        'item_number' => '01',
                        'item_total' => '0',
                        'item_sep' => '/',
                    ],
                    [
                        'item_title' => 'Preparing Documentation',
                        'item_desc' => 'Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder',
                        'item_number' => '02',
                        'item_total' => '06',
                        'item_sep' => '/',
                    ],
                    [
                        'item_title' => 'Equipment Installation',
                        'item_desc' => 'Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish',
                        'item_number' => '03',
                        'item_total' => '06',
                        'item_sep' => '/',
                    ],
                    [
                        'item_title' => 'Technical Support',
                        'item_desc' => 'European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin: herring, Moses sole',
                        'item_number' => '04',
                        'item_total' => '06',
                        'item_sep' => '/',
                    ],
                    [
                        'item_title' => 'Payment Method',
                        'item_desc' => 'Flying characin: herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish',
                        'item_number' => '05',
                        'item_total' => '06',
                        'item_sep' => '/',
                    ],
                    [
                        'item_title' => 'Enviroment Analitic',
                        'item_desc' => 'Streamer fish California halibut Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish',
                        'item_number' => '0',
                        'item_total' => '06',
                        'item_sep' => '/',
                    ],
                ]
            ]
        );
        $this->end_controls_section();
        /***** NUMBER ******/
        $this->start_controls_section('r_energy_cooperation_number_styling',
            [
                'label' => esc_html__( 'Number', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_number_cooperation_tabs');
        $this->start_controls_tab( 'r_energy_number_cooperation_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='number_cooperation',$selector='.slider-item .top,.slider-item .top span');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_number_cooperation_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='number_cooperation_hover',$selector='.slider-item .top span:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END NUMBER ******/
        /***** TITLE ******/
        $this->start_controls_section('r_energy_cooperation_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_cooperation_tabs');
        $this->start_controls_tab( 'r_energy_title_cooperation_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_cooperation',$selector='.slider-item .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_cooperation_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_cooperation_hover',$selector='.slider-item .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/

        /***** DESCRIPTION ******/
        $this->start_controls_section('r_energy_cooperation_desc_styling',
            [
                'label' => esc_html__( 'Description', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_desc_cooperation_tabs');
        $this->start_controls_tab( 'r_energy_desc_cooperation_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_cooperation',$selector='.slider-item .lower p');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_desc_cooperation_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_cooperation_hover',$selector='.slider-item .lower p:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END DESCRIPTION ******/
    }

    protected function render() {
        $settings  = $this->get_settings_for_display();
        $elementid = $this->get_id();
        echo '<div class="cooperation-slider">';
            foreach ($settings['sliders'] as $item) {
                echo '<div class="slider-item">';
                    $number = $item['item_number'] ? '<span class="current">'.$item['item_number'].'</span>' : '';
                    $total  = $item['item_total'] ? '<span class="total">'.$item['item_total'].'</span>' : '';
                    $sep    = $item['item_sep'] ? ' '.$item['item_sep'].' ' : '';
                    if ( $number || $total ) {
                        echo '<div class="top">';
                            echo '<p>'.$number.$sep.$total.'</p>';
                        echo '</div>';
                    }
                    echo '<div class="lower">';
                        if ( $item['item_title'] ) {
                            echo '<h4 class="title">'.$item['item_title'].'</h4>';
                        }
                        if ( $item['item_desc'] ) {
                            echo '<p>'.$item['item_desc'].'</p>';
                        }
                    echo '</div>';
                echo '</div>';
            }
        echo '</div>';
    }
}
