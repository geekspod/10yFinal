<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Woo_Product_Gallery_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-woo-product-gallery-section';
    }
    public function get_title() {
        return 'Woo Slider';
    }
    public function get_icon() {
        return 'eicon-gallery-grid';
    }
    public function get_categories() {
        return [ 'r-energy-woo' ];
    }
    // Registering Controls
    protected function _register_controls() {
        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_woo_product_filter_settings',
            [
                'label' => esc_html__( 'Filters', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'all_text',
            [
                'label' => esc_html__( 'Filter All Text', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'All Products',
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'post_query_section',
            [
                'label' => esc_html__( 'Query', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT
            ]
        );
        $this->add_control( 'btn_title',
            [
                'label' => esc_html__( 'Post Button Title', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Discover',
                'label_block' => true,
            ]
        );
        // Author Filter Heading
        $this->add_control( 'author_filter_heading',
            [
                'label' => esc_html__( 'Author Filter', 'r-energy' ),
                'type' => Controls_Manager::HEADING
            ]
        );
        // Author Filter
        $this->add_control( 'author_filter',
            [
                'label' => esc_html__( 'Author', 'r-energy' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_get_users(),
                'description' => 'Select Author(s)'
            ]
        );
        // Author Exclude Filter
        $this->add_control( 'author_exclude_filter',
            [
                'label' => esc_html__( 'Exclude Author', 'r-energy' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_get_users(),
                'description' => 'Select Author(s) to Exclude',
                'separator' => 'after'
            ]
        );
        // Category Filter Heading
        $this->add_control( 'category_filter_heading',
            [
                'label' => esc_html__( 'Category Filter', 'r-energy' ),
                'type' => Controls_Manager::HEADING
            ]
        );
        // Category Filter
        $this->add_control( 'category_filter',
            [
                'label' => esc_html__( 'Category', 'r-energy' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_cpt_taxonomies('product_cat'),
                'description' => 'Select Category(s)'
            ]
        );
        // Exclude Category
        $this->add_control( 'category_exclude_filter',
            [
                'label' => esc_html__( 'Exclude Category', 'r-energy' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_cpt_taxonomies('product_cat'),
                'description' => 'Select Category(s) to Exclude',
                'separator' => 'after'
            ]
        );
        // Post Filter Heading
        $this->add_control( 'post_filter_heading',
            [
                'label' => esc_html__( 'Post Filter', 'r-energy' ),
                'type' => Controls_Manager::HEADING
            ]
        );
        // Specific Post
        $this->add_control( 'post_filter',
            [
                'label' => esc_html__( 'Specific Post(s)', 'r-energy' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_cpt_get_post_title('product'),
                'description' => 'Select Specific Post(s)'
            ]
        );
        // Exclude Post
        $this->add_control( 'post_exclude_filter',
            [
                'label' => esc_html__( 'Exclude Post', 'r-energy' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_cpt_get_post_title('product'),
                'description' => 'Select Post(s) to Exclude',
                'separator' => 'after'
            ]
        );
        // Other Filter Heading
        $this->add_control( 'post_other_heading',
            [
                'label' => esc_html__( 'Other Filter', 'r-energy' ),
                'type' => Controls_Manager::HEADING
            ]
        );
        // Posts Per Page
        $this->add_control( 'post_per_page',
            [
                'label' => esc_html__( 'Posts Per Page', 'r-energy' ),
                'type' => Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 1000,
                'default' => 20
            ]
        );
        // Offset
        $this->add_control( 'offset',
            [
                'label' => esc_html__( 'Offset', 'r-energy' ),
                'type' => Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 1000
            ]
        );
        // Order
        $this->add_control( 'order',
            [
                'label' => esc_html__( 'Select Order', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'ASC' => esc_html__( 'Ascending', 'r-energy' ),
                    'DESC' => esc_html__( 'Descending', 'r-energy' )
                ],
                'default' => 'ASC'
            ]
        );
        // Order By
        $this->add_control( 'orderby',
            [
                'label' => esc_html__( 'Order By', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'none' => esc_html__( 'None', 'r-energy' ),
                    'ID' => esc_html__( 'Post ID', 'r-energy' ),
                    'author' => esc_html__( 'Author', 'r-energy' ),
                    'title' => esc_html__( 'Title', 'r-energy' ),
                    'name' => esc_html__( 'Slug', 'r-energy' ),
                    'date' => esc_html__( 'Date', 'r-energy' ),
                    'modified' => esc_html__( 'Last Modified Date', 'r-energy' ),
                    'parent' => esc_html__( 'Post Parent ID', 'r-energy' ),
                    'rand' => esc_html__( 'Random', 'r-energy' ),
                    'comment_count' => esc_html__( 'Number of Comments', 'r-energy' )
                ],
                'default' => 'none'
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
    }
    protected function render() {
        global $wp_query,$woocommerce,$product,$post;
        $settings = $this->get_settings_for_display();
        $args = array(
            'post_type'      => 'product',
            'author__in'     => $settings['author_filter'],
            'author__not_in' => $settings['author_exclude_filter'],
            'post__in'       => $settings['post_filter'],
            'post__not_in'   => $settings['post_exclude_filter'],
            'posts_per_page' => $settings['post_per_page'],
            'offset'         => $settings['offset'],
            'order'          => $settings['order'],
            'orderby'        => $settings['orderby']
        );
        if ( $settings['category_filter'] ) {
            $args['tax_query'] = array(
                array(
                    'taxonomy'  => 'product_cat',
                    'field'     => 'id',
                    'terms'     => $settings['category_filter'],
                    'operator'  => 'IN'
                )
            );
        }
        if ( $settings['category_exclude_filter'] ) {
            $args['tax_query'] = array(
                array(
                    'taxonomy'  => 'product_cat',
                    'field'     => 'id',
                    'terms'     => $settings['category_exclude_filter'],
                    'operator'  => 'NOT IN'
                )
            );
        }
        if (class_exists('woocommerce')) {
            echo '<div class="section products">';
                echo '<div class="gallery-filter">';
                    echo '<div class="container">';
                        echo '<div class="row">';
                            echo '<div class="col-12">';
                                echo '<div class="header-holder">';
                                    echo '<div class="filter-header">';
                                        echo '<span class="header__title active" data-filter="*">'.mb_strtoUpper($settings['all_text']).'</span>';
                                        $prod_cat_args = array(
                                          'taxonomy'     => 'product_cat',
                                          'orderby'      => 'name',
                                          'empty'        => 0
                                        );
                                        $categories = get_categories( $prod_cat_args );
        								if ( $categories && ! is_wp_error( $categories ) ){
        									foreach ( $categories as $cat ){
                                                $cat = mb_strtolower(str_replace(' ', '-', esc_attr($cat->name)));
                                                echo '<span class="header__title" data-filter=".'.$cat.'">'.mb_strtoUpper($cat).'</span>';
        									}
        								}
                                    echo '</div>';
                                    echo '<span class="tilemode"><svg class="icon"><use xlink:href="#tilemode"></use></svg></span>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                    echo '<div class="container">';
                        echo '<div class="row no-gutters products-gallery">';
                            $the_query = new \WP_Query( $args );
                            if( $the_query->have_posts() ) {
                                while ($the_query->have_posts()) {
                                    $the_query->the_post();
                                    global $product;
                                    if ( has_post_thumbnail() ) {
                                        $thumb  = wp_get_attachment_url( get_post_thumbnail_id(), 'full' );
                                        $imagealt = esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true));
                                        $imagealt = $imagealt ? $imagealt : get_the_title();
                                        $terms = get_the_terms( get_the_ID(), 'product_cat' );
        								if ( $terms && ! is_wp_error( $terms ) ) :
        									$links = array();
        									foreach ( $terms as $term ){
        										$links[] = $term->name;
        									}
        									$tax = join( " ", str_replace(' ', '-', $links) );
        								else :
        									$tax = '';
        								endif;
                                        echo '<div class="products-item col-xl-3 col-md-4 col-sm-6 '.strtolower( $tax ).'">';
                                            echo '<figure class="product-item product-item--with-r-button">';
                                                echo '<a class="img-holder" href="'.get_post_permalink().'"><img src="'.$thumb.'" alt="'.$imagealt.'"/></a>';
                                                echo '<figcaption>';
                                                    echo '<span class="description">'.wc_get_stock_html( $product ).'</span>';
                                                    echo '<h4 class="title"><a href="'.get_post_permalink().'">'.get_the_title().'</a></h4>';
                                                    if ( $settings['btn_title'] ) {
                                                        echo '<a class="r-button r-button--black" href="'.get_post_permalink().'" data-hover="'.$settings['btn_title'].'"><span>'.$settings['btn_title'].'</span></a>';
                                                    }
                                                echo '</figcaption>';
                                            echo '</figure>';
                                        echo '</div>';
                                    }
                                }
                            }
                            wp_reset_query();
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';

            if ( \Elementor\Plugin::$instance->editor->is_edit_mode() ) {
                echo '<script>jQuery(document).ready(function ($) {var gallery = $(\'.products-gallery\'),title = $(\'.filter-header .header__title\');gallery.isotope({itemSelector: \'.products-item\',});var $grid = $(\'.products-gallery\').isotope({itemSelector: \'.products-item\',});title.on(\'click\', function() {var filterValue = $(this).attr(\'data-filter\');$grid.isotope({ filter: filterValue });});title.on(\'click\', function () {title.removeClass(\'active\');$(this).addClass(\'active\');});
                });</script>';
            }
        }
    }
}
