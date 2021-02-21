<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Banner_One_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-banner-one';
    }
    public function get_title() {
        return 'Banner Section';
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
        $this->start_controls_section( 'r_energy_banner_text_settings',
            [
                'label' => esc_html__( 'Text', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'New Technology <br/>by R-energy',
                'label_block' => true,
            ]
        );
        $this->add_control( 'text_content',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '<p>Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin: herring, Moses sole sea snail grouper discus. European</p>',
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
        $this->start_controls_section('r_energy_banner_img_settings',
            [
                'label' => esc_html__( 'Image', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'bg_img',
            [
                'label' => esc_html__( 'Image', 'r-energy' ),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => Utils::get_placeholder_image_src()],
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
        $this->add_control( 'mob_img',
            [
                'label' => esc_html__( 'Responsive Mobile Image', 'r-energy' ),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => Utils::get_placeholder_image_src()],
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
        /***** TITLE ******/
        $this->start_controls_section('r_energy_banner_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_banner_tabs');
        $this->start_controls_tab( 'r_energy_title_banner_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='title_banner',$selector='.banner .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_banner_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='title_banner_hover',$selector='.banner .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/
        /***** DESC ******/
        $this->start_controls_section('r_energy_banner_desc_styling',
            [
                'label' => esc_html__( 'Description', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_desc_banner_tabs');
        $this->start_controls_tab( 'r_energy_desc_banner_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='desc_banner',$selector='.banner p');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_desc_banner_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='desc_banner_hover',$selector='.banner p:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END DESC ******/
        /***** Button ******/
        $this->start_controls_section('r_energy_banner_button_styling',
            [
                'label' => esc_html__( 'Button', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_button_banner_tabs');
        $this->start_controls_tab( 'r_energy_button_banner_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_banner',$selector='.banner .with--line');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_button_banner_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_banner_hover',$selector='.banner .with--line:hover');
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
        $image      = $this->get_settings( 'bg_img' );
        $image_url  = Group_Control_Image_Size::get_attachment_image_src( $image['id'], 'thumbnail', $settings );
        $imageurl   = empty( $image_url ) ? $image['url'] : $image_url;
        $mob_img    = $settings['mob_img']['url'] ? $settings['mob_img']['url'] : $imageurl;
        $imagealt   = esc_attr(get_post_meta($image['id'], '_wp_attachment_image_alt', true));
        $imagealt   = $imagealt ? $imagealt : basename ( get_attached_file( $image['id'] ) );
        echo '<div class="section banner">';
            if ( $imageurl ) {
                echo '<picture>';
                    echo '<source srcset="'.$imageurl.'" media="(min-width: 576px)"/>';
                    echo '<img class="img-bg" src="'.$mob_img.'" alt="'.$imagealt.'">';
                echo '</picture>';
            }
            echo '<div class="container">';
                echo '<div class="row">';
                    echo '<div class="col-xl-7 col-lg-8 col-md-9">';
                        if ( $settings['title'] ) {
                            echo '<h2 class="title">'.$settings['title'].'</h2>';
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

    }
}
