<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Brands_Slider_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-brands-slider-section';
    }
    public function get_title() {
        return 'Brands Slider';
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
        $this->start_controls_section( 'r_energy_brands_text_settings',
            [
                'label' => esc_html__( 'Text', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Partners',
                'label_block' => true,
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '<span>R-Energy</span> <span>Brands</span>',
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_brands_slider_settings',
            [
                'label' => esc_html__('Slider Content', 'r-energy'),
            ]
        );
        $repeater = new Repeater();

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
        $def_img = plugins_url( 'assets/front/img/logo1.svg', __DIR__ );
        $repeater->add_control( 'item_img',
            [
                'label' => esc_html__( 'Brands Image', 'r-energy' ),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => $def_img],
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
                        'item_img' => ['url' => $def_img],
                        'item_title' => 'We keep adapting our M.O. to better',
                        'item_desc' => 'Streamer fish California halibut Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout',
                    ],
                    [
                        'item_img' => ['url' => $def_img],
                        'item_title' => 'We stand close to every to the span',
                        'item_desc' => 'Streamer fish California halibut Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout',
                    ],
                    [
                        'item_img' => ['url' => $def_img],
                        'item_title' => 'We keep adapting our M.O. to better',
                        'item_desc' => 'Streamer fish California halibut Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout'
                    ]
                ]
            ]
        );
        $this->end_controls_section();
        /***** SUBTITLE ******/
        $this->start_controls_section('r_energy_brands_subtitle_styling',
            [
                'label' => esc_html__( 'Subtitle', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_subtitle_brands_tabs');
        $this->start_controls_tab( 'r_energy_subtitle_brands_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='subtitle_brands',$selector='.primary-heading .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_subtitle_brands_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='subtitle_brands_hover',$selector='.primary-heading .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END SUBTITLE ******/

        /***** TITLE ******/
        $this->start_controls_section('r_energy_brands_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_brands_tabs');
        $this->start_controls_tab( 'r_energy_title_brands_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_brands',$selector='.primary-heading .subtitle span');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_brands_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_brands_hover',$selector='.primary-heading .subtitle span:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/
        /***** ITEM TITLE ******/
        $this->start_controls_section('r_energy_brands_ititle_styling',
            [
                'label' => esc_html__( 'Item Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_ititle_brands_tabs');
        $this->start_controls_tab( 'r_energy_ititle_brands_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='ititle_brands',$selector='.slider-item .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_ititle_brands_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='ititle_brands_hover',$selector='.slider-item .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END ITEM TITLE ******/
        /***** ITEM Desc ******/
        $this->start_controls_section('r_energy_brands_idesc_styling',
            [
                'label' => esc_html__( 'Item Description', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_idesc_brands_tabs');
        $this->start_controls_tab( 'r_energy_idesc_brands_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='idesc_brands',$selector='.slider-item p');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_idesc_brands_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='idesc_brands_hover',$selector='.slider-item p:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END ITEM Desc ******/
    }

    protected function render() {
        $settings  = $this->get_settings_for_display();
        $elementid = $this->get_id();
        echo '<div class="section brands--style-2">';
            if ( $settings['subtitle'] || $settings['title'] ) {
                echo '<div class="container">';
                    echo '<div class="row">';
                        echo '<div class="col-12">';
                            echo '<div class="heading primary-heading">';
                                if ( $settings['subtitle'] ) {
                                    echo '<h3 class="title">'.$settings['subtitle'].'</h3>';
                                }
                                if ( $settings['title'] ) {
                                    echo '<h5 class="subtitle">'.$settings['title'].'</h5>';
                                }
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
            echo '<div class="container">';
                echo '<div class="row">';
                    echo '<div class="col-12">';
                        echo '<div class="items-slider">';
                            foreach ($settings['sliders'] as $item) {
                                $imagealt  = esc_attr(get_post_meta($item['item_img']['id'], '_wp_attachment_image_alt', true));
                                $imagealt  = $imagealt ? $imagealt : basename ( get_attached_file( $item['item_img']['id'] ) );
                                echo '<div class="slider-item">';
                                    echo '<figure class="brand-item--style-2">';
                                        if ( $item['item_img']['url'] ) {
                                            echo '<div class="img-holder"><img src="'.$item['item_img']['url'].'" alt="'.$imagealt.'"/></div>';
                                        }
                                        if ( $item['item_title'] || $item['item_desc'] ) {
                                            echo '<figcaption>';
                                                if ( $item['item_title'] ) {
                                                    echo '<h4 class="title">'.$item['item_title'].'</h4>';
                                                }
                                                if ( $item['item_desc'] ) {
                                                    echo wpautop($item['item_desc']);
                                                }
                                            echo '</figcaption>';
                                        }
                                    echo '</figure>';
                                echo '</div>';
                            }
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}
