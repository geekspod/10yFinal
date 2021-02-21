<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Woo_Product_Slider_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-woo-product-slider-section';
    }
    public function get_title() {
        return 'Woo Slider';
    }
    public function get_icon() {
        return 'eicon-slider-push';
    }
    public function get_categories() {
        return [ 'r-energy-woo' ];
    }
    // Registering Controls
    protected function _register_controls() {
        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_woo_product_slider_text_settings',
            [
                'label' => esc_html__('Section Text', 'r-energy'),
            ]
        );
        $this->add_control( 'subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Our products',
                'label_block' => true,
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '<span>A System You</span> <br/> <span>Can Count On</span>',
                'label_block' => true,
            ]
        );
        $this->add_control( 'btn_title',
            [
                'label' => esc_html__( 'Button Title', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Discover',
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
        $this->start_controls_section( 'post_query_section',
            [
                'label' => esc_html__( 'Query', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT
            ]
        );
        $this->add_control( 'post_btn_title',
            [
                'label' => esc_html__( 'Post Button Title', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Add to cart',
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

        /***** Subtitle ******/
        $this->start_controls_section('r_energy_woo_subtitle_styling',
            [
                'label' => esc_html__( 'Subtitle', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_subtitle_woo_tabs');
        $this->start_controls_tab( 'r_energy_subtitle_woo_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='subtitle_woo',$selector='.text-block .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_subtitle_woo_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='subtitle_woo_hover',$selector='.text-block .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Subtitle ******/

        /***** TITLE ******/
        $this->start_controls_section('r_energy_woo_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_woo_tabs');
        $this->start_controls_tab( 'r_energy_title_woo_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_woo',$selector='.text-block .subtitle span');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_woo_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_woo_hover',$selector='.text-block .subtitle span:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/

        /***** Price ******/
        $this->start_controls_section('r_energy_woo_price_styling',
            [
                'label' => esc_html__( 'Price', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_price_woo_tabs');
        $this->start_controls_tab( 'r_energy_price_woo_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='price_woo',$selector='.description.price');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_price_woo_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='price_woo_hover',$selector='.description.price:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Price ******/

        /***** Item title ******/
        $this->start_controls_section('r_energy_woo_ititle_styling',
            [
                'label' => esc_html__( 'Item title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_ititle_woo_tabs');
        $this->start_controls_tab( 'r_energy_ititle_woo_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='ititle_woo',$selector='.product-item .title a');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_ititle_woo_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='ititle_woo_hover',$selector='.product-item .title a:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Item title ******/

        /***** Button ******/
        $this->start_controls_section('r_energy_woo_button_styling',
            [
                'label' => esc_html__( 'Button', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_button_woo_tabs');
        $this->start_controls_tab( 'r_energy_button_woo_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_woo',$selector='.with--line');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_button_woo_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_woo_hover',$selector='.with--line:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Button ******/
    }
    protected function render() {
        global $wp_query,$woocommerce,$product,$post;
        $settings = $this->get_settings_for_display();
        $target    = $settings['btn_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow  = $settings['btn_link']['nofollow'] ? ' rel="nofollow"' : '';
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
            echo '<div class="products--style-3">';
                echo '<div class="container">';
                    echo '<div class="row align-items-center margin-bottom">';
                        if ( $settings['subtitle'] || $settings['title'] ) {
                            echo '<div class="col-xl-6 col-lg-7">';
                                echo '<div class="heading primary-heading heading-with-r-button">';
                                    echo '<div class="text-block">';
                                        if ( $settings['subtitle'] ) {
                                            echo '<h3 class="title">'.$settings['subtitle'].'</h3>';
                                        }
                                        if ( $settings['title'] ) {
                                            echo '<h5 class="subtitle">'.$settings['title'].'</h5>';
                                        }
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        }
                        echo '<div class="col-xl-6 col-lg-5">';
                            echo '<div class="r-button-block">';
                                echo '<div class="products-slider-dots"></div>';
                                if ( $settings['btn_title'] ) {
                                    echo '<a class="r-button r-button--transparent d-none d-lg-inline-block" href="'.$settings['btn_link']['url'].'"'.$target.$nofollow.' data-hover="'.$settings['btn_title'].'"><span>'.$settings['btn_title'].'</span></a>';
                                }
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
                echo '<div class="slider-holder">';
                    echo '<div class="slider-wrapper">';
                        $the_query = new \WP_Query( $args );
                        if( $the_query->have_posts() ) {
                            echo '<div class="products-slider">';
                            while ($the_query->have_posts()) {
                                $the_query->the_post();
                                global $product;
                                if ( has_post_thumbnail() ) {
                                    $thumb  = wp_get_attachment_url( get_post_thumbnail_id(), 'full' );
                                    $imagealt = esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true));
                                    $imagealt = $imagealt ? $imagealt : get_the_title();
                                    $regular = get_post_meta( get_the_ID(), '_regular_price', true);
                                    $sale    = get_post_meta( get_the_ID(), '_sale_price', true);
                                    $price   = $sale ? $sale : $regular;
                                    echo '<div class="slider-item">';
                                        echo '<figure class="product-item product-item--primary">';
                                            echo '<a class="img-holder" href="'.get_post_permalink().'"><img src="'.$thumb.'" alt="'.$imagealt.'"/></a>';
                                            echo '<figcaption>';
                                                if($price){
                                                    echo '<span class="description price">'.get_woocommerce_currency_symbol().' '.$price.'</span>';
                                                }
                                                echo '<h4 class="title"><a href="'.get_post_permalink().'">'.get_the_title().'</a></h4>';
                                                echo '<a class="with--line" href="'.get_post_permalink().'">'.$product->add_to_cart_text().'</span></a>';
                                            echo '</figcaption>';
                                        echo '</figure>';
                                    echo '</div>';
                                }
                            }
                            echo '</div>';
                        }
                        wp_reset_query();
                    echo '</div>';
                    if ( $settings['btn_title'] ) {
                        echo '<div class="container"><div class="row"><div class="col-12 text-center d-block d-lg-none margin-top"><a class="r-button r-button--transparent" href="'.$settings['btn_link']['url'].'"'.$target.$nofollow.' data-hover="'.$settings['btn_title'].'"><span>'.$settings['btn_title'].'</span></a></div></div></div>';
                    }
                echo '</div>';
            echo '</div>';
        }
    }
}
