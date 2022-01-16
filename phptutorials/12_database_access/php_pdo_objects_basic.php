<h1>Chapter 12 Database Access</h1>

<h2>Basic syntax of PDO Objects for PHP 5.1 and above</h2>

<p>Here are some of the basic syntax for using PDO Objects.</p>

<p>The advantage of PDO objects is that you pass your variables into the sql function using prepared statements.</p>

<p>Prepared statements are what are termed paramatised queries when working with program languages like Microsoft dot.net and 
provide a way to prevents sql injection into databases.</p>

<h3>SQL FETCH</h3>
<p>&nbsp;</p>

<?php

//Simple SQL fetch with PDO

error_reporting( E_ALL | E_STRICT | E_DEPRECATED );

$dbname = 'databasename';
$user = 'databseusername';
$pass = 'databasepassword';

$first_name = "paul";

$dbh = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);
$stmt = $dbh->prepare("SELECT * FROM staff where name = ?");
if ($stmt->execute(array($first_name))) {
  while ($row = $stmt->fetch()) {
    print_r($row);
  }
}
?>


<h3>SQL FETCH using bindValue and named place holders</h3>

<?php

//SQL fetch using bindValue

error_reporting( E_ALL | E_STRICT | E_DEPRECATED );

$dbname = 'databasename';
$user = 'databseusername';
$pass = 'databasepassword';

$department = "music";
$first_name = "paul";

$dbh = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);

$stmt = $dbh->prepare("SELECT * FROM staff where department = :dept and first_name = :forename");

$ps->bindValue(":dept", $department, PDO::PARAM_STR);
$ps->bindValue(":forename", $first_name, PDO::PARAM_STR);

if ($stmt->execute()) {
  while ($row = $stmt->fetch()) {
    print_r($row);
  }
}
?>


<h3>SQL FETCH using bindParam and named place holders</h3>

<?php

//SQL fetch using bindParam

error_reporting( E_ALL | E_STRICT | E_DEPRECATED );

$dbname = 'databasename';
$user = 'databseusername';
$pass = 'databasepassword';


$dbh = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);

$stmt = $dbh->prepare("SELECT * FROM staff where department = :dept and first_name = :forename");

$ps->bindParam(":dept", $department, PDO::PARAM_STR);
$ps->bindParam(":forename", $first_name, PDO::PARAM_STR);

$department = "music";
$first_name = "paul";

if ($stmt->execute()) {
  while ($row = $stmt->fetch()) {
    print_r($row);
  }
}
?>


<h3>SQL INSERT</h3>

<?php

//Example of SQL insert with PDO

error_reporting( E_ALL | E_STRICT | E_DEPRECATED );

$dbname = 'databasename';
$user = 'databseusername';
$pass = 'databasepassword';

$dbh = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);
$stmt = $dbh->prepare("INSERT INTO staff (first_name, last_name) VALUES (?, ?)");
$stmt->bindParam(1, $first_name);
$stmt->bindParam(2, $last_name);

// insert one row
$first_name = 'Fred';
$last_name = 'Bloggs';
$stmt->execute();

// insert another row with different values
$first_name = 'Pete';
$last_name = 'Smith';
$stmt->execute();
?>


<h3>SQL INSERT with try / catch</h3>

<?php

//Example of SQL insert with try / catch and PDO

error_reporting( E_ALL | E_STRICT | E_DEPRECATED );

$dbname = 'databasename';
$user = 'databseusername';
$pass = 'databasepassword';

try {
$dbh = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);
$stmt = $dbh->prepare("INSERT INTO staff (first_name, last_name) VALUES (?, ?)");
//Using positional numbers for the parameters
$stmt->bindParam(1, $first_name);
$stmt->bindParam(2, $last_name);

// insert one row
$first_name = 'Fred';
$last_name = 'Bloggs';
$stmt->execute();

// insert another row with different values
$first_name = 'Pete';
$last_name = 'Smith';
$stmt->execute();
$dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>



<h3>SQL fetch with try / catch</h3>

<?php

//Example of fetching data with try / catch and PDO

error_reporting( E_ALL | E_STRICT | E_DEPRECATED );

$dbname = 'databasename';
$user = 'databseusername';
$pass = 'databasepassword';

try {
    $dbh = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);
    foreach($dbh->query('SELECT * from staff') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>



<h3>SQL fetch with try / catch reading into a $table array</h3>

<?php

    //Example of fetching data from a database using PDO

    // using the shortcut ->query() method here as there are no variables  
    // in the select statement.
	
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



<h3>SQL fetch using named / value</h3>

<?php

       //Example of fetching data from a database using PDO
       //This uses a prepared statement using named values and try / catch

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

