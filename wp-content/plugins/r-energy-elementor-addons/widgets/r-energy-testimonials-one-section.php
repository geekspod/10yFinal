<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Testimonials_One_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-testimonials-one-section';
    }
    public function get_title() {
        return 'Testimonials';
    }
    public function get_icon() {
        return 'eicon-testimonial';
    }
    public function get_categories() {
        return [ 'r-energy' ];
    }
    // Registering Controls
    protected function _register_controls() {
        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_testimonials_one_text_settings',
            [
                'label' => esc_html__('General', 'r-energy'),
            ]
        );
        $this->add_control( 'type',
            [
                'label' => esc_html__( 'Type', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => '4',
                'options' => [
                    '1' => esc_html__( 'Left Image', 'r-energy' ),
                    '2' => esc_html__( 'Right Image', 'r-energy' ),
                    '3' => esc_html__( 'Primary 2', 'r-energy' ),
                    '4' => esc_html__( 'Primary', 'r-energy' )
                ]
            ]
        );
        $this->add_control( 'testi_image',
            [
                'label' => esc_html__( 'Testimonials Image', 'r-energy' ),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => Utils::get_placeholder_image_src()],
                'conditions' => [
                    'relation' => 'or',
                    'terms' => [
                        [
                            'name' => 'type',
                            'operator' => '==',
                            'value' => '1'
                        ],
                        [
                            'name' => 'type',
                            'operator' => '==',
                            'value' => '2'
                        ]
                    ]
                ]
            ]
        );
        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail',
                'default' => 'full',
                'condition' => [ 'testi_image[url]!' => '' ],
            ]
        );
        $this->add_control( 'subtitle',
            [
                'label' => esc_html__( 'Section Subtitle', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__( 'Testimonials' , 'r-energy' ),
                'label_block' => true,
            ]
        );
        // Title
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Section Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '<span>People</span> <span>Says</span>',
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_testimonials_one_items_settings',
            [
                'label' => esc_html__('Testimonials Items', 'r-energy'),
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control( 'testi_name',
            [
                'label' => esc_html__( 'Name', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Sam Peters',
                'label_block' => true,
            ]
        );
        $repeater->add_control( 'testi_pos',
            [
                'label' => esc_html__( 'Position', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'CEO Solar Systems LLC',
                'label_block' => true,
            ]
        );
        $repeater->add_control( 'testi_text',
            [
                'label' => esc_html__( 'Quote', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '',
                'label_block' => true,
            ]
        );
        $this->add_control( 'testi_items',
            [
                'label' => esc_html__( 'Items', 'nt-addons' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{testi_name}}',
                'default' => [
                    [
                        'testi_name'  => 'Sam Peters',
                        'testi_pos'  => 'CEO Solar Systems LLC',
                        'testi_text'  => 'Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury swordfish”',
                    ],
                    [
                        'testi_name'  => 'Sam Peters',
                        'testi_pos'  => 'CEO Solar Systems LLC',
                        'testi_text'  => '<p>Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury swordfish</p><p>Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury swordfish</p>',
                    ],
                    [
                        'testi_name'  => 'Sam Peters',
                        'testi_pos'  => 'CEO Solar Systems LLC',
                        'testi_text'  => 'Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury swordfish',
                    ],
                ]
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/

        /***** SUBTITLE ******/
        $this->start_controls_section('r_energy_testi_subtitle_styling',
            [
                'label' => esc_html__( 'Subtitle', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_subtitle_testi_tabs');
        $this->start_controls_tab( 'r_energy_subtitle_testi_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='subtitle_testi',$selector='.testimonials .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_subtitle_testi_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='subtitle_testi_hover',$selector='.testimonials .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END SUBTITLE ******/

        /***** TITLE ******/
        $this->start_controls_section('r_energy_testi_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_testi_tabs');
        $this->start_controls_tab( 'r_energy_title_testi_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='title_testi',$selector='.testimonials .subtitle span');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_testi_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='title_testi_hover',$selector='.testimonials .subtitle span:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/
        /***** DESC ******/
        $this->start_controls_section('r_energy_testi_desc_styling',
            [
                'label' => esc_html__( 'Description', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_desc_testi_tabs');
        $this->start_controls_tab( 'r_energy_desc_testi_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='desc_testi',$selector='.testimonials .slider-item p');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_desc_testi_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='desc_testi_hover',$selector='.testimonials .slider-item p:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END DESC ******/
    }

    protected function render() {
        $settings  = $this->get_settings_for_display();
        $image     = $this->get_settings( 'testi_image' );
        $image_url = Group_Control_Image_Size::get_attachment_image_src( $image['id'], 'thumbnail', $settings );
        $imageurl  = empty( $image_url ) ? $image['url'] : $image_url;
        $imagealt  = esc_attr(get_post_meta($settings['testi_image']['id'], '_wp_attachment_image_alt', true));
        $imagealt  = $imagealt ? $imagealt : basename ( get_attached_file( $settings['testi_image']['id'] ) );
        if ( $settings['type'] == '1' ) {
            echo '<div class="testimonials testimonials--img-left">';
                echo '<div class="container">';
                    echo '<div class="row">';
                        echo '<div class="col-12">';
                            echo '<div class="wrapper">';
                                if ( $settings['testi_image']['url'] ) {
                                    echo '<div class="img-holder">';
                                        echo '<div class="overlay"></div>';
                                        echo '<div class="quote-icon"><span>“ </span></div>';
                                        echo '<img class="img-bg" src="'.$imageurl.'" alt="'.$imagealt.'"/>';
                                    echo '</div>';
                                }
                                echo '<div class="text-block">';
                                    echo '<div class="row align-items-end">';
                                        echo '<div class="col-md-7">';
                                            echo '<div class="heading primary-heading">';
                                                if ( $settings['subtitle'] ) {
                                                    echo '<h3 class="title">'.$settings['subtitle'].'</h3>';
                                                }
                                                if ( $settings['title'] ) {
                                                    echo '<h5 class="subtitle">'.$settings['title'].'</h5>';
                                                }
                                            echo '</div>';
                                        echo '</div>';
                                        echo '<div class="col-md-5">';
                                            echo '<div class="testimonials-dots"></div>';
                                        echo '</div>';
                                    echo '</div>';
                                    echo '<div class="content">';
                                        echo '<div class="testimonials-slider testimonials-img-left-slider">';
                                        foreach ($settings['testi_items'] as $item) {
                                            echo '<div class="slider-item">';
                                                if ( $item['testi_text'] ) {
                                                    echo wpautop($item['testi_text']);
                                                }
                                                if ( $item['testi_name'] || $item['testi_pos'] ) {
                                                    echo '<span class="user">';
                                                        if ( $item['testi_name'] ) {
                                                            echo '<span class="name">'.$item['testi_name'].'</span>, ';
                                                        }
                                                        if ( $item['testi_pos'] ) {
                                                            echo '<span class="position">'.$item['testi_pos'].'</span>';
                                                        }
                                                    echo '</span>';
                                                }
                                            echo '</div>';
                                        }
                                        echo '</div>';
                                    echo '</div>';

                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        } elseif ($settings['type'] == '2') {
            echo '<div class="testimonials testimonials--img-right">';
                echo '<div class="container">';
                    echo '<div class="row">';
                        echo '<div class="col-12">';
                            echo '<div class="wrapper">';
                                echo '<div class="text-block">';
                                    echo '<div class="heading primary-heading">';
                                        echo '<div class="row align-items-end">';
                                            echo '<div class="col-md-8">';
                                                if ( $settings['subtitle'] ) {
                                                    echo '<h3 class="title">'.$settings['subtitle'].'</h3>';
                                                }
                                                if ( $settings['title'] ) {
                                                    echo '<h5 class="subtitle">'.$settings['title'].'</h5>';
                                                }
                                            echo '</div>';
                                            echo '<div class="col-md-4">';
                                                echo '<div class="testimonials-dots"></div>';
                                            echo '</div>';
                                        echo '</div>';
                                    echo '</div>';
                                    echo '<div class="content">';
                                        echo '<div class="testimonials-slider testimonials-img-right-slider">';
                                        foreach ($settings['testi_items'] as $item) {
                                            echo '<div class="slider-item">';
                                                if ( $item['testi_text'] ) {
                                                    echo wpautop($item['testi_text']);
                                                }
                                                if ( $item['testi_name'] || $item['testi_pos'] ) {
                                                    echo '<span class="user">';
                                                        if ( $item['testi_name'] ) {
                                                            echo '<span class="name">'.$item['testi_name'].'</span>, ';
                                                        }
                                                        if ( $item['testi_pos'] ) {
                                                            echo '<span class="position">'.$item['testi_pos'].'</span>';
                                                        }
                                                    echo '</span>';
                                                }
                                            echo '</div>';
                                        }
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                                if ( $settings['testi_image']['url'] ) {
                                    echo '<div class="img-holder">';
                                        echo '<div class="overlay"></div>';
                                        echo '<div class="quote-icon"><span>“ </span></div>';
                                        echo '<img class="img-bg" src="'.$imageurl.'" alt="'.$imagealt.'"/>';
                                    echo '</div>';
                                }
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        } elseif ($settings['type'] == '3') {
            echo '<div class="testimonials testimonials--primary testimonials--style-3">';
                echo '<div class="slider-holder">';
                    echo '<div class="wrapper">';
                        echo '<div class="container">';
                            echo '<div class="row align-items-end">';
                                echo '<div class="col-xl-9 col-md-8">';
                                    echo '<div class="testimonials-top">';
                                        echo '<div class="quote-icon"><span>“ </span></div>';
                                        echo '<div class="heading primary-heading">';
                                            if ( $settings['subtitle'] ) {
                                                echo '<h3 class="title">'.$settings['subtitle'].'</h3>';
                                            }
                                            if ( $settings['title'] ) {
                                                echo '<h5 class="subtitle">'.$settings['title'].'</h5>';
                                            }
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="col-xl-2 col-md-4">';
                                    echo '<div class="testimonials-dots"></div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        echo '<div class="container">';
                            echo '<div class="row">';
                                echo '<div class="col-xl-10 offset-xl-1">';
                                    echo '<div class="testimonials-slider testimonials-primary-slider">';
                                        foreach ($settings['testi_items'] as $item) {
                                            echo '<div class="slider-item">';
                                                if ( $item['testi_text'] ) {
                                                    echo wpautop($item['testi_text']);
                                                }
                                                if ( $item['testi_name'] || $item['testi_pos'] ) {
                                                    echo '<span class="user">';
                                                        if ( $item['testi_name'] ) {
                                                            echo '<span class="name">'.$item['testi_name'].'</span>, ';
                                                        }
                                                        if ( $item['testi_pos'] ) {
                                                            echo '<span class="position">'.$item['testi_pos'].'</span>';
                                                        }
                                                    echo '</span>';
                                                }
                                            echo '</div>';
                                        }
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        } else {
            echo '<div class="testimonials testimonials--primary">';
                echo '<div class="slider-holder">';
                    echo '<div class="wrapper">';
                        echo '<div class="container">';
                            echo '<div class="row align-items-end">';
                                echo '<div class="col-xl-9 col-md-8">';
                                    echo '<div class="testimonials-top">';
                                        echo '<div class="quote-icon"><span>“ </span></div>';
                                        echo '<div class="heading primary-heading">';
                                            if ( $settings['subtitle'] ) {
                                                echo '<h3 class="title">'.$settings['subtitle'].'</h3>';
                                            }
                                            if ( $settings['title'] ) {
                                                echo '<h5 class="subtitle">'.$settings['title'].'</h5>';
                                            }
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="col-xl-2 col-md-4">';
                                    echo '<div class="testimonials-dots"></div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        echo '<div class="container">';
                            echo '<div class="row">';
                                echo '<div class="col-xl-10 offset-xl-1">';
                                    echo '<div class="testimonials-slider testimonials-primary-slider">';
                                    foreach ($settings['testi_items'] as $item) {
                                        echo '<div class="slider-item">';
                                            if ( $item['testi_text'] ) {
                                                echo wpautop($item['testi_text']);
                                            }
                                            if ( $item['testi_name'] || $item['testi_pos'] ) {
                                                echo '<span class="user">';
                                                    if ( $item['testi_name'] ) {
                                                        echo '<span class="name">'.$item['testi_name'].'</span>, ';
                                                    }
                                                    if ( $item['testi_pos'] ) {
                                                        echo '<span class="position">'.$item['testi_pos'].'</span>';
                                                    }
                                                echo '</span>';
                                            }
                                        echo '</div>';
                                    }
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }
    }
}
