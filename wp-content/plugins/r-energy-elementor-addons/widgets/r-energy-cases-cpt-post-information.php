<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Cases_Cpt_Post_Information_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-cases-cpt-post-information';
    }
    public function get_title() {
        return '(CPT) Cases Post Information';
    }
    public function get_icon() {
        return 'eicon-columns';
    }
    public function get_categories() {
        return [ 'r-energy-cases' ];
    }
    // Registering Controls
    // Registering Controls
    protected function _register_controls() {
        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_cases_post_information_settings',
            [
                'label' => esc_html__( 'Social Profiles', 'r-energy' )
            ]
        );
        $this->add_control( 'title',
            [
                'label' => esc_html__( 'Title', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Information',
                'label_block' => true,
            ]
        );
        $this->add_control( 'details',
            [
                'type' => Controls_Manager::REPEATER,
                'default' => [
                    [
                        'icon' => [
                            'value' => 'fab fa-home',
                            'library' => 'fa-brands'
                        ],
                        'item_title' => 'Cleveland, Ohio'
                    ],
                    [
                        'icon' => [
                            'value' => 'fab fa-home',
                            'library' => 'fa-brands'
                        ],
                        'item_title' => '125 Reviews'
                    ],
                    [
                        'icon' => [
                            'value' => 'fab fa-home',
                            'library' => 'fa-brands'
                        ],
                        'item_title' => 'Avainable in 5 days'
                    ],

                ],
                'fields' => [
                    [
                        'name' => 'icon',
                        'label' => esc_html__( 'Icon', 'r-energy' ),
                        'type' => Controls_Manager::ICONS,
                        'default' => [
                            'value' => 'fab fa-home',
                            'library' => 'fa-brands'
                        ]
                    ],
                    [
                        'name' => 'item_title',
                        'label' => esc_html__( 'Item Title', 'r-energy' ),
                        'type' => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => ''
                    ]
                ],
                'title_field' => '{{item_title}}',
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/

        /*****   START CONTROLS SECTION   ******/
        $this->start_controls_section( 'r_energy_cases_post_text_content_settings',
            [
                'label' => esc_html__( 'Description', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT
            ]
        );
        $this->add_control( 'text_content',
            [
                'label' => esc_html__( 'Text Content', 'r-energy' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => '<p>Streamer fish California halibut Pacific saury. Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder.</p>
                <p>European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin: herring. Moses sole sea snail grouper discus. European eel slender snipe eel. Gulper eel dealfish ocean sunfish rohu yellow-and-black triplefin Atlantic saury swordfish southern</p>
                <p>Scup stickleback Blobfish blue shark pumpkinseed Siamese fighting fish weeverfish. Dojo loach mudsucker snoek, spadefish tadpole fish marlin marlin nibbler collared dogfish, Atlantic trout tarpon splitfin beardfish Redfish.</p>',
                'dynamic' => ['active' => true],
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        /*****   END CONTROLS SECTION   ******/
    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<div class="cases-details">';
            echo '<div class="information-block">';
                if ( $settings['title']) {
                    echo '<div class="title-block"><h3 class="title">'.$settings['title'].'</h3></div>';
                }
    			echo '<div class="information-details">';
    				echo '<div class="row">';
                        foreach ( $settings['details'] as $item ) {
                            echo '<div class="col-sm-4 col-6">';
        						echo '<div class="detail">';
                                    if ( ! empty($item['icon']['value']) ) {
                                        echo '<div class="info-icon icon">';Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] );echo '</div>';
                                    }
                                    if ( $item['item_title'] ) {
                                        echo '<span>'.$item['item_title'].'</span>';
                                    }
                                echo '</div>';
            				echo '</div>';
                        }
    				echo '</div>';
    			echo '</div>';
                if ( $settings['text_content'] ) {
                    echo '<div class="information-content">'.$settings['text_content'].'</div>';
                }
    		echo '</div>';
		echo '</div>';
    }
}
