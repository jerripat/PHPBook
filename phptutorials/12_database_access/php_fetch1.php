<h1>Chapter 12 Database Access</h1>

<p>Fetch SQL Query into an HTML table</p>
<p>&nbsp;</p>

<?php

//Example of fetching data from a database
//Display is output into an HTML table
//paul@paulvgibbs.com

//Make a connection to the database
//databasehostname is usually "localhost"
$link = mysqli_connect("databasehostname", "databaseusername", "databasepassword", "databasename");

//Check the connection
if (!$link) {
    printf("Could not connect to database: %s\n", mysqli_connect_error());
    exit();
}

//Make the sql query
$query = "SELECT * FROM staff";

//Execute the query against the database
$result = mysqli_query( $link, $query);

if (!$result) {
    printf("Error in connection: %s\n", mysqli_error($link));
	exit();
}

//Fetch the result into an associative array
while ( $row = mysqli_fetch_assoc( $result ) ) {
	$table[] = $row;	//add each row into the table array
}

echo("<h1>Chapter 12 Database Access</h1>");
echo("<p>Fetch SQL Query into an HTML table<br/></p>");

if ($table) {	//Check if there are any rows to be displayed
?>
<table>
<tr>
	<td>First Name</td>
	<td>Last Name</td>
	<td>Email</td>        
</tr>
<?php

	//Retrieve each element of the array
	foreach($table as $d_row) {
	
		?>
        <tr>
        	<td><?php echo($d_row["first_name"]); ?></td>
        	<td><?php echo($d_row["last_name"]); ?></td>
        	<td><?php echo($d_row["email"]); ?></td>
		</tr>         
        <?php	

	}	

?>
</table>
<?php
}

//Close the connection
mysqli_close($link);

?>