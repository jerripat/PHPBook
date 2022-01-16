<h1>Chapter 12 Database Access</h1>

<p>Return an array</p>
<p>&nbsp;</p>

<?php

//Example of returning a user array function
//paul@paulvgibbs.com

$users = user_array();

if ($users) {	//Check if there are any rows to be displayed
	//Retrieve each element of the array
	foreach($users as $d_row) {
		echo( $d_row["first_name"] . " " . $d_row["last_name"] . "<br/>" );
	}	
}


//---------------------------------------------------
/*
* Returns an array 
*/
function user_array()
{

	//Make a connection to the database
	$link = mysqli_connect("databasehostname", "databaseusername", "databasepassword", "databasename");
	
	//Check the connection
	if (!$link) {
	    printf("Could not connect to database: %s\n", mysqli_connect_error());
    	exit();
	}
	
	//Create the sql query
	$query = "SELECT * FROM staff ";

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

	//Close the connection
	mysqli_close($link);

	//Return an array
	return $table;

}
//---------------------------------------------------

?>