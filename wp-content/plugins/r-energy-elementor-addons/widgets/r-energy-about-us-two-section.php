<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_About_Us_Two_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-about-us-two-section';
    }
    public function get_title() {
        return 'About Us 2';
    }
    public function get_icon() {
        return 'eicon-columns';
    }
    public function get_categories() {
        return [ 'r-energy' ];
    }
    // Registering Controls
    protected function _register_controls() {
        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section('r_energy_aboutus_left_text_settings',
            [
                'label'          => esc_html__( 'Text', 'r-energy' ),
                'tab'            => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'left_subtitle',
            [
                'label'          => esc_html__( 'Subtitle', 'r-energy' ),
                'type'           => Controls_Manager::TEXT,
                'default'        => 'About',
                'label_block'    => true,
            ]
        );
        $this->add_control( 'left_title',
            [
                'label'          => esc_html__( 'Title', 'r-energy' ),
                'type'           => Controls_Manager::TEXTAREA,
                'default'        => 'Welcome to Our R-Energy Company',
                'label_block'    => true,
            ]
        );
        $this->add_control( 'left_icon',
            [
                'label' => esc_html__('Icon', 'r-energy'),
                'type' => Controls_Manager::ICONS,
                'default'   => [
                    'value' => 'fas fa-home',
                    'library' => 'fa-solid'
                ]
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section('r_energy_aboutus_right_text_settings',
            [
                'label'          => esc_html__( 'Text', 'r-energy' ),
                'tab'            => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'title',
            [
                'label'          => esc_html__( 'Title', 'r-energy' ),
                'type'           => Controls_Manager::TEXTAREA,
                'default'        => 'We provide future of energy',
                'label_block'    => true,
            ]
        );
        $this->add_control( 'text_content',
            [
                'label'          => esc_html__( 'Text Content', 'r-energy' ),
                'type'           => Controls_Manager::WYSIWYG,
                'default'        => 'Streamer fish California halibut Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder',
                'dynamic'        => ['active' => true],
                'label_block'    => true,
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
        /***** Subtitle ******/
        $this->start_controls_section('r_energy_abouttwo_subtitle_styling',
            [
                'label' => esc_html__( 'Subtitle', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_subtitle_abouttwo_tabs');
        $this->start_controls_tab( 'r_energy_subtitle_abouttwo_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='subtitle_abouttwo',$selector='.title-block span');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_subtitle_abouttwo_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='subtitle_abouttwo_hover',$selector='.title-block span');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Subtitle ******/
        /***** TITLE ******/
        $this->start_controls_section('r_energy_abouttwo_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_abouttwo_tabs');
        $this->start_controls_tab( 'r_energy_title_abouttwo_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_abouttwo',$selector='.title-block .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_abouttwo_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_abouttwo_hover',$selector='.title-block .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/
        /***** ABOUT TITLE ******/
        $this->start_controls_section('r_energy_abouttwo_atitle_styling',
            [
                'label' => esc_html__( 'About Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_atitle_abouttwo_tabs');
        $this->start_controls_tab( 'r_energy_atitle_abouttwo_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='atitle_abouttwo',$selector='.description .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_atitle_abouttwo_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='atitle_abouttwo_hover',$selector='.description .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END ABOUT TITLE ******/
        /***** DESCRIPTION ******/
        $this->start_controls_section('r_energy_abouttwo_desc_styling',
            [
                'label' => esc_html__( 'Description', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_desc_abouttwo_tabs');
        $this->start_controls_tab( 'r_energy_desc_abouttwo_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_abouttwo',$selector='.description p');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_desc_abouttwo_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_abouttwo_hover',$selector='.description p:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END DESCRIPTION ******/
    }

    protected function render() {
        $settings   = $this->get_settings_for_display();
        $elementid  = $this->get_id();
        echo '<div class="about-welcome about-welcome--style-2">';
            echo '<div class="container">';
                echo '<div class="row align-items-center">';
                    if ( $settings['title'] || $settings['text_content'] ) {
                        echo '<div class="col-xl-4 col-lg-5">';
                    } else {
                        echo '<div class="col-12">';
                    }
                        echo '<div class="title-block">';
                            if ( $settings['left_subtitle'] ) {
                                echo '<span>'.$settings['left_subtitle'].'</span>';
                            }
                            if ( $settings['left_title'] ) {
                                echo '<h2 class="title">'.$settings['left_title'].'</h2>';
                            }
                            if ( ! empty($settings['left_icon']['value']) ) {
                                echo '<div class="icon-holder">';
                                    echo '<div class="icon">';
                                        Icons_Manager::render_icon( $settings['left_icon'], [ 'aria-hidden' => 'true' ] );
                                    echo '</div>';
                                echo '</div>';
                            }
                        echo '</div>';
                    echo '</div>';
                    if ( $settings['title'] || $settings['text_content'] ) {
                        echo '<div class="col-xl-7 offset-xl-1 col-lg-6 offset-lg-1">';
                            echo '<div class="description">';
                                if ( $settings['title'] ) {
                                    echo '<h3 class="title">'.$settings['title'].'</h3>';
                                }
                                if ( $settings['text_content'] ) {
                                    echo $settings['text_content'];
                                }
                            echo '</div>';
                        echo '</div>';
                    }
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}
