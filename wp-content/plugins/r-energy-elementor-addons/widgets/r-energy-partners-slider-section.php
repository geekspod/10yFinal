<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Partners_Slider_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-partners-slider-section';
    }
    public function get_title() {
        return 'Partners Slider';
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
        $this->start_controls_section( 'r_energy_partner_slider_settings',
            [
                'label' => esc_html__('Slider Content', 'r-energy'),
            ]
        );
        $this->add_control( 'type',
            [
                'label' => esc_html__( 'Type', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => esc_html__( 'Default', 'r-energy' ),
                    '1' => esc_html__( 'With Heading', 'r-energy' ),
                ]
            ]
        );
        $this->add_control( 'subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Partners',
                'label_block' => true,
                'condition' => ['type' => '1']
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '<span>R-energy</span> <span>Brands</span>',
                'label_block' => true,
                'condition' => ['type' => '1']
            ]
        );
        $this->add_control( 'gallery',
            [
                'label' => esc_html__( 'Add Images', 'r-energy' ),
                'type' => Controls_Manager::GALLERY,
                'default' => ['url' => plugins_url( 'assets/front/img/brand-1.png', __DIR__ )],
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
    }

    protected function render() {
        $settings  = $this->get_settings_for_display();
        $elementid = $this->get_id();
        if ( $settings['type'] == '1' ) {
            echo '<div class="section brands brands--with-heading">';
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
                            echo '<div class="brands-holder">';
                                echo '<div class="brands-slider">';
                                foreach ( $settings['gallery'] as $image ) {
                                    $imagealt = esc_attr(get_post_meta($image['id'], '_wp_attachment_image_alt', true));
                                    $imagealt = $imagealt ? $imagealt : basename ( get_attached_file( $image['id'] ) );
                                    echo '<div class="slider-item"><img src="' . $image['url'] . '" alt="'.$imagealt.'"/></div>';
                                }
                                echo '</div>';
                                echo '<div class="brands-dots"></div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        } else {
            echo '<div class="brands">';
                echo '<div class="brands-holder">';
                    echo '<div class="brands-slider">';
                        foreach ( $settings['gallery'] as $image ) {
                            $imagealt = esc_attr(get_post_meta($image['id'], '_wp_attachment_image_alt', true));
                            $imagealt = $imagealt ? $imagealt : basename ( get_attached_file( $image['id'] ) );
                            echo '<div class="slider-item"><img src="' . $image['url'] . '" alt="'.$imagealt.'"/></div>';
                        }
                    echo '</div>';
                    echo '<div class="brands-dots"></div>';
                echo '</div>';
            echo '</div>';
        }
    }
}
