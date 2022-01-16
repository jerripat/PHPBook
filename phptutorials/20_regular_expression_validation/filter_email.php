<?php  

//Validate an email address in PHP 5.2.0 onwards
	  
$email_address = "me@example.com";  
if (filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
// The email address is valid  
   echo("Valid");
} else {  
// The email address is not valid  
   echo("Not valid");
}  
	
?>  
