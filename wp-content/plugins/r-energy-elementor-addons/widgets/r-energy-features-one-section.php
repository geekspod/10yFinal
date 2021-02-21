<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Features_One_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-features-one-section';
    }
    public function get_title() {
        return 'Features Zigzag';
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
        $this->start_controls_section( 'r_energy_features_one_items_settings',
            [
                'label' => esc_html__('Features Items', 'r-energy')
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control( 'item_image',
            [
                'label' => esc_html__( 'Image', 'r-energy' ),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => Utils::get_placeholder_image_src()]
            ]
        );
        $repeater->add_control( 'item_number',
            [
                'label' => esc_html__( 'Number', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => '01',
                'label_block' => true
            ]
        );
        $repeater->add_control( 'item_title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Item Title',
                'label_block' => true
            ]
        );
        $repeater->add_control( 'item_desc',
            [
                'label' => esc_html__( 'Short Description', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Temperate bass trout filefish medaka trout-perch herring; devil ray sleeper dusky grouper sand diver. Garibaldi',
                'label_block' => true
            ]
        );
        $repeater->add_control( 'link_title',
            [
                'label' => esc_html__( 'Link Title', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Learn more about how we work',
                'label_block' => true
            ]
        );
        $repeater->add_control( 'item_link',
            [
                'label' => esc_html__( 'Item Link', 'r-energy' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => ''
                ],
                'show_external' => true
            ]
        );
        $this->add_control( 'features',
            [
                'label' => esc_html__( 'Items', 'nt-addons' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{item_title}}',
                'default' => [
                    [
                        'item_number' => '01',
                        'item_title' => 'Problem solvers',
                        'item_desc' => 'Streamer fish California halibut Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder!',
                        'item_link' => '#',
                        'link_title' => 'Learn more about how we work'
                    ],
                    [
                        'item_number' => '02',
                        'item_title' => 'Critical thinkers',
                        'item_desc' => 'Streamer fish California halibut Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin: herring, Moses sole sea snail grouper discus.',
                        'item_link' => '#',
                        'link_title' => 'Learn more about how we work'
                    ]
                ]
            ]
        );
        $this->end_controls_section();
        /***** TITLE ******/
        $this->start_controls_section('r_energy_zigzag_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_zigzag_tabs');
        $this->start_controls_tab( 'r_energy_title_zigzag_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_zigzag',$selector='.primary-heading .subtitle span');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_zigzag_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_zigzag_hover',$selector='.primary-heading .subtitle span:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/
        /***** DESC ******/
        $this->start_controls_section('r_energy_zigzag_desc_styling',
            [
                'label' => esc_html__( 'Description', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_desc_zigzag_tabs');
        $this->start_controls_tab( 'r_energy_desc_zigzag_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_zigzag',$selector='.description p');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_desc_zigzag_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_zigzag_hover',$selector='.description p:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END DESC ******/

        /***** Button ******/
        $this->start_controls_section('r_energy_zigzag_button_styling',
            [
                'label' => esc_html__( 'Button', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_button_zigzag_tabs');
        $this->start_controls_tab( 'r_energy_button_zigzag_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_zigzag',$selector='.description .with--line span');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_button_zigzag_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_zigzag_hover',$selector='.description .with--line span:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Button ******/
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<div class="features">';
            echo '<div class="container">';
                foreach ($settings['features'] as $item) {
                    $target    = $item['item_link']['is_external'] ? ' target="_blank"' : '';
                    $nofollow  = $item['item_link']['nofollow'] ? ' rel="nofollow"' : '';
                    $imagealt  = esc_attr(get_post_meta($item['item_image']['id'], '_wp_attachment_image_alt', true));
                    $imagealt  = $imagealt ? $imagealt : basename ( get_attached_file( $item['item_image']['id'] ) );
                    echo '<div class="row no-gutters features-item">';
                        echo '<div class="col-lg-6 column">';
                            echo '<div class="img-holder"><img class="img-bg" src="'.$item['item_image']['url'].'" alt="'.$imagealt.'"/></div>';
                        echo '</div>';
                        echo '<div class="col-lg-6 column">';
                            echo '<div class="text-holder">';
                                if ( $item['item_number'] ) {
                                    echo '<span class="count">'.$item['item_number'].'</span>';
                                }
                                if ( $item['item_title'] ) {
                                    echo '<h3 class="title">'.$item['item_title'].'</h3>';
                                }
                                if ( $item['item_desc'] ) {
                                    echo '<p>'.$item['item_desc'].'</p>';
                                }
                                if ( $item['link_title'] ) {
                                    echo '<a class="with--line" href="'.$item['item_link']['url'].'"'.$target .$nofollow.'><span>'.$item['link_title'].'</span></a>';
                                }
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                }
            echo '</div>';
        echo '</div>';
    }
}
