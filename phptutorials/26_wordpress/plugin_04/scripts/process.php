<?php
//--------------------------------------------------------
// Settings page
function process_withinweb_keycodes_settings()
{
   if ( !current_user_can( 'manage_options' ) )
   {
      wp_die( 'You are not allowed to be on this page.' );
   }
   
   // Check the nonce field
   if ( !check_admin_referer( 'withinweb_keycodes_op_verify', 'withinweb_keycodes_settings' ) )
   {
		exit;   
   }
   
   $options = get_option( 'withinweb_keycodes_op_array' );
   
   if ( isset( $_POST['admin_email'] ) )
   {
      $options['withinweb_keycodes_admin_email'] = sanitize_text_field( $_POST['admin_email'] );
   }
   
   if ( isset( $_POST['paypal_email'] ) )
   {
      $options['withinweb_keycodes_paypal_email'] = sanitize_text_field( $_POST['paypal_email'] );
   }
   
   if ( isset( $_POST['cancel_url'] ) )
   {
      $options['withinweb_keycodes_cancel_url'] = sanitize_text_field( $_POST['cancel_url'] );
   }

   if ( isset( $_POST['return_url'] ) )
   {
      $options['withinweb_keycodes_return_url'] = sanitize_text_field( $_POST['return_url'] );
   }
   
   update_option( 'withinweb_keycodes_op_array', $options );   
   wp_redirect(  admin_url( 'admin.php?page=withinweb_keycodes/withinweb_keycodes.php_settings&m=1' ) );

   exit;
}
//--------------------------------------------------------
//Environment settings
function process_withinweb_keycodes_environment()
{
   if ( !current_user_can( 'manage_options' ) )
   {
      wp_die( 'You are not allowed to be on this page.' );
   }

   // Check the nonce field
   if (!check_admin_referer( 'withinweb_keycodes_op_verify', 'withinweb_keycodes_environment' ))
   {
	   exit();
   }
   
   $options = get_option( 'withinweb_keycodes_environment_array' );

   if ( isset( $_POST['environment'] ) )
   {
      $options['withinweb_keycodes_paypal_environment'] = sanitize_text_field( $_POST['environment'] );
   }

	//echo($_POST['environment']);

   update_option( 'withinweb_keycodes_environment_array', $options );   
   wp_redirect(  admin_url( 'admin.php?page=withinweb_keycodes/withinweb_keycodes.php_settings&m=1' ) );

   exit;	
}

?>