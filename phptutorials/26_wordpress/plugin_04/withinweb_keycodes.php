<?php
/*
Plugin Name: WithinWeb PHP-KeyCodes
Plugin URI: http://www.withinweb.com/wp_phpkeycodes/
Description: Sell software licence codes, key codes or PIN numbers using PayPal IPN.
Author: Paul Gibbs
Version: 1.0.0
Author URI: http://www.withinweb.com/
*/

//==================================================================================================


//--------------------------------------------------------------
//Activate the plugin
register_activation_hook(__FILE__, 'withinweb_keycodes_install' );

//--------------------------------------------------------------
//Deactivate the plugin
register_deactivation_hook(__FILE__, 'withinweb_keycodes_deactivate' );

//--------------------------------------------------------------
//Create the menus
add_action( 'admin_menu', 'withinweb_keycodes_create_menu' );


//Create process hooks
add_action( 'admin_post_withinweb_keycodes_settings', 'process_withinweb_keycodes_settings' );
add_action( 'admin_post_withinweb_keycodes_environment', 'process_withinweb_keycodes_environment' );
add_action( 'admin_post_withinweb_keycodes_createitem', 'process_withinweb_keycodes_createitem' );


//==================================================================================================
/**
* Create the menus
*/
function withinweb_keycodes_create_menu() {	
	//main menu
	add_menu_page( 'PHP-KeyCodes', 'KeyCodes', 'manage_options', __FILE__, 'withinweb_keycodes_help_page');	
	
	//sub menu
	add_submenu_page(__FILE__, 'Setting for PHP-KeyCodes', 'Settings', 'manage_options', __FILE__.'_settings', 'withinweb_keycodes_settings_page' );
	add_submenu_page(__FILE__, 'PHP-KeyCodes Sales', 'Sales', 'manage_options', __FILE__.'_sales', 'withinweb_keycodes_sales_page' );	
	add_submenu_page(__FILE__, 'Help with PHP-KeyCodes', 'Help', 'manage_options', __FILE__.'_help', 'withinweb_keycodes_help_page' );
	add_submenu_page(__FILE__, 'About PHP-KeyCodes', 'About', 'manage_options', __FILE__.'_about', 'withinweb_keycodes_about_page' );		
	add_submenu_page(__FILE__, 'Uninstall PHP-KeyCodes', 'Uninstall', 'manage_options', __FILE__.'_uninstall', 'withinweb_keycodes_uninstall_page' );	
}

/**
* Install plugin
*/
function withinweb_keycodes_install() {

   		if ( get_option( 'withinweb_keycodes_op_array' ) === false )
   		{
      		$options_array['withinweb_keycodes_admin_email'] = 'admin@somewhere.com';
      		$options_array['withinweb_keycodes_paypal_email'] = '';
	  		$options_array['withinweb_keycodes_cancel_url'] = '';
	  		$options_array['withinweb_keycodes_return_url'] = '';		
      		add_option( 'withinweb_keycodes_op_array', $options_array );
   		}		
		
		if ( get_option( 'withinweb_keycodes_environment_array' ) == false )
		{		
			$environment_array['withinweb_keycodes_paypal_environment'] = '';
      		add_option( 'withinweb_keycodes_environment_array', $environment_array );
		}	
		
}


/**
* Deactivate the plugin
*/
function withinweb_keycodes_deactivate() {	
	
}


//==================================================================================================
/**
* Pages
*/
function withinweb_keycodes_settings_page() {
	if ( is_admin() )		//Check if admin user
	{
		//we are in wp-admin
		require (plugin_dir_path(__FILE__) .'views/adminsettings.php' );
	}
}

function withinweb_keycodes_about_page() {
	if ( is_admin() )		//Check if admin user
	{
		//we are in wp-admin
		require (plugin_dir_path(__FILE__) .'views/adminabout.php' );
	}
}

function withinweb_keycodes_help_page() {
	if ( is_admin() )		//Check if admin user
	{
	//we are in wp-admin
		require (plugin_dir_path(__FILE__) .'views/adminhelp.php' );
	}
}

function withinweb_keycodes_sales_page() {
	if ( is_admin() )		//Check if admin user
	{
		//we are in wp-admin
		require (plugin_dir_path(__FILE__) .'views/adminsales.php' );
	}
}

function withinweb_keycodes_uninstall_page() {
	if ( is_admin() )		//Check if admin user
	{

	}
}

include('scripts/process.php');

?>