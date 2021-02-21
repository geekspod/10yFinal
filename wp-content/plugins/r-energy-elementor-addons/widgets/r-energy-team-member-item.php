<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Team_Member_Item_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-team-member-item';
    }
    public function get_title() {
        return 'Team Member';
    }
    public function get_icon() {
        return 'eicon-person';
    }
    public function get_categories() {
        return [ 'r-energy' ];
    }
    // Registering Controls
    protected function _register_controls() {
        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_team_member_section',
            [
                'label' => esc_html__( 'Team Item', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT
            ]
        );
        $this->add_control( 'type',
            [
                'label' => esc_html__( 'Type', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'label_block' => 'true',
                'default' => '1',
                'options' => [
                    '1' => esc_html__( 'Type 1', 'r-energy' ),
                    '2' => esc_html__( 'Type 2', 'r-energy' ),
                    '3' => esc_html__( 'Type 3', 'r-energy' ),
                    '4' => esc_html__( 'Type 4', 'r-energy' ),
                ]
            ]
        );
        $this->add_control( 'team_name',
            [
                'label' => esc_html__( 'Name', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'pleaceholder' => esc_html__( 'Enter name here', 'r-energy' ),
                'default' => 'Team Name',
                'label_block' => true,
            ]
        );
        $this->add_control( 'team_pos',
            [
                'label' => esc_html__( 'Position', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'pleaceholder' => esc_html__( 'Enter position here', 'r-energy' ),
                'default' => 'Chief Executive Officer',
                'label_block' => true,
            ]
        );
        $this->add_control( 'team_image',
            [
                'label' => esc_html__( 'Avatar Image', 'r-energy' ),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => plugins_url( 'assets/front/img/team-bg-1.jpg', __DIR__ )],
            ]
        );
        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail',
                'default' => 'full',
                'condition' => [ 'team_image[url]!' => '' ],
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'team_social_profiles',
            [
                'label' => esc_html__( 'Social Profiles', 'r-energy' )
            ]
        );
        $this->add_control( 'social_icons',
            [
                'type' => Controls_Manager::REPEATER,
                'default' => [
                    [
                        'social' => [
                            'value' => 'fab fa-facebook',
                            'library' => 'fa-brands'
                        ]
                    ],
                    [
                        'social' => [
                            'value' => 'fab fa-twitter',
                            'library' => 'fa-brands'
                        ]
                    ],
                    [
                        'social' => [
                            'value' => 'fab fa-instagram',
                            'library' => 'fa-brands'
                        ]
                    ]
                ],
                'fields' => [
                    [
                        'name' => 'social',
                        'label' => esc_html__( 'Icon', 'r-energy' ),
                        'type' => Controls_Manager::ICONS,
                        'default' => [
                            'value' => 'fab fa-wordpress',
                            'library' => 'fa-brands'
                        ]
                    ],
                    [
                        'name' => 'link',
                        'label' => esc_html__( 'Link', 'r-energy' ),
                        'type' => Controls_Manager::URL,
                        'label_block' => true,
                        'default' => [
                            'url' => '#',
                            'is_external' => 'true',
                        ],
                        'placeholder' => esc_html__( 'Place URL here', 'r-energy' )
                    ]
                ],
                'title_field' => 'Social Media #',
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/


        /***** TITLE ******/
        $this->start_controls_section('r_energy_team_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_team_tabs');
        $this->start_controls_tab( 'r_energy_title_team_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_team',$selector='.description .name');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_team_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_team_hover',$selector='.description .name:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/
        /***** Subtitle ******/
        $this->start_controls_section('r_energy_team_subtitle_styling',
            [
                'label' => esc_html__( 'Subtitle', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_subtitle_team_tabs');
        $this->start_controls_tab( 'r_energy_subtitle_team_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='subtitle_team',$selector='.description .position');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_subtitle_team_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='subtitle_team_hover',$selector='.primary-heading .position:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Subtitle ******/
    }
    protected function render() {
        $settings   = $this->get_settings_for_display();
        $elementid  = $this->get_id();
        $image      = $this->get_settings( 'team_image' );
        $image_url  = Group_Control_Image_Size::get_attachment_image_src( $image['id'], 'thumbnail', $settings );
        $imagealt   = esc_attr(get_post_meta($image['id'], '_wp_attachment_image_alt', true));
        $imagealt   = $imagealt ? $imagealt : basename ( get_attached_file( $image['id'] ) );
        $imageurl   = empty( $image_url ) ? $image['url'] : $image_url;
        if ( $imageurl ) {
            if ( $settings['type'] == '1' ) {
                echo '<div class="team-item team-item--primary">';
                    echo '<div class="img-holder">';
                        echo '<img class="img-bg" src="'.$imageurl.'" alt="'.$imagealt.'"/>';
                        if ( $settings['social_icons'] ) {
                            echo '<nav class="socials-holder">';
                                echo '<ul class="socials-primary">';
                                    foreach ( $settings['social_icons'] as $item ) {
                                        $target = $item['link']['is_external'] ? ' target="_blank"' : '';
                                        echo '<li><a href="'.esc_attr( $item['link']['url'] ).'"'.$target.'>';
                                            if ( ! empty($item['social']['value']) ) {
                                                Icons_Manager::render_icon( $item['social'], [ 'aria-hidden' => 'true' ] );
                                            }
                                        echo '</a></li>';
                                    }
                                echo '</ul>';
                            echo '</nav>';
                        }
                        if ( $settings['team_pos'] || $settings['team_name'] ) {
                            echo '<div class="description">';
                                if ( $settings['team_name'] ) {
                                    echo '<span class="name">'.$settings['team_name'].'</span>';
                                }
                                if ( $settings['team_pos'] ) {
                                    echo '<span class="position">'.$settings['team_pos'].'</span>';
                                }
                            echo '</div>';
                        }
                    echo '</div>';
                echo '</div>';
            } elseif ( $settings['type'] == '2' ) {
                echo '<div class="team-item team-item--grayscaled">';
                    echo '<div class="img-holder"><img class="img-bg" src="'.$imageurl.'" alt="'.$imagealt.'"/></div>';
                    echo '<div class="description">';
                        if ( $settings['team_name'] ) {
                            echo '<span class="name">'.$settings['team_name'].'</span>';
                        }
                        if ( $settings['team_pos'] ) {
                            echo '<span class="position">'.$settings['team_pos'].'</span>';
                        }
                        if ( $settings['social_icons'] ) {
                            echo '<nav class="socials-holder">';
                                echo '<ul class="socials-primary">';
                                foreach ( $settings['social_icons'] as $item ) {
                                    $target = $item['link']['is_external'] ? ' target="_blank"' : '';
                                    echo '<li><a href="'.esc_attr( $item['link']['url'] ).'"'.$target.'>';
                                        if ( ! empty($item['social']['value']) ) {
                                            Icons_Manager::render_icon( $item['social'], [ 'aria-hidden' => 'true' ] );
                                        }
                                    echo '</a></li>';
                                }
                                echo '</ul>';
                            echo '</nav>';
                        }
                    echo '</div>';
                echo '</div>';
            } elseif ( $settings['type'] == '3' ) {
                echo '<div class="team-item team-item--dark">';
                    echo '<div class="img-holder"><img class="img-bg" src="'.$imageurl.'" alt="'.$imagealt.'"/>';
                        if ( $settings['social_icons'] ) {
                            echo '<nav class="socials-holder">';
                                echo '<ul class="socials-primary">';
                                foreach ( $settings['social_icons'] as $item ) {
                                    $target = $item['link']['is_external'] ? ' target="_blank"' : '';
                                    echo '<li><a href="'.esc_attr( $item['link']['url'] ).'"'.$target.'>';
                                        if ( ! empty($item['social']['value']) ) {
                                            Icons_Manager::render_icon( $item['social'], [ 'aria-hidden' => 'true' ] );
                                        }
                                    echo '</a></li>';
                                }
                                echo '</ul>';
                            echo '</nav>';
                        }
                        if ( $settings['team_pos'] || $settings['team_name'] ) {
                            echo '<div class="description">';
                                if ( $settings['team_name'] ) {
                                    echo '<span class="name">'.$settings['team_name'].'</span>';
                                }
                                if ( $settings['team_pos'] ) {
                                    echo '<span class="position">'.$settings['team_pos'].'</span>';
                                }
                            echo '</div>';
                        }
                    echo '</div>';
                echo '</div>';
            } elseif ( $settings['type'] == '4' ) {
                echo '<div class="team-item team-item--rounded-img">';
                    echo '<div class="img-holder"><img class="img-bg" src="'.$imageurl.'" alt="'.$imagealt.'"/></div>';
                    echo '<div class="description">';
                    if ( $settings['team_name'] ) {
                        echo '<span class="name">'.$settings['team_name'].'</span>';
                    }
                    if ( $settings['team_pos'] ) {
                        echo '<span class="position">'.$settings['team_pos'].'</span>';
                    }
                    if ( $settings['social_icons'] ) {
                        echo '<nav class="socials-holder">';
                            echo '<ul class="socials-primary">';
                            foreach ( $settings['social_icons'] as $item ) {
                                $target = $item['link']['is_external'] ? ' target="_blank"' : '';
                                echo '<li><a href="'.esc_attr( $item['link']['url'] ).'"'.$target.'>';
                                    if ( ! empty($item['social']['value']) ) {
                                        Icons_Manager::render_icon( $item['social'], [ 'aria-hidden' => 'true' ] );
                                    }
                                echo '</a></li>';
                            }
                            echo '</ul>';
                        echo '</nav>';
                    }
                    echo '</div>';
                echo '</div>';
            }
        }
    }
}
