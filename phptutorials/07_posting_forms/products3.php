<!DOCTYPE HTML>
<head>
<meta charset=utf-8" />
<title>Product item details</title>
</head>

<body>

<h1>Chapter 7 Posting Forms - Product Item Details</h1>

<?php

//paul@paulvgibbs.com

if (isset($_POST["Submit"]))
{

	$item = $_POST["item"];
	$cost = $_POST["cost"];
	$tax = $_POST["tax"];


	if ( isset($_POST["item"]) && is_numeric($_POST["cost"]) && is_numeric($_POST["tax"]) )
	
      	{
		$totalcost = calctax($cost, $tax);
		echo("The cost of the item $item is " . number_format($totalcost, 2));
      	}
      	else
      	{
			echo("Re-enter data");
      	}

}

?>


<form name="product" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

	<p>Product item name <input type="text" name="item" size="20" /></p>

	<p>Product cost <input type="text" name="cost" size="10" /></p>
    
    	<p>Tax value <input type="text" name="tax" size="10" /> %</p>

	<p><input type="submit" name="Submit" value="Submit" /></p>

</form>


</body>
</html>

<?php
function calctax($cost, $tax)
{

	$tax = ($tax / 100) * $cost;
	$totalcost = $tax + $cost;

return $totalcost;
}
?>

