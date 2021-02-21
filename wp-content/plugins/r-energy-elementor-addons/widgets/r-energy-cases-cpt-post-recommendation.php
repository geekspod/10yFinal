<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Cases_Cpt_Post_Recommendation_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-cases-cpt-post-recommendation';
    }
    public function get_title() {
        return '(CPT) Cases Recommendation';
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
        $this->start_controls_section( 'r_energy_cases_post_recommendation_settings',
            [
                'label' => esc_html__( 'Recommendation Information', 'r-energy' )
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Our Recommendation',
                'label_block' => true,
            ]
        );
        $this->add_control( 'details',
            [
                'type' => Controls_Manager::REPEATER,
                'default' => [
                    [
                        'item_title' => 'Power',
                        'item_value' => '4.86 kWp'
                    ],
                    [
                        'item_title' => 'Price',
                        'item_value' => '$ 12.850'
                    ],
                    [

                        'item_title' => 'Yearly ouput',
                        'item_value' => '4.900 kWh'
                    ],
                    [
                        'item_title' => 'Monthly',
                        'item_value' => '$ 120'
                    ]
                ],
                'fields' => [
                    [
                        'name' => 'item_title',
                        'label' => esc_html__( 'Item Title', 'r-energy' ),
                        'type' => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => ''
                    ],
                    [
                        'name' => 'item_value',
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

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_cases_post_recommendation_bottom_settings',
            [
                'label' => esc_html__( 'Product', 'r-energy' )
            ]
        );
        $this->add_control( 'product_label',
            [
                'label' => esc_html__( 'Product Label', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Products',
                'label_block' => true,
            ]
        );
        $this->add_control( 'product_name',
            [
                'label' => esc_html__( 'Product Name', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'DUOMAX twin-DEG5C.07(II), DUOMAX-PEG5.07',
                'label_block' => true,
            ]
        );
        $this->add_control( 'saving_label',
            [
                'label' => esc_html__( 'Saving Label', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Savings',
                'label_block' => true,
            ]
        );
        $this->add_control( 'saving_value',
            [
                'label' => esc_html__( 'Saving Value', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '<span class="count">$ 24.900</span> / <span class="years">10</span> years',
                'label_block' => true,
            ]
        );
        $this->add_control( 'btn_text',
            [
                'label' => esc_html__( 'Button Text', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => 'Contact Installer'
            ]
        );
        $this->add_control( 'link',
            [
                'label' => esc_html__( 'Button Link', 'r-energy' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default' => [
                    'url' => '#0',
                    'is_external' => ''
                ],
                'show_external' => true,
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        $target   = $settings['link']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $settings['link']['nofollow'] ? ' rel="nofollow"' : '';
        echo '<div class="cases-details">';
            echo '<div class="recommendation-block">';
                if ( $settings['title']) {
                    echo '<div class="title-block"><div class="row"><div class="col-12"><h4 class="title">'.$settings['title'].'</h4></div></div></div>';
                }
                if ( $settings['details']) {
        			echo '<div class="recommendation-details">';
        				echo '<div class="row">';
                            foreach ( $settings['details'] as $item ) {
            					echo '<div class="col-lg-6 col-md-3 col-6">';
            						echo '<div class="detail-item">';
                                        if ( $item['item_title'] ) {
                                            echo '<span class="title">'.$item['item_title'].'</span>';
                                        }
                                        if ( $item['item_value'] ) {
                                            echo '<p>'.$item['item_value'].'</p>';
                                        }
            						echo '</div>';
            					echo '</div>';
                            }

        				echo '</div>';
        			echo '</div>';
                }
                if ( $settings['product_label'] || $settings['product_name'] ) {
        			echo '<div class="product-details">';
                        echo '<div class="row">';
        					echo '<div class="col-12">';
                                if ( $settings['product_label'] ) {
                                    echo '<span class="title">'.$settings['product_label'].'</span>';
                                }
                                if ( $settings['product_name'] ) {
            						echo '<p>'.$settings['product_name'].'</p>';
                                }
        					echo '</div>';
        				echo '</div>';
        			echo '</div>';
                }
                if ( $settings['saving_label'] || $settings['saving_value'] ) {
        			echo '<div class="saving-details">';
                        echo '<div class="row">';
        					echo '<div class="col-12">';
                                if ( $settings['saving_label'] ) {
                                    echo '<span class="title">'.$settings['saving_label'].'</span>';
                                }
                                if ( $settings['saving_value'] ) {
            						echo '<p>'.$settings['saving_value'].'</p>';
                                }
        					echo '</div>';
        				echo '</div>';
        			echo '</div>';
                }
                if ( $settings['btn_text'] ) {
        			echo '<div class="r-button-holder">';
        				echo '<div class="row">';
        					echo '<div class="col-12"><a class="r-button r-button--transparent" href="'.$settings['link']['url'].'"'.$target.$nofollow.' data-hover="'.$settings['btn_text'].'"><span>'.$settings['btn_text'].'</span></a>';
        					echo '</div>';
        				echo '</div>';
        			echo '</div>';
                }
    		echo '</div>';
		echo '</div>';
    }
}
