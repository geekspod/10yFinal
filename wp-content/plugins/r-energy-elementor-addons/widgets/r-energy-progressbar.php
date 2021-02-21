<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Progressbar_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-progressbar';
    }
    public function get_title() {
        return 'Progressbar';
    }
    public function get_icon() {
        return 'eicon-skill-bar';
    }
    public function get_categories() {
        return [ 'r-energy' ];
    }

    // Registering Controls
    protected function _register_controls() {

        /*****   Button Options   ******/
        $this->start_controls_section('r_energy_progressbar_settings',
            [
                'label' => esc_html__( 'progressbar', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Text', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'HTML'
            ]
        );
        $this->add_control( 'value',
            [
                'label' => esc_html__( 'Value', 'r-energy' ),
                'type' => Controls_Manager::NUMBER,
                'label_block' => true,
                'min' => 0,
                'max' => 100,
                'default' => 75
            ]
        );
        $this->add_control( 'type',
            [
                'label' => esc_html__( 'Type', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'filled',
                'options' => [
                    'linear' => esc_html__( 'Outline', 'r-energy' ),
                    'filled' => esc_html__( 'Filled', 'r-energy' ),
                ]
            ]
        );
        $this->add_control( 'color_type',
            [
                'label' => esc_html__( 'Color Style', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'success',
                'options' => [
                    'success' => esc_html__( 'Success', 'r-energy' ),
                    'info' => esc_html__( 'Info', 'r-energy' ),
                    'warning' => esc_html__( 'Warning', 'r-energy' ),
                    'danger' => esc_html__( 'Danger', 'r-energy' ),
                    'custom' => esc_html__( 'Custom', 'r-energy' ),
                ],
                'condition' => ['type' => 'filled']
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 's_border',
                'label' => esc_html__( 'Border', 'r-energy' ),
                'selector' => '{{WRAPPER}} .progress-simple',
                'condition' => ['type' => 'linear'],
                'separator' => 'before'
            ]
        );
        $this->add_control( 's_color',
            [
                'label' => esc_html__( 'Progress Color', 'r-energy' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selector' => '{{WRAPPER}} .progress-bar',
                'condition' => ['type' => 'linear']
            ]
        );
        $this->add_control( 'f_color',
            [
                'label' => esc_html__( 'Progress Background Color', 'r-energy' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selector' => '{{WRAPPER}} .progress',
                'condition' => ['type' => 'filled','color_type' => 'custom']
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'f_background',
                'label' => esc_html__( 'Progressbar Color', 'r-energy' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .progress-bar',
                'condition' => ['type' => 'filled','color_type' => 'custom'],
                'separator'    => 'before'
            ]
        );
        $this->add_control( 'height',
            [
                'label' => esc_html__( 'Height', 'r-energy' ),
                'type' => Controls_Manager::NUMBER,
                'label_block' => true,
                'min' => 5,
                'max' => 100,
                'default' => 40,
                'selectors' => ['{{WRAPPER}} .progress' => 'height: {{VALUE}}px;'],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'          => 't_typo',
                'label'         => esc_html__( 'Title Typography', 'r-energy' ),
                'scheme'        => Scheme_Typography::TYPOGRAPHY_1,
                'selector'      => '{{WRAPPER}} .progress .progress-bar, {{WRAPPER}} .bar-holder .progress-title'
            ]
        );
        $this->add_responsive_control('border_radius',
            [
                'label'         => esc_html__( 'Border Radius', 'r-energy' ),
                'type'          => Controls_Manager::DIMENSIONS,
                'size_units'    => [ 'px' ],
                'selectors'     => ['{{WRAPPER}} .progress' => 'border-top-left-radius: {{TOP}}{{UNIT}};border-top-right-radius: {{RIGHT}}{{UNIT}};border-bottom-left-radius: {{BOTTOM}}{{UNIT}};border-bottom-right-radius: {{LEFT}}{{UNIT}};'],
                'default'       => [
                    'top'          => '',
                    'right'        => '',
                    'bottom'       => '',
                    'left'         => '',
                ]
            ]
        );
        $this->end_controls_section();
        /*****   End Button Options   ******/

    }

    protected function render() {
        $settings = $this->get_settings_for_display();


        if ( $settings['value'] ) {
            if ( $settings['type'] == 'linear' ) {
                echo '<div class="progress progress-simple">';
                    echo '<div class="progress-bar" role="progressbar" style="width: '.$settings['value'].'%;" aria-valuenow="'.$settings['value'].'" aria-valuemin="0" aria-valuemax="100">'.$settings['title'].'</div>';
                echo '</div>';
            }
            if ( $settings['type'] == 'filled' ) {
				echo '<div class="bar-holder tooltip-bar">';
				    if ( $settings['title'] ) {
				        echo '<span class="progress-title">'.$settings['title'].'</span>';
				    }
					echo '<div class="progress progress-tooltip">';
						echo '<div class="progress-bar bg-'.$settings['color_type'].'" role="progressbar" aria-valuenow="'.$settings['value'].'" style="width: '.$settings['value'].'%;" aria-valuemin="0" aria-valuemax="100"><span class="popover" data-toggle="tooltip" data-placement="top" title="'.$settings['value'].'%"></span></div>';
					echo '</div>';
				echo '</div>';
            }
        }
    }
}
