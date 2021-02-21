<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Home_Slider_Two_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-home-slider-two';
    }
    public function get_title() {
        return 'Home Slider 2';
    }
    public function get_icon() {
        return 'eicon-slider-push';
    }
    public function get_categories() {
        return [ 'r-energy' ];
    }
    // Registering Controls
    protected function _register_controls() {
        $this->start_controls_section( 'home_slider_section',
            [
                'label' => esc_html__( 'Slider Item', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT
            ]
        );
        $def_image = plugins_url( 'assets/front/img/promo-1.jpg', __DIR__ );
        $def_image2 = plugins_url( 'assets/front/img/promo-2.jpg', __DIR__ );
        $def_image3 = plugins_url( 'assets/front/img/promo-3.jpg', __DIR__ );
        $this->add_control( 'slider_items',
            [
                'type' => Controls_Manager::REPEATER,
                'seperator' => 'before',
                'default' => [
                    [
                        'slider_item_type' => 'style1',
                        'slider_image' => ['url' => $def_image],
                        'slider_mob_image' => ['url' => $def_image],
                        'slider_title' => 'Business Hand in Hand <span>with new Technology</span>',
                        'slider_desc' => 'R-energy accreditation standards. Members are proactive in both undertaking and applying animal welfare scientific research, contribut',
                        'slider_btn_title' => 'Discover',
                        'slider_btn_link' => '#'
                    ],
                    [
                        'slider_item_type' => 'style2',
                        'slider_image' => ['url' => $def_image2],
                        'slider_mob_image' => ['url' => $def_image2],
                        'slider_title' => 'Modern Technology in <span>Sun Energy</span>',
                        'slider_desc' => 'R-energy accreditation standards. Members are proactive in both undertaking and applying animal welfare scientific research, contribut',
                        'slider_btn_title' => 'Discover',
                        'slider_btn_link' => '#'
                    ],
                    [
                        'slider_item_type' => 'style3',
                        'slider_image' => ['url' => $def_image3],
                        'slider_mob_image' => ['url' => $def_image3],
                        'slider_title' => 'Solar <span>—</span> Systems',
                        'slider_btn_title' => '',
                        'slider_btn_link' => ''
                    ],
                ],
                'fields' => [
                    [
                        'name' => 'slider_item_type',
                        'label' => esc_html__('Slider Item Style', 'r-energy'),
                        'type' => Controls_Manager::SELECT,
                        'options' => [
                            'style1' => esc_html__('Style 1', 'r-energy'),
                            'style2' => esc_html__('Style 2', 'r-energy'),
                            'style3' => esc_html__('Style 3', 'r-energy')
                        ],
                        'default' => 'style1'
                    ],
                    [
                        'name' => 'slider_image',
                        'label' => esc_html__( 'Image', 'r-energy' ),
                        'type' => Controls_Manager::MEDIA,
                        'default' => ['url' => $def_image]
                    ],
                    [
                        'name' => 'slider_mob_image',
                        'label' => esc_html__( 'Responsive Mobile Image', 'r-energy' ),
                        'type' => Controls_Manager::MEDIA,
                        'default' => ['url' => $def_image]
                    ],
                    [
                        'name' => 'slider_title',
                        'label' => esc_html__( 'Title', 'r-energy' ),
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => 'Business Hand in Hand <span>with new Technology</span>',
                        'pleaceholder' => esc_html__( 'Enter title here', 'r-energy' )
                    ],
                    [
                        'name' => 'slider_desc',
                        'label' => esc_html__( 'Description', 'r-energy' ),
                        'type' => Controls_Manager::TEXTAREA,
                        'pleaceholder' => esc_html__( 'Enter description here', 'r-energy' ),
                        'default' => 'R-energy accreditation standards. Members are proactive in both undertaking and applying animal welfare scientific research, contributing',
                        'condition' => ['slider_item_type!' => 'style3']
                    ],
                    [
                        'name' => 'slider_btn_title',
                        'label' => esc_html__( 'Button Title', 'r-energy' ),
                        'type' => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => 'Discover',
                        'pleaceholder' => esc_html__( 'Enter button title here', 'r-energy' )
                    ],
                    [
                        'name' => 'slider_btn_link',
                        'label' => esc_html__( 'Button Link', 'r-energy' ),
                        'type' => Controls_Manager::URL,
                        'label_block' => true,
                        'default' => [
                            'url' => '#',
                            'is_external' => 'true'
                        ],
                        'placeholder' => esc_html__( 'Place URL here', 'r-energy' )
                    ]
                ],
                'title_field' => '{{slider_title}}'
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'home_slider_socials_section',
            [
                'label' => esc_html__( 'Socials', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT
            ]
        );
        $this->add_control( 'social_label',
            [
                'label' => esc_html__( 'Social Label', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Social',
                'label_block' => true,
            ]
        );
        $this->add_control( 'slider_socials',
            [
                'type' => Controls_Manager::REPEATER,
                'default' => [
                    [
                        'social_icon' => [
                            'value' => 'fab fa-facebook-f',
                            'library' => 'fa-brands'
                        ],
                        'social_url' => '#'
                    ],
                    [
                        'social_icon' => [
                            'value' => 'fab fa-twitter',
                            'library' => 'fa-brands'
                        ],
                        'social_url' => '#'
                    ],
                    [
                        'social_icon' => [
                            'value' => 'fab fa-youtube',
                            'library' => 'fa-brands'
                        ],
                        'social_url' => '#'
                    ],
                    [
                        'social_icon' => [
                            'value' => 'fab fa-instagram',
                            'library' => 'fa-brands'
                        ],
                        'social_url' => '#'
                    ]
                ],
                'fields' => [
                    [
                        'name' => 'social_icon',
                        'label' => esc_html__( 'Icon', 'r-energy' ),
                        'type' => Controls_Manager::ICONS,
                        'default' => [
                            'value' => 'fab fa-facebook-f',
                            'library' => 'fa-brands'
                        ]
                    ],
                    [
                        'name' => 'social_url',
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

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'home_slider_contact_section',
            [
                'label' => esc_html__( 'Contact Details', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT
            ]
        );
        $this->add_control( 'phone_label',
            [
                'label' => esc_html__( 'Contact Label', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Phones',
                'label_block' => true,
            ]
        );
        $this->add_control( 'slider_contact',
            [
                'label' => esc_html__( 'Contact Details', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'pleaceholder' => esc_html__( 'Place contact details here', 'r-energy' ),
                'default' => '<a href="tel:+18009644725">+ 1 800 964 47 25 </a>
                <a href="tel:+18004726596">+1 800 472 65 96</a>',
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'home_slider_video_section',
            [
                'label' => esc_html__( 'Video Popup', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT
            ]
        );
        $this->add_control( 'video_img',
            [
                'label' => esc_html__( 'Video Image', 'r-energy' ),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => plugins_url( 'assets/front/img/video-bg.jpg', __DIR__ )],
            ]
        );
        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail',
                'default' => 'full',
                'condition' => [ 'video_img[url]!' => '' ],
            ]
        );
        $this->add_control( 'video_url',
            [
                'label' => esc_html__( 'Video URL', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'pleaceholder' => esc_html__( 'Place video URL here', 'r-energy' ),
                'default' => 'https://www.youtube.com/watch?v=_sI_Ps7JSEk',
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
        /***** TITLE ******/
        $this->start_controls_section('r_energy_slidertwo_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_slidertwo_tabs');
        $this->start_controls_tab( 'r_energy_title_slidertwo_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_slidertwo',$selector='.title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_slidertwo_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_slidertwo_hover',$selector='.title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/

        /***** DESCRIPTION ******/
        $this->start_controls_section('r_energy_slidertwo_desc_styling',
            [
                'label' => esc_html__( 'Description', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_desc_slidertwo_tabs');
        $this->start_controls_tab( 'r_energy_desc_slidertwo_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_slidertwo',$selector='.subtitle');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_desc_slidertwo_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_slidertwo_hover',$selector='.subtitle:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END DESCRIPTION ******/
        /***** Button ******/
        $this->start_controls_section('r_energy_slidertwo_button_styling',
            [
                'label' => esc_html__( 'Button', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_button_slidertwo_tabs');
        $this->start_controls_tab( 'r_energy_button_slidertwo_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_slidertwo',$selector='.align-item a');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_button_slidertwo_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_slidertwo_hover',$selector='.align-item a:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Button ******/
        /***** PHONE ******/
        $this->start_controls_section('r_energy_slidertwo_phone_styling',
            [
                'label' => esc_html__( 'Phone', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_phone_slidertwo_tabs');
        $this->start_controls_tab( 'r_energy_phone_slidertwo_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='phone_slidertwo',$selector='.phones-block a');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_phone_slidertwo_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='phone_slidertwo_hover',$selector='.phones-block a:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END PHONE ******/

        /***** SOCIAL ICON ******/
        $this->start_controls_section('r_energy_slidertwo_social_styling',
            [
                'label' => esc_html__( 'Social icon', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_social_slidertwo_tabs');
        $this->start_controls_tab( 'r_energy_social_slidertwo_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='social_slidertwo',$selector='.socials-primary li a');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_social_slidertwo_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='social_slidertwo_hover',$selector='.socials-primary li a:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END  SOCIAL ICON ******/
    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<div class="promo--style-2">';
            echo '<div class="promo-slider promo--style-2-slider">';
            foreach ( $settings['slider_items'] as $item ) {
                $target = $item['slider_btn_link']['is_external'] ? ' target="_blank"' : '';
                $nofollow = $item['slider_btn_link']['nofollow'] ? ' rel="nofollow"' : '';
                $imagealt = esc_attr(get_post_meta($item['slider_image']['id'], '_wp_attachment_image_alt', true));
                $imagealt = $imagealt ? $imagealt : basename(get_attached_file($item['slider_image']['id']));
                $slider_mob_image = $item['slider_mob_image']['url'] ? $item['slider_mob_image']['url'] : $item['slider_image']['url'];
                if ('style1' == $item['slider_item_type']) {
                    echo '<div class="slider-item item--style-2">';
                        echo '<div class="overlay"></div>';
                        echo '<div class="bg-holder jarallax">';
                            echo '<picture>';
                                echo '<source srcset="'.$item['slider_image']['url'].'" media="(min-width: 992px)"/>';
                                echo '<img class="jarallax-img" src="'.$slider_mob_image.'" alt="'.$imagealt.'"/>';
                            echo '</picture>';
                        echo '</div>';
                        echo '<div class="container">';
                            echo '<div class="row">';
                                echo '<div class="col-xl-10 offset-xl-1">';
                                    echo '<div class="align-container">';
                                        echo '<div class="align-item">';
                                            if($item['slider_title']){
                                                echo '<h2 class="title">'.$item['slider_title'].'</h2>';
                                            }
                                            if($item['slider_desc']){
                                                echo '<p class="subtitle">'.$item['slider_desc'].'</p>';
                                            }
                                            if($item['slider_btn_title']){
                                                echo '<a class="r-button r-button--filled" href="'.$item['slider_btn_link']['url'].'" data-hover="'.$item['slider_btn_title'].'"'.$target.$nofollow.'><span>'.$item['slider_btn_title'].'</span></a>';
                                            }
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                } elseif ('style2' == $item['slider_item_type']) {
                    echo '<div class="slider-item item--style-1">';
                        echo '<div class="overlay"></div>';
                        echo '<div class="bg-holder jarallax">';
                            echo '<picture>';
                                echo '<source srcset="'.$item['slider_image']['url'].'" media="(min-width: 992px)"/>';
                                echo '<img class="jarallax-img" src="'.$slider_mob_image.'" alt="'.$imagealt.'"/>';
                            echo '</picture>';
                        echo '</div>';
                        echo '<div class="container">';
                            echo '<div class="row">';
                                echo '<div class="col-xl-6 col-lg-7 col-md-9">';
                                    echo '<div class="align-container">';
                                        echo '<div class="align-item">';
                                            if($item['slider_title']){
                                                echo '<h2 class="title">'.$item['slider_title'].'</h2>';
                                            }
                                            if($item['slider_desc']){
                                                echo '<p class="subtitle">'.$item['slider_desc'].'</p>';
                                            }
                                            if($item['slider_btn_title']){
                                                echo '<a class="r-button r-button--filled" href="'.$item['slider_btn_link']['url'].'" data-hover="'.$item['slider_btn_title'].'"'.$target.$nofollow.'><span>'.$item['slider_btn_title'].'</span></a>';
                                            }
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                } else {
                    echo '<div class="slider-item item--style-3">';
                        echo '<div class="overlay"></div>';
                        echo '<div class="bg-holder jarallax">';
                            echo '<picture>';
                                echo '<source srcset="'.$item['slider_image']['url'].'" media="(min-width: 992px)"/>';
                                echo '<img class="jarallax-img" src="'.$slider_mob_image.'" alt="'.$imagealt.'"/>';
                            echo '</picture>';
                        echo '</div>';
                        echo '<div class="container">';
                            echo '<div class="row">';
                                echo '<div class="col-12">';
                                    echo '<div class="align-container">';
                                        echo '<div class="align-item">';
                                            if($item['slider_title']){
                                                echo '<h2 class="title">'.$item['slider_title'].'</h2>';
                                            }
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                }
            }
            echo '</div>';
            echo '<div class="slider-nav">';
                if($settings['slider_contact']){
                    echo '<div class="phones-block">';
                        if($settings['phone_label']){
                            echo '<span class="title">'.$settings['phone_label'].'</span>';
                        }
                        echo $settings['slider_contact'];
                    echo '</div>';
                }
                if ($settings['slider_socials']) {
                    echo '<div class="socials-block">';
                        if($settings['social_label']){
                            echo '<span class="title">'.$settings['social_label'].'</span>';
                        }
                        echo '<nav class="socials-holder">';
                            echo '<ul class="socials-primary">';
                            foreach ( $settings['slider_socials'] as $soc ) {
                                $starget = $soc['social_url']['is_external'] ? ' target="_blank"' : '';
                                $snofollow = $soc['social_url']['nofollow'] ? ' rel="nofollow"' : '';
                                if ( ! empty($soc['social_icon']['value']) ) {
                                    echo '<li><a href="'.$soc['social_url']['url'].'"'.$starget.$snofollow.'>';
                                        Icons_Manager::render_icon( $soc['social_icon'], [ 'aria-hidden' => 'true' ] );
                                    echo '</a></li>';
                                }
                            }
                            echo '</ul>';
                        echo '</nav>';
                    echo '</div>';
                }
                echo '<div class="inner-holder">';
                    echo '<div class="promo-dots"></div><span class="paging-info"></span>';
                echo '</div>';
            echo '</div>';
            if ($settings['video_img']['url']) {
                $image = $this->get_settings( 'video_img' );
                $image_url = Group_Control_Image_Size::get_attachment_image_src( $image['id'], 'thumbnail', $settings );
                $imageurl = empty( $image_url ) ? $image['url'] : $image_url;
                $vimagealt = esc_attr(get_post_meta($settings['video_img']['id'], '_wp_attachment_image_alt', true));
                $vimagealt = $vimagealt ? $vimagealt : basename(get_attached_file($settings['video_img']['id']));
                echo '<div class="video-block">';
                    echo '<div class="img-holder">';
                        echo '<img class="img-bg" src="'.$imageurl.'" alt="'.$vimagealt.'"/>';
                        echo '<div class="overlay"></div>';
                        if ($settings['video_url']) {
                            echo '<a class="fancy-video" href="'.$settings['video_url'].'"><i class="fa fa-play" aria-hidden="true"></i></a>';
                        }
                    echo '</div>';
                echo '</div>';
            }
        echo '</div>';
    }
}
