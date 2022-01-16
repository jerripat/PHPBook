<?php  

//This script allows a user to enter in details 
//into a form and then post it to the database.
//The script could be used for any situation 
//that requires data request from user.
//paul@paulvgibbs.com

//This version includes the escape data function in an include file
//and a check to see of the email address has already been entered.

// connect to the database.
require_once('includes/connect.php'); 
require_once('includes/misc.php');  // escape data function added

//Check if the form has been posted, 
//if not then display the form
if (isset($_POST['submit'])) { 	

	// Check if the first name has been entered.
	if (empty($_POST['first_name'])) {
		$message = 'Please enter your first name';
	 	displayform($message); //Display error message
		exit();
	} else {
		$first_name = mysqli_escape($_POST['first_name'], $link);
	}
	
	// Check if the last name has been entered
	if (empty($_POST['last_name'])) {			
		$message = 'Enter your last name';
		displayform($message); //Display error message		
		exit();
	} else {
		$last_name = mysqli_escape($_POST['last_name'], $link);
	}
	
	// Check if the email address has been entered
	if (empty($_POST['email'])) {
		$message = 'Enter your email address';
		displayform($message); //Display error message	
		exit();
	} else {
		$email = mysqli_escape($_POST['email'], $link);	
	}

	// Check if any comments have been entered
	if (empty($_POST['comments'])) {		
		$message = 'Enter your comments';
		displayform($message); //Display error message	
		exit();
	} else {
		$comments = mysqli_escape($_POST['comments'], $link);
	}
	
	//Check for previous comments by this email address
	$query = "SELECT user_id FROM feedback WHERE email = '$email'";		
	$result = mysqli_query( $link, $query );		
	if (!$result) {
    	printf("Error in connection: %s\n", mysqli_error($link));
		exit();
	}	
	if (mysqli_num_rows($result) > 0) {
		$message = 'You have already entered a comment';
		displayform($message);	
		exit();			
	}
	
	//Check if all entries have been entered
	//We may also want to do more data validation on the inputs
	if ($first_name && $last_name && $email && $comments) { 
		
		// Create the SQL 
		$query = "INSERT INTO feedback (first_name, last_name, email, comments, 
		feedback_date) VALUES ('$first_name', '$last_name', '$email', 
		'$comments', NOW() )";
		
		$result = mysqli_query( $link, $query );

		//Check the result and do other processing such as sending an email
		if ($result) { 
			$message = 'Thank you for your feedback';
			displayform($message);
			exit(); 
			
		} else { // If there is a problem, then display an error message
			$message = 'Please try again - ' . mysqli_error($link) . ''; 
			displayform($message);
			exit(); 
		}
		
	} else {
		$message .= 'You have not filled in all the required fields';	
		displayform($message);
		exit(); 
	}

} 
else
{
	displayform("&nbsp;");	//Display the form without a message
}

mysqli_close($link);

//------------------------------------------------------------
//This is the form
function displayform($message) {

  // Display the message if there is one.
  if (isset($message)) {
	echo '<font color="red"><p>'. $message . '</p></font>';
  }

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<table>

<tr>
<td colspan="2"><h2>Please enter your feedback</h2></td>
</tr>

<tr>
<td><p><strong>First Name:</strong></p></td>
<td><input type="text" name="first_name" size="30" maxlength="30" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" /></td>
</tr>

<tr>
<td><p><strong>Last Name:</strong></p></td>
<td><input type="text" name="last_name" size="30" maxlength="30" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>" /></td>
</tr>

<tr>
<td><p><strong>Email Address:</strong></p></td>
<td><input type="text" name="email" size="40" maxlength="40" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" /></td>
</tr>

<tr>
<td><p><strong>Comments:</strong></p></td>
<td><textarea name="comments" rows="7" cols="48" value="<?php if (isset($_POST['comments'])) echo $_POST['comments']; ?>" /></textarea></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="submit" value="Submit" /></td>
</tr>

</table>

</form>
<?php
}
//------------------------------------------------------------
?>


