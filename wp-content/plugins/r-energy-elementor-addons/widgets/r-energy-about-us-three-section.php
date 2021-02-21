<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_About_Us_Three_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-about-us-three-section';
    }
    public function get_title() {
        return 'About Us 3';
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
                'label' => esc_html__( 'Text', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'left_subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'About',
                'label_block' => true,
            ]
        );
        $this->add_control( 'left_title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Quality Products <br> on the Market',
                'label_block' => true,
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
                'label' => esc_html__( 'Text', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'text_content',
            [
                'label' => esc_html__( 'Text Content', 'r-energy' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => 'Streamer fish California halibut Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder. European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin: herring. Moses sole sea snail grouper discus. European eel slender.',
                'dynamic' => ['active' => true],
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
    }

    protected function render() {
        $settings   = $this->get_settings_for_display();
        $elementid  = $this->get_id();
        echo '<div class="section inner-heading--with-bg">';
			echo '<div class="container">';
				echo '<div class="row">';
					echo '<div class="col-xl-5 col-lg-6">';
						echo '<div class="heading primary-heading inner-heading">';
							echo '<div class="title-holder">';
								echo '<div class="title-block">';
                                    if ( $settings['left_subtitle'] ) {
                                        echo '<h3 class="title">'.$settings['left_subtitle'].'</h3 class="title">';
                                    }
                                    if ( $settings['left_title'] ) {
                                        echo '<p class="subtitle">'.$settings['left_title'].'</p>';
                                    }
								echo '</div>';
                                if ( ! empty($settings['left_icon']['value']) ) {
                                    echo '<div class="img-block">';
                                        echo '<div class="icon">';
                                            Icons_Manager::render_icon( $settings['left_icon'], [ 'aria-hidden' => 'true' ] );
                                        echo '</div>';
                                    echo '</div>';
                                }
							echo '</div>';
						echo '</div>';
					echo '</div>';
                    if ( $settings['text_content'] ) {
    					echo '<div class="col-xl-6 offset-xl-1 col-lg-6">';
    						echo '<div class="heading-description">';
                                echo $settings['text_content'];
    						echo '</div>';
    					echo '</div>';
                    }
				echo '</div>';
			echo '</div>';
		echo '</div>';
    }
}
