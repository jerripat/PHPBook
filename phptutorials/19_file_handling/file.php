<?php  

//file.php

	$filename = "data.txt";	

	if  (  !$fp = fopen($filename, "r") )
	{
		die ("cannot open file $filename");	
	}  

	fclose($fp);

?>
