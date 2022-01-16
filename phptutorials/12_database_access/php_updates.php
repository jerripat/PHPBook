<h1>Chapter 12 Database Access</h1>

<p>Updates</p>
<p>&nbsp;</p>

<?php

//Example of manipulating data in a database
//Use for INSERT, UPDATE OR DELETE SQL queries
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
$query = " INSERT INTO staff (loginid, first_name, last_name, email, start_date) VALUES ('blogsf', 'Fred', 'Blogs', 'fred@mysite.com', '2012-04-03') ";

//Execute the query against the database 
$result = mysqli_query( $link, $query );

if (!$result) {  //Display any error message 
    printf("Error in connection: %s\n", mysqli_error($link));
	exit();
}

//Get the number of rows affected
$num_rows = mysqli_affected_rows($link);
echo("<p>Number of rows affected : $num_rows</p>");

//Return the number of the automatically incremented field after the insert statement
$recid = mysqli_insert_id($link);

echo("<p>Record id of new row : $recid</p>");

//Close the connection 
mysqli_close($link);

?>