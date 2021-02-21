<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Product_Description_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-product-description-section';
    }
    public function get_title() {
        return 'Product Description';
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
        $this->start_controls_section( 'r_energy_product_desc_general_settings',
            [
                'label' => esc_html__( 'Image', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT
            ]
        );
        $this->add_control( 'type',
            [
                'label' => esc_html__( 'Type', 'nt-addons' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '1' => esc_html__( 'Type 1', 'r-energy' ),
                    '2' => esc_html__( 'Type 2', 'r-energy' ),
                ],
                'default' => '1'
            ]
        );
        $this->add_control( 'hidecolor',
            [
                'label' => esc_html__( 'Hide Right Color Column', 'nt-addons' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'nt-addons' ),
                'label_off' => esc_html__( 'No', 'nt-addons' ),
                'return_value' => 'yes',
                'default' => 'no',
                'condition' => ['type' => '1']
            ]
        );
        $this->add_control( 'r_column_color',
            [
                'label' => esc_html__( 'Right Color Column', 'r-energy' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => ['{{WRAPPER}} .description-item:after' => 'background-color:{{VALUE}};'],
                'condition' => ['hidecolor!' => 'yes']
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_product_desc_image_settings',
            [
                'label' => esc_html__( 'Image', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT
            ]
        );
        $this->add_control( 'img',
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
                'condition' => [ 'img[url]!' => '' ],
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section('r_energy_product_desc_text_settings',
            [
                'label' => esc_html__( 'Text', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Design',
                'label_block' => true,
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '<span>Stronger Design for</span> <span>Enchanced Reliability</span>',
                'label_block' => true,
            ]
        );
        $this->add_control( 'desc',
            [
                'label' => esc_html__( 'Description', 'r-energy' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '<p class="text">Streamer fish California halibut Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin: herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury swordfish southern sandfish</p>',
                'dynamic' => ['active' => true],
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
    }

    protected function render() {
        $settings  = $this->get_settings_for_display();
        $elementid = $this->get_id();
        $image     = $this->get_settings( 'img' );
        $image_url = Group_Control_Image_Size::get_attachment_image_src( $image['id'], 'thumbnail', $settings );
        $imageurl  = empty( $image_url ) ? $image['url'] : $image_url;
        $imagealt  = esc_attr(get_post_meta($settings['bg_img']['id'], '_wp_attachment_image_alt', true));
        $imagealt  = $imagealt ? $imagealt : basename(get_attached_file($settings['bg_img']['id']));
        $hidecolor  = $settings['hidecolor'] == 'yes' ? ' hidecolor' : '';
        if ($settings['type'] == '1') {
            echo '<div class="description-item'.$hidecolor.'">';
            	echo '<div class="container">';
            		echo '<div class="row align-items-center">';
                		if ($imageurl) {
                			echo '<div class="col-lg-5 col-md-5">';
                				echo '<div class="description-item__img"><img src="'.$imageurl.'" alt="'.$imagealt.'"></div>';
                			echo '</div>';
                		}
            			echo '<div class="col-lg-6 offset-xl-1 col-md-7">';
            				echo '<div class="align-container">';
            					echo '<div class="align-item">';
                					if ($settings['subtitle'] || $settings['title']) {
                						echo '<div class="heading primary-heading">';
                						    if ($settings['subtitle']) {
                							    echo '<h3 class="title">'.$settings['subtitle'].'</h3>';
                						    }
                							if ($settings['title']) {
                							    echo '<h5 class="subtitle">'.$settings['title'].'</h5>';
                							}
                						echo '</div>';
                					}
            						if ($settings['desc']) {
            						    echo $settings['desc'];
            						}
            					echo '</div>';
            				echo '</div>';
            			echo '</div>';
            		echo '</div>';
            	echo '</div>';
            echo '</div>';
        } else {
            echo '<div class="description-item hidecolor">';
            	echo '<div class="container">';
            		echo '<div class="row align-items-center flex-column-reverse flex-md-row">';
            			echo '<div class="col-lg-6 col-md-7">';
            				echo '<div class="align-container">';
            					echo '<div class="align-item">';
                					if ($settings['subtitle'] || $settings['title']) {
                						echo '<div class="heading primary-heading">';
                						    if ($settings['subtitle']) {
                							    echo '<h3 class="title">'.$settings['subtitle'].'</h3>';
                						    }
                							if ($settings['title']) {
                							    echo '<h5 class="subtitle">'.$settings['title'].'</h5>';
                							}
                						echo '</div>';
                					}
            						if ($settings['desc']) {
            						    echo $settings['desc'];
            						}
            					echo '</div>';
            				echo '</div>';
            			echo '</div>';
                		if ($imageurl) {
                			echo '<div class="col-lg-5 offset-xl-1 col-md-5">';
                				echo '<div class="description-item__img"><img src="'.$imageurl.'" alt="'.$imagealt.'"></div>';
                			echo '</div>';
                		}
            		echo '</div>';
            	echo '</div>';
            echo '</div>';
        }
    }
}
