<?php

//paul@paulvgibbs.com

$message = "";

//If a file was uploaded:
if($_FILES['photo']['name'])
{

	//if no errors...
	if(!$_FILES['photo']['error'])
	{
		//Get the name of the temp file
		$temp_file_name = $_FILES['photo']['tmp_name']; 
		//Defines max file size of 1 Mbytes
		if($_FILES['photo']['size'] > (1024000)) 
		{
			$message .= 'Your file is too large';
		}
		else
		{		
			
			if ( !preg_match('/\\.(png|jpg|gif)$/i', $_FILES['photo']['name']) )
			{
				$message .= "Wrong file type.";
			}
			else
			{			
				//Move the file to the uploads folder
				//full path of destination folder is the current folder name;
				$destination = getcwd() . "/";	
				move_uploaded_file($_FILES['photo']['tmp_name'], $destination.$_FILES['photo']['name']);
				$message .= 'The file has been uploaded.';
			}
			
		}
		
	}
	//If there is an error
	else
	{
		//Define the returned message
		$message .= 'Your upload triggered the following error:  '.$_FILES['photo']['error'];
	}
}

echo($message);


echo("<br/>");
echo("<br/>");
echo("===============================================<br/>");
echo("Debug information<br/>");
echo("Name of upload file: " . $_FILES['photo']['name'] . "<br/>");
echo("<br/>");
echo("Name of temp file " . $temp_file_name) . "<br/>";
echo("<br/>");
echo("Destination: " . $destination.$_FILES['photo']['name']) . "<br/>";
echo("===============================================<br/>");
echo("<br/>");
echo("<br/>");
//echo(phpinfo());

?>