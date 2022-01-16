<?php

	//file1.php

	$filename = "data.txt";	

	if  (  !$fp = fopen($filename, "w+") )
	{
		die ("cannot open file $data.txt");	
	}  

	fwrite($fp, "this is some text");

	fclose($fp);

?>
