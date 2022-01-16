<h1>Chapter 7 Posting Forms - string test</h1>

<?php

//A string test function
//paul@paulvgibbs.com

if ( istelno("abcdefg") ) { echo("true<br>");	} else { echo("false<br>"); }
if ( istelno("012496536") ) { echo("true<br>");	} else { echo("false<br>"); }

//----------------------------------------------
// function to test if a string is a number and 
//is 5 to 10 characters long  
function istelno($string) {

	if ( is_numeric($string) )
	{
	
		if ( (strlen($string) >= 5) && (strlen($string) <= 10) )
		{		
			return true;			
		}		
		else		
		{
			return false;
		}
		
	}
	else
	{
		return false;		
	}

}
//----------------------------------------------

?>

