<?php
	
$name = "<strong>Paul Gibbs</strong> <script</script>";
echo ( filter_var($name, FILTER_SANITIZE_STRING) );
	
?>  
