<?php  

echo("Validate: " . validate_phone("0139 2372873") . "<br/>");

echo("Validate: " . validate_phone("a 01392 372873") . "<br/>");

//-------------------------------------------------  
/** 
* Purpose : Check input for particular characters
* Only allow 0-9 , and space
* returns false if invalid characters were found
* @return boolean
*/  
function validate_phone($words) {  
	  
   // The ^ defines the start of the string so the string   
   // from the start has to have 0-9 or a space  
   if ( preg_match( "/[^0-9 ]/", $words, $array ) )   
     return false;     //invalid characters  
   else   
     return true;    //valid characters
   }  
?> 
