<?php

//Simple example to list files in a given folder
//This will display all the content of $basefolder
//but will not display the folder references . and .. 
//nor will it display current file name.

$basefolder = getcwd();

if ($handle = opendir($basefolder)) {
    echo "<p>Directory entries for <strong>$basefolder</strong></p>";

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
	
		if ( ($entry != ".") && ($entry != "..") && ($entry != basename($_SERVER['PHP_SELF'])) )
		{	
	        echo "$entry<br/>";
		}
    }
 
    closedir($handle);
	
}
?>