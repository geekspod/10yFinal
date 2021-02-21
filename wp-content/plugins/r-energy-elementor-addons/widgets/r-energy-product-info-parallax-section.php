<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Product_Info_Parallax_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-product-info-parallax-section';
    }
    public function get_title() {
        return 'Product Info Parallax';
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
        $this->start_controls_section('r_energy_product_desc_text_settings',
            [
                'label' => esc_html__( 'Text && Parallax Image', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'img',
            [
                'label' => esc_html__( 'Parallax Image', 'r-energy' ),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => plugins_url( 'assets/front/img/promo-1.jpg', __DIR__ )],
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
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Exceptional Performance in Harsh Environments',
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
        $this->add_control( 'hidecolor',
            [
                'label' => esc_html__( 'Hide Bottom Color', 'nt-addons' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'nt-addons' ),
                'label_off' => esc_html__( 'No', 'nt-addons' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_control( 'r_column_color',
            [
                'label' => esc_html__( 'Bottom Color', 'r-energy' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => ['{{WRAPPER}} .product-info:not(.hideafter):after' => 'background-color:{{VALUE}};'],
                'condition' => ['hidecolor!' => 'yes']
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
        $hidecolor  = $settings['hidecolor'] == 'yes' ? ' hideafter' : '';

		echo '<div class="product-info'.$hidecolor.'">';
    		if ($imageurl) {
    			echo '<div class="bg-holder jarallax">';
    				echo '<div class="overlay"></div>';
    				echo '<picture class="jarallax-img">';
    					echo '<source srcset="'.$imageurl.'" media="(min-width: 992px)"/><img class="img-bg" src="'.$imageurl.'" alt="'.$imagealt.'"/>';
    				echo '</picture>';
    			echo '</div>';
    		}
    		if ($settings['title'] || $settings['desc']) {
    			echo '<div class="container">';
    			    echo '	<div class="row">';
    				    echo '<div class="col-xl-7 offset-xl-5 col-lg-8 offset-lg-4">';
    						echo '<div class="text-holder">';
    							if ($settings['title']) {
    							    echo '<h3 class="title">'.$settings['title'].'</h3>';
    							}
        						if ($settings['desc']) {
        						    echo $settings['desc'];
        						}
    						echo '</div>';
    					echo '</div>';
    				echo '</div>';
    			echo '</div>';
    		}
		echo '</div>';
    }
}
