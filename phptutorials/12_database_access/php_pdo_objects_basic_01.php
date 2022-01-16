<h1>Chapter 12 Database Access</h1>

<p>SQL FETCH</p>
<p>&nbsp;</p>

<?php

//Simple SQL fetch with PDO
//paul@paulvgibbs.com

error_reporting( E_ALL | E_STRICT | E_DEPRECATED );

$dbname = 'databasename';
$user = 'databseusername';
$pass = 'databasepassword';

$first_name = "paul";

$dbh = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);
$stmt = $dbh->prepare("SELECT * FROM staff where first_name = ? ");

if ($stmt->execute(array($first_name))) {
  while ($row = $stmt->fetch()) {
    print_r($row);
  }
}
?>

