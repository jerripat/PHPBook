<h1>Chapter 12 Database Access</h1>

<p>PDO FETCH</p>

<?php

    // Example of fetching data from a database using PDO

    // using the shortcut ->query() method here as there are no variables  
    // in the select statement.
    //paul@paulvgibbs.com

try {
	
	$dbhost = "databasehostname";	//usually localhost
	$dbname	= "databasename";
	$dbusername = "databaseusername";
	$dbpass = "databasepassword";
	
	//Connect to the database
    $dbh = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbusername, $dbpass);
	
	//the sql query
	$sql = "SELECT * FROM staff";
	
	//statment handle
    $sth = $dbh->query($sql);  
      
    //Set the fetch mode  
    $sth->setFetchMode(PDO::FETCH_ASSOC);  
	
	echo("--------------------------------------------<br/>");
	echo("An example of a while loop<br/>");      
    while($row = $sth->fetch()) {  
       	echo( $row["first_name"] . "<br/>" );
      	$table[] = $row;
    }  
	
   $dbh = null;
   
}  catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

echo("<br/><br/>");

echo("--------------------------------------------<br/>");
echo("An example of looping around an array<br/>");

if ($table) {	//Check if there are any rows to be displayed
	//Retrieve each element of the array
	foreach($table as $d_row) {
		echo( $d_row["first_name"] . " " . $d_row["last_name"] . "<br/>" );
	}	
}

echo("--------------------------------------------<br/>");
echo("An example of printing one element from the array<br/>");
echo($table[0]["first_name"]);
	
?>


<?php

	//Example of fetching data from a database using PDO
	
	//This uses a prepared statement using named values and try / catch

try {
	
	$dbhost = "databasehostname";
	$dbname	= "databasename";
	$dbusername = "databaseusername";
	$dbpass = "databasepassword";
	
	$first_name = "%paul%";

	//Connect to the database
    $dbh = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbusername, $dbpass);
	
	//the sql query using a named placeholder
	$sql = "SELECT * FROM staff WHERE first_name LIKE :first_name ";
	
	//statment handle
	$sth = $dbh->prepare($sql);  
	
	$sth->execute(array(":first_name" => $first_name));

    $sth->setFetchMode(PDO::FETCH_ASSOC);

	echo("<br/><br/>");
	echo("--------------------------------------------<br/>");
	echo("An example of printing values from a select statement with parameters<br/>");
      
    while($row = $sth->fetch()) {  
       echo( $row["first_name"] . "<br/>" );
	   $table[] = $row;
    }  
	
   $dbh = null;
   
}  catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
	
?>