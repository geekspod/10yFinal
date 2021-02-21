<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Section_Heading_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-section-heading';
    }
    public function get_title() {
        return 'Section Heading';
    }
    public function get_icon() {
        return 'eicon-t-letter';
    }
    public function get_categories() {
        return [ 'r-energy' ];
    }
    // Registering Controls
    protected function _register_controls() {
        /*****   Text Options   ******/
        $this->start_controls_section('r_energy_section_heading_settings',
            [
                'label' => esc_html__( 'Text', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        // Title
        $this->add_control( 'subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'services',
                'label_block' => true,
            ]
        );
        // Title
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '<span>We provide</span> <span>Creative Services</span>',
                'label_block' => true,
            ]
        );
        $this->add_control( 'hide_point',
            [
                'label' => esc_html__( 'Hide Point Before Title', 'r-energy' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'r-energy' ),
                'label_off' => esc_html__( 'No', 'r-energy' ),
                'return_value' => 'yes',
                'default' => 'no',
                'selectors' => ['{{WRAPPER}} .primary-heading .subtitle::before' => 'content: none;'],
            ]
        );
        $this->add_control( 'title_tag',
            [
                'label' => esc_html__( 'Title Tag', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'h5',
                'options' => [
                    'h1' => esc_html__( 'h1', 'r-energy' ),
                    'h2' => esc_html__( 'h2', 'r-energy' ),
                    'h3' => esc_html__( 'h3', 'r-energy' ),
                    'h4' => esc_html__( 'h4', 'r-energy' ),
                    'h5' => esc_html__( 'h5', 'r-energy' ),
                    'h6' => esc_html__( 'h6', 'r-energy' ),
                    'p' => esc_html__( 'p', 'r-energy' ),
                    'div' => esc_html__( 'div', 'r-energy' ),
                    'span' => esc_html__( 'span', 'r-energy' )
                ]
            ]
        );
        // Title
        $this->add_control( 'desc',
            [
                'label' => esc_html__( 'Description', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'R-energy accreditation standards. Members are proactive in both undertaking and applying animal welfare scientific research, contributing to EAZA being',
                'label_block' => true,
            ]
        );
        $this->add_control( 'desc_display',
            [
                'label' => esc_html__( 'Description Display', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => esc_html__( 'Show always', 'r-energy' ),
                    'd-none d-md-none d-lg-block' => esc_html__( 'Hide On Tablet', 'r-energy' ),
                    'd-none d-sm-none d-md-block d-lg-block' => esc_html__( 'Hide On Phone', 'r-energy' ),
                    'd-none d-xs-none d-sm-block d-md-block d-lg-block' => esc_html__( 'Hide On Smaller Device', 'r-energy' ),
                ]
            ]
        );
        $this->add_control( 'align',
            [
                'label' => esc_html__( 'Alignment', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => esc_html__( 'Default', 'r-energy' ),
                    'text-left' => esc_html__( 'left', 'r-energy' ),
                    'text-right' => esc_html__( 'right', 'r-energy' ),
                    'text-center' => esc_html__( 'center', 'r-energy' ),
                ]
            ]
        );
        $this->add_control( 'margin_bottom',
            [
                'label' => esc_html__( 'Bottom Spacing', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => esc_html__( 'Default', 'r-energy' ),
                    'mb-0' => esc_html__( 'None', 'r-energy' ),
                ]
            ]
        );
        $this->end_controls_section();
        /***** TITLE ******/
        $this->start_controls_section('r_energy_section_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_section_tabs');
        $this->start_controls_tab( 'r_energy_title_section_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_section',$selector='.primary-heading .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_section_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_section_hover',$selector='.primary-heading .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/
        /***** SUBTITLE ******/
        $this->start_controls_section('r_energy_section_subtitle_styling',
            [
                'label' => esc_html__( 'Subtitle', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_subtitle_section_tabs');
        $this->start_controls_tab( 'r_energy_subtitle_section_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='subtitle_section',$selector='.primary-heading .subtitle span');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_subtitle_section_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='subtitle_section_hover',$selector='.primary-heading .subtitle span:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END SUBTITLE ******/
        /***** DESCRIPTION ******/
        $this->start_controls_section('r_energy_section_desc_styling',
            [
                'label' => esc_html__( 'Description', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_desc_section_tabs');
        $this->start_controls_tab( 'r_energy_desc_section_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_section',$selector='.primary-heading .desc');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_desc_section_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_section_hover',$selector='.primary-heading .desc:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END DESCRIPTION ******/
    }

    protected function render() {
        $settings  = $this->get_settings_for_display();
        $elementid = $this->get_id();
        $t_tag     = $settings['title_tag'] ? $settings['title_tag'] : 'h5';
        $align     = $settings['align'] ? ' '.$settings['align'] : '';
        $mb        = $settings['margin_bottom'] ? ' '.$settings['margin_bottom'] : '';
        $desc_d    = $settings['desc_display'] ? ' '.$settings['desc_display'] : '';
        echo '<div class="heading primary-heading'.$align.$mb.$desc_d.'">';
            if ( $settings['subtitle'] ) {
                echo '<h3 class="title">'.$settings['subtitle'].'</h3>';
            }
            if ( $settings['title'] ) {
                echo '<'.$t_tag.' class="subtitle">'.$settings['title'].'</'.$t_tag.'>';
            }
            if ( $settings['desc'] ) {
                echo '<div class="desc'.$desc_d.'">'.wpautop($settings['desc']).'</div>';
            }
        echo '</div>';
    }
}
