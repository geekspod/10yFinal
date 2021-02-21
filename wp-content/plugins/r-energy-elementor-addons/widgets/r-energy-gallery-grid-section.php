<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Gallery_Grid_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-gallery-grid-section';
    }
    public function get_title() {
        return 'Gallery Grid ';
    }
    public function get_icon() {
        return 'eicon-gallery-grid';
    }
    public function get_categories() {
        return [ 'r-energy' ];
    }
    // Registering Controls
    protected function _register_controls() {
        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_gallery_column_settings',
            [
                'label' => esc_html__( 'General', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'show_filters',
            [
                'label' => esc_html__( 'Show Filters', 'r-energy' ),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'no',
                'return_value' => 'yes',
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_gallery_filters_settings',
            [
                'label' => esc_html__( 'Filters', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                'condition' => ['show_filters' => 'yes']
            ]
        );
        $this->add_control( 'all_text',
            [
                'label' => esc_html__( 'All Text', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__( 'All' , 'r-energy' ),
                'label_block' => true,
            ]
        );
        $filters = new Repeater();
        $filters->add_control( 'item_filter',
            [
                'label' => esc_html__( 'Category', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__( 'Sun Energy' , 'r-energy' ),
                'label_block' => true,
            ]
        );
        $this->add_control( 'gallery_filters',
            [
                'label' => esc_html__( 'Items', 'nt-addons' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => $filters->get_controls(),
                'title_field' => '{{item_filter}}',
                'default' => [
                    ['item_filter' =>'Sun Energy'],
                    ['item_filter' =>'Water Energy'],
                    ['item_filter' =>'Wind Energy'],
                    ['item_filter' =>'Bio Energy']
                ]
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_gallery_image_settings',
            [
                'label' => esc_html__('Gallery Items', 'r-energy'),
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control( 'item_cat',
            [
                'label' => esc_html__( 'Category Name', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'description' => 'Type category name'
            ]
        );
        $repeater->add_control( 'item_title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Item Title',
                'label_block' => true,
            ]
        );
        $def_image = plugins_url( 'assets/front/img/gallery-1.jpg', __DIR__ );
        $repeater->add_control( 'item_image',
            [
                'label' => esc_html__( 'Image', 'r-energy' ),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => $def_image],
            ]
        );
        $repeater->add_control( 'item_mob_image',
            [
                'label' => esc_html__( 'Responsive Mobile Image', 'r-energy' ),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => $def_image],
            ]
        );
        $repeater->add_control( 'item_width',
            [
                'label' => esc_html__( 'Item Width', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'label_block' => 'true',
                'default' => '',
                'options' => [
                    '' => esc_html__( 'Default Width', 'r-energy' ),
                    'large' => esc_html__( '2X', 'r-energy' ),
                ]
            ]
        );
        $repeater->add_control( 'col_xl',
            [
                'label' => esc_html__( 'Column', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'label_block' => 'true',
                'default' => '3',
                'options' => [
                    '3' => esc_html__( 'Default 4 Column', 'r-energy' ),
                    '4' => esc_html__( '3 Column', 'r-energy' ),
                    '6' => esc_html__( '2 Column', 'r-energy' )
                ]
            ]
        );
        $repeater->add_control( 'col_sm',
            [
                'label' => esc_html__( 'Column Tablet', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'label_block' => 'true',
                'default' => '6',
                'options' => [
                    '6' => esc_html__( 'Default 2 Column', 'r-energy' ),
                    '4' => esc_html__( '3 Column', 'r-energy' ),
                    '12' => esc_html__( '1 Column', 'r-energy' )
                ]
            ]
        );
        $this->add_control( 'gallery',
            [
                'label' => esc_html__( 'Items', 'nt-addons' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{item_title}}',
                'default' => [
                    [
                        'col_xl' => '3',
                        'col_sm' => '6',
                        'item_width' => '',
                        'item_title' => 'Solar Factory in NY',
                        'item_cat' => 'Sun Energy',
                        'item_image' => ['url' => $def_image],
                    ],
                    [
                        'col_xl' => '6',
                        'col_sm' => '6',
                        'item_width' => 'large',
                        'item_title' => 'Solar Field in Los Angeles',
                        'item_cat' => 'Sun Energy',
                        'item_image' => ['url' => $def_image],
                    ],
                    [
                        'col_xl' => '3',
                        'col_sm' => '6',
                        'item_width' => 'large',
                        'item_title' => 'Energy Station',
                        'item_cat' => 'Bio Energy',
                        'item_image' => ['url' => $def_image],
                    ],
                    [
                        'col_xl' => '3',
                        'col_sm' => '6',
                        'item_width' => '',
                        'item_title' => 'Windmill Station',
                        'item_cat' => 'Wind Energy',
                        'item_image' => ['url' => $def_image],
                    ],
                    [
                        'col_xl' => '3',
                        'col_sm' => '6',
                        'item_width' => '',
                        'item_title' => 'Electricity Station',
                        'item_cat' => 'Water Energy',
                        'item_image' => ['url' => $def_image],
                    ],
                    [
                        'col_xl' => '3',
                        'col_sm' => '6',
                        'item_width' => '',
                        'item_title' => 'Renewable Energy Station',
                        'item_cat' => 'Bio Energy',
                        'item_image' => ['url' => $def_image],
                    ],
                    [
                        'col_xl' => '6',
                        'col_sm' => '12',
                        'item_width' => '',
                        'item_title' => 'Renewable Energy Station',
                        'item_cat' => 'Bio Energy',
                        'item_image' => ['url' => $def_image],
                    ],
                ]
            ]
        );
        $this->end_controls_section();
        /***** TITLE ******/
        $this->start_controls_section('r_energy_gallery_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_gallery_tabs');
        $this->start_controls_tab( 'r_energy_title_gallery_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_gallery',$selector='.main-gallery .description span');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_gallery_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_gallery_hover',$selector='.main-gallery .description span:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/
    }

    protected function render() {

        $settings  = $this->get_settings_for_display();
        $elementid = $this->get_id();
        $mainattr = $settings['show_filters'] == 'yes' ? ' gallery-inner' : '';
        echo '<div class="main-gallery'.$mainattr.'">';
            if ( $settings['show_filters'] == 'yes' && $settings['gallery_filters'] ) {
                echo '<div class="gallery-filter">';
                    echo '<div class="container">';
                        echo '<div class="row">';
                            echo '<div class="col-12">';
                                echo '<div class="header-holder">';
                                    echo '<div class="filter-header">';
                                        echo '<span class="header__title active" data-filter="*">'.mb_strtoUpper($settings['all_text']).'</span>';
                                        foreach ($settings['gallery_filters'] as $items) {
                                            $filter_item = mb_strtolower(str_replace(' ', '-', esc_attr($items['item_filter'])));
                                            echo '<span class="header__title" data-filter=".'.$filter_item.'">'.mb_strtoUpper($items['item_filter']).'</span>';
                                        }
                                    echo '</div>';
                                    echo '<span class="tilemode"><svg class="icon"><use xlink:href="#tilemode"></use></svg></span>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
            }
            echo '<div class="gallery row no-gutters">';
                foreach ($settings['gallery'] as $item) {
                    $imagealt  = esc_attr(get_post_meta($item['item_image']['id'], '_wp_attachment_image_alt', true));
                    $imagealt  = $imagealt ? $imagealt : basename ( get_attached_file( $item['item_image']['id'] ) );
                    $width     = $item['item_width'] == 'large' ? ' large' : '';
                    $colxl     = $item['col_xl'] ? ' col-xl-'.$item['col_xl'] : ' col-xl-3';
                    $colsm     = $item['col_sm'] ? ' col-sm-'.$item['col_xl'] : ' col-sm-6';
                    $item_cat  = mb_strtolower(str_replace(' ', '-', esc_attr($item['item_cat'])));
                    if ( $item['item_image']['url'] ) {
                        $mob_img   = $item['item_mob_image']['url'] ? $item['item_mob_image']['url'] : $item['item_image']['url'];
                        echo '<div class="gallery-item '.$item_cat.$width.$colxl.$colsm.'">';
                            echo '<a class="gallery-link" href="'.$item['item_image']['url'].'" data-fancybox="main-gallery">';
                            echo '<div class="overlay"></div>';
                            echo '<picture>';
                                echo '<source srcset="'.$item['item_image']['url'].'" media="(min-width: 992px)"/>';
                                echo '<img class="img-bg" src="'.$mob_img.'" alt="'.$imagealt.'">';
                            echo '</picture></a>';
                            if ( $item['item_title'] ) {
                                echo '<div class="description"><span>'.$item['item_title'].'</span></div>';
                            }
                        echo '</div>';
                    }
                }
            echo '</div>';
            if ( $settings['show_filters'] == 'yes' && $settings['gallery_filters'] ) {
                echo '</div>';
            }
        echo '</div>';
        // Not in edit mode
        if ( \Elementor\Plugin::$instance->editor->is_edit_mode() ) {
            echo '<script>jQuery(document).ready(function ($) {var gallery = $(\'.gallery\'),title = $(\'.filter-header .header__title\');gallery.isotope({itemSelector: \'.gallery-item\',});var $grid = $(\'.gallery\').isotope({itemSelector: \'.gallery-item\',});title.on(\'click\', function() {var filterValue = $(this).attr(\'data-filter\');$grid.isotope({ filter: filterValue });});title.on(\'click\', function () {title.removeClass(\'active\');$(this).addClass(\'active\');});
            });</script>';
        }
    }
}
