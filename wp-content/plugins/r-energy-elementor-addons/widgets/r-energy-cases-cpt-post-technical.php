<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Cases_Cpt_Post_Technical_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-cases-cpt-post-technical';
    }
    public function get_title() {
        return '(CPT) Cases Post Technical';
    }
    public function get_icon() {
        return 'eicon-columns';
    }
    public function get_categories() {
        return [ 'r-energy-cases' ];
    }
    // Registering Controls
    // Registering Controls
    protected function _register_controls() {
        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_cases_post_information_settings',
            [
                'label' => esc_html__( 'Technical Information', 'r-energy' )
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Technical',
                'label_block' => true,
            ]
        );
        $this->add_control( 'details',
            [
                'type' => Controls_Manager::REPEATER,
                'default' => [
                    [
                        'icon' => [
                            'value' => 'fa fa-home',
                            'library' => 'fa-brands'
                        ],
                        'item_title' => 'Modules',
                        'item_name' => 'DUOMAX twin-DEG5C.07(II)'
                    ],
                    [
                        'icon' => [
                            'value' => 'fa fa-home',
                            'library' => 'fa-brands'
                        ],
                        'item_title' => 'Inverter',
                        'item_name' => 'DUOMAX-PEG5.07'
                    ],
                    [
                        'icon' => [
                            'value' => 'fa fa-home',
                            'library' => 'fa-brands'
                        ],
                        'item_title' => 'Warranty',
                        'item_name' => '10 + 25 years'
                    ],
                    [
                        'icon' => [
                            'value' => 'fa fa-home',
                            'library' => 'fa-brands'
                        ],
                        'item_title' => 'Warranty',
                        'item_name' => '10 years'
                    ]
                ],
                'fields' => [
                    [
                        'name' => 'icon',
                        'label' => esc_html__( 'Icon', 'r-energy' ),
                        'type' => Controls_Manager::ICONS,
                        'default' => [
                            'value' => 'fa fa-home',
                            'library' => 'fa-brands'
                        ]
                    ],
                    [
                        'name' => 'item_title',
                        'label' => esc_html__( 'Item Title', 'r-energy' ),
                        'type' => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => ''
                    ],
                    [
                        'name' => 'item_name',
                        'label' => esc_html__( 'Item Name', 'r-energy' ),
                        'type' => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => ''
                    ]
                ],
                'title_field' => '{{item_title}}',
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<div class="cases-details">';
            echo '<div class="technical-block">';
                if ( $settings['title']) {
                    echo '<div class="row">';
        				echo '<div class="col-12"><div class="title-block"><h3 class="title">'.$settings['title'].'</h3></div></div>';
        			echo '</div>';
                }
    			echo '<div class="technical-content">';
    				echo '<div class="row">';
                    foreach ( $settings['details'] as $item ) {
    					echo '<div class="col-sm-6">';
    						echo '<figure class="technical-item">';
                                if ( ! empty($item['icon']['value']) ) {
                                    echo '<div class="img-holder"><div class="tech-icon icon">';Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] );echo '</div></div>';
                                }
                                if ( $item['item_title'] || $item['item_name'] ) {
        							echo '<figcaption>';
                                        if ( $item['item_title'] ) {
                                            echo '<span class="title">'.$item['item_title'].'</span>';
                                        }
                                        if ( $item['item_name'] ) {
                                            echo '<p>'.$item['item_name'].'</p>';
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
    }
}
