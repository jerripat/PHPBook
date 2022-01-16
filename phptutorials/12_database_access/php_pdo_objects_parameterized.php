<h1>Chapter 12 Database Access</h1>

<h2>Basic syntax of PDO Objects for PHP 5.1 and above</h2>

<p>Here are some examples of using PDO Objects using parameterized data types.</p>

<p>Parameter types  PDO::PARAM_STR PDO::PARAM_INT</p>
<p>&nbsp;</p>

<?php

//paul@paulvgibbs.com

	try {
	
		$dbhost = "databasehostname";  	//usually localhost
		$dbname = "databasename";
		$dbusername = "databaseusername";
		$dbpass = "databasepassord";

		$first_name = "paul";

		//Connect to the database
    	$dbh = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbusername, $dbpass);

		$query = "";
		$query = " SELECT * FROM staff WHERE first_name = :first_name";

		//statment handle
		$sth = $dbh->prepare($query);  	
		
		//bind the parameter
		$sth->bindParam(":first_name", $first_name, PDO::PARAM_STR);
	
		//execute
		$sth->execute();

	    //set the fetch mode  
    	$sth->setFetchMode(PDO::FETCH_ASSOC);  
	
	    while($row = $sth->fetch()) {  
    	  	$table[] = $row;
	    }
		
	   $dbh = null;

	}  catch (PDOException $e) {
    	echo "Error";
	    die();
	}
	
	if ($table) {	//Check if there are any rows to be displayed
		//Retrieve each element of the array
		foreach($table as $d_row) {
			echo( $d_row["first_name"] . " " . $d_row["last_name"] . "<br/>" );
		}
	}

?>






