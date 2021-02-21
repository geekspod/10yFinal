<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Accordion_Tabs_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-accordion-tabs-section';
    }
    public function get_title() {
        return 'Accordeon Tabs';
    }
    public function get_icon() {
        return 'eicon-accordion';
    }
    public function get_categories() {
        return [ 'r-energy' ];
    }
    // Registering Controls
    protected function _register_controls() {

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_tabs_content_settings',
            [
                'label' => esc_html__( 'Content', 'r-energy'),
            ]
        );
        $this->add_control( 'type',
            [
                'label' => esc_html__( 'Type', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'label_block' => 'true',
                'default' => '1',
                'options' => [
                    '1' => esc_html__( 'Shadow', 'r-energy' ),
                    '2' => esc_html__( 'Border', 'r-energy' ),
                ]
            ]
        );
        $this->add_control( 'r_energy_tabs',
            [
                'type' => Controls_Manager::REPEATER,
                'seperator' => 'before',
                'default' => [
                    [
                        'tab_title' => 'How much does solar cost?',
                        'tab_content' => '<p>Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin: herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury swordfish southern sandfish</p>'
                    ],
                    [
                        'tab_title' => 'I would love to invest in solar, but I think my roof is too old. Am Iout of Luck?',
                        'tab_content' => '<p>Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin: herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury swordfish southern sandfish</p>'
                    ],
                    [
                        'tab_title' => 'What happens to solar panels when it rains or is cloudy?',
                        'tab_content' => '<p>Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin: herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury swordfish southern sandfish</p>'
                    ],
                    [
                        'tab_title' => 'What rebates are available for solar energy?',
                        'tab_content' => '<p>Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin: herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury swordfish southern sandfish</p>'
                    ],
                    [
                        'tab_title' => 'Would it make sense to go solar if we use most our energy at night?',
                        'tab_content' => '<p>Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin: herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury swordfish southern sandfish</p>'
                    ],
                ],
                'fields'       => [
                    [
                        'name' => 'tab_title',
                        'label' => esc_html__('Tab Title', 'r-energy'),
                        'type' => Controls_Manager::TEXT,
                        'default' => esc_html__('Tab Title', 'r-energy'),
                        'label_block' => true
                    ],
                    [
                        'name' => 'tab_content',
                        'label' => esc_html__('Tab Content', 'r-energy'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => '<p>Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin: herring, Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish; rohu yellow-and-black triplefin Atlantic saury swordfish southern sandfish</p>',
                        'dynamic' => ['active' => true],
                    ]
                ],
                'title_field' => '{{tab_title}}'
            ]
        );
        $this->end_controls_section();
        /***** TITLE ******/
        $this->start_controls_section('r_energy_accordion_title_styling',
            [
                'label' => esc_html__( 'Title', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_title_accordion_tabs');
        $this->start_controls_tab( 'r_energy_title_accordion_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_accordion',$selector='.title-block .title');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_title_accordion_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='title_accordion_hover',$selector='.title-block .title:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END TITLE ******/
        /***** desc ******/
        $this->start_controls_section('r_energy_accordion_desc_styling',
            [
                'label' => esc_html__( 'Description', 'r_energy' ),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );
        $this->start_controls_tabs('r_energy_desc_accordion_tabs');
        $this->start_controls_tab( 'r_energy_desc_accordion_normal_tab',
            [ 'label' => esc_html__( 'Normal', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_accordion',$selector='.content-block p');
        $this->end_controls_tab();
        //
        $this->end_controls_tab();
        $this->start_controls_tab( 'r_energy_desc_accordion_hover_tab',
            [ 'label' => esc_html__( 'Hover', 'r_energy' ) ]
        );
        $this->r_energy_style_controls(array('shadow'),$id='desc_accordion_hover',$selector='.content-block p:hover');
        $this->end_controls_tab();
        $this->end_controls_tabs();
        //
        $this->end_controls_section();
        /***** END desc ******/
    }

    protected function render() {
        $settings  = $this->get_settings_for_display();
        $elementid = $this->get_id();
        foreach ($settings['r_energy_tabs'] as $tab) {
            $type = $settings['type'] == '1' ? 'accordion-item--with-shadow' : 'accordion-item--with-border';
            echo '<div class="accordion-item '.$type.'">';
                echo '<div class="title-block">';
                    if ( $tab['tab_title'] ) {
                        echo '<h4 class="title">'.$tab['tab_title'].'</h4>';
                    } else {
                        echo '<h4 class="title">Add Title</h4>';
                    }
                    echo '<svg class="icon"><use xlink:href="#close"></use></svg>';
                echo '</div>';

                echo '<div class="content-block">';
                    if ( $tab['tab_content'] ) {
                        echo $tab['tab_content'];
                    } else {
                        echo '<p>Add Some Content Here</p>';
                    }
                echo '</div>';
            echo '</div>';
        }
    }
}
