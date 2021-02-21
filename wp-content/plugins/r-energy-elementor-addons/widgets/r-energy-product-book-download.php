<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Product_Book_Download_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-product-book-download';
    }
    public function get_title() {
        return 'Product Book Download';
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
                'label' => esc_html__( 'Text & Image & Button', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'img',
            [
                'label' => esc_html__( 'Image', 'r-energy' ),
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
                'default' => 'DUOMAX eBook',
                'label_block' => true,
            ]
        );
        $this->add_control( 'desc',
            [
                'label' => esc_html__( 'Description', 'r-energy' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '<p class="text">Streamer fish California halibut Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer</p>',
                'dynamic' => ['active' => true],
                'label_block' => true,
            ]
        );
        $this->add_control( 'btn_title',
            [
                'label'          => esc_html__( 'Button Title', 'r-energy' ),
                'type'           => Controls_Manager::TEXT,
                'default'        => 'Download eBook',
                'label_block'    => true,
            ]
        );
        $this->add_control( 'btn_link',
            [
                'label'         => esc_html__( 'Add Link', 'r-energy' ),
                'type'          => Controls_Manager::URL,
                'label_block'   => true,
                'default'       => [
                    'url'         => '#0',
                    'is_external' => ''
                ],
                'show_external' => true
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
        $target    = $settings['btn_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow  = $settings['btn_link']['nofollow'] ? ' rel="nofollow"' : '';
		echo '<div class="book-download">';
			echo '<figure class="book-item">';
			    if ($imageurl) {
				    echo '<div class="img-holder"><img class="img-bg" src="'.$imageurl.'" alt="'.$imagealt.'"/></div>';
			    }
			    echo '<figcaption>';
			        if ($settings['title']) {
					    echo '<h4 class="title"><a href="#">'.$settings['title'].'</a></h4>';
			        }
						if ($settings['desc']) {
                            echo '<div class="text-holder">';
                                echo $settings['desc'];
                            echo '</div>';
						}
                        if ( $settings['btn_title'] ) {
                            echo '<a class="with--line" href="'.$settings['btn_link']['url'].'"'.$target.$nofollow.'><span>'.$settings['btn_title'].'</span></a>';
                        }
				echo '</figcaption>';
			echo '</figure>';
		echo '</div>';
    }
}
