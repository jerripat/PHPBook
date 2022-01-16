<?php

	//An array of items, note that the names should not have spaces as the name with be the name of the cookie

	$products = array ("shirtlarge", "shirtsmall", "computermouse");

	foreach($products as $item)
	{
		setcookie("cookieproducts[$item]", $item, time() + (60*60*24));
	}

?>