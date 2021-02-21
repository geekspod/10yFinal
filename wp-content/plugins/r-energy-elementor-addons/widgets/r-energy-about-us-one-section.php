<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_About_Us_One_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-about-us-one-section';
    }
    public function get_title() {
        return 'About Us 1';
    }
    public function get_icon() {
        return 'eicon-columns';
    }
    public function get_categories() {
        return [ 'r-energy' ];
    }
    // Registering Controls
    protected function _register_controls() {
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_aboutus_bg_image_settings',
            [
                'label' => esc_html__( 'Parallax Image', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT
            ]
        );
        $this->add_control( 'bg_img',
            [
                'label' => esc_html__( 'Image', 'r-energy' ),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => plugins_url( 'assets/front/img/about-bg.jpg', __DIR__ )],
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

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section('r_energy_aboutus_left_text_settings',
            [
                'label'          => esc_html__( 'Top and Left Text', 'r-energy' ),
                'tab'            => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'left_title',
            [
                'label'          => esc_html__( 'Left Title', 'r-energy' ),
                'type'           => Controls_Manager::TEXT,
                'default'        => 'About',
                'label_block'    => true,
            ]
        );
        $this->add_control( 'top_title',
            [
                'label'          => esc_html__( 'Top Title', 'r-energy' ),
                'type'           => Controls_Manager::TEXTAREA,
                'default'        => '. About R-energy',
                'label_block'    => true,
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section('r_energy_aboutus_right_text_settings',
            [
                'label'          => esc_html__( 'Right Text Content', 'r-energy' ),
                'tab'            => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'icon',
            [
                'label' => esc_html__('Icon', 'r-energy'),
                'type' => Controls_Manager::ICONS,
                'default'   => [
                    'value' => 'fas fa-home',
                    'library' => 'fa-solid'
                ]
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
                'type'           => Controls_Manager::TEXTAREA,
                'default'        => 'Streamer fish California halibut Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin: herring, Moses sole sea snail grouper discus. European eel slender snipe eel.',
                'dynamic'        => ['active' => true],
                'label_block'    => true,
            ]
        );
        $this->add_control( 'btn_title',
            [
                'label'          => esc_html__( 'Button Title', 'r-energy' ),
                'type'           => Controls_Manager::TEXT,
                'default'        => 'Exlpore more',
                'label_block'    => true,
            ]
        );
        $this->add_control( 'btn_link',
            [
                'label'         => esc_html__( 'Add Link', 'r-energy' ),
                'type'          => Controls_Manager::URL,
                'label_block'   => true,
                'default'       => [
                    'url'         => '#',
                    'is_external' => ''
                ],
                'show_external' => true
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
        /***** TITLE ******/
        $this->start_controls_section('r_energy_aboutone_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_aboutone_tabs');
        $this->start_controls_tab( 'r_energy_title_aboutone_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_aboutone',$selector='.title-block .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_aboutone_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_aboutone_hover',$selector='.title-block .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/
        /***** ABOUT TITLE ******/
        $this->start_controls_section('r_energy_aboutone_atitle_styling',
            [
                'label' => esc_html__( 'About Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_atitle_aboutone_tabs');
        $this->start_controls_tab( 'r_energy_atitle_aboutone_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='atitle_aboutone',$selector='.about-item .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_atitle_aboutone_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='atitle_aboutone_hover',$selector='.about-item .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END ABOUT TITLE ******/
        /***** DESCRIPTION ******/
        $this->start_controls_section('r_energy_aboutone_desc_styling',
            [
                'label' => esc_html__( 'Description', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_desc_aboutone_tabs');
        $this->start_controls_tab( 'r_energy_desc_aboutone_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_aboutone',$selector='.about-item p');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_desc_aboutone_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_aboutone_hover',$selector='.about-item p:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END DESCRIPTION ******/
        /***** BUTTON ******/
        $this->start_controls_section('r_energy_aboutone_button_styling',
            [
                'label' => esc_html__( 'Button', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_button_aboutone_tabs');
        $this->start_controls_tab( 'r_energy_button_aboutone_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_aboutone',$selector='.about-item .with--line');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_button_aboutone_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_aboutone_hover',$selector='.about-item .with--line:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END BUTTON ******/
    }

    protected function render() {
        $settings  = $this->get_settings_for_display();
        $elementid = $this->get_id();
        $image     = $this->get_settings( 'bg_img' );
        $image_url = Group_Control_Image_Size::get_attachment_image_src( $image['id'], 'thumbnail', $settings );
        $imageurl  = empty( $image_url ) ? $image['url'] : $image_url;
        $imagealt  = esc_attr(get_post_meta($settings['bg_img']['id'], '_wp_attachment_image_alt', true));
        $imagealt  = $imagealt ? $imagealt : basename(get_attached_file($settings['bg_img']['id']));
        $target    = $settings['btn_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow  = $settings['btn_link']['nofollow'] ? ' rel="nofollow"' : '';
        echo '<div class="section about no-padding-top no-padding-bottom">';
            if ( $settings['top_title'] ) {
                echo '<div class="container">';
                    echo '<div class="row">';
                        echo '<div class="col-xl-5 col-lg-6 col-md-7">';
                            echo '<div class="title-block">';
                                echo '<h2 class="title">'.$settings['top_title'].'</h2>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
            if ($settings['left_title'] || $settings['bg_img']['url']) {
                echo '<div class="bg-holder">';
                    if ( $settings['left_title'] ) {
                        echo '<div class="text-holder"><span>'.$settings['left_title'].'</span></div>';
                    }
                    if ( $settings['left_title'] ) {
                        echo '<div class="img-holder jarallax">';
                            echo '<div class="overlay"></div>';
                            echo '<picture>';
                                echo '<source srcset="'.$imageurl.'" media="(min-width: 992px)"/>';
                                echo '<img class="img-bg jarallax-img" src="'.$imageurl.'" alt="'.$imagealt.'"/>';
                            echo '</picture>';
                        echo '</div>';
                    }
                echo '</div>';
            }
            if ( $settings['title'] || $settings['text_content'] ) {
                echo '<div class="container">';
                    echo '<div class="row">';
                        echo '<div class="col-xl-7 offset-xl-5 col-lg-8 offset-lg-4 col-md-10 offset-md-2">';
                            echo '<div class="about-item">';
                                if ( ! empty($settings['icon']['value']) ) {
                                    echo '<div class="icon">';
                                        Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] );
                                    echo '</div>';
                                }
                                if ( $settings['title'] ) {
                                    echo '<h2 class="title">'.$settings['title'].'</h2>';
                                }
                                if ( $settings['text_content'] ) {
                                    echo wpautop($settings['text_content']);
                                }
                                if ( $settings['btn_title'] ) {
                                    echo '<a class="with--line" href="'.$settings['btn_link']['url'].'"'.$target.$nofollow.'><span>'.$settings['btn_title'].'</span></a>';
                                }
                            echo '</div>';

                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        echo '</div>';
    }
}
