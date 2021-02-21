<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Services_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-services-section';
    }
    public function get_title() {
        return 'Sevices Section';
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
        $this->start_controls_section( 'r_energy_services_general_settings',
            [
                'label' => esc_html__( 'General', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'hide_top',
            [
                'label' => esc_html__( 'Hide Text Content', 'nt-addons' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'nt-addons' ),
                'label_off' => esc_html__( 'No', 'nt-addons' ),
                'return_value' => 'yes',
                'default' => 'no'
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_services_text_settings',
            [
                'label' => esc_html__( 'Text', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                'condition' => ['hide_top!' => 'yes'],
            ]
        );
        $this->add_control( 'subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Services',
                'label_block' => true,
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Welcome to Great<br/> R-Energy Services',
                'label_block' => true,
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
        $this->add_control( 'text_content',
            [
                'label' => esc_html__( 'Text', 'r-energy' ),
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
        $this->start_controls_section( 'r_energy_services_items_two_settings',
            [
                'label' => esc_html__('Services Items', 'r-energy'),
            ]
        );
        $this->add_control( 'vert_text',
            [
                'label' => esc_html__( 'Left Vertical Text', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Awesome Services for your business and home',
                'label_block' => true,
            ]
        );
        $this->add_control( 'collg',
            [
                'label' => esc_html__( 'Column Large Device', 'nt-addons' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '12' => esc_html__( '1 Column', 'r-energy' ),
                    '6' => esc_html__( '2 Column', 'r-energy' ),
                    '4' => esc_html__( '3 Column', 'r-energy' ),
                    '3' => esc_html__( '4 Column', 'r-energy' ),
                ],
                'default' => '4'
            ]
        );
        $this->add_control( 'colmd',
            [
                'label' => esc_html__( 'Column Medium Device', 'nt-addons' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '12' => esc_html__( '1 Column', 'r-energy' ),
                    '6' => esc_html__( '2 Column', 'r-energy' ),
                    '4' => esc_html__( '3 Column', 'r-energy' ),
                ],
                'default' => '6'
            ]
        );
        $this->add_control( 'content_alignment',
            [
                'label' => esc_html__( 'Content Alignment', 'nt-addons' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'left' => esc_html__( 'Left', 'r-energy' ),
                    'center' => esc_html__( 'Center', 'r-energy' ),
                ],
                'default' => 'left'
            ]
        );
        $def_img = plugins_url( 'assets/front/img/serv-in-bg-2.jpg', __DIR__ );
        $this->add_control( 'services_items',
            [
                'type' => Controls_Manager::REPEATER,
                'seperator' => 'before',
                'default' => [
                    [
                        'item_img' => ['url' => $def_img],
                        'item_number' => '01',
                        'item_cat' => 'Sun Energy',
                        'item_title' => 'Solar Panels',
                        'item_desc' => 'Canthigaster rostrata spikefish brown trout loach summer flounder. European minnow black dragonfish orbicular',
                        'link_title' => 'Explore more',
                        'item_link' => '#',
                    ],
                    [
                        'item_img' => ['url' => $def_img],
                        'item_number' => '02',
                        'item_cat' => 'Wind Energy',
                        'item_title' => 'Windmill Installation',
                        'item_desc' => 'Canthigaster rostrata spikefish brown trout loach summer flounder. European minnow black dragonfish orbicular',
                        'link_title' => 'Explore more',
                        'item_link' => '#',
                    ],
                    [
                        'item_img' => ['url' => $def_img],
                        'item_number' => '03',
                        'item_cat' => 'Green Energy',
                        'item_title' => 'Elctricity Station',
                        'item_desc' => 'Canthigaster rostrata spikefish brown trout loach summer flounder. European minnow black dragonfish orbicular',
                        'link_title' => 'Explore more',
                        'item_link' => '#',
                    ],
                ],
                'fields' => [
                    [
                        'name' => 'item_img',
                        'label' => esc_html__( 'Image', 'r-energy'),
                        'type' => Controls_Manager::MEDIA,
                        'default' => ['url' => $def_img],
                    ],
                    [
                        'name' => 'item_number',
                        'label' => esc_html__( 'Number', 'r-energy'),
                        'type' => Controls_Manager::TEXT,
                        'default' => '01',
                        'label_block' => true
                    ],
                    [
                        'name' => 'item_cat',
                        'label' => esc_html__( 'Category', 'r-energy'),
                        'type' => Controls_Manager::TEXT,
                        'default' => 'Sun Energy',
                        'label_block' => true
                    ],
                    [
                        'name' => 'item_title',
                        'label' => esc_html__('Title', 'r-energy'),
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => 'Solar Panels',
                        'label_block' => true
                    ],
                    [
                        'name' => 'item_desc',
                        'label' => esc_html__( 'Short Description', 'r-energy' ),
                        'type' => Controls_Manager::TEXTAREA,
                        'label_block' => true,
                        'default' => 'Canthigaster rostrata spikefish brown trout loach summer flounder. European minnow black dragonfish orbicular',
                    ],
                    [
                        'name' => 'link_title',
                        'label' => esc_html__( 'Button Title', 'r-energy' ),
                        'type' => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => 'Explore more',
                    ],
                    [
                        'name' => 'item_link',
                        'label' => esc_html__( 'Link', 'r-energy' ),
                        'type' => Controls_Manager::URL,
                        'label_block' => true,
                        'default' => [
                            'url' => '#',
                            'is_external' => 'true',
                        ],
                        'placeholder' => esc_html__( 'Place URL here', 'r-energy' ),
                    ]
                ],

                'title_field'     => '{{item_title}}'
            ]
        );
        $this->end_controls_section();
        /***** SUBTITLE ******/
        $this->start_controls_section('r_energy_brands_subtitle_styling',
            [
                'label' => esc_html__( 'Subtitle', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_subtitle_brands_tabs');
        $this->start_controls_tab( 'r_energy_subtitle_brands_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='subtitle_brands',$selector='.primary-heading .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_subtitle_brands_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='subtitle_brands_hover',$selector='.primary-heading .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END SUBTITLE ******/

        /***** TITLE ******/
        $this->start_controls_section('r_energy_brands_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_brands_tabs');
        $this->start_controls_tab( 'r_energy_title_brands_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_brands',$selector='.primary-heading .subtitle');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_brands_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_brands_hover',$selector='.primary-heading .subtitle:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/

        /***** Desc ******/
        $this->start_controls_section('r_energy_brands_desc_styling',
            [
                'label' => esc_html__( 'Description', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_desc_brands_tabs');
        $this->start_controls_tab( 'r_energy_desc_brands_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_brands',$selector='.heading-description p');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_desc_brands_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_brands_hover',$selector='.heading-description p:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Desc ******/
        /***** Button ******/
        $this->start_controls_section('r_energy_brands_button_styling',
            [
                'label' => esc_html__( 'Button', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_button_brands_tabs');
        $this->start_controls_tab( 'r_energy_button_brands_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_brands',$selector='.heading-description .with--line');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_button_brands_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_brands_hover',$selector='.heading-description .with--line:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Button ******/
    }

    protected function render() {
        $settings   = $this->get_settings_for_display();
        $elementid  = $this->get_id();
        $target   = $settings['btn_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $settings['btn_link']['nofollow'] ? ' rel="nofollow"' : '';
        echo '<div class="services-inner services-inner--style-3">';
            if ( $settings['hide_top'] != 'yes' ) {
                echo '<div class="container">';
                    echo '<div class="row margin-bottom">';
                        if ( $settings['subtitle'] || $settings['title'] || ! empty($settings['logo']['value'])) {
                            echo '<div class="col-xl-7 col-lg-6">';
                                echo '<div class="heading primary-heading inner-heading">';
                                    echo '<div class="title-holder">';
                                        echo '<div class="title-block">';
                                            if ( $settings['subtitle'] ) {
                                                echo '<h3 class="title">'.$settings['subtitle'].'</h3>';
                                            }
                                            if ( $settings['title'] ) {
                                                echo '<p class="subtitle">'.$settings['title'].'</p>';
                                            }
                                        echo '</div>';
                                        if ( ! empty($settings['icon']['value']) ) {
                                            echo '<div class="img-block">';
                                                echo '<div class="icon">';
                                                    Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] );
                                                echo '</div>';
                                            echo '</div>';
                                        }
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        }
                        echo '<div class="col-xl-5 col-lg-6">';
                            echo '<div class="heading-description">';
                                if ( $settings['text_content'] ) {
                                    echo $settings['text_content'];
                                }
                                if ( $settings['btn_title'] ) {
                                    echo '<a class="with--line" href="'.$settings['btn_link']['url'].'"'.$target.$nofollow.'><span>'.$settings['btn_title'].'</span></a>';
                                }
                            echo '</div>';
                        echo '</div>';

                    echo '</div>';
                echo '</div>';
            }
            echo '<div class="content-holder">';
                if ( $settings['vert_text'] ) {
                    echo '<span class="info">'.$settings['vert_text'].'</span>';
                }
                echo '<div class="content">';
                    echo '<div class="container">';
                        $contentalign = $settings['content_alignment'] == 'center' ? ' justify-content-center' : ' justify-content-sm-center';
                        echo '<div class="row offset-margin'.$contentalign.'">';
                            foreach ($settings['services_items'] as $item) {
                                $itarget   = $item['item_link']['is_external'] ? ' target="_blank"' : '';
                                $inofollow = $item['item_link']['nofollow'] ? ' rel="nofollow"' : '';
                                $imagealt  = esc_attr(get_post_meta($item['item_img']['id'], '_wp_attachment_image_alt', true));
                                $imagealt  = $imagealt ? $imagealt : basename ( get_attached_file( $item['item_img']['id'] ) );
                                if ( $item['item_img']['url'] ) {
                                    echo '<div class="col-sm-8 col-md-'.$settings['colmd'].' col-lg-'.$settings['collg'].'">';
                                        echo '<div class="info-box">';
                                            echo '<div class="info-box__img"><img src="'.$item['item_img']['url'].'" alt="'.$imagealt.'"/></div>';
                                            if ( $item['item_cat'] ) {
                                                echo '<div class="info-box__category">'.$item['item_cat'].'</div>';
                                            }
                                            echo '<div class="info-box__description">';
                                                if ( $item['item_number'] ) {
                                                    echo '<div class="info-box__number">'.$item['item_number'].'</div>';
                                                }
                                                echo '<div class="info-box__inner">';
                                                    if ( $item['item_title'] ) {
                                                        echo '<h4 class="info-box__title">';
                                                            if ( $item['item_link']['url'] ) {
                                                                echo '<a href="'.$item['item_link']['url'].'"'.$itarget.$inofollow.'>'.$item['item_title'].'</a>';
                                                            } else {
                                                                echo $item['item_title'];
                                                            }
                                                            echo '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
                                                        echo '</h4>';
                                                    }
                                                    if ( $item['item_desc'] || $item['link_title'] ) {
                                                        echo '<div class="info-box__hidden">';
                                                            if ( $item['item_desc'] ) {
                                                                echo wpautop($item['item_desc']);
                                                            }
                                                            if ( $item['link_title'] ) {
                                                                echo '<a class="info-box__link with--line" href="'.$item['item_link']['url'].'"'.$itarget.$inofollow.'>'.$item['link_title'].'</a>';
                                                            }
                                                        echo '</div>';
                                                    }
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</div>';
                                    echo '</div>';
                                }
                            }
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}
