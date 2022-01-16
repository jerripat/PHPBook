<h1>Chapter 12 Database Access</h1>

<p>SQL INSERT with try / catch</p>
<p>&nbsp;</p>

<?php

//Example of SQL insert with try / catch and PDO
//paul@paulvgibbs.com

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
