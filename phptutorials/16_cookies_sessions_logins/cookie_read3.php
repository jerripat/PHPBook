<?php

	
	if (isset($_COOKIE['cookieproducts'])) {

    		foreach ($_COOKIE['cookieproducts'] as $name => $value) {
        		$name = htmlspecialchars($name);
        		$value = htmlspecialchars($value);
        		echo "$name : $value <br />\n";
    		}

	}


?>


