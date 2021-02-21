<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Mobile_App_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-mobile-app-section';
    }
    public function get_title() {
        return 'Mobile App Section';
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
        $this->start_controls_section( 'r_energy_mobile_app_text_settings',
            [
                'label' => esc_html__( 'Text and Image', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Mobile app',
                'label_block' => true,
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '<span>R-energy in</span> <span>Your Phone</span>',
                'label_block' => true,
            ]
        );
        $this->add_control( 'text_content',
            [
                'label' => esc_html__( 'Description', 'r-energy' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '<p>Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin: herring.</p>',
                'dynamic' => ['active' => true],
                'label_block' => true,
            ]
        );
        $this->add_control( 'right_image',
            [
                'label' => esc_html__( 'Right Image', 'r-energy' ),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => plugins_url( 'assets/front/img/img-phone.png', __DIR__ )],
            ]
        );
        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'right_thumbnail',
                'default' => 'full',
                'condition' => [ 'right_image[url]!' => '' ]
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_mobile_app_btn_settings',
            [
                'label' => esc_html__('Buttons', 'r-energy'),
            ]
        );
        $this->add_control( 'btn_image1',
            [
                'label' => esc_html__( 'Button Image 1', 'r-energy' ),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => plugins_url( 'assets/front/img/google-badge.png', __DIR__ )],
            ]
        );
        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail',
                'default' => 'full',
                'condition' => [ 'btn_image1[url]!' => '' ]
            ]
        );
        $this->add_control( 'btn_link1',
            [
                'label' => esc_html__( 'Button Link 1', 'r-energy' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => ''
                ],
                'show_external' => true,
            ]
        );
        $this->add_control( 'btn_image2',
            [
                'label' => esc_html__( 'Button Image 2', 'r-energy' ),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => plugins_url( 'assets/front/img/apple-badge.png', __DIR__ )],
            ]
        );
        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail2',
                'default' => 'full',
                'condition' => [ 'btn_image2[url]!' => '' ]
            ]
        );
        $this->add_control( 'btn_link2',
            [
                'label' => esc_html__( 'Button Link 2', 'r-energy' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => ''
                ],
                'show_external' => true,
            ]
        );
        $this->end_controls_section();

        /***** Subtitle ******/
        $this->start_controls_section('r_energy_app_subtitle_styling',
            [
                'label' => esc_html__( 'Subtitle', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_subtitle_app_tabs');
        $this->start_controls_tab( 'r_energy_subtitle_app_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='subtitle_app',$selector='.primary-heading .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_subtitle_app_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='subtitle_app_hover',$selector='.primary-heading .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Subtitle ******/

        /***** TITLE ******/
        $this->start_controls_section('r_energy_app_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_app_tabs');
        $this->start_controls_tab( 'r_energy_title_app_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_app',$selector='.primary-heading .subtitle span');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_app_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_app_hover',$selector='.primary-heading .subtitle span:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/

        /***** DESC ******/
        $this->start_controls_section('r_energy_app_desc_styling',
            [
                'label' => esc_html__( 'Description', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_desc_app_tabs');
        $this->start_controls_tab( 'r_energy_desc_app_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_app',$selector='.primary-heading p');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_desc_app_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_app_hover',$selector='.primary-heading p:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END DESC ******/

    }

    protected function render() {
        $settings  = $this->get_settings_for_display();
        $elementid = $this->get_id();

        $image     = $this->get_settings( 'right_image' );
        $image_url = Group_Control_Image_Size::get_attachment_image_src( $image['id'], 'right_thumbnail', $settings );
        $imageurl  = empty( $image_url ) ? $image_url['url'] : $image_url;
        $imagealt  = esc_attr(get_post_meta($image['id'], '_wp_attachment_image_alt', true));
        $imagealt  = $imagealt ? $imagealt : basename ( get_attached_file( $image['id'] ) );

        $btn_image     = $this->get_settings( 'btn_image1' );
        $btn_image_url = Group_Control_Image_Size::get_attachment_image_src( $btn_image['id'], 'thumbnail', $settings );
        $btn_imagealt  = esc_attr(get_post_meta($btn_image['id'], '_wp_attachment_image_alt', true));
        $btn_imagealt  = $btn_imagealt ? $btn_imagealt : basename ( get_attached_file( $btn_image['id'] ) );
        $btn_imageurl  = empty( $btn_image_url ) ? $btn_image['url'] : $btn_image_url;

        $btn_image2     = $this->get_settings( 'btn_image2' );
        $btn_image_url2 = Group_Control_Image_Size::get_attachment_image_src( $btn_image2['id'], 'thumbnail2', $settings );
        $btn_imagealt2  = esc_attr(get_post_meta($btn_image2['id'], '_wp_attachment_image_alt', true));
        $btn_imagealt2  = $btn_imagealt2 ? $btn_imagealt : basename ( get_attached_file( $btn_image2['id'] ) );
        $btn_imageurl2  = empty( $btn_image_url2 ) ? $btn_image2['url'] : $btn_image_url2;

        $target1   = $settings['btn_link1']['is_external'] ? ' target="_blank"' : '';
        $nofollow1 = $settings['btn_link1']['nofollow'] ? ' rel="nofollow"' : '';
        $target2   = $settings['btn_link2']['is_external'] ? ' target="_blank"' : '';
        $nofollow2 = $settings['btn_link2']['nofollow'] ? ' rel="nofollow"' : '';
        echo '<div class="section app">';
            echo '<div class="container">';
                echo '<div class="row">';
                    echo '<div class="col-lg-6">';
                        if ( $settings['subtitle'] || $settings['title'] || $settings['text_content'] ) {
                            echo '<div class="heading primary-heading">';
                                if ( $settings['subtitle'] ) {
                                    echo '<h3 class="title">'.$settings['subtitle'].'</h3>';
                                }
                                if ( $settings['title'] ) {
                                    echo '<h5 class="subtitle">'.$settings['title'].'</h5>';
                                }
                                echo wpautop($settings['text_content']);
                            echo '</div>';
                        }
                        if ( $btn_imageurl || $btn_imageurl2 ) {
                            echo '<div class="downloads-block">';
                                if ( $btn_imageurl ) {
                                    echo '<a href="'.$settings['btn_link1']['url'].'"'.$target1.$nofollow1.'><img src="'.$btn_imageurl.'" alt="'.$btn_imagealt.'"></a>';
                                }
                                if ( $btn_imageurl2 ) {
                                    echo '<a href="'.$settings['btn_link1']['url'].'"'.$target2.$nofollow2.'><img src="'.$btn_imageurl2.'" alt="'.$btn_imagealt2.'"></a>';
                                }
                            echo '</div>';
                        }
                    echo '</div>';
                    if ( $imageurl ) {
                        echo '<div class="col-lg-6">';
                            echo '<div class="img-block"><img src="'.$imageurl.'" alt="'.$imagealt.'"/></div>';
                        echo '</div>';
                    }
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}
