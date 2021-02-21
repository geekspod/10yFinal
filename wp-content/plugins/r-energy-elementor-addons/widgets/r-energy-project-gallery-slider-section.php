<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Project_Gallery_Slider_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-project-gallery-slider-section';
    }
    public function get_title() {
        return 'Project Gallery Slider';
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
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Section Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '<span>Project</span> <span>Gallery</span>',
                'label_block' => true
            ]
        );
        $this->add_control( 'gallery',
            [
                'label' => esc_html__( 'Add Images', 'r-energy' ),
                'type' => Controls_Manager::GALLERY,
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
    }

    protected function render() {
        $settings  = $this->get_settings_for_display();
        $elementid = $this->get_id();
        echo '<div class="project-gallery-section">';
            if ( $settings['title'] ) {
                echo '<div class="container">';
                    echo '<div class="row">';
                        echo '<div class="col-12">';
                            echo '<div class="heading primary-heading">';
                                echo '<h5 class="subtitle">'.$settings['title'].'</h5>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
            echo '<div class="row no-gutters">';
                echo '<div class="col-12">';
                    echo '<div class="project-gallery-holder">';
                        echo '<div class="project-gallery">';
                        foreach ( $settings['gallery'] as $image ) {
                            $imagealt = esc_attr(get_post_meta($image['id'], '_wp_attachment_image_alt', true));
                            $imagealt = $imagealt ? $imagealt : basename ( get_attached_file( $image['id'] ) );
                            echo '<a class="gallery-item" href="' . $image['url'] . '" data-fancybox="project-gallery">';
                                echo '<div class="overlay"></div>';
                                echo '<img class="img-bg" src="' . $image['url'] . '" alt="'.$imagealt.'"/>';
                            echo '</a>';
                        }
                        echo '<div class="project-gallery-dots"></div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}
