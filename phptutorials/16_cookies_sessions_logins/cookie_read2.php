<?php

	if (isset($_COOKIE['myname'])) {

		$myname = $_COOKIE['myname'];

		echo($myname);

	}
	else
	{
	
		echo("The cookie is not set");
		
	}

?>