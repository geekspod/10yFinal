<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Blog_List_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-blog-list-section';
    }
    public function get_title() {
        return 'Blog List Section';
    }
    public function get_icon() {
        return 'eicon-bullet-list';
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
        $this->add_control('subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__( 'Blog' , 'r-energy' ),
                'label_block' => true,
            ]
        );
        $this->add_control('title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => '<span>News &amp;</span> <span>Insights</span>',
                'label_block' => true,
            ]
        );
        $this->add_control('btn_title',
            [
                'label' => esc_html__( 'Button Title', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__( 'ALL ARTICLES' , 'r-energy' ),
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
        $this->add_control('author_filter',
            [
                'label' => esc_html__( 'Author', 'nt-addons' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_get_users(),
                'description' => 'Select Author(s)'
            ]
        );
        $this->add_control('author_exclude_filter',
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
        $this->add_control('category_filter',
            [
                'label' => esc_html__( 'Category', 'nt-addons' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_get_categories(),
                'description' => 'Select Category(s)'
            ]
        );
        $this->add_control('category_exclude_filter',
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
        $this->add_control('tag_filter',
            [
                'label' => esc_html__( 'Tag', 'nt-addons' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_get_tags(),
                'description' => 'Select Tag(s)'
            ]
        );
        $this->add_control('tag_exclude_filter',
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
        $this->add_control('post_filter',
            [
                'label' => esc_html__( 'Specific Post(s)', 'nt-addons' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_get_posts(),
                'description' => 'Select Specific Post(s)'
            ]
        );
        $this->add_control('post_exclude_filter',
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
                'default' => 10
            ]
        );

        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /***** SUBTITLE ******/
        $this->start_controls_section('r_energy_bloglist_subtitle_styling',
            [
                'label' => esc_html__( 'Subtitle', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_subtitle_bloglist_tabs');
        $this->start_controls_tab( 'r_energy_subtitle_bloglist_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='subtitle_bloglist',$selector='.nt-blog .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_subtitle_bloglist_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='subtitle_bloglist_hover',$selector='.nt-blog .subtitle:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END SUBTITLE ******/

        /***** TITLE ******/
        $this->start_controls_section('r_energy_bloglist_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_bloglist_tabs');
        $this->start_controls_tab( 'r_energy_title_bloglist_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_bloglist',$selector='.nt-blog .subtitle span');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_bloglist_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_bloglist_hover',$selector='.nt-blog .subtitle span:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/

        /***** BUTTON ******/
        $this->start_controls_section('r_energy_bloglist_button_styling',
            [
                'label' => esc_html__( 'Button', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_button_bloglist_tabs');
        $this->start_controls_tab( 'r_energy_button_bloglist_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_bloglist',$selector='.nt-blog .r-button-holder a');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_button_bloglist_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_bloglist_hover',$selector='.nt-blog .r-button-holder:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END BUTTON ******/

        /***** Date ******/
        $this->start_controls_section('r_energy_bloglist_date_styling',
            [
                'label' => esc_html__( 'Date', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_date_bloglist_tabs');
        $this->start_controls_tab( 'r_energy_date_bloglist_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='date_bloglist',$selector='.description .date');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_date_bloglist_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='date_bloglist_hover',$selector='.description .date:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Date ******/

        /***** ITEM TITLE ******/
        $this->start_controls_section('r_energy_bloglist_ititle_styling',
            [
                'label' => esc_html__( 'Item Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_ititle_bloglist_tabs');
        $this->start_controls_tab( 'r_energy_ititle_bloglist_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='ititle_bloglist',$selector='.description a');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_ititle_bloglist_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='ititle_bloglist_hover',$selector='.description a:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END ITEM TITLE ******/
        /***** ITEM Desc ******/
        $this->start_controls_section('r_energy_bloglist_idesc_styling',
            [
                'label' => esc_html__( 'Item Description', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_idesc_bloglist_tabs');
        $this->start_controls_tab( 'r_energy_idesc_bloglist_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='idesc_bloglist',$selector='.description .text-holder p');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_idesc_bloglist_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='idesc_bloglist_hover',$selector='.description .text-holder p:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END ITEM Desc ******/
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $target   = $settings['btn_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $settings['btn_link']['nofollow'] ? ' rel="nofollow"' : '';
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
            'posts_per_page'   => 3,
            'offset'           => $settings['offset'],
            'order'            => $settings['order'],
            'orderby'          => $settings['orderby'],
        );
        $args2 = array(
            'post_type'        => 'post',
            'author__in'       => $settings['author_filter'],
            'author__not_in'   => $settings['author_exclude_filter'],
            'category__in'     => $settings['category_filter'],
            'category__not_in' => $settings['category_exclude_filter'],
            'tag__in'          => $settings['tag_filter'],
            'tag__not_in'      => $settings['tag_exclude_filter'],
            'post__in'         => $settings['post_filter'],
            'post__not_in'     => $settings['post_exclude_filter'],
            'posts_per_page'   => 1,
            'offset'           => -3,
            'order'            => $settings['order'],
            'orderby'          => $settings['orderby'],
        );
        echo '<div class="nt-blog news--style-2">';
            if ( $settings['subtitle'] || $settings['title'] || $settings['btn_title'] ) {
                echo '<div class="container">';
                    echo '<div class="row align-items-end margin-bottom">';
                        if ( $settings['subtitle'] || $settings['title'] ) {
                            echo '<div class="col-lg-9 col-md-8">';
                                echo '<div class="heading primary-heading">';
                                    if ( $settings['subtitle'] ) {
                                        echo '<h3 class="title">'.$settings['subtitle'].'</h3>';
                                    }
                                    if ( $settings['title'] ) {
                                        echo '<h5 class="subtitle">'.$settings['title'].'</h5>';
                                    }
                                echo '</div>';
                            echo '</div>';
                        }
                        if ( $settings['btn_title'] ) {
                            echo '<div class="col-lg-3 col-md-4 d-none d-lg-block">';
                                echo '<div class="r-button-holder">';
                                    echo '<a class="r-button r-button--transparent" href="'.$settings['btn_link']['url'].'"'.$target .$nofollow.' data-hover="'.$settings['btn_title'].'"><span>'.$settings['btn_title'].'</span></a>';
                                echo '</div>';
                            echo '</div>';
                        }
                    echo '</div>';
                echo '</div>';
            }
            echo '<div class="container">';
                echo '<div class="row flex-column-reverse flex-lg-row">';
                    $the_query = new \WP_Query( $args );
                    if( $the_query->have_posts() ) :
                        echo '<div class="col-lg-6">';
                        while ($the_query->have_posts()) : $the_query->the_post();
                            if(has_post_thumbnail()) {
                                $bcropped = r_energy_aq_resize( wp_get_attachment_url( get_post_thumbnail_id(), 'full' ), 170, 170, true, true, true );
                                $imagealt = esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true));
                                $imagealt = $imagealt ? $imagealt : get_the_title();
                                echo '<div class="news-item--aside">';
                                    echo '<div class="img-holder"><img class="img-bg" src="'.$bcropped.'" alt="'.$imagealt.'"/></div>';
                                    echo '<div class="description">';
                                        echo '<span class="date">'.get_the_date('M d, Y').'</span>';
                                        echo '<a href="'.get_post_permalink().'">'.get_the_title().'</a>';

                                           if(has_excerpt() && 'yes' != $settings['hideexcerpt']){
                                                echo '<div class="text-holder">';
                                                    echo '<p class="text">'.wp_trim_words( get_the_excerpt(), $settings['excerpt_limit'] ).'</p>';
                                                echo '</div>';
                                            }

                                    echo '</div>';
                                echo '</div>';
                            }
                        endwhile;
                        echo '</div>';
                    endif;
                    wp_reset_postdata();
                    // second Query
                    $the_query = new \WP_Query( $args2 );
                    if( $the_query->have_posts() ) :
                        echo '<div class="col-lg-6">';
                        while ($the_query->have_posts()) : $the_query->the_post();
                            if(has_post_thumbnail()) {
                                $cropped2 = r_energy_aq_resize( wp_get_attachment_url( get_post_thumbnail_id(), 'full' ), 690, 564, true, true, true );
                                $imagealt2 = esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true));
                                $imagealt2 = $imagealt2 ? $imagealt2 : get_the_title();
                                echo '<div class="news-item--style-2">';
                                    echo '<a class="img-holder" href="'.get_post_permalink().'">';
                                        echo '<div class="overlay"></div>';
                                        echo '<img class="img-bg" src="'.$cropped2.'" alt="'.$imagealt2.'"/>';
                                    echo '</a>';
                                    echo '<div class="description">';
                                        echo '<span class="date">'.get_the_date('M d, Y').'</span>';
                                        echo '<a href="'.get_post_permalink().'">'.get_the_title().'</a>';
                                    echo '</div>';
                                echo '</div>';
                            }
                        endwhile;
                        echo '</div>';
                    endif;
                    wp_reset_postdata();
                echo '</div>';
            echo '</div>';

            if ( $settings['btn_title'] ) {
                echo '<div class="container">';
                    echo '<div class="row">';
                        echo '<div class="col-12 d-block d-lg-none">';
                            echo '<div class="r-button-holder text-center margin-top">';
                                echo '<a class="r-button r-button--transparent" href="'.$settings['btn_link']['url'].'"'.$target .$nofollow.' data-hover="'.$settings['btn_title'].'"><span>'.$settings['btn_title'].'</span></a>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        echo '</div>';
    }
}
