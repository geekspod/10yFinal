<?php namespace MasterPopups\Includes;

class Settings extends BaseOptions {
    private static $instance = null;
    public $plugin = null;

    /*
    |---------------------------------------------------------------------------------------------------
    | Constructor
    |---------------------------------------------------------------------------------------------------
    */
    protected function __construct( $plugin = null, $options = array() ){
        $this->plugin = $plugin;
        $this->hooks();

        $xbox_id = $this->plugin->arg( 'xbox_ids', 'settings' );
        $prefix = '';
        $defaults = include dirname( __FILE__ ) . '/options/general-settings/defaults.php';
        parent::__construct( $xbox_id, $prefix, $options, $defaults );

    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Singleton
    |---------------------------------------------------------------------------------------------------
    */
    private function __clone(){
    }//Stopping Clonning of Object

    private function __wakeup(){
    }//Stopping unserialize of object

    public static function get_instance( $plugin = null ){
        if( null === self::$instance ){
            self::$instance = new self( $plugin );
        }
        return self::$instance;
    }

    /*
	|---------------------------------------------------------------------------------------------------
	| Plugin hooks
	|---------------------------------------------------------------------------------------------------
	*/
    private function hooks(){
        add_action( 'init', array( $this, 'init' ), 1 );
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Init action
    |---------------------------------------------------------------------------------------------------
    */
    public function init(){

    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Establece las opciones por defecto
    |---------------------------------------------------------------------------------------------------
    */
    protected function set_options( $initial_options = array() ){
        $options = array();
        foreach( $this->defaults as $option_name => $option_value ){
            $this->set_option_to( $options, $option_name, $option_value );
        }
        $this->options = wp_parse_args( $initial_options, $options );
        return $this->options;
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Retorna el valor de una opción
    |---------------------------------------------------------------------------------------------------
    */
    public static function get_value( $option_name = '', $default_value = null ){
        $plugin = Functions::get_plugin_instance();
        $settings_id = $plugin::$args['xbox_ids']['settings'];
        $options = get_option( $settings_id );
        if( is_array( $options ) && isset( $options[$option_name] ) ){
            return $options[$option_name];
        } elseif( $default_value !== null ){
            return $default_value;
        }
        $defaults = include dirname( __FILE__ ) . '/options/general-settings/defaults.php';
        if( isset( $defaults[$option_name] ) ){
            return $defaults[$option_name];
        }
        return null;
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Retorna los servicios integrados con su estado conectado o desconectado
    |---------------------------------------------------------------------------------------------------
    */
    public static function get_status_integrated_services(){
        $plugin = Functions::get_plugin_instance();
        $value = (array) $plugin->settings->option( 'integrated-services' );
        $integrated_services = array();
        foreach( $value as $index => $service ){
            $integrated_services[$service['integrated-services_type']] = $service['service-status'];
        }
        return $integrated_services;
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Contact Forms 7
    |---------------------------------------------------------------------------------------------------
    */
    public static function get_all_contact_forms_7(){
        $items = array();
        $lists = \XboxItems::posts_by_post_type( 'wpcf7_contact_form', array(
            'post_status' => 'publish',
            'posts_per_page' => -1,
        ) );
        return Functions::nice_array_merge( $items, $lists );
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Activación del Plugin
    |---------------------------------------------------------------------------------------------------
    */
    public static function plugin_status(){
        $option = get_option( 'mpp-plugin-status' );
        if( $option && is_array( $option ) ){
            return isset( $option['purchase_code'], $option['user_name'] );
        }
        return true;
    }

    public static function plugin_status_message( $url ){
        return '<div class="ampp-message ampp-message-warning ampp-icon-message">
			<header>' . __( 'License activation required.', 'masterpopups' ) . '</header>
			<p>' . sprintf( __( 'Please activate your license from %shere%s. Tab "Plugin Activation"', 'masterpopups' ), '<a href="' . $url . '" target="_blank">', '</a>' ) . '</p>
	</div>';
    }


}
