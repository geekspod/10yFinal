<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Counter_Up_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-counter-up';
    }
    public function get_title() {
        return 'Counter Up';
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
        $this->start_controls_section( 'r_energy_counters_one_text_settings',
            [
                'label' => esc_html__('Section Text & Image', 'r-energy'),
            ]
        );
        $this->add_control( 'subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__( 'Benefits' , 'r-energy' ),
                'label_block' => true,
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '<span>We in</span> <span>the World</span>',
                'label_block' => true,
            ]
        );
        $this->add_control( 'text',
            [
                'label' => esc_html__( 'Text', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Lagena Moses sole, sculpin: squaretail; rockling manefish Pacific salmon smalltooth sawfish shovelnose sturgeon velvet-belly shark Devario giant sea bass.',
                'label_block' => true,
            ]
        );
        $this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'bg_img',
				'label' => esc_html__( 'Background', 'r-energy' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bg-holder',
			]
		);
        $this->add_responsive_control( 'bg_img_height',
            [
                'label' => esc_html__( 'Background Min Height', 'r-energy' ),
                'type' => Controls_Manager::SLIDER,
                'label_block' => true,
                'range' => [
                    'px'   => [
                        'max' => 1500
                    ]
                ],
                'selectors' => ['{{WRAPPER}} .benefits .bg-holder' => 'min-height: {{SIZE}}px;']
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_number_settings',
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
        $this->r_energy_style_controls(array('shadow'),$id='title_counter',$selector='.primary-heading .subtitle');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_counter_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_counter_hover',$selector='.primary-heading .subtitle:hover');
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
        $this->r_energy_style_controls(array('shadow'),$id='desc_counter',$selector='.primary-heading p');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_desc_counter_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_counter_hover',$selector='.primary-heading p:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END DESC ******/
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
        $image      = $this->get_settings( 'bg_img' );
        echo '<div class="section benefits no-padding-top no-padding-bottom">';
            if ( $settings['subtitle'] || $settings['title'] || $settings['text']) {
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
                                if ( $settings['text'] ) {
                                    echo wpautop($settings['text']);
                                }
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }

            if ($settings['bg_img_background']) {
                echo '<div class="bg-holder"></div>';
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
