<?php

//Delete a record
//paul@paulvgibbs.com

//Connect to the database.
require_once('includes/connect.php'); 

//collect the user_id either from a get statement or from a post statement
if ( isset($_GET["user_id"]) || isset($_POST["user_id"]) ) {
	
	if ( isset($_GET["user_id"]) ) {
		$user_id = $_GET["user_id"];
	}
	else {
		$user_id = $_POST["user_id"];
	}
	
	if (!is_numeric($user_id)) {	
		exit;
	}

}
else
{
	exit;
}


if ( isset($_POST["action"]) ) {

	if ( $_POST["action"] == "Yes" ) {
	
		$query = " DELETE FROM feedback WHERE user_id = $user_id ";
		$result = mysqli_query( $link, $query );

		if ($result) { // If it worked, then display a message or send an email.
			$message = 'Record deleted';
			displayform($message, $user_id);
			exit();			
		} else { // If there is a problem, then display an error message
			$message = 'Error in feedback table - ' . mysqli_error($link) . ''; 
			displayform($message, $user_id);
			exit(); 
		}
	
	}
	else
	{
		displayform("Action cancelled", $user_id);
	}	

}
else
{
		displayform("Are you sure you want to delete this record?", $user_id);
}


//-------------------------------------------------------
function displayform($message, $user_id) {

$pagetitle = 'Delete a feedback entry';
include ('includes/header.php');  //the header

?>
	<h1>User feedback</h1>
<?php

// Print the message if there is one.
if (isset($message)) {
	echo '<font color="red"><p>'. $message . '</p></font>';
}

?>

<h2>Delete this record -  Select Yes or Cancel</h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<input type="hidden" name="user_id" value="<?php echo($user_id); ?>" />

<p><strong>Delete :</strong><input type="submit" name="action" value="Yes" /></p>

<p><strong>Cancel :</strong><input type="submit" name="action" value="Cancel" /></p>

</form>

<?php

include ('includes/footer.php'); // the footer

}
//-------------------------------------------------------
?>