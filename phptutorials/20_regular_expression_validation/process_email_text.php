<?php

$text = "this is 
a test";

echo( process_email_text( $text) );


//-----------------------------------------------------
// Remove characters that are not required
function process_email_text($text)
{

	$find = array(
		"/\r/",
		"/\n/",
		"/\x0a/",
		"/\x0d/"
		);

  	$name = preg_replace($find, ' ', $text);

	return $name;

}

?>