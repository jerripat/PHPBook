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

	$tax = ($tax / 100) * $cost;
	$totalcost = $tax + $cost;

	echo("The cost of the item $item is $totalcost which includes tax of $tax");
}

?>


<form name="product" method="post" action="products1.php">

	<p>Product item name <input type="text" name="item" size="20" /></p>

	<p>Product cost <input type="text" name="cost" size="10" /></p>
    
    	<p>Tax value <input type="text" name="tax" size="10" /> %</p>

	<p><input type="submit" name="Submit" value="Submit" /></p>

</form>


</body>
</html>
