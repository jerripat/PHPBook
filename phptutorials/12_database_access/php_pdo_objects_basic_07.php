<h1>Chapter 12 Database Access</h1>

<p>SQL fetch with try / catch reading into a $table array</p>
<p>&nbsp;</p>

<?php

    //Example of fetching data from a database using PDO

    // using the shortcut ->query() method here as there are no variables  
    // in the select statement.

    //paul@paulvgibbs.com
	
error_reporting( E_ALL | E_STRICT | E_DEPRECATED );	

try {

       $dbhost = "localhost";
       $dbname = 'databasename';
       $user = 'databaseusername';
       $pass = 'databasepassword';

       //Connect to the database
       $dbh = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $user, $pass);

       //the sql query
       $sql = "SELECT * FROM staff";

       //statment handle
       $sth = $dbh->query($sql);  

       // set the fetch mode  
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

if ($table) {   //Check if there are any rows to be displayed
       //Retrieve each element of the array
       foreach($table as $d_row) {
         echo( $d_row["first_name"] . " " . $d_row["last_name"] . "<br/>" );
       }
}

echo("--------------------------------------------<br/>");
echo("An example of printing one element from the array<br/>");
echo($table[0]["first_name"]);

?>
