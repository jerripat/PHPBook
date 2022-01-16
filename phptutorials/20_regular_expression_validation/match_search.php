<?php  
//-------------------------------------------------
if (preg_match("/ll/", "Hello World!", $matches)) {  
    echo "<br/>Match was found <br />";  
    echo $matches[0];  
}  
//-------------------------------------------------  
?>  
