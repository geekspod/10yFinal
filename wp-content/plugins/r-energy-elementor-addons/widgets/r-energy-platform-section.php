<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Platform_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-platform-section';
    }
    public function get_title() {
        return 'Platform Section';
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
        $this->start_controls_section( 'r_energy_platform_text_settings',
            [
                'label' => esc_html__( 'Text', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'top_title',
            [
                'label' => esc_html__( 'Top Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Working <span>Platform</span>',
                'label_block' => true,
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'R-Energy’s Human Resources',
                'label_block' => true,
            ]
        );
        $this->add_control( 'text_content',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '<p>Streamer fish California halibut Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin: herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury swordfish southern sandfish</p>',
                'dynamic' => ['active' => true],
                'label_block' => true,
            ]
        );
        $this->add_control( 'btn_title',
            [
                'label' => esc_html__( 'Button Title', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Explore more',
                'label_block' => true,
            ]
        );
        $this->add_control( 'btn_link',
            [
                'label' => esc_html__( 'Button Link', 'r-energy' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => ''
                ],
                'show_external' => true
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section('r_energy_platform_img_settings',
            [
                'label' => esc_html__( 'Image', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'left_img',
            [
                'label' => esc_html__( 'Left Image', 'r-energy' ),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => Utils::get_placeholder_image_src()],
            ]
        );
        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail',
                'default' => 'full',
                'condition' => [ 'left_img[url]!' => '' ],
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
        /***** Title ******/
        $this->start_controls_section('r_energy_platform_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_platform_tabs');
        $this->start_controls_tab( 'r_energy_title_platform_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_platform',$selector='.title-block .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_platform_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_platform_hover',$selector='.slider-item .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Title ******/
        /***** Item title ******/
        $this->start_controls_section('r_energy_platform_ititle_styling',
            [
                'label' => esc_html__( 'Item Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_ititle_platform_tabs');
        $this->start_controls_tab( 'r_energy_ititle_platform_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='ititle_platform',$selector='.text-block .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_ititle_platform_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='ititle_platform_hover',$selector='.text-block .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Item title ******/
        /***** Item desc ******/
        $this->start_controls_section('r_energy_platform_idesc_styling',
            [
                'label' => esc_html__( 'Item Description', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_idesc_platform_tabs');
        $this->start_controls_tab( 'r_energy_idesc_platform_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='idesc_platform',$selector='.text-block p');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_idesc_platform_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='idesc_platform_hover',$selector='.text-block p:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Item desc ******/
        /***** Button ******/
        $this->start_controls_section('r_energy_platform_button_styling',
            [
                'label' => esc_html__( 'Item Button', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_button_platform_tabs');
        $this->start_controls_tab( 'r_energy_button_platform_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_platform',$selector='.text-block .with--line');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_button_platform_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_platform_hover',$selector='.text-block .with--line:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Button ******/
    }

    protected function render() {
        $settings   = $this->get_settings_for_display();
        $target     = $settings['btn_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow   = $settings['btn_link']['nofollow'] ? ' rel="nofollow"' : '';
        $image      = $this->get_settings( 'left_img' );
        $image_url  = Group_Control_Image_Size::get_attachment_image_src( $image['id'], 'thumbnail', $settings );
        $imageurl   = empty( $image_url ) ? $image['url'] : $image_url;
        $imagealt   = esc_attr(get_post_meta($image['id'], '_wp_attachment_image_alt', true));
        $imagealt   = $imagealt ? $imagealt : basename ( get_attached_file( $image['id'] ) );

        echo '<div class="platform">';
            echo '<div class="wrapper">';
                if ( $imageurl ) {
                    echo '<img class="img-background" src="'.$imageurl.'" alt="'.$imagealt.'">';
                }
                echo '<div class="container">';
                    echo '<div class="row">';
                        echo '<div class="col-xl-6 offset-xl-5">';
                            if ( $settings['top_title'] ) {
                                echo '<div class="title-block">';
                                    echo '<h2 class="title">'.$settings['top_title'].'</h2>';
                                echo '</div>';
                            }
                            echo '<div class="text-block">';
                                if ( $settings['title'] ) {
                                    echo '<h4 class="title">'.$settings['title'].'</h4>';
                                }
                                if ( $settings['text_content'] ) {
                                    echo $settings['text_content'];
                                }
                                if ( $settings['btn_title'] ) {
                                    echo '<a class="with--line" href="'.$settings['btn_link']['url'].'"'.$target .$nofollow.'><span>'.$settings['btn_title'].'</span></a>';
                                }
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}
