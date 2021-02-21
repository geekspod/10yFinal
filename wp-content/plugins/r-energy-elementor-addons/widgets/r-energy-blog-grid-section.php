<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Blog_Grid_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-blog-grid-section';
    }
    public function get_title() {
        return 'Blog Grid Section';
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
        $this->start_controls_section('r_energy_blog_text_settings',
            [
                'label' => esc_html__( 'Text', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Latest blog posts',
                'label_block' => true,
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '<span>Awesome</span> <span>Blog</span>',
                'label_block' => true,
            ]
        );
        $this->add_control( 'column',
            [
                'label' => esc_html__( 'Column', 'nt-addons' ),
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
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'nt_post_query',
            [
                'label' => esc_html__( 'Query', 'nt-addons' ),
                'tab' => Controls_Manager::TAB_CONTENT
            ]
        );
        $this->add_control( 'author_filter_heading',
            [
                'label' => esc_html__( 'Author Filter', 'nt-addons' ),
                'type' => Controls_Manager::HEADING
            ]
        );
        $this->add_control( 'author_filter',
            [
                'label' => esc_html__( 'Author', 'nt-addons' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_get_users(),
                'description' => 'Select Author(s)'
            ]
        );
        $this->add_control( 'author_exclude_filter',
            [
                'label' => esc_html__( 'Exclude Author', 'nt-addons' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_get_users(),
                'description' => 'Select Author(s) to Exclude',
                'separator' => 'after'
            ]
        );
        $this->add_control( 'category_filter_heading',
            [
                'label' => esc_html__( 'Category Filter', 'nt-addons' ),
                'type' => Controls_Manager::HEADING
            ]
        );
        $this->add_control( 'category_filter',
            [
                'label' => esc_html__( 'Category', 'nt-addons' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_get_categories(),
                'description' => 'Select Category(s)'
            ]
        );
        $this->add_control( 'category_exclude_filter',
            [
                'label' => esc_html__( 'Exclude Category', 'nt-addons' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_get_categories(),
                'description' => 'Select Category(s) to Exclude',
                'separator' => 'after'
            ]
        );
        $this->add_control( 'tag_filter_heading',
            [
                'label' => esc_html__( 'Tag Filter', 'nt-addons' ),
                'type' => Controls_Manager::HEADING
            ]
        );
        $this->add_control( 'tag_filter',
            [
                'label' => esc_html__( 'Tag', 'nt-addons' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_get_tags(),
                'description' => 'Select Tag(s)'
            ]
        );
        $this->add_control( 'tag_exclude_filter',
            [
                'label' => esc_html__( 'Exclude Tag', 'nt-addons' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_get_tags(),
                'description' => 'Select Tag(s) to Exclude',
                'separator' => 'after'
            ]
        );
        $this->add_control( 'post_filter_heading',
            [
                'label' => esc_html__( 'Post Filter', 'nt-addons' ),
                'type' => Controls_Manager::HEADING
            ]
        );
        $this->add_control( 'post_filter',
            [
                'label' => esc_html__( 'Specific Post(s)', 'nt-addons' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_get_posts(),
                'description' => 'Select Specific Post(s)'
            ]
        );
        $this->add_control( 'post_exclude_filter',
            [
                'label' => esc_html__( 'Exclude Post', 'nt-addons' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_get_posts(),
                'description' => 'Select Post(s) to Exclude',
                'separator' => 'after'
            ]
        );
        $this->add_control( 'post_other_heading',
            [
                'label' => esc_html__( 'Other Filter', 'nt-addons' ),
                'type' => Controls_Manager::HEADING
            ]
        );
        $this->add_control('post_per_page',
            [
                'label' => esc_html__( 'Posts Per Page', 'nt-addons' ),
                'type' => Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 1000,
                'default' => 2
            ]
        );
        $this->add_control('offset',
            [
                'label' => esc_html__( 'Offset', 'nt-addons' ),
                'type' => Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 1000
            ]
        );
        $this->add_control( 'order',
            [
                'label' => esc_html__( 'Select Order', 'nt-addons' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'ASC' => 'Ascending',
                    'DESC' => 'Descending'
                ],
                'default' => 'ASC'
            ]
        );
        $this->add_control( 'orderby',
            [
                'label' => esc_html__( 'Order By', 'nt-addons' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'none' => 'None',
                    'ID' => 'Post ID',
                    'author' => 'Author',
                    'title' => 'Title',
                    'name' => 'Slug',
                    'date' => 'Date',
                    'modified' => 'Last Modified Date',
                    'parent' => 'Post Parent ID',
                    'rand' => 'Random',
                    'comment_count' => 'Number of Comments',
                ],
                'default' => 'none'
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_post_options',
            [
                'label' => esc_html__( 'Post Options', 'nt-addons' ),
                'tab' => Controls_Manager::TAB_CONTENT
            ]
        );
        $this->add_control( 'hidetitle',
            [
                'label' => esc_html__( 'Hide Title', 'nt-addons' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'nt-addons' ),
                'label_off' => esc_html__( 'No', 'nt-addons' ),
                'return_value' => 'yes',
                'default' => 'no',
                'separator' => 'after'
            ]
        );
        $this->add_control( 'hidedate',
            [
                'label' => esc_html__( 'Hide Date', 'nt-addons' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'nt-addons' ),
                'label_off' => esc_html__( 'No', 'nt-addons' ),
                'return_value' => 'yes',
                'default' => 'no'
            ]
        );
        $this->add_control( 'hidecat',
            [
                'label' => esc_html__( 'Hide Category', 'nt-addons' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'nt-addons' ),
                'label_off' => esc_html__( 'No', 'nt-addons' ),
                'return_value' => 'yes',
                'default' => 'no'
            ]
        );
        $this->add_control( 'hideexcerpt',
            [
                'label' => esc_html__( 'Hide Excerpt', 'nt-addons' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'nt-addons' ),
                'label_off' => esc_html__( 'No', 'nt-addons' ),
                'return_value' => 'yes',
                'default' => 'no'
            ]
        );
        $this->add_control( 'excerpt_limit',
            [
                'label' => esc_html__( 'Excerpt Word Limit', 'nt-addons' ),
                'type' => Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 100,
                'default' => 16
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        /***** SUBTITLE ******/
        $this->start_controls_section('r_energy_blog_subtitle_styling',
            [
                'label' => esc_html__( 'Subtitle', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_subtitle_blog_tabs');
        $this->start_controls_tab( 'r_energy_subtitle_blog_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='subtitle_blog',$selector='.primary-heading .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_subtitle_blog_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='subtitle_blog_hover',$selector='.primary-heading .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END SUBTITLE ******/

        /***** TITLE ******/
        $this->start_controls_section('r_energy_blog_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_blog_tabs');
        $this->start_controls_tab( 'r_energy_title_blog_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='title_blog',$selector='.primary-heading .subtitle span');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_blog_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='title_blog_hover',$selector='.primary-heading .subtitle span:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/
        /***** Category ******/
        $this->start_controls_section('r_energy_blog_cat_styling',
            [
                'label' => esc_html__( 'Category', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_cat_blog_tabs');
        $this->start_controls_tab( 'r_energy_cat_blog_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='cat_blog',$selector='.blog-item .category a');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_cat_blog_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='cat_blog_hover',$selector='.blog-item .category a:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Category ******/
        /***** ITEM TITLE ******/
        $this->start_controls_section('r_energy_blog_ititle_styling',
            [
                'label' => esc_html__( 'Item Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_ititle_blog_tabs');
        $this->start_controls_tab( 'r_energy_ititle_blog_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='ititle_blog',$selector='.blog-item .title a');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_ititle_blog_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='ititle_blog_hover',$selector='.blog-item .title a:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END ITEM TITLE ******/
        /***** ITEM DESC ******/
        $this->start_controls_section('r_energy_blog_idesc_styling',
            [
                'label' => esc_html__( 'Item Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_idesc_blog_tabs');
        $this->start_controls_tab( 'r_energy_idesc_blog_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='idesc_blog',$selector='.blog-item .text');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_idesc_blog_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls_two(array('shadow'),$id='idesc_blog_hover',$selector='.blog-item .text:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END ITEM DESC ******/
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $args = array(
            'post_type'        => 'post',
            'author__in'       => $settings['author_filter'],
            'author__not_in'   => $settings['author_exclude_filter'],
            'category__in'     => $settings['category_filter'],
            'category__not_in' => $settings['category_exclude_filter'],
            'tag__in'          => $settings['tag_filter'],
            'tag__not_in'      => $settings['tag_exclude_filter'],
            'post__in'         => $settings['post_filter'],
            'post__not_in'     => $settings['post_exclude_filter'],
            'posts_per_page'   => $settings['post_per_page'],
            'offset'           => $settings['offset'],
            'order'            => $settings['order'],
            'orderby'          => $settings['orderby'],
        );
        $contentalign = $settings['content_alignment'] == 'center' ? ' justify-content-center' : '';
        echo '<div class="nt-blog">';
            if ( $settings['subtitle'] || $settings['title'] ) {
                echo '<div class="container">';
                    echo '<div class="row">';
                        echo '<div class="col-12">';
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
                echo '</div>';
            }
            echo '<div class="container">';
                echo '<div class="row offset-margin'.$contentalign.'">';
                $the_query = new \WP_Query( $args );
                if( $the_query->have_posts() ) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        if(has_post_thumbnail()) {
                            $thumb = r_energy_aq_resize( wp_get_attachment_url( get_post_thumbnail_id(), 'full' ), 570, 390, true, true, true );
                            $imagealt = esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true));
                            $imagealt = $imagealt ? $imagealt : get_the_title();
                            echo '<div class="col-md-'.$settings['column'].'">';
                                echo '<div class="blog-item">';
                                    echo '<a class="img-holder" href="'.get_post_permalink().'">';
                                        echo '<div class="overlay"></div>';
                                        echo '<img class="img-bg" src="'.$thumb.'" alt="'.$imagealt.'"/>';
                                    echo '</a>';
                                    if('yes' != $settings['hidedate'] || 'yes' != $settings['hidetitle'] || 'yes' != $settings['hideexcerpt']){
                                        echo '<div class="content-holder">';
                                            if('yes' != $settings['hidedate']){
                                                echo '<div class="ribbon">';
                                                    echo '<p>. <span class="day">'.get_the_date('d').'</span>/<span class="month">'.get_the_date('m').'</span></p>';
                                                echo '</div>';
                                            }
                                            if(has_category() && 'yes' != $settings['hidecat']){
                                                ob_start();
                                                the_category(', ');
                                                echo '<span class="category">'.ob_get_clean().'</span>';
                                            }
                                            if('yes' != $settings['hidetitle']){
                                                echo '<h4 class="title"><a href="'.get_post_permalink().'">'.get_the_title().'</a></h4>';
                                            }
                                            if(has_excerpt() && 'yes' != $settings['hideexcerpt']){
                                                echo '<div class="text-holder">';
                                                    echo '<p class="text">'.wp_trim_words( get_the_excerpt(), $settings['excerpt_limit'] ).'</p>';
                                                echo '</div>';
                                            }
                                        echo '</div>';
                                    }
                                echo '</div>';
                            echo '</div>';
                        }
                    }
                } else {
                        echo '<p class="text">No post found!</p>';
                }
                wp_reset_postdata();
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}
