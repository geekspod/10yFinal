<?php

if( !defined( 'ABSPATH' ) ) exit;

use Elementor\Utils;
use Elementor\Repeater;
use Elementor\Elemer_energy_Base;
use Elementor\Elementor_Base;
use Elementor\Controls_Manager;
use Elementor\Core\Responsive\Responsive;
use Elementor\Widget_Base;
use Elementor\Group_Control_Background;

class R_Energy_Section_Parallax {

    private static $instance = null;

    public function __construct(){
        // section register settings
        //add_action('elementor/element/section/section_structure/after_section_end',array($this,'register_controls'), 10 );
        add_action('elementor/element/section/section_structure/before_section_end',array($this,'register_change_section_column_structure'), 10 );
        add_action('elementor/element/section/section_layout/before_section_end',array($this,'register_change_section_indent_structure'), 10 );
        add_action('elementor/element/section/section_background_overlay/before_section_end',array($this,'register_add_section_overlay_width'), 10 );
        add_action('elementor/frontend/section/before_render',array($this,'r_energy_custom_attr_to_section'), 10);
        //
        // column register settings and before render column functions
        add_action('elementor/element/column/layout/after_section_end',array($this,'register_change_column_width'), 10 );
        add_action('elementor/frontend/column/before_render',array($this,'custom_attr_to_column'), 10);
    }
    //
    //
    /*****   START COLUMN CONTROLS   ******/
    public function register_change_column_width( $element ) {
        $element->start_controls_section('r_energy_section_column_width_settings',
            [
                'label' => esc_html__( 'R-Energy Custom Column', 'r-energy' ),
                'tab' => Controls_Manager::TAB_LAYOUT
            ]
        );
        $element->add_control('r_energy_column_width',
            [
                'label' => esc_html__( 'Change Column Width To', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'label_block' => 'true',
                'default' => '',
                'prefix_class' => 'elementor',
                'options' => [
                    '' => esc_html__( 'None', 'r-energy' ),
                    '-col-33' => esc_html__( '3 Column', 'r-energy' ),
                    '-col-25' => esc_html__( '4 Column', 'r-energy' ),
                    '-col-50' => esc_html__( '2 Column', 'r-energy' ),
                    '-col-100' => esc_html__( '1 Column', 'r-energy' ),
                ],
            ]
        );
        $element->end_controls_section();
    }
    public function custom_attr_to_column( $element ) {

        if( 'column' !== $element->get_name() ) {
            return;
        }
        $element->add_render_attribute( 'wrapper', 'class', $element->get_settings('r_energy_column_width') );
    }
    /*****   END COLUMN CONTROLS   ******/

    /*****   START CONTROLS SECTION   ******/
    public function register_change_section_column_structure( $element ) {
        $element->add_control('r_energy_section_column_structure_switcher',
            [
                'label' => esc_html__( 'Enable R-Energy Structure Column', 'r-energy' ),
                'type' => Controls_Manager::SWITCHER,
            ]
        );
        $element->add_control('r_energy_section_change_column_structure',
            [
                'label' => esc_html__( 'Change Structure Column To', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'label_block'  => 'true',
                'default' => '',
                'prefix_class' => 'nt-structure nt',
                'options' => [
                    '' => esc_html__( 'None', 'r-energy' ),
                    '-col-33' => esc_html__( '3 Column', 'r-energy' ),
                    '-col-25' => esc_html__( '4 Column', 'r-energy' ),
                    '-col-50' => esc_html__( '2 Column', 'r-energy' ),
                    '-col-100' => esc_html__( '1 Column', 'r-energy' ),
                ],
                'condition' => ['r_energy_section_column_structure_switcher' => 'yes'],
            ]
        );
    }
    /*****   END COLUMN CONTROLS   ******/

    /*****   START CONTROLS SECTION   ******/
    public function register_change_section_indent_structure( $element ) {
        $element->add_control( 'r_energy_section_indent',
            [
                'label' => esc_html__( 'Section Indent', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'label_block'  => 'true',
                'default' => '',
                'prefix_class' => 'nt-section ',
                'separator' => 'before',
                'options' => [
                    '' => esc_html__( 'Default', 'r-energy' ),
                    'section default-indent' => esc_html__( 'Indent Top and Bottom', 'r-energy' ),
                    'section no-padding-top' => esc_html__( 'Indent Bottom No Top', 'r-energy' ),
                    'section no-padding-bottom' => esc_html__( 'Indent Top No Bottom', 'r-energy' ),
                ]
            ]
        );
    }
    /*****   END COLUMN CONTROLS   ******/

    /*****   START CONTROLS SECTION   ******/
    public function register_add_section_overlay_width( $element ) {
		$element->add_responsive_control( 'r_energy_section_overlay_width',
			[
				'label' => esc_html__( 'R-Energy Overlay Width', 'plugin-domain' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 2000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => '%',
					'size' => 100,
				],
				'selectors' => [
					'{{WRAPPER}} .elementor-background-overlay' => 'width: {{SIZE}}{{UNIT}};',
				],
				'separator'     => 'before'
			]
		);
		$element->add_responsive_control( 'r_energy_section_overlay_height',
			[
				'label' => esc_html__( 'R-Energy Overlay Height', 'plugin-domain' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 2000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => '%',
					'size' => 100,
				],
				'selectors' => [
					'{{WRAPPER}} .elementor-background-overlay' => 'height: {{SIZE}}{{UNIT}};',
				],
				'separator'     => 'before'
			]
		);
    }

    public function r_energy_custom_attr_to_section( $element ) {
        $data     = $element->get_data();
        $type     = $data['elType'];
        $settings = $data['settings'];
        $isInner  = $data['isInner'];

        if( 'section' !== $element->get_name() ) {
            return;
        }
        $element->add_render_attribute( 'wrapper', 'class', $element->get_settings('r_energy_section_indent') );
        $element->add_render_attribute( 'wrapper', 'class', $element->get_settings('r_energy_section_outdent') );

        if( '0' !== $element->get_settings('r_energy_section_column_structure_switcher') ) {
            $element->add_render_attribute( 'wrapper', 'class', $element->get_settings('r_energy_section_change_column_structure') );
        }
    }

    public static function get_instance() {
        if ( null == self::$instance ) {
            self::$instance = new self;
        }
        return self::$instance;
    }

}

R_Energy_Section_Parallax::get_instance();
