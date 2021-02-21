<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Pricing_Item_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-pricing-item';
    }
    public function get_title() {
        return 'Pricing Item';
    }
    public function get_icon() {
        return 'eicon-price-table';
    }
    public function get_categories() {
        return [ 'r-energy' ];
    }
    // Registering Controls
    protected function _register_controls() {

        // Post Options
        $this->start_controls_section( 'r_energy_pricing_options',
            [
                'label' => esc_html__( 'Pack Options', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT
            ]
        );
        $this->add_control( 'pack_type',
            [
                'label' => esc_html__( 'Pack Type', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => esc_html__( 'Default', 'r-energy' ),
                    'list' => esc_html__( 'List', 'r-energy' ),
                ]
            ]
        );
        $this->add_control( 'color_type',
            [
                'label' => esc_html__( 'Color Type', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => esc_html__( 'Light', 'r-energy' ),
                    'dark' => esc_html__( 'Dark', 'r-energy' ),
                ],
                'condition' => ['pack_type' => '']
            ]
        );
        // Custom Data Options
        $this->add_control( 'active',
            [
                'label' => esc_html__( 'Active?', 'r-energy' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'no',
                'return_value' => 'yes',
            ]
        );
        // Custom Data Options
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
                'label' => esc_html__( 'Pack Name', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'pleaceholder' => esc_html__( 'Enter pack title here', 'r-energy' ),
                'default' => 'Personal',
                'label_block' => true,
            ]
        );
        $this->add_control( 'desc',
            [
                'label' => esc_html__( 'Pack Short Description', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'pleaceholder' => esc_html__( 'Enter pack short description here', 'r-energy' ),
                'default' => '[ Prepare for Installation Canthigaster rostrata flounder ]',
                'label_block' => true,
                'condition' => ['pack_type' => 'list']
            ]
        );
        $this->add_control( 'price',
            [
                'label' => esc_html__( 'Price', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'pleaceholder' => esc_html__( 'Enter pack price here', 'r-energy' ),
                'default' => '$ 585',
                'label_block' => true,
            ]
        );
        $this->add_control( 'list',
            [
                'type' => Controls_Manager::REPEATER,
                'label' => esc_html__( 'Features of Pack', 'r-energy' ),
                'seperator' => 'before',
                'default' => [
                    ['list_item' => 'Prepare for Installation'],
                    ['list_item' => 'Canthigaster rostrata'],
                    ['list_item' => 'Spikefish brown trout'],
                    ['list_item' => 'Loach summer flounder']
                ],
                'fields' => [
                    [
                        'name' => 'list_item',
                        'label' => esc_html__('Features', 'r-energy'),
                        'type' => Controls_Manager::TEXT,
                        'default' => esc_html__('Features #1', 'r-energy'),
                        'label_block' => true,
                    ],
                ],
                'title_field' => '{{list_item}}',
                'condition' => ['pack_type!' => 'list']
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section('r_energy_pricing_btn_settings',
            [
                'label' => esc_html__( 'Button', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'text',
            [
                'label' => esc_html__( 'Button Title', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => 'Get started'
            ]
        );
        $this->add_control( 'link',
            [
                'label' => esc_html__( 'Button Link', 'r-energy' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => ''
                ],
                'show_external' => true,
            ]
        );
        $this->add_control( 'type',
            [
                'label' => esc_html__( 'Button Type', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'r-button--transparent',
                'options' => [
                    '' => esc_html__( 'transparent', 'r-energy' ),
                    'r-button--filled' => esc_html__( 'filled', 'r-energy' ),
                ]
            ]
        );
        $this->add_control( 'color',
            [
                'label' => esc_html__( 'Button Color Type', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'button--black',
                'options' => [
                    'r-button--primary' => esc_html__( 'primary', 'r-energy' ),
                    'r-button--black' => esc_html__( 'black', 'r-energy' ),
                ]
            ]
        );
        $this->add_control( 'style',
            [
                'label' => esc_html__( 'Button Style', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => esc_html__( 'Square', 'r-energy' ),
                    'r-button--rounded' => esc_html__( 'Circle', 'r-energy' ),
                    'r-button--radius' => esc_html__( 'Round', 'r-energy' )
                ]
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
        /***** TITLE ******/
        $this->start_controls_section('r_energy_pricing_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_pricing_tabs');
        $this->start_controls_tab( 'r_energy_title_pricing_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='title_pricing',$selector='.pricing-table .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_pricing_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='title_pricing_hover',$selector='.pricing-table .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/
        /***** ITEM ******/
        $this->start_controls_section('r_energy_pricing_item_styling',
            [
                'label' => esc_html__( 'Item List', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_item_pricing_tabs');
        $this->start_controls_tab( 'r_energy_item_pricing_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='item_pricing',$selector='.pricing-table .item-list li');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_item_pricing_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='item_pricing_hover',$selector='.pricing-table .item-list li:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END ITEM ******/
        /***** PRICE ******/
        $this->start_controls_section('r_energy_pricing_price_styling',
            [
                'label' => esc_html__( 'Price', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_price_pricing_tabs');
        $this->start_controls_tab( 'r_energy_price_pricing_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='price_pricing',$selector='.pricing-table .price');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_price_pricing_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='price_pricing_hover',$selector='.pricing-table price:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END PRICE ******/
        /***** BUTTON ******/
        $this->start_controls_section('r_energy_pricing_button_styling',
            [
                'label' => esc_html__( 'Button', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_button_pricing_tabs');
        $this->start_controls_tab( 'r_energy_button_pricing_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_pricing',$selector='.pricing-table .r-button-holder a');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_button_pricing_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_pricing_hover',$selector='.pricing-table r-button-holder a:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END BUTTON ******/
    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        $active = $settings['active'] == 'yes' ? ' active' : '';
        $type   = $settings['type'] ? ' '.$settings['type'] : '';
        $style  = $settings['style'] ? ' '.$settings['style'] : '';
        $color  = $settings['color'] ? ' '.$settings['color'] : '';
        if ( $settings['pack_type'] == 'list' ) {
            echo '<div class="pricing-table--inner">';
                echo '<div class="pricing-item'.$active.'">';
                    if ( $settings['active'] == 'yes' ) {
                        echo '<div class="ribbon"><svg class="icon"><use xlink:href="#star"></use></svg></div>';
                    }
                	echo '<div class="row align-items-center">';
                        if ( $settings['title'] ) {
                            echo '<div class="col-lg-3">';
                    			echo '<h4 class="title">'.$settings['title'].'</h4>';
                    		echo '</div>';
                        }
                        if ( $settings['desc'] ) {
                            echo '<div class="col-lg-5">';
                    			echo '<p class="description">'.$settings['desc'].'</p>';
                    		echo '</div>';
                        }
                        if ( $settings['price'] ) {
                            echo '<div class="col-lg-2"><span class="price">'.$settings['price'].'</span></div>';
                        }
                        if ( $settings['text'] ) {
                            $target   = $settings['link']['is_external'] ? ' target="_blank"' : '';
                            $nofollow = $settings['link']['nofollow'] ? ' rel="nofollow"' : '';
                            echo '<div class="col-lg-2"><a href="'.$settings['link']['url'].'"'.$target.$nofollow.' class="r-button'.$type.$color.$style.'" data-hover="'.$settings['text'].'"><span>'.$settings['text'].'</span></a></div>';
                        }
                	echo '</div>';
                echo '</div>';
            echo '</div>';
        } else {
            $color_type = $settings['color_type'] == 'dark' ? ' is--dark' : '';
            echo '<div class="pricing-table'.$color_type.'">';
                echo '<figure class="pricing-item'.$active.'">';
                    echo '<div class="ribbon"><svg class="icon"><use xlink:href="#star"></use></svg></div>';
                    echo '<div class="img-holder">';
                    if ( ! empty($settings['icon']['value']) ) {
                        echo '<div class="icon">';
                            Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] );
                        echo '</div>';
                    }
                    echo '</div>';
                    echo '<figcaption>';
                        if ( $settings['title'] ) {
                            echo '<h4 class="title">'.$settings['title'].'</h4>';
                        }
                        if ( $settings['list'] ) {
                            echo '<ul class="item-list">';
                                foreach ($settings['list'] as $list) {
                                    echo '<li>'.$list['list_item'].'</li>';
                                }
                            echo '</ul>';
                        }
                        if ( $settings['price'] ) {
                            echo '<p class="price">'.$settings['price'].'</p>';
                        }
                        echo '<div class="r-button-holder">';
                        if ( $settings['text'] ) {
                            $target   = $settings['link']['is_external'] ? ' target="_blank"' : '';
                            $nofollow = $settings['link']['nofollow'] ? ' rel="nofollow"' : '';
                            echo '<a href="'.$settings['link']['url'].'"'.$target.$nofollow.' class="r-button'.$type.$color.$style.'" data-hover="'.$settings['text'].'"><span>'.$settings['text'].'</span></a>';
                        }
                        echo '</div>';
                    echo '</figcaption>';
                echo '</figure>';
            echo '</div>';
        }
    }
}
