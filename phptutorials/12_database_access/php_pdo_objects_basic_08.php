<h1>Chapter 12 Database Access</h1>

<h3>SQL fetch using named / value</h3>
<p>&nbsp;</p>

<?php

       //Example of fetching data from a database using PDO
       //This uses a prepared statement using named values and try / catch
       //paul@paulvgibbs.com

error_reporting( E_ALL | E_STRICT | E_DEPRECATED );

try {
       $dbhost = "localhost";
       $dbname = 'databasename';
       $user = 'databaseusername';
       $pass = 'databasepassword';

       $first_name = "%paul%";

       //Connect to the database
       $dbh = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $user, $pass);

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

