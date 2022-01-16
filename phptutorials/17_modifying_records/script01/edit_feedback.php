<?php  

//Version with escape data function added
//paul@paulvgibbs.com

require_once('includes/connect.php'); // Connect to the database.
require_once('includes/misc.php'); // contains the mysqli escape function

//collect the user_id either from a get 
//statement or from a post statement
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


//Check if the form has been posted, 
//if not then display the form
if (isset($_POST['submit'])) { 	

	// Check if the first name has been entered.
	if (empty($_POST['first_name'])) {
		$message = 'Please enter your first name';
		displayform($message, $user_id, $link); //Display error message
		exit();
	} else {
		$first_name = mysqli_escape($_POST['first_name'], $link);
	}
	
	// Check if the last name has been entered
	if (empty($_POST['last_name'])) {			
		$message = 'Enter your last name';
		displayform($message, $user_id, $link); //Display error message		
		exit();
	} else {
		$last_name = mysqli_escape($_POST['last_name'], $link);
	}
	
	// Check if the email address has been entered
	if (empty($_POST['email'])) {
		$message = 'Enter your email address';
		displayform($message, $user_id, $link); //Display error message	
		exit();
	} else {
		$email = mysqli_escape($_POST['email'], $link);	
	}

	// Check if any comments have been entered
	if (empty($_POST['comments'])) {		
		$message = 'Enter your comments';
		displayform($message, $user_id, $link); //Display error message	
		exit();
	} else {
		$comments = mysqli_escape($_POST['comments'], $link);
	}
	
	
	//Check the entries have been entered.  
	//We could also enter in other validation here
	if ($first_name && $last_name && $email && $comments) { // If everything's OK.
		
		// Make the query.
		$query = "UPDATE feedback SET first_name = '$first_name', last_name = '$last_name', 
		email = '$email', comments = '$comments', feedback_date = NOW() WHERE 
		user_id = $user_id";
		
		$result = mysqli_query( $link, $query );

		//Check the result and do other processing such as sending an email
		if ($result) {
			$message = '<p>Feedback updated</p>';
			displayform($message, $user_id, $link);
			exit(); 	
					
		} else { // If there is a problem, then display an error message
			$message = '<p>Error in updating feedback table.</p><p>' . mysqli_error($link) . '</p>'; 
			displayform($message, $user_id, $link);
			exit(); 
		}
	

	} else {
		$message .= '<p>You have not filled in all the required fields</p>';	
		displayform($message, $user_id, $link);
		exit(); 
	}

} // End of the main Submit conditional.
else
{
	displayform("&nbsp;", $user_id, $link);
}

mysqli_close($link);

//------------------------------------------------------------
//This is the form
function displayform($message, $user_id, $link) {

$pagetitle = 'Edit a feedback entry';
include ('includes/header.php');  //the header

?>
	<h1>User feedback</h1>
<?php

   // Print the message if there is one.
   if (isset($message)) {
      	echo '<font color="red"><p>'. $message . '</p></font>';
   }

//collect the data for this given $user_id
$query = " SELECT user_id, first_name, last_name, email, 
comments FROM feedback WHERE user_id = $user_id ";

$result = mysqli_query( $link, $query );

if (!$result) {
    printf("Error in connection: %s\n", mysqli_error($link));
	exit();
}

//Fetch the result into an associative array
while ( $row = mysqli_fetch_assoc( $result ) ) {
	$table[] = $row;	//add each row into the table array
}

if ( count($table) != 1 ) {
	exit;
}
else
{
    //Collect the values from the database
	$first_name = $table[0]["first_name"];
	$last_name = $table[0]["last_name"];
	$email = $table[0]["email"];
	$comments = $table[0]["comments"];
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<input type="hidden" name="user_id" value="<?php echo($user_id); ?>" />

<table>

<tr>
<td colspan="2"><h2>Update the entry</h2></td>
</tr>

<tr>
<td><p><strong>First Name:</strong></p></td>
<td><input type="text" name="first_name" size="30" maxlength="30" value="<?php echo($first_name); ?>" /></td>
</tr>

<tr>
<td><p><strong>Last Name:</strong></p></td>
<td><input type="text" name="last_name" size="30" maxlength="30" value="<?php echo($last_name); ?>" /></td>
</tr>

<tr>
<td><p><strong>Email Address:</strong></p></td>
<td><input type="text" name="email" size="40" maxlength="40" value="<?php echo($email); ?>" /></td>
</tr>

<tr>
<td><p><strong>Comments:</strong></p></td>
<td><textarea name="comments" rows="7" cols="48" value="<?php echo($comments); ?>" /><?php echo($comments); ?></textarea></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="submit" value="Submit" /></td>
</tr>

</table>

</form>

<?php

include ('includes/footer.php'); // the footer

}
//------------------------------------------------------------
?>