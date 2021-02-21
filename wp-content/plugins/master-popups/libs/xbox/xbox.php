<?php
/**
 * Plugin Name: Xbox Framework
 * Plugin URI: http://xboxframework.com
 * Description: Xbox is a powerful framework to create beautiful, professional and flexibles Meta boxes and Admin pages. Building meta boxes and admin pages has never been easier!
 * Version: 1.4.8
 * Author: CodexHelp
 * Author URI: https://codecanyon.net/user/codexhelp
 * Text Domain: xbox
 * Domain Path: /languages/
 */

/*
|---------------------------------------------------------------------------------------------------
| Xbox Framework
|---------------------------------------------------------------------------------------------------
*/

if( ! class_exists( 'XboxLoader148', false ) ){
    include dirname( __FILE__ ) . '/loader.php';
    $loader = new XboxLoader148( '1.4.8', 952 );
    $loader->init();
}