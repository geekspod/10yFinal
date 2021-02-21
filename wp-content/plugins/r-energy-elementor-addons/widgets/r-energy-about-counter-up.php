<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_About_Counter_Up_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-about-counter-up';
    }
    public function get_title() {
        return 'About & Counter Up';
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
        $this->start_controls_section( 'r_energy_about_counter_general_settings',
            [
                'label' => esc_html__( 'General', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'hide_top',
            [
                'label' => esc_html__( 'Hide Text Content', 'nt-addons' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'nt-addons' ),
                'label_off' => esc_html__( 'No', 'nt-addons' ),
                'return_value' => 'yes',
                'default' => 'no'
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_about_counter_text_settings',
            [
                'label' => esc_html__('Section Text', 'r-energy'),
            ]
        );
        $this->add_control( 'subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__( 'About' , 'r-energy' ),
                'label_block' => true,
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '<span>Welcome to Our</span> <br/> <span>R-Energy Company</span>',
                'label_block' => true,
            ]
        );
        $this->add_control( 'text_content',
            [
                'label' => esc_html__( 'Text', 'r-energy' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '<p>Streamer fish California halibut Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder</p><p>European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin: herring. Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish rohu yellow-and-black triplefin Atlantic saury swordfish southern</p>',
                'dynamic' => ['active' => true],
                'label_block' => true,
            ]
        );
        $this->add_control( 'btn_title',
            [
                'label' => esc_html__( 'Button Title', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Explore more',
                'label_block' => true,
            ]
        );
        $this->add_control( 'btn_link',
            [
                'label' => esc_html__( 'Button Link', 'r-energy' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => ''
                ],
                'show_external' => true
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_about_welcome_number_settings',
            [
                'label' => esc_html__( 'Number Settings', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT
            ]
        );
        $this->add_control( 'column',
            [
                'label' => esc_html__( 'Column', 'nt-addons' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '12' => esc_html__( '1 Column', 'r-energy' ),
                    '6' => esc_html__( '2 Column', 'r-energy' ),
                    '4' => esc_html__( '3 Column', 'r-energy' ),
                ],
                'default' => '4'
            ]
        );
        $this->add_control( 'content_alignment',
            [
                'label' => esc_html__( 'Content Alignment', 'nt-addons' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'left' => esc_html__( 'Left', 'r-energy' ),
                    'center' => esc_html__( 'Center', 'r-energy' ),
                ],
                'default' => 'left'
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control( 'number',
            [
                'label' => esc_html__( 'Number', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Type your number here', 'r-energy' ),
                'input_type' => 'number',
                'default' => '50'
            ]
        );
        $repeater->add_control( 'n_title',
            [
                'label' => esc_html__( 'Number Text', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => 'Cities'
            ]
        );
        $this->add_control( 'counters',
            [
                'label' => esc_html__( 'Items', 'nt-addons' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{n_title}}',
                'default' => [
                    [
                        'number' => '50',
                        'n_title' => 'Cities'
                    ],
                    [
                        'number' => '700',
                        'n_title' => 'Projects'
                    ],
                    [
                        'number' => '200',
                        'n_title' => 'Companies'
                    ]
                ]
            ]
        );
        $this->end_controls_section();
        /***** Subtitle ******/
        $this->start_controls_section('r_energy_counter_subtitle_styling',
            [
                'label' => esc_html__( 'Subtitle', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_subtitle_counter_tabs');
        $this->start_controls_tab( 'r_energy_subtitle_counter_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='subtitle_counter',$selector='.primary-heading .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_subtitle_counter_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='subtitle_counter_hover',$selector='.primary-heading .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Subtitle ******/
        /***** TITLE ******/
        $this->start_controls_section('r_energy_counter_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_counter_tabs');
        $this->start_controls_tab( 'r_energy_title_counter_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_counter',$selector='.primary-heading .subtitle span');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_counter_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_counter_hover',$selector='.primary-heading .subtitle span:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/
        /***** DESC ******/
        $this->start_controls_section('r_energy_counter_desc_styling',
            [
                'label' => esc_html__( 'Description', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_desc_counter_tabs');
        $this->start_controls_tab( 'r_energy_desc_counter_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_counter',$selector='.description p');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_desc_counter_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_counter_hover',$selector='.description p:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END DESC ******/

        /***** Button ******/
        $this->start_controls_section('r_energy_counter_button_styling',
            [
                'label' => esc_html__( 'Button', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_button_counter_tabs');
        $this->start_controls_tab( 'r_energy_button_counter_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_counter',$selector='.description .with--line span');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_button_counter_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_counter_hover',$selector='.description .with--line span:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Button ******/

        /***** Counter ******/
        $this->start_controls_section('r_energy_counter_count_styling',
            [
                'label' => esc_html__( 'Counter', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_count_counter_tabs');
        $this->start_controls_tab( 'r_energy_count_counter_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='count_counter',$selector='.statistics-item .counter,.statistics-item .description');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_count_counter_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='count_counter_hover',$selector='.statistics-item .counter:hover,.statistics-item .description:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Counter ******/
    }

    protected function render() {
        $settings  = $this->get_settings_for_display();
        $elementid = $this->get_id();
        $image     = $this->get_settings( 'bg_img' );
        $target    = $settings['btn_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow  = $settings['btn_link']['nofollow'] ? ' rel="nofollow"' : '';

        echo '<div class="about-welcome about-welcome--style-3">';
            if ( $settings['hide_top'] != 'yes' ) {
                echo '<div class="container">';
                    echo '<div class="row">';
                        if ( $settings['subtitle'] || $settings['title'] ) {
                            echo '<div class="col-xl-4">';
                                echo '<div class="heading primary-heading">';
                                    if ( $settings['subtitle'] ) {
                                        echo '<h3 class="title">'.$settings['subtitle'].'</h3>';
                                    }
                                    if ( $settings['title'] ) {
                                        echo '<h5 class="subtitle">'.$settings['title'].'</h5>';
                                    }
                                echo '</div>';
                            echo '</div>';
                        }
                        if ( $settings['text_content'] || $settings['btn_title'] ) {
                            echo '<div class="col-xl-7 offset-xl-1">';
                                echo '<div class="description">';
                                    if ( $settings['text_content'] ) {
                                        echo $settings['text_content'];
                                    }
                                    if ( $settings['btn_title'] ) {
                                        echo '<a class="with--line" href="'.$settings['btn_link']['url'].'"'.$target.$nofollow.'><span>'.$settings['btn_title'].'</span></a>';
                                    }
                                echo '</div>';
                            echo '</div>';
                        }
                    echo '</div>';
                echo '</div>';
            }

            if ($settings['counters']) {
                $contentalign = $settings['content_alignment'] == 'center' ? ' justify-content-center' : '';
                echo '<div class="counter-block counter--text-lower counter--is-blue">';
                    echo '<div class="container">';
                        echo '<div class="row no-gutters counter-holder offset-margin'.$contentalign.'">';
                            foreach ($settings['counters'] as $item) {
                                echo '<div class="col-sm-'.$settings['column'].'">';
                                    echo '<div class="statistics-item">';
                                        if ($item['number']) {
                                            echo '<span class="counter">'.$item['number'].'</span>';
                                        }
                                        if ($item['n_title']) {
                                            echo '<span class="description">'.$item['n_title'].'</span>';
                                        }
                                    echo '</div>';
                                echo '</div>';
                            }
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        echo '</div>';
	}
}
