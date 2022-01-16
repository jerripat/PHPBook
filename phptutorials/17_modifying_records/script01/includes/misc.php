<?php

//escape data inputs 
function mysqli_escape($data, $link) {
if ( get_magic_quotes_gpc() ) {
	$data = stripslashes($data);
	}
	$data = htmlspecialchars($data, ENT_NOQUOTES);
	return mysqli_real_escape_string($link, $data);
}

?>
