<?php

echo( is_valid_input( "Test values" ) . "<br/>");

echo( is_valid_input( "Test values $" ) . "<br/>");

//----------------------------------------   
/** 
* Purpose : Check input for particular  characters 
* Only allow a - z, A - Z , 0-9 , and space 
* returns false if invalid characters were found
* @return boolean
*/
function is_valid_input($words) {  

if ( preg_match( "/[^0-9a-zA-Z, ]/", $words, $array ) )
    return false;  //invalid characters
      else
    return true;  //valid characters  

}  
?>  
