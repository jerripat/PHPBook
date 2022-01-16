<?php

$products = array(
    array(
        "id" => 2,
        "name" => "Shirts",
	 	"price" => "19.99",

	 "sizes" => array (
			"sizeL" => "4",
			"sizeM" => "2",
			"sizeS" => "1"
		)

    ),
    array(
        "id" => "3",
        "name" => "Socks",
	 	"price" => "2.99",

	 "sizes" => array (
			"sizeXL" => "5",
			"sizeS" => "10"
		)

    ),
    array(
        "id" => "4",
	 	"name" => "T Shirts",
        "price" => "1.99",

	 "sizes" => array (
			"sizeL" => "3",
			"sizeM" => "5"		
		)


    )
);

echo json_encode($products);

?>

