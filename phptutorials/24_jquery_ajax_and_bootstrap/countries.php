<?php

$arr = array(
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
        ),
     array(
        "countryid" => "AU",
        "country" => "Australia",
	 "currency" => "AUD"
        ),
    array(
        "countryid" => "JM",
        "country" => "Jamaica",
	 "currency" => "JMD"
        )

);

echo json_encode($arr);

?>