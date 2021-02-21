<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Cases_Cpt_Gallery_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-cases-cpt-gallery-section';
    }
    public function get_title() {
        return '(CPT) Cases Gallery';
    }
    public function get_icon() {
        return 'eicon-gallery-grid';
    }
    public function get_categories() {
        return [ 'r-energy-cases' ];
    }
    // Registering Controls
    protected function _register_controls() {
        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_cpt_cases_column_settings',
            [
                'label' => esc_html__( 'General', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'column',
            [
                'label' => esc_html__( 'Column', 'nt-addons' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '3' => esc_html__( '4 Column', 'r-energy' ),
                    '4' => esc_html__( '3 Column', 'r-energy' ),
                    '6' => esc_html__( '2 Column', 'r-energy' )
                ],
                'default' => '4'
            ]
        );
        $this->add_control('btn_title',
            [
                'label' => esc_html__( 'Bottom Button Title', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Show more cases',
                'label_block' => true,
            ]
        );
        $this->add_control( 'btn_link',
            [
                'label' => esc_html__( 'Button Link', 'r-energy' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default' => [
                    'url' => '#0',
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
       $this->add_control( 'p_btn_title',
            [
                'label' => esc_html__( 'Post Button Title', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => 'Explore more',
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
                'options' => $this->r_energy_cpt_taxonomies('cases_cat'),
                'description' => 'Select Category(s)'
            ]
        );
        // Exclude Category
        $this->add_control( 'category_exclude_filter',
            [
                'label' => esc_html__( 'Exclude Category', 'r-energy' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_cpt_taxonomies('cases_cat'),
                'description' => 'Select Category(s) to Exclude',
                'separator'   => 'after'
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
                'options' => $this->r_energy_cpt_get_post_title('cases'),
                'description' => 'Select Specific Post(s)'
            ]
        );
        // Exclude Post
        $this->add_control( 'post_exclude_filter',
            [
                'label' => esc_html__( 'Exclude Post', 'r-energy' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->r_energy_cpt_get_post_title('cases'),
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
        $this->add_control( 'btn_title',
            [
                'label' => esc_html__( 'Post Button Title', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => 'Explore more',
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
        /***** TITLE ******/
        $this->start_controls_section('r_energy_casescpt_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_casescpt_tabs');
        $this->start_controls_tab( 'r_energy_title_casescpt_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_casescpt',$selector='.description .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_casescpt_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_casescpt_hover',$selector='.description .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/
        /***** Button ******/
        $this->start_controls_section('r_energy_casescpt_button_styling',
            [
                'label' => esc_html__( 'Item Button', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_button_casescpt_tabs');
        $this->start_controls_tab( 'r_energy_button_casescpt_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_casescpt',$selector='.description .with--line');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_button_casescpt_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='button_casescpt_hover',$selector='.description .with--line:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END Button ******/
    }
    protected function render() {
        //global $wp_query;
        $settings = $this->get_settings_for_display();
        if($settings['category_filter']){
            $taxonomyin = array(
                        'taxonomy'  => 'cases_cat',
                        'field'     => 'id',
                        'terms'     => $settings['category_filter'],
                        'operator'  => 'IN'
                    );
        }

        $args = array(
            'post_type'      => 'cases',
            'post_status'    => 'publish',
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
                    'taxonomy'  => 'cases_cat',
                    'field'     => 'id',
                    'terms'     => $settings['category_filter'],
                    'operator'  => 'IN'
                )
            );
        }
        if ( $settings['category_exclude_filter'] ) {
            $args['tax_query'] = array(
                array(
                    'taxonomy'  => 'cases_cat',
                    'field'     => 'id',
                    'terms'     => $settings['category_exclude_filter'],
                    'operator'  => 'NOT IN'
                )
            );
        }

        if ( post_type_exists( 'cases') ) {
			echo '<div class="project-cases">';
				echo '<div class="row no-gutters">';
                $the_query = new \WP_Query( $args );
                if( $the_query->have_posts() ) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        if ( has_post_thumbnail() ) {
                            $bcropped = wp_get_attachment_url( get_post_thumbnail_id(), 'full' );
                            $imagealt = esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true));
                            $imagealt = $imagealt ? $imagealt : basename( get_attached_file( get_post_thumbnail_id() ) );
    						echo '<div class="col-lg-'.$settings['column'].' col-sm-6">';
    							echo '<div class="cases-item">';
    							    echo '<a class="img-holder" href="'.get_post_permalink().'">';
    						    	    echo '<div class="overlay"></div>';
    								    echo '<img class="img-bg" src="'.$bcropped.'" alt="'.$imagealt.'">';
    								echo '</a>';
    								echo '<div class="description">';
    									echo '<h5 class="title">'.get_the_title().'</h5>';
    									if ( $settings['p_btn_title'] ) {
    									    echo '<a class="with--line" href="'.get_post_permalink().'">'.$settings['p_btn_title'].'</a>';
    									}
    								echo '</div>';
    							echo '</div>';
    						echo '</div>';
                        }
                    }
                }
                wp_reset_postdata();
				echo '</div>';
				if ( $settings['btn_title'] ) {
    				echo '<div class="container">';
    					echo '<div class="row">';
    						echo '<div class="col-12">';
    							echo '<div class="r-button-holder">';
    							    echo '<a class="r-button r-button--transparent" href="'.$settings['btn_link']['url'].'"'.$target .$nofollow.' data-hover="'.$settings['btn_title'].'"><span>'.$settings['btn_title'].'</span></a>';
    							echo '</div>';
    						echo '</div>';
    					echo '</div>';
    				echo '</div>';
				}
			echo '</div>';
        }
    }
}
