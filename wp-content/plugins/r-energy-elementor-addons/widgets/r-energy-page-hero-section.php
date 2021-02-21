<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Page_Hero_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-page-hero-section';
    }
    public function get_title() {
        return 'Page Hero';
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
        $this->start_controls_section( 'r_energy_page_hero_settings',
            [
                'label' => esc_html__( 'Text', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'hero_type',
            [
                'label' => esc_html__( 'Hero Type', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'label_block' => 'true',
                'default' => 'promo-primary',
                'options' => [
                    'promo-primary' => esc_html__( 'Default', 'r-energy' ),
                    'promo-primary promo-primary--shop' => esc_html__( 'Shop type', 'r-energy' )
                ]
            ]
        );
        $this->add_control( 'subtitle_type',
            [
                'label' => esc_html__( 'Subtitle Type', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'label_block' => 'true',
                'default' => 'sitename',
                'options' => [
                    'sitename' => esc_html__( 'Site Name', 'r-energy' ),
                    'custom' => esc_html__( 'Custom Text', 'r-energy' ),
                    'none' => esc_html__( 'None', 'r-energy' ),
                ]
            ]
        );
        $this->add_control( 'subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'R-Energy.',
                'label_block' => true,
                'condition' => [ 'subtitle_type' => 'custom' ]
            ]
        );
        $this->add_control( 'title_type',
            [
                'label' => esc_html__( 'Title Type', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'label_block' => 'true',
                'default' => 'page',
                'options' => [
                    'page' => esc_html__( 'Page Title', 'r-energy' ),
                    'custom' => esc_html__( 'Custom Text', 'r-energy' ),
                    'none' => esc_html__( 'None', 'r-energy' ),
                ]
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => get_the_title(),
                'label_block' => true,
                'condition' => [ 'title_type' => 'custom' ],
            ]
        );
        $this->add_control( 'breadcrumbs',
            [
                'label' => esc_html__( 'Breadcrumbs', 'r-energy' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'r-energy' ),
				'label_off' => esc_html__( 'Hide', 'r-energy' ),
				'return_value' => 'yes',
				'default' => 'yes',
            ]
        );
        $this->add_control( 'bg_img',
            [
                'label' => esc_html__( 'Hero Image', 'r-energy' ),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => plugins_url( 'assets/front/img/about.jpg', __DIR__ )],
            ]
        );
        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail',
                'default' => 'full',
                'condition' => [ 'bg_img[url]!' => '' ],
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
    }

    protected function render() {
        $settings   = $this->get_settings_for_display();
        $elementid  = $this->get_id();
        $image      = $this->get_settings( 'bg_img' );
        $image_url  = Group_Control_Image_Size::get_attachment_image_src( $image['id'], 'thumbnail', $settings );
        $imagealt   = esc_attr(get_post_meta($image['id'], '_wp_attachment_image_alt', true));
        $imagealt   = $imagealt ? $imagealt : basename ( get_attached_file( $image['id'] ) );
        $imageurl   = empty( $image_url ) ? $image['url'] : $image_url;
        $imageurl   = empty( $image_url ) ? $image['url'] : $image_url;
        echo '<div class="'.$settings['hero_type'].'">';
            if ( $imageurl ) {
                echo '<div class="overlay"></div>';
                echo '<picture>';
                    echo '<source srcset="'.$imageurl.'" media="(min-width: 992px)"/>';
                    echo '<img class="img-bg" src="'.$imageurl.'" alt="'.$imagealt.'"/>';
                echo '</picture>';
            }
            echo '<div class="container">';
                echo '<div class="row">';
                    echo '<div class="col-12">';
                        echo '<div class="align-container">';
                            echo '<div class="align-item">';
                                if ( $settings['subtitle_type'] == 'custom' ) {
                                    if ( $settings['subtitle'] ) {
                                        echo '<span class="site__name">'.$settings['subtitle'].'</span>';
                                    }
                                }
                                if ( $settings['subtitle_type'] == 'sitename' ) {
                                    echo '<span class="site__name">'.get_bloginfo('name').'</span>';
                                }
                                if ( $settings['title_type'] == 'custom' ) {
                                    if ( $settings['title'] ) {
                                        echo '<h1 class="title">'.$settings['title'].'</h1>';
                                    }
                                }
                                if ( $settings['title_type'] == 'page' ) {
                                    echo '<h1 class="title">'.get_the_title().'</h1>';
                                }
                                if ( $settings['breadcrumbs'] == 'yes' ) {
                                    r_energy_breadcrumbs();
                                }
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}
