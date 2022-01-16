<?php

//Validates value against regexp, a Perl-compatible regular expression

is_valid_name("John Lennon");

echo("<br/>");

is_valid_comments("John Lennon was a song composer");


//----------------------------------------------
//Validate name as 3 to 20 characters a-Z ' and - characters and space
function is_valid_name($words)  
{
$res = array( "options"=>array( "regexp"=> '/^[a-zA-Z \-\']{3,20}+$/' ) );

if ( filter_var( $words, FILTER_VALIDATE_REGEXP, $res ) )
     echo("Passed");  
   else  
     echo("Failed");
}  
	  
//-----------------------------------------------
//Validate name as 0 to 255 characters a-Z ' and - characters and space
function is_valid_comments($words)  
{
$res = array( "options"=>array( "regexp"=> '/^[a-zA-Z \-\']{0,255}+$/' ) );

if (filter_var( $words, FILTER_VALIDATE_REGEXP, $res ) )
    echo("Passed");  
   else  
    echo("Failed");
}


?>
