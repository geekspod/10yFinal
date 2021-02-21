<?php

namespace Elementor;

use Elementor\Controls_Manager;
use Elementor\Core\Base\Document;
use Elementor\Core\Base\Module as BaseModule;
use Elementor\Plugin;
use Elementor\Utils;
use Elementor\Core\DocumentTypes\PageBase as PageBase;
use Elementor\Modules\Library\Documents\Page as LibraryPageDocument;

if( !defined( 'ABSPATH' ) ) exit;

class R_Energy_Customizing_Default_Widgets {

    private static $instance = null;
    public static function get_instance() {
		if ( null == self::$instance ) {
			self::$instance = new R_Energy_Customizing_Default_Widgets();
		}
		return self::$instance;
	}

    public function __construct(){
        // custom option for elementor heading widget font size
        add_action( 'elementor/element/social-icons/section_social_icon/before_section_end', [ $this,'urip_add_custom_type_to_button']);
    }

    public function urip_add_custom_type_to_button( $widget )
    {
        $controls = $widget->get_controls();
        $controls['shape']['options'] += [
            'no-shape' => esc_html__( 'No Shape', 'r-energy' ),
        ];
        $widget->update_control('shape', $controls['shape']);
    }
}
R_Energy_Customizing_Default_Widgets::get_instance();
