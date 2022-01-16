<?php

//escape data inputs 
function mysqli_escape($data, $link) {

	$data = htmlspecialchars($data, ENT_NOQUOTES);
	return mysqli_real_escape_string($link, $data);
}

?>
