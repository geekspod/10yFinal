<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Instagram_Slider_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-instagram-slider-section';
    }
    public function get_title() {
        return 'Instagram Slider';
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
                'label' => esc_html__('Text', 'r-energy'),
            ]
        );
        $this->add_control( 'subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Instagram',
                'label_block' => true,
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '<span>#r-energy</span>',
                'label_block' => true,
            ]
        );
        $this->add_control( 'hide_icon',
            [
                'label' => esc_html__( 'Hide Icon', 'r-energy' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'no',
                'return_value' => 'yes',
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

                /*****   START CONTROLS SECTION   ******/
                $this->start_controls_section( 'r_energy_gallery_image_settings',
                    [
                        'label' => esc_html__('Gallery Items', 'r-energy'),
                    ]
                );
                $repeater = new Repeater();
                $def_image = plugins_url( 'assets/front/img/ig-1.jpg', __DIR__ );
                $repeater->add_control( 'item_image',
                    [
                        'label' => esc_html__( 'Image', 'r-energy' ),
                        'type' => Controls_Manager::MEDIA,
                        'default' => ['url' => $def_image],
                    ]
                );
                $repeater->add_control( 'link',
                    [
                        'label' => esc_html__( 'Add Link', 'r-energy' ),
                        'type' => Controls_Manager::URL,
                        'label_block' => true,
                        'default' => [
                            'url' => '#',
                            'is_external' => ''
                        ],
                        'show_external' => true
                    ]
                );
                $this->add_control( 'gallery',
                    [
                        'label' => esc_html__( 'Items', 'nt-addons' ),
                        'type' => Controls_Manager::REPEATER,
                        'fields' => $repeater->get_controls(),
                        'title_field' => 'Image',
                        'default' => [
                            [
                                'item_image' => ['url' => $def_image]
                            ],
                            [
                                'item_image' => ['url' => $def_image]
                            ],
                            [
                                'item_image' => ['url' => $def_image]
                            ],
                            [
                                'item_image' => ['url' => $def_image]
                            ],
                            [
                                'item_image' => ['url' => $def_image]
                            ],
                            [
                                'item_image' => ['url' => $def_image]
                            ]
                        ]
                    ]
                );
                $this->end_controls_section();
    }

    protected function render() {
        $settings  = $this->get_settings_for_display();
        $elementid = $this->get_id();
        echo '<div class="section instagram no-padding-top">';
            if ( $settings['subtitle'] || $settings['title'] || $settings['hide_icon'] != 'yes' ) {
                echo '<div class="container">';
                    echo '<div class="row align-items-end margin-bottom">';
                        if ( $settings['subtitle'] || $settings['title'] ) {
                            echo '<div class="col-10">';
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
                        if ( $settings['hide_icon'] != 'yes' ) {
                            echo '<div class="col-2">';
                                echo '<div class="icon-holder"><i class="fa fa-instagram" aria-hidden="true"></i></div>';
                            echo '</div>';
                        }
                    echo '</div>';
                echo '</div>';
            }
            echo '<div class="instagram-slider-holder">';
                echo '<div class="instagram-slider">';
                    foreach ( $settings['gallery'] as $item ) {
                        $imagealt = esc_attr(get_post_meta($item['item_image']['id'], '_wp_attachment_image_alt', true));
                        $imagealt = $imagealt ? $imagealt : basename(get_attached_file($item['item_image']['id']));
                        $target   = $item['link']['is_external'] ? ' target="_blank"' : '';
                        $nofollow = $item['link']['nofollow'] ? ' rel="nofollow"' : '';
                        if ( $item['item_image']['url'] ) {
                            if ( $item['link']['url'] ) {
                                echo '<a class="img-holder" href="'.$item['link']['url'].'"'.$target.$nofollow.'><img class="img-bg" src="'.$item['item_image']['url'].'" alt="'.$imagealt.'"/><i class="fa fa-instagram" aria-hidden="true"></i></a>';
                            } else {
                                echo '<div class="img-holder"><img class="img-bg" src="'.$item['item_image']['url'].'" alt="'.$imagealt.'"/><i class="fa fa-instagram" aria-hidden="true"></i></div>';
                            }
                        }
                    }
                echo '</div>';
                echo '<div class="instagram-dots"></div>';
            echo '</div>';
        echo '</div>';
    }
}
