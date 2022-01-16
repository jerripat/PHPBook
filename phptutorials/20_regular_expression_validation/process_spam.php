<?php

//---------------------------------------------------
//Script to test if text has email spam specific text.

$text = "paulvgibbs@yahoo.co.uk";
if ( process_spam( $text ) )
{
	echo("is spam<br/>");	
}
else
{
	echo("OK<br/>");	
}


$text = "paulvgibbs@yahoo.co.uk\r\n Cc: paulvgibbs@hotmail.com, paulvgibbs@o2.co.uk\r\n";
if ( process_spam( $text ) )
{
	echo("is spam<br/>");	
}
else
{
	echo("OK<br/>");	
}


//-----------------------------------------------------
// Check email text for any spam values
function process_spam($text)
{

	$find = array(
		"Content-Type:",
		"mime-version",	
		"bcc:",  
		"cc:",
		"to:"		
		); 
		
	foreach ($find as $value) {
	    	if ( stripos($text, $value) > 0 )
			{
			return true;
			}
	}		
	
	return false;

}

?>