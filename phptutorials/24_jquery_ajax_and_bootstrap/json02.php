<?php
$countries = array(
    array(
        "countryid" => "UK",
        "country" => "United Kingdom",
	"currency" => "GBP"
    ),
    array(
        "countryid" => "FR",
        "country" => "France",
	"currency" => "EUR"
    ),
    array(
        "countryid" => "GE",
        "country" => "Germany",
	"currency" => "EUR"
    )
);

echo json_encode($countries);
?>