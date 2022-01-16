<h1>Chapter 12 Database Access</h1>

<p>Fetch SQL Query first_name and last_name</p>
<p>&nbsp;</p>

<?php

//Example of fetching data from a database using mysqli_connect
//paul@paulvgibbs.com

//Make a connection to the database
//databasehostname is usually "localhost"
$link = mysqli_connect("databasehostname", "databaseusername", "databasepassword", "databasename");

//Check the connection
if (!$link) {
    printf("Could not connect to database: %s\n", mysqli_connect_error());
    exit();
}

//Create the sql query
$query = "SELECT * FROM staff ";

//Execute the query against the database 
$result = mysqli_query( $link, $query );

if (!$result) {  //Display any error message 
    printf("Error in connection: %s\n", mysqli_error($link));
	exit();
}

//Fetch the result into an associative array
while ( $row = mysqli_fetch_assoc( $result ) ) {
	$table[] = $row;	//add each row into the table array
}

//Display the rows
if ($table) { //Check if there are any rows to be displayed
	//Retrieve each element of the array
	foreach($table as $d_row) {
		echo( $d_row["first_name"] . " " . $d_row["last_name"] . "<br/>" );
	}	
}
else
{
	echo("No rows to be displayed");
}

//Close the connection
mysqli_close($link);

?>