<?php 

//This script displays all the comments 
//from the feedback table
//paul@paulvgibbs.com

//This version has been modified to include links 
//to reference for update and delete a record

$pagetitle = 'Feedback display';
include ('includes/header.php');  //the header

?>
	<h1>User feedback</h1>
<?php

require_once ('includes/connect.php'); // Connect to the db.

//Create the SQL query
$query = "SELECT user_id, first_name, last_name, email, 
comments FROM feedback ORDER BY feedback_date ASC";

$result = mysqli_query( $link, $query );

if (!$result) {
    printf("Error in connection: %s\n", mysqli_error($link));
	exit();
}

//Fetch the result into an associative array
while ( $row = mysqli_fetch_assoc( $result ) ) {
	$table[] = $row; //add each row into the table array
}


?>
<table>
<tr>
	<td><strong>First Name</strong></td>
    <td width="10">&nbsp;</td>
	<td><strong>Last Name</strong></td>
    <td width="10">&nbsp;</td>    
	<td><strong>Email</strong></td>
    <td width="10">&nbsp;</td>    
   	<td><strong>Comments</strong></td>
    
    <td width="10">&nbsp;</td>    
    <td><strong>Edit</strong></td>
    <td width="10">&nbsp;</td>    
    <td><strong>Delete</strong></td>
    
</tr>
<?php

if ($table) {	//Check if there are any rows to be displayed
	//Retrieve each element of the array
	foreach($table as $d_row) {
	
		?>
		<tr>        
        	<td><?php echo($d_row["first_name"]); ?></td>
        	<td width="10">&nbsp;</td>
        	<td><?php echo($d_row["last_name"]); ?></td>
        	<td width="10">&nbsp;</td>
        	<td><?php echo($d_row["email"]); ?></td>
        	<td width="10">&nbsp;</td>
        	<td><?php echo($d_row["comments"]); ?></td>        	
           
           	<td width="10">&nbsp;</td>
			<td><?php echo("<a href='edit_feedback.php?user_id=" . $d_row["user_id"] . "'>Edit</a>"); ?></td>
 			<td width="10">&nbsp;</td>
			<td><?php echo("<a href='delete_feedback.php?user_id=" . $d_row["user_id"] . "'>Delete</a>"); ?></td>
            
        </tr>
        <?php
		
	}	
}

?>
</table>

<p>Number of records : <?php echo(mysqli_num_rows($result)); ?></p>

<?php

mysqli_close($link);

?>
<br/><br/><br/><br/>
<?php

include ('includes/footer.php'); // the footer
?>
