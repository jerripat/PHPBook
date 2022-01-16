<?php

echo ( is_valid_email("me@somewhere.com") );

//-----------------------------------------------------  
//validate email address  
function is_valid_email($emailaddress)  
{
if (filter_var( $emailaddress, FILTER_VALIDATE_EMAIL )) {
    return true;  
   } else {  
    return false;  
   }  
}  

?>

