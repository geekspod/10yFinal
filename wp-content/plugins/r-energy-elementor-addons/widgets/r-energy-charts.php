<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.

class R_Energy_Charts_Widget extends Widget_Base {
    use R_Energy_Helper;
    public function get_name() {
        return 'r-energy-charts';
    }
    public function get_title() {
        return 'Alert';
    }
    public function get_icon() {
        return 'eicon-skill-bar';
    }
    public function get_categories() {
        return [ 'r-energy' ];

    }

    // Registering Controls
    protected function _register_controls() {

        /*****   Button Options   ******/
        $this->start_controls_section('r_energy_charts_settings',
            [
                'label' => esc_html__( 'Charts', 'r-energy' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control( 'type',
            [
                'label' => esc_html__( 'Type', 'r-energy' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'bar',
                'options' => [
                    'bar' => esc_html__( 'Bar', 'r-energy' ),
                    'line' => esc_html__( 'Line', 'r-energy' ),
                    'radar' => esc_html__( 'Radar', 'r-energy' ),
                    'doughnut' => esc_html__( 'Doughnut', 'r-energy' ),
                ]
            ]
        );
        $this->add_control( 'votes',
            [
                'label' => esc_html__( 'Text', 'r-energy' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => '# of Votes',
                'condition' => ['type' => 'bar']
            ]
        );
        $this->add_control( 'charts_bar',
            [
                'type' => Controls_Manager::REPEATER,
                'default' => [
                    [
                        'label' => 'Red',
                        'number' => '12',
                        'color' => 'rgba(255, 99, 132,0.2)',
                        'brdcolor' => 'rgba(255, 99, 132,1)',
                    ],
                    [
                        'label' => 'Blue',
                        'number' => '19',
                        'color' => 'rgba(54, 162, 235,0.2)',
                        'brdcolor' => 'rgba(54, 162, 235,1)',
                    ],
                    [
                        'label' => 'Yellow',
                        'number' => '3',
                        'color' => 'rgba(255, 206, 86,0.2)',
                        'brdcolor' => 'rgba(255, 206, 86,1)',
                    ],
                    [
                        'label' => 'Green',
                        'number' => '5',
                        'color' => 'rgba(75, 192, 192,0.2)',
                        'brdcolor' => 'rgba(75, 192, 192,1)',
                    ],
                    [
                        'label' => 'Purple',
                        'number' => '2',
                        'color' => 'rgba(153, 102, 255,0.2)',
                        'brdcolor' => 'rgba(153, 102, 255,1)',
                    ],
                    [
                        'label' => 'Orange',
                        'number' => '3',
                        'color' => 'rgba(255, 159, 64,0.2)',
                        'brdcolor' => 'rgba(255, 159, 64,1)',
                    ],
                ],
                'fields' => [
                    [
                        'name' => 'label',
                        'label' => esc_html__( 'Label', 'r-energy' ),
                        'type' => Controls_Manager::TEXT,
                        'default' => 'Label',
                    ],
                    [
                        'name' => 'number',
                        'label' => esc_html__( 'Value', 'r-energy' ),
                        'type' => Controls_Manager::NUMBER,
                        'min' => 0,
                        'max' => 100000,
                        'default' => 10,
                    ],
                    [
                        'name' => 'color',
                        'label' => esc_html__( 'Background Color', 'r-energy' ),
                        'type' => Controls_Manager::COLOR,
                        'default' => 'rgb(255, 99, 132)',
                    ],
                    [
                        'name' => 'brdcolor',
                        'label' => esc_html__( 'Border Color', 'r-energy' ),
                        'type' => Controls_Manager::COLOR,
                        'default' => 'rgb(255, 99, 132)',
                    ]
                ],
                'title_field' => '{{label}}',
                'condition' => ['type' => 'bar']
            ]
        );
        $this->add_control( 'charts_doughnut',
            [
                'type' => Controls_Manager::REPEATER,
                'default' => [
                    [
                        'd_label' => 'Red',
                        'd_number' => '70',
                        'd_color' => 'rgba(255, 99, 132, 1)',
                    ],
                    [
                        'd_label' => 'Blue',
                        'd_number' => '20',
                        'd_color' => 'rgba(105, 195, 255, 1)',
                    ],
                    [
                        'd_label' => 'Yellow',
                        'd_number' => '10',
                        'd_color' => 'rgba(255, 209, 94, 1)',
                    ],
                ],
                'fields' => [
                    [
                        'name' => 'd_label',
                        'label' => esc_html__( 'Label', 'r-energy' ),
                        'type' => Controls_Manager::TEXT,
                        'default' => 'Label',
                    ],
                    [
                        'name' => 'd_number',
                        'label' => esc_html__( 'Value', 'r-energy' ),
                        'type' => Controls_Manager::NUMBER,
                        'min' => 0,
                        'max' => 100000,
                        'default' => 10,
                    ],
                    [
                        'name' => 'd_color',
                        'label' => esc_html__( 'Background Color', 'r-energy' ),
                        'type' => Controls_Manager::COLOR,
                        'default' => 'rgba(255, 99, 132, 1)',
                    ]
                ],
                'title_field' => '{{d_label}}',
                'condition' => ['type' => 'doughnut']
            ]
        );
        $this->add_control( 'line_labels',
            [
                'label' => esc_html__( 'Labels', 'r-energy' ),
                'description' => esc_html__( 'Separate each label with a comma', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'January, February, March, April, May, June, July',
                'condition' => ['type' => 'line']
            ]
        );
        $this->add_control( 'charts_lines',
            [
                'type' => Controls_Manager::REPEATER,
                'default' => [
                    [
                        'vlabel' => 'Red',
                        'data' => '330, 250, 480, 120, 220, 130, 255',
                        'color2' => 'rgba(255, 99, 132,0.2)',
                        'brdcolor2' => 'rgba(255, 99, 132,1)',
                    ],
                    [
                        'vlabel' => 'Blue',
                        'data' => '230, 350, 120, 240, 360, 180, 295',
                        'color2' => 'rgba(54, 162, 235,0.2)',
                        'brdcolor2' => 'rgba(54, 162, 235,1)',
                    ],
                    [
                        'vlabel' => 'Yellow',
                        'data' => '450, 290, 123, 332, 439, 222, 340',
                        'color2' => 'rgba(255, 206, 86,0.2)',
                        'brdcolor2' => 'rgba(255, 206, 86,1)',
                    ],
                    [
                        'vlabel' => 'Green',
                        'data' => '400, 450, 380, 250, 450, 320, 210',
                        'color2' => 'rgba(75, 192, 192,0.2)',
                        'brdcolor2' => 'rgba(75, 192, 192,1)',
                    ],
                    [
                        'vlabel' => 'Purple',
                        'data' => '500, 220, 110, 50, 430, 310, 410',
                        'color2' => 'rgba(153, 102, 255,0.2)',
                        'brdcolor2' => 'rgba(153, 102, 255,1)',
                    ],
                    [
                        'vlabel' => 'Orange',
                        'data' => '0, 100, 200, 300, 400, 320, 222',
                        'color2' => 'rgba(255, 159, 64,0.2)',
                        'brdcolor2' => 'rgba(255, 159, 64,1)',
                    ],
                ],
                'fields' => [
                    [
                        'name' => 'vlabel',
                        'label' => esc_html__( 'Label', 'r-energy' ),
                        'type' => Controls_Manager::TEXT,
                        'default' => 'Label',
                    ],
                    [
                        'name' => 'data',
                        'label' => esc_html__( 'Data', 'r-energy' ),
                        'description' => esc_html__( 'Separate each data with a comma', 'r-energy' ),
                        'type' => Controls_Manager::TEXTAREA,
                        'input_type' => 'number',
                        'placeholder' => 'ex: 330, 250, 480, 120, 220, 130, 255',
                        'default' => '330, 250, 480, 120, 220, 130, 255',
                    ],
                    [
                        'name' => 'color2',
                        'label' => esc_html__( 'Background Color', 'r-energy' ),
                        'type' => Controls_Manager::COLOR,
                        'default' => 'rgba(255, 99, 132,0.2)',
                    ],
                    [
                        'name' => 'brdcolor2',
                        'label' => esc_html__( 'Border Color', 'r-energy' ),
                        'type' => Controls_Manager::COLOR,
                        'default' => 'rgba(255, 99, 132,1)',
                    ]
                ],
                'title_field' => '{{vlabel}}',
                'condition' => ['type' => 'line']
            ]
        );
        $this->add_control( 'radar_labels',
            [
                'label' => esc_html__( 'Labels', 'r-energy' ),
                'description' => esc_html__( 'Separate each label with a comma', 'r-energy' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => 'Eating, Drinking, Sleeping, Designing, Coding, Cycling, Running',
                'condition' => ['type' => 'radar']
            ]
        );
        $this->add_control( 'charts_radars',
            [
                'type' => Controls_Manager::REPEATER,
                'default' => [
                    [
                        'r_label' => 'First',
                        'r_data' => '100, 44, 55, 90, 55, 80, 100',
                        'r_color' => 'rgba(154, 104, 255, 0.2)',
                        'r_brdcolor' => 'rgba(154, 104, 255, 1)',
                    ],
                    [
                        'r_label' => 'Second',
                        'r_data' => '30, 80, 60, 20, 40, 100, 50',
                        'r_color' => 'rgba(255, 99, 132, 0.2)',
                        'r_brdcolor' => 'rgba(255, 99, 132, 1)',
                    ],
                ],
                'fields' => [
                    [
                        'name' => 'r_label',
                        'label' => esc_html__( 'Label', 'r-energy' ),
                        'type' => Controls_Manager::TEXT,
                        'default' => 'Label',
                    ],
                    [
                        'name' => 'r_data',
                        'label' => esc_html__( 'Data', 'r-energy' ),
                        'description' => esc_html__( 'Separate each data with a comma', 'r-energy' ),
                        'type' => Controls_Manager::TEXTAREA,
                        'input_type' => 'number',
                        'placeholder' => 'ex: 100, 44, 55, 90, 55, 80, 100',
                        'default' => '100, 44, 55, 90, 55, 80, 100',
                    ],
                    [
                        'name' => 'r_color',
                        'label' => esc_html__( 'Background Color', 'r-energy' ),
                        'type' => Controls_Manager::COLOR,
                        'default' => 'rgba(154, 104, 255, 0.2)',
                    ],
                    [
                        'name' => 'r_brdcolor',
                        'label' => esc_html__( 'Border Color', 'r-energy' ),
                        'type' => Controls_Manager::COLOR,
                        'default' => 'rgba(154, 104, 255, 1)',
                    ]
                ],
                'title_field' => '{{r_label}}',
                'condition' => ['type' => 'radar']
            ]
        );
        $this->end_controls_section();
        /*****   End Button Options   ******/

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $elementid  = $this->get_id();
        if ( $settings['type'] == 'bar' ) {
            echo '<canvas id="bar-chart-'.$elementid.'"></canvas>';
        }
        if ( $settings['type'] == 'line' ) {
            echo '<canvas id="line-chart-'.$elementid.'"></canvas>';
        }
        if ( $settings['type'] == 'radar' ) {
            echo '<canvas id="radar-chart-'.$elementid.'"></canvas>';
        }
        if ( $settings['type'] == 'doughnut' ) {
            echo '<canvas id="doughnut-chart-'.$elementid.'"></canvas>';
        }

        // Not in edit mode
        if ( $settings['type'] == 'bar' ) {
            $labels = array();
            $numbers = array();
            $colors = array();
            $brdcolors = array();
            foreach($settings['charts_bar'] as $bar){
                $labels[] = '\''.trim($bar['label']).'\'';
                $numbers[] = trim($bar['number']);
                $colors[] = '\''.$bar['color'].'\'';
                $brdcolors[] = '\''.$bar['brdcolor'].'\'';
            }
            echo '<script>jQuery(document).ready(function ($) {
            var ctx = document.getElementById(\'bar-chart-'.$elementid.'\').getContext(\'2d\');
			var myChart = new Chart(ctx, {
				type: \'bar\',
				data: {
					labels: ['.implode(',',$labels).'],
					datasets: [{
						label: \''.$settings['votes'].'\',
						data: ['.implode(',',$numbers).'],
						backgroundColor: ['.implode(',',$colors).'],
						borderColor: ['.implode(',',$brdcolors).'],
						borderWidth: 1
					}]
				},
				options: {scales: {yAxes: [{ticks: {beginAtZero: true}}]}}
			});});</script>';
        }
        if ( $settings['type'] == 'doughnut' ) {
            $d_labels = array();
            $d_numbers = array();
            $d_colors = array();
            foreach($settings['charts_doughnut'] as $bar){
                $d_labels[] = '\''.trim($bar['d_label']).'\'';
                $d_numbers[] = trim($bar['d_number']);
                $d_colors[] = '\''.$bar['d_color'].'\'';
            }
            echo '<script>jQuery(document).ready(function ($) {
			var ctx = document.getElementById(\'doughnut-chart-'.$elementid.'\').getContext(\'2d\');
			var myChart = new Chart(ctx, {
				type: \'doughnut\',
				data: {
					labels: ['.implode(',',$d_labels).'],
					datasets: [{
						data: ['.implode(',',$d_numbers).'],
						backgroundColor: ['.implode(',',$d_colors).'],
					}]
				}
			});});</script>';
        }
        if ( $settings['type'] == 'line' ) {
            $labels2 = explode(',', trim($settings['line_labels']));
            $labelss = array();
            foreach($labels2 as $label){
                $labelss[] = '\''.$label.'\'';
            }
            $lines = array();
            foreach($settings['charts_lines'] as $line){
                $lines[] ='{
                    label: \''.$line['vlabel'].'\',
                    data: ['.$line['data'].'],
                    backgroundColor: \''.$line['color2'].'\',
                    borderColor: \''.$line['brdcolor2'].'\',
                    borderWidth: 1
                }';
            }
            echo '<script>jQuery(document).ready(function ($) {
            var ctx = document.getElementById(\'line-chart-'.$elementid.'\').getContext(\'2d\');
			var myChart = new Chart(ctx, {
				type: \'line\',
				data: {
					labels: ['.implode(',',$labelss).'],
					datasets: ['.implode(',',$lines).']
				}
			});});</script>';
        }
        if ( $settings['type'] == 'radar' ) {
            $r_labels = explode(',', trim($settings['radar_labels']));
            $r_labelss = array();
            foreach($r_labels as $label){
                $r_labelss[] = '\''.$label.'\'';
            }
            $radars = array();
            foreach($settings['charts_radars'] as $radar){
                $radars[] ='{
                    label: \''.$radar['r_label'].'\',
                    data: ['.$radar['r_data'].'],
                    backgroundColor: \''.$radar['r_color'].'\',
                    borderColor: \''.$radar['r_brdcolor'].'\',
                    borderWidth: 1
                }';
            }
            echo '<script>jQuery(document).ready(function ($) {
			var ctx = document.getElementById(\'radar-chart-'.$elementid.'\').getContext(\'2d\');
			var myChart = new Chart(ctx, {
				type: \'radar\',
				data: {
					labels: ['.implode(',',$r_labelss).'],
					datasets: ['.implode(',',$radars).'],
				}
			});});</script>';
        }
    }
}
