<h1>Chapter 7 Posting Forms - string test</h1>

<form name="frmTelNo" method="post" action="istelnoform.php">

	Telephone number <input type="text" name="telno" />
    <br>
    <input type="submit" name="Submit" value="Submit" />    

</form>

<?php

if (isset($_POST["telno"]))
{
	if ( istelno($_POST["telno"]))
	{
		echo("Is a valid telephone number");
	}
	else
	{
		echo("Not a valid telephone number");	
	}
}

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

