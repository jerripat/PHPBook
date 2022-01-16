<?php

	//file2.php

	$filename = "data.txt";	

	if  (  !$fp = fopen("data.txt", "w+") )
	{
		die ("cannot open file $data.txt");	
	}
	
	fwrite($fp, "this is some text\r\n");
	fwrite($fp, "this is some more text\r\n");
	fwrite($fp, "this is even more text\r\n");

	fclose($fp);
	
 	$file_handle = fopen("data.txt", "rb");

	while (!feof($file_handle) ) {
		$line_of_text[] = fgets($file_handle);
	}

	fclose($file_handle);	

	foreach ($line_of_text as $key => $value) {
		echo($value . "<br/>");
	}

	
?>

