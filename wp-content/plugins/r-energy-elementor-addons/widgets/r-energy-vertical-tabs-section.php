<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Vertical_Tabs_Section_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-vertical-tabs-section';
    }
    public function get_title() {
        return 'Vertical Tabs';
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
                'label' => esc_html__( 'Tabs Content', 'r-energy'),
            ]
        );
        $this->add_control( 'r_energy_tabs',
            [
                'type' => Controls_Manager::REPEATER,
                'seperator' => 'before',
                'default' => [
                    [
                        'tab_title' => 'Solar Panel Installation',
                    ],
                    [
                        'tab_title' => 'Windmill Installation',
                    ],
                    [
                        'tab_title' => 'Global Energy Network',
                    ],
                    [
                        'tab_title' => 'Sun Energy Analitics',
                    ],
                    [
                        'tab_title' => 'Technological Power Lines',
                    ],
                    [
                        'tab_title' => 'Economical Lighting',
                    ],
                    [
                        'tab_title' => 'Support and Repair',
                    ],
                    [
                        'tab_title' => 'Recycling Excess Energy',
                    ],
                ],
                'fields' => [
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
                        'default' => '<div class="img-holder"><div class="overlay"></div><picture><source srcset="img/details-img.jpg" media="(min-width: 992px)"/><img src="img/details-img.jpg" alt="img"/></picture></div>
                        <h2 class="title">Service Overview</h2>
<p>Anemonefish, bamboo shark jewfish medusafish, slickhead sand eel warbonnet." Sergeant major sailbearer, rough scad weever. Lemon shark--chimaera muskellunge angler catfish Kafue pike tapetail green swordtail, pelagic cod luderick freshwater hatchetfish huchen blacktip reef shark. Olive flounder handfish, Black swallower glassfish mustache triggerfish, sabertooth fish surgeonfish Atlantic eel sand eel trevally leopard danio: cusk-eel. Rough pomfret; Chinook salmon candlefish leaffish temperate bass starry flounder handfish, fusilier fish, "airbreathing catfish trumpetfish, gibberfish kelp perch." Slimehead round herring algae eater, eeltail catfish. Alfonsino jackfish gopher rockfish Owens pupfish smoothtongue lemon sole, treefish.</p>
<ul>
<li>Streamer fish California halibut Pacif</li>
<li>Slickhead grunion lake trout.</li>
<li>Canthigaster rostrata spikefish</li>
<li>Brown trout loach summer flounder</li>
<li>European minnow black dragonfish</li>
<li>Orbicular batfish stingray</li>
</ul>
<p>Garpike cardinalfish shortnose chimaera great white shark tadpole fish rice eel sole--bighead carp green swordtail yellowfin pike deep sea eel. Snubnose eel straptail basslet combfish chimaera beachsalmon blue eye Mexican golden trout mako shark tiger barb, "conger eel." Medusafish, catfish cownose ray torrent catfish, mola Siamese fighting fish! Round stingray; white croaker; righteye flounder, Antarctic icefish Blobfish, lake whitefish, hagfish yellow bass! Bluefin tuna coffinfish; alooh long-finned pike cavefish elephant fish electric ray aholehole gianttail loach chub ide orangespine unicorn fish. Ribbon eel tidewater goby lined sole swamp-eel hamlet pilot fish barred danio. Fathead sculpin blue whiting spookfish yellowtail clownfish barreleye, minnow African glass catfish char warmouth hairtail.</p>',
                        'dynamic' => ['active' => true],
                    ]
                ],
                'title_field' => '{{tab_title}}'
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_tabs_download_content_settings',
            [
                'label' => esc_html__( 'Download Content', 'r-energy'),
            ]
        );
        $this->add_control( 'hide_pdf',
            [
                'label' => esc_html__( 'Hide Download Content', 'nt-addons' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'nt-addons' ),
                'label_off' => esc_html__( 'No', 'nt-addons' ),
                'return_value' => 'yes',
                'default' => 'no'
            ]
        );
        $this->add_group_control(
    		Group_Control_Background::get_type(),
    		[
    			'name' => 'bg_img',
    			'label' => esc_html__( 'Background', 'r-energy' ),
    			'types' => [ 'classic', 'gradient', 'video' ],
    			'selector' => '{{WRAPPER}} .pdf-holder',
                'condition' => [ 'hide_pdf!' => 'yes' ]
    		]
    	);
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'Clean Energy without CO2',
                'condition' => [ 'hide_pdf!' => 'yes' ]
            ]
        );
        $this->add_control( 'desc',
            [
                'label' => esc_html__( 'Short Description', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'Streamer fish California halibut Pacific saury',
                'condition' => [ 'hide_pdf!' => 'yes' ]
            ]
        );
        $this->add_control( 'text',
            [
                'label' => esc_html__( 'Button Text', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Button Text', 'r-energy' ),
                'condition' => [ 'hide_pdf!' => 'yes' ]
            ]
        );
        $this->add_control( 'link',
            [
                'label' => esc_html__( 'Button Link', 'r-energy' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => ''
                ],
                'show_external' => true,
                'condition' => [ 'hide_pdf!' => 'yes' ]
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<div class="section services-details">';
            echo '<div class="tabs-holder details-tabs">';
                echo '<div class="container">';
                    echo '<div class="row">';
                        echo '<div class="col-xl-3 col-md-4">';
                            echo '<div class="tabs-header">';
                                foreach ($settings['r_energy_tabs'] as $tab) {
                                    if ( $tab['tab_title'] ) {
                                        echo '<span class="tabs-header__title">'.$tab['tab_title'].'</span>';
                                    } else {
                                        echo '<span class="tabs-header__title">Add Title</span>';
                                    }
                                }
                            echo '</div>';
                            if ( $settings['hide_pdf'] != 'yes' ) {
                                echo '<div class="pdf-holder">';
                                    if ( $settings['title'] ) {
                                        echo '<h4 class="title">'.$settings['title'].'</h4>';
                                    }
                                    if ( $settings['desc'] ) {
                                        echo '<p>'.$settings['desc'].'</p>';
                                    }
                                    if ( $settings['text'] ) {
                                        $target   = $settings['link']['is_external'] ? ' target="_blank"' : '';
                                        $nofollow = $settings['link']['nofollow'] ? ' rel="nofollow"' : '';
                                        echo '<a class="r-button r-button--black" href="'.$settings['link']['url'].'"'.$target .$nofollow.' data-hover="'.$settings['text'].'"><span>'.$settings['text'].'</span></a>';
                                    }
                                echo '</div>';
                            }
                        echo '</div>';
                        echo '<div class="col-xl-9 col-md-8">';
                            foreach ($settings['r_energy_tabs'] as $tab) {
                                echo '<div class="tabs-content">';
                                    echo '<div class="tabs-content__item">';
                                        if ( $tab['tab_content'] ) {
                                            echo $tab['tab_content'];
                                        } else {
                                            echo '<p>Add Some Content Here</p>';
                                        }
                                    echo '</div>';
                                echo '</div>';
                            }
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}
