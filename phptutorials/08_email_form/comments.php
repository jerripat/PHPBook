<h1>Chapter 8 Email Form - Comments Form</h1>

<?php 

// A simple email form
//paul@paulvgibbs.com

//Check the form has been submitted
if(isset($_POST['submitted'])) {

	$errors = array(); //initialise an error array.

	//Check for a name
	if(empty($_POST['name'])) {
		$errors[] = "Enter your name.";
	}

	//Check for an email address
	if(empty($_POST['email'])) {
		$errors[] = "Enter your email address.";
	}

	//Check for comments
	if(empty($_POST['comments'])) {
		$errors[] = "Enter your comments.";
	}
	

	if(empty($errors)) {// If there are no errors

	// send the comments

	$to = "me@mysite.com";	//your email address		
	$body = "The following comments were entered on the web site\n\n" . $_POST['name'] . "\n\n" . $_POST['email'] . "\n\n" . $_POST['comments'];
	mail($to, 'Comments from web site' , $body, 'From: admin@site.com'); 

	echo '<h1>Thank you</h1>
	<p>Thank you for your comments. We will contact you as soon as possible.</p><p><br /></p>';

	} else { //Report the errors.
			
		?>
		<h2>Error</h2>
		<p>The following error(s) occurred:</p> 
       	<?php			
		echo("<p>");	
		foreach ($errors as $msg) {
			echo " - $msg<br />\n";
		}
		echo("</p>");
		echo "<p>Correct your error and try again</p><br/><br/>";
				
		unset($errors);
	}

} else { 

	//Display the form
	?>
	<h2>Register</h2>
	<form action="comments.php" method="post">
		<p>Name: <input type="text" name="name" size="20" maxlength="40"/></p>
		<p>Email Address: <input type="text" name="email" size="20" maxlength="40"/></p>
	    <p>Comments: <textarea name="comments" cols="60" rows="8" ></textarea></p>
		<p><input type="submit" name="submit" value="register"/></p>
		<p><input type="hidden" name="submitted" value="TRUE"/></p>
	</form>
	<?php
}
?>
