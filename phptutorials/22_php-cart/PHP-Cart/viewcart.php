<?php session_start();

	
//----------------------------------------------
require_once("includes/error.php");
require_once("dbclass/Dbpdo.class.php");
require_once("functions/misc.php");
require_once("functions/cart.php");
require_once("classes/clsinput.php");
//----------------------------------------------
	
$submitAction	= input::get('action');
$submitRecid	= input::get('recid');

if ( isset( $_SESSION['from'] ) ) {
	$submitFromURL = $_SESSION['from'];
}
else {
	$submitFromURL	= input::get('from');
}

switch($submitAction) {

	case "add":
		if ( checkrecid($submitRecid) != 0 ) {
			//$physical = getisphysicalrecid($submitRecid);
			$physical = 1;		//always physical in this system.
			add($submitRecid, $submitFromURL, $physical);
		}				
		display($submitFromURL, "");
		break;

	case "remove":
		remove($submitRecid);
		display($submitFromURL, "");
		break;

	case "increase";

		increase($submitRecid);
		display($submitFromURL, "");				
		break;

	case "decrease";
		decrease($submitRecid);
		display($submitFromURL, "");				
		break;

	default:
		display($submitFromURL, "");			
		break;

}

//-------------------------------------------------
function display($from, $mess) {

require_once("includes/header.php");
require_once("includes/menu.php");

?>
    
	<div class="container">    
		  
		<div class="shoppingproducts">
			
			<div class="row">
				<div class="col-md-2">&nbsp;</div>  					
   				<div class="col-md-8"><img src="assets/shopping_cart.png" alt="Shopping cart image" class="img-fluid" /></div>
				<div class="col-md-2" style="line-height:10%;">&nbsp;</div>
			</div>       	
			
			<div class="row">
				<div class="col-md-2" style="line-height:10%;">&nbsp;</div>
            	<div class="col-md-8"><hr></div>
				<div class="col-md-4" style="line-height:10%;">&nbsp;</div>
			</div>						

			<div class="row">
				<div class="col-md-2" style="line-height:10%;">&nbsp;</div>
				<div class="col-md-8">
						<h4>Your Shopping Cart...</h4>
						<p><strong><?php if ($mess != "") { echo($mess); }?></strong></p>
				</div>
				<div class="col-md-2" style="line-height:10%;">&nbsp;</div>
			</div>

			<?php
			if (isset($_SESSION['session_cart'])) {
			?>

					<div class="row">
			
						<div class="col-md-2" style="line-height:20%;">&nbsp;</div>
						<div class="col-md-2" style="background-color:#dcdbdb"><strong>Item</strong></div>
						<div class="col-md-1" style="background-color:#dcdbdb"><strong>Qty</strong></div>
						<div class="col-md-1" style="background-color:#dcdbdb"><strong>Inc</strong></div>
						<div class="col-md-1" style="background-color:#dcdbdb"><strong>Dec</strong></div>
						<div class="col-md-2" style="background-color:#dcdbdb"><strong>Price</strong></div>
						<div class="col-md-2" style="background-color:#dcdbdb"><strong>Remove</strong></div>
						<div class="col-md-1" style="line-height:20%;">&nbsp;</div>

					</div>

					<?php
					
							$total_price = 0;

							//-----------------------------------------------
							//foreach ( $_SESSION['session_cart'] as $value ) {			
							for ($i=0; $i<count($_SESSION['session_cart']); $i++ ) {

								$value 		= $_SESSION['session_cart'][$i][0];		//the product record id
								$quantity 	= $_SESSION['session_cart'][$i][1];		//the product item quantity

								$items = getproductdetails($value);				
								$item_amount = $items[0]['mc_gross']*$_SESSION['session_cart'][$i][1];		//cost of item with quantity
								$total_price  += $item_amount;			

								//echo("total price : $total_price");
								//echo(" record id : $value");
								//echo(" quantity  : $quantity");
								//exit;

								?>

									<div class="row">
										<div class="col-md-2" style="line-height:40%;">&nbsp;</div>
										<div class="col-md-2" style="background-color:#efefef"><?php echo($items[0]['item_name']); ?></div>
										<div class="col-md-1" style="background-color:#efefef"><?php echo($quantity); ?></div>
										<div class="col-md-1" style="background-color:#efefef"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=increase&amp;recid=<?php echo($value); ?>"><img src="assets/cart_add.gif" width="10" height="10" border="0" alt="increase by 1" /></a></div>
										<div class="col-md-1" style="background-color:#efefef"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=decrease&amp;recid=<?php echo($value); ?>"><img src="assets/cart_subtract.gif" width="10" height="10" border="0" alt="decrease by 1" /></a></div>
										<div class="col-md-2" style="background-color:#efefef"><?php echo($items[0]['currency']); ?>&nbsp;<?php echo( sprintf("%01.2f", $items[0]['mc_gross'] * $quantity ) ); ?></div>
										<div class="col-md-2" style="background-color:#efefef"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=remove&amp;recid=<?php echo($value); ?>"><img src="assets/trash_can.gif" width="23" height="23" border="0" alt="remove item from cart"></a></div>
										<div class="col-md-1" style="line-height:40%;">&nbsp;</div>
									</div>	
	
								<?php
								}
								//-----------------------------------------------
								$_SESSION['session_total_price'] = $total_price;
								?>

									<div class="row">
										<div class="col-md-7" style="line-height:40%;">&nbsp;</div>
										<div class="col-md-2" style="background-color:#dcdbdb"><strong>Total <?php echo($items[0]['currency']); ?>&nbsp;<?php echo(sprintf("%01.2f", $total_price)); ?></strong></div>
										<div class="col-md-3" style="line-height:40%;">&nbsp;</div>										
									</div>

								<?php


					?>

			<?php
			} else {
			
				?>

				<div class="row">
					<div class="col-md-12">&nbsp;</div>
				</div>

			    <div class="row">
					<div class="col-md-2" style="line-height:40%;">&nbsp;</div>
					<div class="col-md-8"><h5>The cart is empty</h5></div>
					<div class="col-md-2" style="line-height:40%;">&nbsp;</div>
				</div>

				<div class="row">
					<div class="col-md-12">&nbsp;</div>
				</div>

				<?php

			}
			?>

			<div class="row">
			  <div class="col-md-2" style="line-height:30%;">&nbsp;</div>
			  <div class="col-md-8"><< <a href="<?php echo($from) ?>">Continue shopping</a></div>
			  <div class="col-md-2" style="line-height:20%;">&nbsp;</div>
			</div>

			<div class="row">
				<div class="col-md-12">&nbsp;</div>
			</div>


				<?php

					//--------------------------------------------------
					//Display checkout button for PayPal
					if (isset($_SESSION['session_cart'])) {
					
						?>
							<form action="ipn/process.php" method="post">	

							   <div class="row">
									<div class="col-md-6" style="line-height:40%;">&nbsp;</div>
									<div class="col-md-4">
										<input type="hidden" name="cmd" value="_cart">
										<input type="image" src="assets/secure_checkout_paypal.gif" name="submit" value="Secure Checkout"  alt="Secure Checkout PayPal" />
									</div>
									<div class="col-md-2" style="line-height:40%;">&nbsp;</div>
								</div>

								<div class="row">
									<div class="col-md-3" style="line-height:10%;">&nbsp;</div>
									<div class="col-md-8">

									<h4>Purchasing from us...</h4>
									<p>We use PayPal because it is secure and accepts payment from many credit cards.</p>

									<p>The complete transaction is handled by the PayPal secure server system. PayPal is responsible
										for handling the credit card and other payment details.</p>

									<p>If you have not purchased anything through PayPal before, you will be able to register, or you may purchase
										by credit card without registering.</p>

									<p><strong>MAKE SURE THAT THE EMAIL ADDRESS YOU ENTER INTO PAYPAL IS VALID.</strong></p>

									</div>

									<div class="col-md-1" style="line-height:10%;">&nbsp;</div>
								</div>

								 <div class="row">
									<div class="col-md-12">&nbsp;</div>
								 </row>

							</form>
						<?php

					}

				?>
			
			<div class="row">
				<div class="col-md-12">&nbsp;</div>
			</div>

			<div class="row">
				<div class="col-md-12">&nbsp;</div>
			</div>

		</div> <!-- shoppingproducts -->

		<?php
        require_once("includes/copyright.php");
        ?>

	</div> <!-- End Container -->
          
<?php
require_once("includes/footer.php");
?>

<?php
}

?>