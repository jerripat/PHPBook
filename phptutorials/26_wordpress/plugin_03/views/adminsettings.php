<div class="wrap">
        
	<h2>Settings for the PHP-KeyCodes plugin</h2>
	<p>This page provides you with the set up that is required to use the KeyCodes system.</p>     
    
    <?php
        if ( isset( $_GET['m'] ) && $_GET['m'] == '1' )
        {
    ?>
           <div id='message' class='updated fade'><p><strong>You have successfully updated your settings.</strong></p></div>
    <?php
        }
    ?>    
    
    <?php $options = get_option( 'withinweb_keycodes_op_array' ); ?>    
    <?php $environment = get_option( 'withinweb_keycodes_environment_array' ); ?>
    
    
       	<table class="form-table">
			<tbody>
            	<tr class="form-field form-required">
		        	<th scope="row"><label for="ipn_callback">IPN Call Back URL <span class="description"></span></label></th>
		    	    <td>                      
                        <?php echo $options['withinweb_keycodes_ipn_url']; ?>
					</td>
        		</tr>
			</tbody>        
       	</table>    
     

   	<form method="post" action="admin-post.php">
    
    	<input type="hidden" name="action" value="withinweb_keycodes_environment" />
        <?php wp_nonce_field( 'withinweb_keycodes_op_verify', 'withinweb_keycodes_environment' ); ?>
	
       	<table class="form-table">
			<tbody>
            	<tr class="form-field form-required">
		        	<th scope="row"><label for="paypal_server">PayPal environment <span class="description">(required)</span></label></th>
		    	    <td>                    	
                        
						<select id="environment" name="environment">
              				<option value="">Please select</option>
              				<option value="sandbox" <?php echo $environment['withinweb_keycodes_paypal_environment'] == 'sandbox' ? 'selected="selected"' : ''; ?>>Sandbox - Testing</option>
              				<option value="live" <?php echo $environment['withinweb_keycodes_paypal_environment'] == 'live' ? 'selected="selected"' : ''; ?>>Live - Production</option>
            			</select>
                        
					</td>
        		</tr>
			</tbody>        
       	</table>        
        
        <p class="submit">
        <input type="submit" value="Save" class="button-primary"/>
        </p>        
        
	</form>
        
  	<p>
    	<strong>PayPal Settings:</strong>
  	</p>
  	<form method="post" action="admin-post.php">
    
    	<input type="hidden" name="action" value="withinweb_keycodes_settings" />
        <?php wp_nonce_field( 'withinweb_keycodes_op_verify', 'withinweb_keycodes_settings' ); ?>
    
       	<table class="form-table">
			<tbody>
            	<tr class="form-field form-required">
		        	<th scope="row"><label for="admin_email_address">Admin email address <span class="description"> (required)</span></label></th>
		    	    <td><input type="text" value="<?php echo esc_html( $options['withinweb_keycodes_admin_email'] ); ?>" id="admin_email" name="admin_email" style="width:240px;" ></td>
        		</tr>
                
            	<tr class="form-field form-required">
		        	<th scope="row"><label for="paypal_email_address">PayPal email address <span class="description"> (required)</span></label></th>
		    	    <td><input type="text" value="<?php echo esc_html( $options['withinweb_keycodes_paypal_email'] ); ?>" id="paypal_email" name="paypal_email" style="width:240px;" ></td>
        		</tr>
                
            	<tr class="form-field form-required">
		        	<th scope="row"><label for="cancel_url">Cancel URL <span class="description">(required) </span></label></th>
		    	    <td><input type="text" value="<?php echo esc_html( $options['withinweb_keycodes_cancel_url'] ); ?>" id="cancel_url" name="cancel_url"  style="width:360px;"  ></td>
        		</tr>

            	<tr class="form-field form-required">
		        	<th scope="row"><label for="return_url">Return URL <span class="description">(required) </span></label></th>
		    	    <td><input type="text" value="<?php echo esc_html( $options['withinweb_keycodes_return_url'] ); ?>" id="return_url" name="return_url"  style="width:360px;" ></td>
        		</tr>
	  		</tbody>
		</table>
         
        <p class="submit">
        <input type="submit" value="Save" class="button-primary"/>
        </p>
        
  	</form>
        
</div>
