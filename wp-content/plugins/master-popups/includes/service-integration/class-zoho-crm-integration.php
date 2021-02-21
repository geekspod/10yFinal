<?php namespace MasterPopups\Includes\ServiceIntegration;

use MaxLopez\HTTPClientWP\IronMan;
use MasterPopups\Includes\Functions as Functions;

class ZohoCRMIntegration extends ServiceIntegration {
    protected $service_name = 'zoho_crm';

    private $api_endpoint = '';//https://na111.salesforce.com

    protected $url = '';
    protected $clientKey = '';
    protected $clientSecret = '';
    private $connected = false;

    /*
    |---------------------------------------------------------------------------------------------------
    | Constructor
    |---------------------------------------------------------------------------------------------------
    */
    public function __construct( $auth_type, $api_key = '', $api_token = '', $url = '' ){
        parent::__construct( $this->service_name );

        $this->auth_type = $auth_type;
        $this->url = str_replace( array( 'http://', 'https://' ), '', untrailingslashit( $url ) );//zoho_crm sólo acepta el dominio
        $this->clientKey = $api_key;
        $this->clientSecret = $api_token;

        $this->ironman = new IronMan( $this->api_endpoint );

        //$this->redirect_url = Functions::get_plugin_instance()->settings_url;
        $this->redirect_url = admin_url( 'edit.php' );
        $settings = array(
            'baseUrl' => $this->url,
            'clientKey' => $this->clientKey,
            'clientSecret' => $this->clientSecret,
            'callback' => $this->redirect_url,
        );

        if( defined( 'DOING_AJAX' ) && DOING_AJAX ){
            if( $this->auth_type === 'oauth2' ){
                $this->debug['oauth2-settings'] = $settings;
                $this->connect_with_oauth2( $settings );
            }
        } else if( self::is_oauth2() ){
            if( empty( $_GET['url'] ) ){
                $_GET['url'] = 'zoho.com';
            }
            $this->set_oauth2_fields( false );//agregar true o false dependiendo si se quiere comprobar el parámetro state en la URL

            $settings['clientKey'] = $this->clientKey;
            $settings['clientSecret'] = $this->clientSecret;

            if( self::should_go_to_oauth2_authorization() ){
                $params = array(
                    //'state' => md5(time().mt_rand()),
                    'scope' => 'ZohoCRM.modules.ALL,ZohoCRM.settings.ALL',
                    'response_type' => 'code',
                    'redirect_uri' => $this->redirect_url,
                    'client_id' => $this->clientKey,
                    'access_type' => 'offline',
                    'prompt' => 'consent'//para que vuelva a pedir consentimiento y retorne refresh_token
                    //'client_secret' => $this->clientSecret,
                );
                $base_url = $this->get_base_url_oauth2();
                $auth_url = $base_url . '/oauth/v2/auth';
                $this->go_oauth2_authorization( $auth_url, $params );
            } else{
                $settings = array_merge( $settings, array( 'code' => $_GET['code'], 'location' => $_GET['location'] ) );
                $this->connect_with_oauth2( $settings );
            }
        } else{
            $this->connect_with_oauth2( $settings );
        }
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Base URL
    |---------------------------------------------------------------------------------------------------
    */
    public function get_base_url_oauth2(){
        if( empty( $this->url ) ){
            $this->url = 'zoho.com';
        }
        return untrailingslashit( "https://accounts.{$this->url}" );
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Conección mediante OAuth 2
    |---------------------------------------------------------------------------------------------------
    */
    public function connect_with_oauth2( $settings ){
        $oauth2_data = $this->get_oauth2_data();
        if( ! empty( $oauth2_data['access_token'] ) && ! empty( $oauth2_data['clientKey'] ) && $oauth2_data['clientKey'] == $settings['clientKey'] ){
            $success = $this->validate_access_token_oauth2( $oauth2_data );
        } else{
            $success = $this->request_access_token_oauth2( $settings );
        }
        if( ! $success ){
            $success = $this->refresh_access_token_oauth2( $settings );
        }
        if( $success ){
            $this->after_connection_oauth2();
        }

        $oauth2_data = $this->get_oauth2_data();//por si se guardaron nuevos cambios
        if( $success && ! empty( $oauth2_data['api_domain'] ) ){
            $this->api_endpoint = untrailingslashit( $oauth2_data['api_domain'] ) . '/crm/v2/';
            $token = $oauth2_data['access_token'];
            $this->ironman = new IronMan( $this->api_endpoint );
            $this->ironman->set_option( 'encode_body', true );//La petición requiere datos en formato json
            $this->ironman->set_option( 'reset_body_after_request', true );
            $this->ironman->set_headers( array(
                'Content-Type' => 'application/json',
                'Authorization' => "Bearer $token",
            ) );
            $this->connected = true;
            return true;
        }
        return false;
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Comprueba y valida Token OAuth 2
    |---------------------------------------------------------------------------------------------------
    */
    public function validate_access_token_oauth2( $oauth2_data ){
        $api_domain = trailingslashit( $oauth2_data['api_domain'] );
        $token = $oauth2_data['access_token'];
        $this->ironman->set_headers( array(
            'Authorization' => "Bearer $token",
        ) );
        $success = parent::new_request( "GET", "{$api_domain}crm/v2/settings/roles" );
        return $success;
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Request Access Token  OAuth 2
    |---------------------------------------------------------------------------------------------------
    */
    public function request_access_token_oauth2( $settings ){
        $base_url = $this->get_base_url_oauth2();
        $data = array(
            "code" => isset( $settings['code'] ) ? $settings['code'] : '',
            "grant_type" => 'authorization_code',
            "client_id" => $settings['clientKey'],
            "client_secret" => $settings['clientSecret'],
            "redirect_uri" => $this->redirect_url,
        );
        $success = parent::new_request( "POST", "$base_url/oauth/v2/token", $data );
        $body = $this->get_response_body( true );
        if( $success && ! isset( $body['error'] ) ){
            //body:
            //            {
            //                "access_token": "{access_token}",
            //                "refresh_token": "{refresh_token}",
            //                "api_domain": "https://www.zohoapis.com",
            //                "token_type": "Bearer",
            //                "expires_in": 3600
            //            }

            $accessTokenData = $body;//access_token, refresh_token, api_domain, token_type, expires_in
            //Guardamos datos del token para usar mediante Ajax al suscribir usuarios
            $this->save_oauth2_concection( $settings, $accessTokenData );
        } else{
            $error_message = isset( $body['error'] ) ? $body['error'] : '';
            $this->error = $this->get_error_message( $error_message );
            $success = false;
        }
        return $success;
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Refresh Access Token  OAuth 2
    |---------------------------------------------------------------------------------------------------
    */
    public function refresh_access_token_oauth2( $settings ){
        $base_url = $this->get_base_url_oauth2();
        $oauth2_data = $this->get_oauth2_data();
        $data = array(
            "grant_type" => 'refresh_token',
            "client_id" => $settings['clientKey'],
            "client_secret" => $settings['clientSecret'],
            "refresh_token" => isset( $oauth2_data['refresh_token'] ) ? $oauth2_data['refresh_token'] : '',
        );
        $success = parent::new_request( "POST", "$base_url/oauth/v2/token", $data );
        $body = $this->get_response_body( true );
        if( $success && ! isset( $body['error'] ) ){
            $accessTokenData = $body;//access_token, signature, scope, instance_url, id, token_type, issued_at
            //Guardamos datos del token para usar mediante Ajax al suscribir usuarios
            $this->save_oauth2_concection( $oauth2_data, $accessTokenData );
        } else{
            $error_message = isset( $body['error'] ) ? $body['error'] : '';
            $this->error = $this->get_error_message( $error_message );
            $success = false;
        }
        return $success;
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Request
    |---------------------------------------------------------------------------------------------------
    */
    public function new_request( $method, $url, $body = array(), $headers = array(), $options = array() ){
        $success = parent::new_request( $method, $url, $body, $headers, $options );
        $body = $this->get_response_body( true );
        if( is_array( $body ) && isset( $body['code'] ) ){
            $error_code = isset( $body['code'] ) ? $body['code'] : '';
            $error_message = isset( $body['message'] ) ? $body['message'] : '';
            $error_message = $error_code . '. ' . $error_message;
        } else{
            $error_message = isset( $body['error'] ) ? $body['error'] : '';
        }

        if( isset( $body['data'][0]['status'] ) ){
            $success = $body['data'][0]['status'] == 'success';
            if( ! $success ){
                $error_message = isset( $body['data'][0]['message'] ) ? $body['data'][0]['message'] : '';
                if( isset( $body['data'][0]['details']['api_name'] ) ){
                    $error_message .= ': ' . $body['data'][0]['details']['api_name'];
                }
            }
        }

        $this->error = $this->get_error_message( $error_message );

        //        d( "====================== Request: ", $this->get_url() );
        //        d( $this->response );
        //        d( $this->get_request_body() );

        return $success;
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Comprueba si la conexión con el servicio es exitosa
    |---------------------------------------------------------------------------------------------------
    */
    public function is_connect(){
        return $this->connected;
    }


    /*
    |---------------------------------------------------------------------------------------------------
    | Retorna todas las listas
    |---------------------------------------------------------------------------------------------------
    */
    public function get_lists( $args = array() ){
        $items = array();
        return $items;
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Agrega un suscriptor a una lista
    |---------------------------------------------------------------------------------------------------
    */
    public function add_subscriber( $email, $data = array() ){
        $first_name = $data['first_name'];
        $first_name['value'] = ! empty( $first_name['value'] ) ? $first_name['value'] : '';
        $first_name['name'] = ! empty( $first_name['name'] ) ? $first_name['name'] : 'First_Name';

        $last_name = $data['last_name'];
        $last_name['value'] = ! empty( $last_name['value'] ) ? $last_name['value'] : '';
        $last_name['name'] = ! empty( $last_name['name'] ) ? $last_name['name'] : 'Last_Name';

        //Datos necesarios para la suscripción
        $params = array();
        $params['Email'] = $email;
        $params['First_Name'] = $first_name['value'];
        $params['Last_Name'] = $last_name['value'];

        if( ! empty( $data['custom_fields'] ) ){
            $custom_fields = $this->get_custom_fields();
            foreach( $data['custom_fields'] as $cf_name => $cf_value ){
                $key = $this->isset_field( $cf_name, $custom_fields, false );
                if( $key !== false ){
                    $params[$custom_fields[$key]] = $cf_value;
                }
            }
        }

        //Suscribir nuevo usuario
        $request_body = array(
            'data' => array( $params )
        );
        $success = $this->new_request( "POST", "/leads/upsert", $request_body );//Crea o actualiza usuario si ya existe
        return $success;
    }

    /*
	|---------------------------------------------------------------------------------------------------
	| Retorna todos los campos por defecto
	|---------------------------------------------------------------------------------------------------
	*/
    public function get_default_fields(){
        return array();
    }

    /*
    |---------------------------------------------------------------------------------------------------
    | Retorna todos los campos personalizados
    |---------------------------------------------------------------------------------------------------
    */
    public function get_custom_fields(){
        $items = array();
        $success = $this->new_request( "GET", "/settings/fields", array( 'module' => 'leads' ) );
        if( ! $success ){
            return array();
        }
        $body = $this->get_response_body( true );
        $fields = isset( $body['fields'] ) ? $body['fields'] : array();
        foreach( $fields as $field ){
            $items[] = $field['api_name'];
        }
        return $items;
    }

}